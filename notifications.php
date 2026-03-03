<?php
require "header/header.php";

// Read complaints
$complaints = [];
$complaintFile = 'notifications.json';
if (file_exists($complaintFile)) {
    $complaints = json_decode(file_get_contents($complaintFile), true) ?? [];
}

// Read broadcast messages
$broadcasts = [];
$broadcastFile = 'broadcast_notifications.json';
if (file_exists($broadcastFile)) {
    $broadcasts = json_decode(file_get_contents($broadcastFile), true) ?? [];
}

// Merge all notifications
$allNotifications = array_merge($complaints, $broadcasts);

// Sort by timestamp (newest first)
usort($allNotifications, function ($a, $b) {
    return ($b['timestamp'] ?? 0) - ($a['timestamp'] ?? 0);
});
?>

<section class="mt-6 ml-5 mr-5 mb-10">
    <!-- Header -->
    <div class="bg-white rounded-2xl shadow-sm p-6 mb-6">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-3">

                <div class="bg-blue-100 p-3 rounded-xl">
                    <i class="fa-regular fa-bell text-blue-600 text-2xl"></i>
                </div>
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">Notifications</h1>
                    <p class="text-gray-500 text-sm">
                        <?php echo count($allNotifications); ?> messages
                    </p>
                </div>
            </div>

            <button
                onclick="clearAllNotifications()"
                class="text-red-500 hover:text-red-600 font-medium">
                <i class="fa-regular fa-trash-can mr-2"></i>
                Clear All
            </button>
        </div>
    </div>

    <!-- Notifications List -->
    <div class="space-y-4">
        <?php if (empty($allNotifications)): ?>
            <!-- Empty state -->
            <div class="bg-white rounded-2xl shadow-sm p-12 text-center">
                <div class="bg-gray-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fa-regular fa-bell-slash text-gray-400 text-3xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">No notifications</h3>
                <p class="text-gray-500">You have no messages at the moment</p>
            </div>
        <?php else: ?>
            <?php foreach ($allNotifications as $index => $notif): ?>
                <?php
                // Xabar turi bo'yicha rang va icon
                $isBroadcast = isset($notif['type']) && $notif['type'] === 'broadcast';
                $iconBg = $isBroadcast ? 'bg-blue-100' : 'bg-red-100';
                $iconColor = $isBroadcast ? 'text-blue-600' : 'text-red-600';
                $icon = $isBroadcast ? 'fa-bullhorn' : 'fa-flag';
                $title = $isBroadcast ? 'Admin Broadcast' : 'New Complaint';
                $badgeColor = $isBroadcast ? 'bg-blue-100 text-blue-600' : 'bg-red-100 text-red-600';
                $badgeText = $isBroadcast ? 'Broadcast' : 'Complaint';
                ?>

                <div class="bg-white rounded-2xl shadow-sm p-5 hover:shadow-md transition-shadow">
                    <div class="flex items-start justify-between">
                        <div class="flex items-start gap-4 flex-1">
                            <!-- Icon -->
                            <div class="<?php echo $iconBg; ?> p-3 rounded-xl flex-shrink-0">
                                <i class="fa-solid <?php echo $icon; ?> <?php echo $iconColor; ?> text-xl"></i>
                            </div>

                            <!-- Content -->
                            <div class="shrink-0">
                                <div class="flex items-center gap-2 mb-2">
                                    <h3 class="font-semibold text-gray-800"><?php echo $title; ?></h3>
                                    <span class="<?php echo $badgeColor; ?> text-xs px-2 py-1 rounded-full">
                                        <?php echo $badgeText; ?>
                                    </span>
                                </div>

                                <p class="text-gray-700 mb-3 whitespace-pre-wrap"><?php echo htmlspecialchars($notif['message']); ?></p>

                                <div class="flex items-center gap-4 text-sm text-gray-500">
                                    <span>
                                        <i class="fa-regular fa-clock mr-1"></i>
                                        <?php echo $notif['time']; ?>
                                    </span>
                                    <?php if (!empty($notif['page'])): ?>
                                        <span>
                                            <i class="fa-regular fa-window-maximize mr-1"></i>
                                            <?php echo basename($notif['page']); ?>
                                        </span>
                                    <?php endif; ?>
                                    <?php if (isset($notif['from'])): ?>
                                        <span>
                                            <i class="fa-regular fa-user mr-1"></i>
                                            <?php echo $notif['from']; ?>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <!-- Delete button -->
                        <button
                            onclick="deleteNotification('<?php echo $notif['id'] ?? $index; ?>', '<?php echo $isBroadcast ? 'broadcast' : 'complaint'; ?>')"
                            class="text-gray-400 hover:text-red-500 transition-colors p-2">
                            <i class="fa-regular fa-trash-can"></i>
                        </button>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <a href="javascript:history.back()"
        class="bg-blue-600 hover:bg-blue-700 text-white px-8 justify-center py-4 rounded-xl transition-all flex items-center gap-2 shadow-sm">
        <i class="fa-solid fa-arrow-left"></i>
        <span class="font-medium">Back</span>
    </a>
</section>

<script>
    // Delete notification
    function deleteNotification(id, type) {
        if (confirm('Are you sure you want to delete this message?')) {
            fetch('delete_notification.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        id: id,
                        type: type
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        location.reload();
                    }
                });
        }
    }

    // Clear all notifications
    function clearAllNotifications() {
        if (confirm('Are you sure you want to delete all messages?')) {
            fetch('clear_notifications.php', {
                    method: 'POST'
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        location.reload();
                    }
                });
        }
    }
</script>

<?php require "header/footer.php"; ?>