<?php
// Load session and config (if not already loaded)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher App</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body class="bg-gray-50">

    <section class="mt-6 ml-5 mr-5">
        <header class="bg-[#FAFAFA] p-4 rounded-2xl flex justify-between items-center shadow-sm">
            <!-- Logo -->
            <img src="./image/Logo.png" class="w-32" alt="Logo">

            <!-- Right Side Menu -->
            <div class="flex items-center gap-5">

                <?php if (isset($_SESSION['user_id'])): ?>

                    <!-- Admin Panel (only visible to admin) -->
                    <?php $userRole = $_SESSION['role'] ?? $_SESSION['user_role'] ?? 'student'; ?>
                    <?php if ($userRole === 'admin'): ?>
                        <a href="admin_panel.php"
                            class="bg-blue-600 text-white px-4 py-2 rounded-xl hover:shadow-lg transition transform hover:-translate-y-0.5">
                            <i class="fa-solid fa-crown mr-2"></i>
                            Admin Panel
                        </a>
                    <?php endif; ?>

                    <!-- Notification Bell with Badge -->
                    <a href="notifications.php" class="relative">
                        <div class="text-gray-500 cursor-pointer bg-white w-10 h-10 flex items-center justify-center rounded-2xl p-2 hover:bg-gray-50 transition">
                            <img src="./image/notification-02.png" alt="notification">
                        </div>

                        <?php
                        // Count all notifications
                        $totalCount = 0;

                        // Complaints
                        if (file_exists('notifications.json')) {
                            $complaints = json_decode(file_get_contents('notifications.json'), true);
                            if ($complaints) {
                                $totalCount += count($complaints);
                            }
                        }

                        // Broadcast messages
                        if (file_exists('broadcast_notifications.json')) {
                            $broadcasts = json_decode(file_get_contents('broadcast_notifications.json'), true);
                            if ($broadcasts) {
                                $totalCount += count($broadcasts);
                            }
                        }

                        // Show Badge
                        if ($totalCount > 0):
                        ?>
                            <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs w-5 h-5 flex items-center justify-center rounded-full font-semibold animate-pulse">
                                <?php echo $totalCount > 9 ? '9+' : $totalCount; ?>
                            </span>
                        <?php endif; ?>
                    </a>

                    <!-- User Info & Logout -->
                    <div class="flex items-center gap-4 bg-white/50 px-3 py-1.5 rounded-2xl border border-gray-100">
                        <div class="flex-col items-end hidden md:flex">
                            <span class="text-[10px] px-2 py-0.5 rounded-full font-bold uppercase tracking-wider <?php
                                                                                                                    $badgeStyles = [
                                                                                                                        'admin' => 'bg-purple-100 text-purple-700 border border-purple-200',
                                                                                                                        'teacher' => 'bg-blue-100 text-blue-700 border border-blue-200',
                                                                                                                        'student' => 'bg-green-100 text-green-700 border border-green-200'
                                                                                                                    ];
                                                                                                                    echo $badgeStyles[$userRole] ?? 'bg-gray-100 text-gray-700 border border-gray-200';
                                                                                                                    ?>">
                                <?php echo htmlspecialchars($userRole); ?>
                            </span>
                        </div>

                        <!-- Profile Picture -->
                        <a href="profile.php" class="relative group">
                            <img src="./image/photo_2025-12-24_12-53-53.png"
                                class="w-10 h-10 rounded-full border-2 border-white shadow-sm group-hover:border-blue-500 transition-all object-cover"
                                alt="Profile">
                            <div class="absolute -bottom-1 -right-1 w-3.5 h-3.5 bg-green-500 border-2 border-white rounded-full"></div>
                        </a>

                        <div class="w-[1px] h-6 bg-gray-200 mx-1"></div>

                        <!-- Logout Button -->
                        <a href="logout.php"
                            class="text-gray-400 hover:text-red-500 transition-colors p-1"
                            title="Logout">
                            <i class="fa-solid fa-right-from-bracket text-[20px]"></i>
                        </a>
                    </div>

                <?php else: ?>

                    <!-- Login Button (if not logged in) -->
                    <a href="index.php" class="bg-blue-600 px-4 py-2 text-white rounded-2xl hover:bg-blue-700 transition-colors">
                        Sign in
                    </a>

                <?php endif; ?>

            </div>
        </header>
    </section>