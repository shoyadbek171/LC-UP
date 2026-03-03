<?php
require "config.php";

// Only admin
if (!isset($_SESSION['user_id']) || ($_SESSION['role'] ?? $_SESSION['user_role']) !== 'admin') {
    header('Location: index.php');
    exit;
}

// Fetch all users
$stmt = $pdo->query("SELECT * FROM users ORDER BY created_at DESC");
$users = $stmt->fetchAll();

require "header/header.php";
?>

<section class="mt-6 ml-5 mr-5 mb-10">
    <div class="bg-white rounded-2xl shadow-sm p-6">

        <!-- Header -->
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center gap-3">
                <div class="bg-blue-100 p-3 rounded-xl">
                    <a href="javascript:history.back()"><i class="fa-solid fa-users text-blue-600 text-2xl"></i></a>
                </div>
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">Users</h1>
                    <p class="text-gray-500 text-sm"><?php echo count($users); ?> users</p>
                </div>
            </div>

            <a
                href="add_user.php"
                class="bg-blue-600 text-white px-4 py-2 rounded-xl hover:bg-blue-700 transition">
                <i class="fa-solid fa-plus mr-2"></i>
                New User
            </a>

        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Phone</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Role</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <?php foreach ($users as $user): ?>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-sm text-gray-900"><?php echo $user['id']; ?></td>
                            <td class="px-6 py-4 text-sm text-gray-900"><?php echo htmlspecialchars($user['name']); ?></td>
                            <td class="px-6 py-4 text-sm text-gray-900"><?php echo htmlspecialchars($user['phone']); ?></td>
                            <td class="px-6 py-4">
                                <span class="px-2 py-1 text-xs rounded-full <?php echo $user['role'] === 'admin' ? 'bg-purple-100 text-purple-700' : 'bg-blue-100 text-blue-700'; ?>">
                                    <?php echo ucfirst($user['role']); ?>
                                </span>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500"><?php echo date('d.m.Y', strtotime($user['created_at'])); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>
</section>

<?php require "header/footer.php"; ?>