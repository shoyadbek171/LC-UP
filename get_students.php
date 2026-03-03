<?php
require './config.php';

header('Content-Type: application/json');

if (!isset($_SESSION['user_id']) || !in_array($_SESSION['role'], ['admin', 'teacher'])) {
    http_response_code(403);
    echo json_encode(['error' => 'Unauthorized']);
    exit;
}

$group = trim($_GET['group'] ?? '');

if (empty($group)) {
    echo json_encode([]);
    exit;
}

try {
    $stmt = $pdo->prepare("SELECT name FROM users WHERE group_name = ? AND role = 'student' ORDER BY name ASC");
    $stmt->execute([$group]);
    $students = $stmt->fetchAll(PDO::FETCH_COLUMN);

    echo json_encode($students);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}
