<?php
// Admin authentication (optional)
session_start();
// if (!isset($_SESSION['admin'])) {
//     header('Location: index.php');
//     exit;
// }

$message = '';
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['broadcast_message'])) {
    $broadcastMessage = trim($_POST['broadcast_message']);

    // Save to notification file
    $notifFile = 'broadcast_notifications.json';
    $notifications = [];

    if (file_exists($notifFile)) {
        $json = file_get_contents($notifFile);
        $notifications = json_decode($json, true) ?? [];
    }

    // Add new message
    $newNotification = [
        'id' => uniqid(),
        'message' => $broadcastMessage,
        'from' => 'Admin',
        'time' => date('d.m.Y H:i:s'),
        'timestamp' => time(),
        'type' => 'broadcast'
    ];

    $notifications[] = $newNotification;

    // Write to file
    if (file_put_contents($notifFile, json_encode($notifications, JSON_PRETTY_PRINT))) {
        $message = '✅ Broadcast sent to all users!';
        $success = true;
    } else {
        $message = '❌ An error occurred!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Broadcast</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body class="bg-gray-50">

    <section class="min-h-screen flex items-center justify-center p-6">
        <div class="bg-white rounded-2xl shadow-xl p-8 w-full max-w-2xl">
            <!-- Header -->
            <div class="flex items-center gap-3 mb-6">
                <div class="bg-blue-100 p-3 rounded-xl">
                    <i class="fa-solid fa-bullhorn text-blue-600 text-2xl"></i>
                </div>
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">Send Broadcast</h1>
                    <p class="text-gray-500 text-sm">Send a message to all users</p>
                </div>
            </div>

            <!-- Success/Error Message -->
            <?php if ($message): ?>
                <div class="mb-6 p-4 rounded-xl <?php echo $success ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700'; ?>">
                    <i class="fa-solid <?php echo $success ? 'fa-circle-check' : 'fa-circle-xmark'; ?> mr-2"></i>
                    <?php echo $message; ?>
                </div>
            <?php endif; ?>

            <!-- Form -->
            <form method="POST" action="">
                <div class="mb-6">
                    <label class="block text-gray-700 font-medium mb-2">
                        <i class="fa-regular fa-message mr-2"></i>
                        Broadcast Message
                    </label>
                    <textarea
                        name="broadcast_message"
                        rows="8"
                        class="w-full border-2 border-gray-200 rounded-xl p-4 focus:outline-none focus:border-blue-500 resize-none"
                        placeholder="Example: Good morning! General meeting today at 3:00 PM."
                        required></textarea>
                    <p class="text-gray-500 text-sm mt-2">
                        <i class="fa-regular fa-lightbulb mr-1"></i>
                        This message will appear as a notification for all users
                    </p>
                </div>

                <!-- Buttons -->
                <div class="flex gap-3">
                    <a
                        href="admin_panel.php"
                        class="flex-1 px-6 py-3 bg-gray-100 text-gray-700 rounded-xl hover:bg-gray-200 transition text-center font-medium">
                        <i class="fa-solid fa-arrow-left mr-2"></i>
                        Back
                    </a>
                    <button
                        type="submit"
                        class="flex-1 px-6 py-3 bg-blue-600 text-white rounded-xl hover:bg-blue-700 transition font-medium">
                        <i class="fa-solid fa-paper-plane mr-2"></i>
                        Send
                    </button>
                </div>
            </form>

            <!-- Recent Broadcasts -->
            <div class="mt-8 pt-8 border-t border-gray-200">
                <h3 class="font-semibold text-gray-800 mb-4">
                    <i class="fa-regular fa-clock mr-2"></i>
                    Recent Broadcasts
                </h3>

                <?php
                $recentBroadcasts = [];
                if (file_exists('broadcast_notifications.json')) {
                    $allBroadcasts = json_decode(file_get_contents('broadcast_notifications.json'), true) ?? [];
                    $recentBroadcasts = array_slice(array_reverse($allBroadcasts), 0, 3);
                }

                if (empty($recentBroadcasts)):
                ?>
                    <p class="text-gray-500 text-sm">No broadcasts sent yet</p>
                <?php else: ?>
                    <div class="space-y-3">
                        <?php foreach ($recentBroadcasts as $broadcast): ?>
                            <div class="bg-gray-50 rounded-lg p-3">
                                <p class="text-gray-700 text-sm mb-1"><?php echo htmlspecialchars($broadcast['message']); ?></p>
                                <p class="text-gray-400 text-xs">
                                    <i class="fa-regular fa-clock mr-1"></i>
                                    <?php echo $broadcast['time']; ?>
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

</body>

</html>