<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Delete both
    if (file_exists('notifications.json')) {
        unlink('notifications.json');
    }
    if (file_exists('broadcast_notifications.json')) {
        unlink('broadcast_notifications.json');
    }

    echo json_encode(['success' => true]);
}
