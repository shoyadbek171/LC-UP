<?php
$botToken = '8716325606:AAHVFJtckyx_9v6scgyFrxrr3InooNk1ukU';

$webhookUrl = 'https://LC-UP/webhook.php';

$url = "https://api.telegram.org/bot{$botToken}/setWebhook?url={$webhookUrl}";

$response = file_get_contents($url);
$result = json_decode($response, true);

echo '<pre>';
print_r($result);
echo '</pre>';

if ($result['ok']) {
    echo "<h2 style='color: green;'>✅ Webhook muvaffaqiyatli o'rnatildi!</h2>";
    echo "<p>Webhook URL: {$webhookUrl}</p>";
} else {
    echo "<h2 style='color: red;'>❌ Xatolik!</h2>";
    echo "<p>{$result['description']}</p>";
}
?>