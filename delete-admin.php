<?php
require './config.php';

if (!isset($_SESSION['id'])) {
    header('Location: index.php');
    exit;
}

if (isset($_GET['id'])) {
    $admin_id = (int)$_GET['id'];

    // O'zini o'chirmasligi uchun
    if ($admin_id == $_SESSION['id']) {
        $_SESSION['error'] = "You cannot delete yourself!";
        header('Location: admins-list.php');
        exit;
    }

    try {
        $sql = "DELETE FROM users WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $admin_id]);

        $_SESSION['success'] = "Admin deleted successfully!";
    } catch (PDOException $e) {
        $_SESSION['error'] = "Error: " . $e->getMessage();
    }
}

header('Location: admins-list.php');
exit;
