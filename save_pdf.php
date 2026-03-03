<?php
require_once __DIR__ . '/vendor/autoload.php'; // mpdf autoload
require "config.php";

use Mpdf\Mpdf;

// Faqat admin
if (!isset($_SESSION['user_id']) || ($_SESSION['role'] ?? $_SESSION['user_role']) !== 'admin') {
    header('Location: index.php');
    exit;
}

// Statistika
$stmt = $pdo->query("SELECT COUNT(*) FROM users");
$totalUsers = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT COUNT(*) FROM users WHERE role = 'teacher'");
$totalTeachers = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT COUNT(*) FROM users WHERE role = 'admin'");
$totalAdmins = $stmt->fetchColumn();

// Shikoyatlar
$complaintsCount = 0;
$recentComplaints = [];
if (file_exists('notifications.json')) {
    $allComplaints = json_decode(file_get_contents('notifications.json'), true) ?? [];
    $complaintsCount = count($allComplaints);
    $recentComplaints = array_slice(array_reverse($allComplaints), 0, 5);
}

// Oxirgi userlar
$stmt = $pdo->query("SELECT * FROM users ORDER BY created_at DESC LIMIT 5");
$recentUsers = $stmt->fetchAll();

// HTML preparation
$html = '<h1>Admin Panel Statistics</h1>';
$html .= '<p>Total users: ' . $totalUsers . '</p>';
$html .= '<p>Teachers: ' . $totalTeachers . '</p>';
$html .= '<p>Admins: ' . $totalAdmins . '</p>';
$html .= '<p>Complaints count: ' . $complaintsCount . '</p>';

$html .= '<h2>Recent Users</h2><ul>';
foreach ($recentUsers as $user) {
    $html .= '<li>' . htmlspecialchars($user['name']) . ' (' . htmlspecialchars($user['role']) . ')</li>';
}
$html .= '</ul>';

$html .= '<h2>Recent Complaints</h2><ul>';
foreach ($recentComplaints as $complaint) {
    $html .= '<li>' . htmlspecialchars($complaint['message']) . ' - ' . $complaint['time'] . '</li>';
}
$html .= '</ul>';

// MPDF bilan PDF yaratish
$mpdf = new Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output('admin_panel.pdf', 'D'); // D = download, I = browserda ko‘rsatish