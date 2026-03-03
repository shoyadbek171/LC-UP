<?php
require "config.php";

// Only admin can access
if (!isset($_SESSION['user_id']) || ($_SESSION['role'] ?? $_SESSION['user_role']) !== 'admin') {
    header('Location: index.php');
    exit;
}

// Statistics
$stmt = $pdo->query("SELECT COUNT(*) FROM users");
$totalUsers = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT COUNT(*) FROM users WHERE role = 'teacher'");
$totalTeachers = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT COUNT(*) FROM users WHERE role = 'admin'");
$totalAdmins = $stmt->fetchColumn();

// Complaints count
$complaintsCount = 0;
if (file_exists('notifications.json')) {
    $complaints = json_decode(file_get_contents('notifications.json'), true);
    $complaintsCount = count($complaints ?? []);
}

// Broadcasts count
$broadcastsCount = 0;
if (file_exists('broadcast_notifications.json')) {
    $broadcasts = json_decode(file_get_contents('broadcast_notifications.json'), true);
    $broadcastsCount = count($broadcasts ?? []);
}

require "header/header.php";
?>

<section class="mt-6 ml-5 mr-5 mb-10">

    <!-- Header -->
    <div class="bg-[#FAFAFA] rounded-2xl shadow-lg p-8 mb-6 text-white">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl text-purple-500 font-bold mb-2">
                    <i class="fa-solid text-purple-500 fa-crown mr-3"></i>
                    Admin Panel
                </h1>
                <p class="text-purple-500">
                    Hello, <?php echo htmlspecialchars($_SESSION['user_name']); ?>! Manage the system
                </p>
            </div>
            <div class="text-right">
                <div class="bg-[#FAFAFA] backdrop-blur-sm rounded-xl px-4 py-2">
                    <p class="text-sm text-purple-500">Today's Date</p>
                    <p class="text-lg font-semibold text-purple-500"><?php echo date('d.m.Y'); ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">

        <!-- Total Users -->
        <div class="bg-[#FAFAFA] rounded-2xl shadow-sm p-6 hover:shadow-lg transition">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm mb-1">Total Users</p>
                    <h3 class="text-3xl font-bold text-gray-800"><?php echo $totalUsers; ?></h3>
                </div>
                <div class="bg-blue-100 p-4 rounded-xl">
                    <i class="fa-solid fa-users text-blue-600 text-2xl"></i>
                </div>
            </div>
        </div>

        <!-- Teachers -->
        <div class="bg-[#FAFAFA] rounded-2xl shadow-sm p-6 hover:shadow-lg transition">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm mb-1">Teachers</p>
                    <h3 class="text-3xl font-bold text-gray-800"><?php echo $totalTeachers; ?></h3>
                </div>
                <div class="bg-green-100 p-4 rounded-xl">
                    <i class="fa-solid fa-chalkboard-user text-green-600 text-2xl"></i>
                </div>
            </div>
        </div>

        <!-- Admins -->
        <div class="bg-[#FAFAFA] rounded-2xl shadow-sm p-6 hover:shadow-lg transition">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm mb-1">Admins</p>
                    <h3 class="text-3xl font-bold text-gray-800"><?php echo $totalAdmins; ?></h3>
                </div>
                <div class="bg-purple-100 p-4 rounded-xl">
                    <i class="fa-solid fa-user-shield text-purple-600 text-2xl"></i>
                </div>
            </div>
        </div>

        <!-- Notifications -->
        <div class="bg-[#FAFAFA] rounded-2xl shadow-sm p-6 hover:shadow-lg transition">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm mb-1">Messages</p>
                    <h3 class="text-3xl font-bold text-gray-800"><?php echo $complaintsCount + $broadcastsCount; ?></h3>
                </div>
                <div class="bg-red-100 p-4 rounded-xl">
                    <i class="fa-solid fa-bell text-red-600 text-2xl"></i>
                </div>
            </div>
        </div>

    </div>

    <!-- Quick Actions -->
    <div class="bg-[#FAFAFA] rounded-2xl shadow-sm p-6 mb-6">
        <h2 class="text-xl font-bold text-purple-500 mb-4">
            <i class="fa-solid fa-bolt mr-2 text-yellow-500"></i>
            Quick Actions
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">

            <!-- Send Broadcast -->
            <a href="broadcast_manual.php"
                class="group bg-[#FAFAFA] rounded-xl p-6 text-white hover:shadow-lg transition transform hover:-translate-y-1">
                <div class="bg-white w-12 h-12 rounded-lg flex items-center justify-center mb-3">
                    <i class="fa-solid fa-bullhorn text-2xl text-yellow-500"></i>
                </div>
                <h3 class="font-semibold text-black mb-1">Send Broadcast</h3>
                <p class="text-sm text-black">Send message to everyone</p>
            </a>

            <!-- Add User -->
            <a href="add_user.php"
                class="group rounded-xl p-6 text-white hover:shadow-lg transition transform hover:-translate-y-1">
                <div class="bg-white w-12 h-12 rounded-lg flex items-center justify-center mb-3">
                    <i class="fa-solid fa-user-plus text-2xl text-yellow-500"></i>
                </div>
                <h3 class="font-semibold text-black mb-1">Add User</h3>
                <p class="text-sm text-black">New teacher/admin</p>
            </a>

            <!-- Users List -->
            <a href="users_list.php"
                class="group rounded-xl p-6 text-white hover:shadow-lg transition transform hover:-translate-y-1">
                <div class="bg-white w-12 h-12 rounded-lg flex items-center justify-center mb-3">
                    <i class="fa-solid fa-list-ul text-2xl text-yellow-500"></i>
                </div>
                <h3 class="font-semibold text-black mb-1">Users List</h3>
                <p class="text-sm text-black">See all users</p>
            </a>

            <!-- Notifications -->
            <a href="notifications.php"
                class="group rounded-xl p-6 text-white hover:shadow-lg transition transform hover:-translate-y-1">
                <div class="bg-white w-12 h-12 rounded-lg flex items-center justify-center mb-3">
                    <i class="fa-solid fa-bell text-2xl text-yellow-500"></i>
                </div>
                <h3 class="font-semibold text-black mb-1">Messages</h3>
                <p class="text-sm text-black"><?php echo $complaintsCount + $broadcastsCount; ?> messages</p>
            </a>

        </div>
    </div>

    <!-- Recent Activity -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

        <!-- Recent Users -->
        <div class="bg-[#fafafa] rounded-2xl shadow-sm p-6">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-xl font-bold text-gray-800">
                    <i class="fa-solid fa-clock-rotate-left mr-2"></i>
                    Recent Users
                </h2>
                <a href="users_list.php" class="text-blue-600 text-sm hover:underline">
                    View all
                </a>
            </div>

            <?php
            $stmt = $pdo->query("SELECT * FROM users ORDER BY created_at DESC LIMIT 5");
            $recentUsers = $stmt->fetchAll();

            if (empty($recentUsers)):
            ?>
                <p class="text-gray-500 text-sm text-center py-4">No users yet</p>
            <?php else: ?>
                <div class="space-y-3">
                    <?php foreach ($recentUsers as $user): ?>
                        <div class="flex items-center justify-between p-3 bg-white rounded-lg hover:bg-gray-100 transition">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center">
                                    <i class="fa-solid fa-user text-blue-600"></i>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-800"><?php echo htmlspecialchars($user['name']); ?></p>
                                    <p class="text-sm text-gray-500"><?php echo htmlspecialchars($user['phone']); ?></p>
                                </div>
                            </div>
                            <span class="text-xs px-2 py-1 rounded-full <?php echo $user['role'] === 'admin' ? 'bg-purple-100 text-purple-700' : 'bg-blue-100 text-blue-700'; ?>">
                                <?php echo ucfirst($user['role']); ?>
                            </span>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

        <!-- Recent Complaints -->
        <div class="bg-[#fafafa] rounded-2xl shadow-sm p-6">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-xl font-bold text-gray-800">
                    <i class="fa-solid fa-flag mr-2"></i>
                    Recent Complaints
                </h2>
                <a href="notifications.php" class="text-blue-600 text-sm hover:underline">
                    View all
                </a>
            </div>

            <?php
            $recentComplaints = [];
            if (file_exists('notifications.json')) {
                $allComplaints = json_decode(file_get_contents('notifications.json'), true) ?? [];
                $recentComplaints = array_slice(array_reverse($allComplaints), 0, 5);
            }

            if (empty($recentComplaints)):
            ?>
                <p class="text-gray-500 text-sm text-center py-4">No complaints yet</p>
            <?php else: ?>
                <div class="space-y-3">
                    <?php foreach ($recentComplaints as $complaint): ?>
                        <div class="p-3 bg-white rounded-lg hover:bg-gray-100 transition">
                            <p class="text-gray-700 text-sm mb-1">
                                <?php echo htmlspecialchars(mb_substr($complaint['message'], 0, 60)) . (mb_strlen($complaint['message']) > 60 ? '...' : ''); ?>
                            </p>
                            <p class="text-xs text-gray-500">
                                <i class="fa-regular fa-clock mr-1"></i>
                                <?php echo $complaint['time']; ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

    </div>
    <div class="bg-[#FAFAFA] rounded-2xl mt-10 shadow-lg p-8 mb-6 text-white">
        <div class="flex items-center justify-between">
            <a href="./home.php"><button class="bg-blue-600 text-white px-16 py-2 rounded-lg hover:bg-blue-700 transition">Back</button></a>
            <a href="save_pdf.php">
                <button class="bg-blue-600 text-white px-16 py-2 rounded-lg hover:bg-blue-700 transition">
                    Save as PDF
                </button>
            </a>
        </div>
    </div>
</section>

<?php require "header/footer.php"; ?>