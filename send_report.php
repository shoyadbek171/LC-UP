<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $message = $data['message'] ?? '';

    if (empty($message)) {
        echo json_encode(['success' => false, 'error' => 'Message is empty']);
        exit;
    }

    // Telegram Bot sozlamalari
    $botToken = '8716325606:AAHVFJtckyx_9v6scgyFrxrr3InooNk1ukU';
    $chatId = '985122719';

    // Xabarni formatlash
    $text = "🚨 *New Complaint*\n\n";
    $text .= "📝 *Message:*\n" . $message . "\n\n";
    $text .= "⏰ *Time:* " . date('d.m.Y H:i:s');

    // Telegram API ga yuborish
    $url = "https://api.telegram.org/bot{$botToken}/sendMessage";
    $params = [
        'chat_id' => $chatId,
        'text' => $text,
        'parse_mode' => 'Markdown'
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $result = curl_exec($ch);
    curl_close($ch);

    $response = json_decode($result, true);

    // ========== NOTIFICATION SAQLASH ==========
    $notifFile = 'notifications.json';
    $notifications = [];

    if (file_exists($notifFile)) {
        $json = file_get_contents($notifFile);
        $notifications = json_decode($json, true) ?? [];
    }

    // Yangi xabar qo'shish
    $notifications[] = [
        'message' => $message,
        'time' => date('d.m.Y H:i:s'),
        'page' => $data['page'] ?? '',
        'timestamp' => time()
    ];

    // Faylga yozish
    file_put_contents($notifFile, json_encode($notifications, JSON_PRETTY_PRINT));

    // Javob qaytarish
    if (isset($response['ok']) && $response['ok']) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => 'Telegram error']);
    }
}
