<?php
require './config.php';

if (!isset($_SESSION['admin_id'])) {
    header('Location: login.php');
    exit;
}

// Get admins
try {
    $sql = "SELECT * FROM admins ORDER BY created_at DESC";
    $stmt = $pdo->query($sql);
    $admins = $stmt->fetchAll();
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>

<?php require './header/header.php'; ?>
<?php require './header/lc.php'; ?>

<div class="flex">
    <!-- SIDEBAR -->
    <aside class="w-64 bg-white p-6">
        <ul class="flex flex-col gap-4 p-4 rounded-xl">
            <a href="home.php">
                <li class="flex cursor-pointer w-44 h-10 items-center gap-2 p-2 rounded-xl transition-all hover:bg-blue-500 hover:text-white">
                    <i class="fa-solid fa-home"></i>
                    <span>Home</span>
                </li>
            </a>
            <a href="admins-list.php">
                <li class="flex cursor-pointer w-44 h-10 items-center gap-2 p-2 rounded-xl bg-blue-500 text-white">
                    <i class="fa-solid fa-users"></i>
                    <span>Admins</span>
                </li>
            </a>
            <a href="add-admin.php">
                <li class="flex cursor-pointer w-44 h-10 items-center gap-2 p-2 rounded-xl transition-all hover:bg-blue-500 hover:text-white">
                    <i class="fa-solid fa-user-plus"></i>
                    <span>Add Admin</span>
                </li>
            </a>
        </ul>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="flex-1 p-8">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">Admins List</h1>
                <p class="text-gray-500 mt-1">Total: <?php echo count($admins); ?> admins</p>
            </div>
            <a href="add-admin.php" class="px-6 py-3 bg-blue-500 text-white rounded-xl hover:bg-blue-600 transition font-medium">
                <i class="fa-solid fa-plus mr-2"></i>
                New Admin
            </a>
        </div>

        <div class="bg-white rounded-2xl shadow-sm overflow-hidden border-2 border-gray-100">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Admin</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Name</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Email</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Phone</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Role</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Status</th>
                        <th class="px-6 py-4 text-center text-sm font-semibold text-gray-700">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <?php foreach ($admins as $admin): ?>
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <img src="<?php echo htmlspecialchars($admin['avatar']); ?>" class="w-12 h-12 rounded-full object-cover border-2 border-gray-200">
                                    <div>
                                        <p class="font-medium text-gray-800"><?php echo htmlspecialchars($admin['full_name']); ?></p>
                                        <p class="text-sm text-gray-500"><?php echo date('d.m.Y', strtotime($admin['created_at'])); ?></p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-gray-700"><?php echo htmlspecialchars($admin['name']); ?></td>
                            <td class="px-6 py-4 text-gray-700"><?php echo htmlspecialchars($admin['phone']); ?></td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-medium">
                                    <?php echo htmlspecialchars($admin['role']); ?>
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 <?php echo $admin['status'] == 'active' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700'; ?> rounded-full text-sm font-medium">
                                    <?php echo $admin['status'] == 'active' ? 'Active' : 'Inactive'; ?>
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-center gap-2">
                                    <a href="edit-admin.php?id=<?php echo $admin['id']; ?>" class="p-2 text-blue-500 hover:bg-blue-50 rounded-lg transition" title="Edit">
                                        <i class="fa-solid fa-edit"></i>
                                    </a>
                                    <a href="delete-admin.php?id=<?php echo $admin['id']; ?>" class="p-2 text-red-500 hover:bg-red-50 rounded-lg transition" title="Delete" onclick="return confirm('Are you sure you want to delete?')">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                    <?php if (empty($admins)): ?>
                        <tr>
                            <td colspan="7" class="px-6 py-12 text-center text-gray-500">
                                <i class="fa-solid fa-users text-4xl mb-4 text-gray-300"></i>
                                <p class="text-lg">No admins found</p>
                                <a href="add-admin.php" class="inline-block mt-4 text-blue-500 hover:text-blue-600">
                                    Add the first admin
                                </a>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </main>
</div>

<?php require './header/footer.php'; ?>