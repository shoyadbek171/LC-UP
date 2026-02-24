<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $message = $data['message'] ?? '';
    
    if (empty($message)) {
        echo json_encode(['success' => false, 'error' => 'Xabar bo\'sh']);
        exit;
    }
    
    // Telegram Bot sozlamalari
    $botToken = '8716325606:AAHVFJtckyx_9v6scgyFrxrr3InooNk1ukU';
    $chatId = '985122719';
    
    // Xabarni formatlash
    $text = "🚨 *Yangi Shikoyat*\n\n";
    $text .= "📝 *Xabar:*\n" . $message . "\n\n";
    $text .= "⏰ *Vaqt:* " . date('d.m.Y H:i:s');
    
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
    
    if (isset($response['ok']) && $response['ok']) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => 'Telegram xatolik']);
    }
}
?>
