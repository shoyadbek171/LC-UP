<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $id = $data['id'] ?? null;
    $type = $data['type'] ?? 'complaint';

    $file = ($type === 'broadcast') ? 'broadcast_notifications.json' : 'notifications.json';

    if (file_exists($file)) {
        $notifications = json_decode(file_get_contents($file), true);

        // Delete by ID or index
        $found = false;
        // Search by ID first
        foreach ($notifications as $key => $notif) {
            if (isset($notif['id']) && $notif['id'] === $id) {
                unset($notifications[$key]);
                $found = true;
                break;
            }
        }
        // If ID not found, delete by index
        if (!$found && is_numeric($id) && isset($notifications[(int)$id])) {
            unset($notifications[(int)$id]);
        }

        // Re-index array
        $notifications = array_values($notifications);

        file_put_contents($file, json_encode($notifications, JSON_PRETTY_PRINT));
        echo json_encode(['success' => true]);
        exit;
    }

    echo json_encode(['success' => false]);
}
