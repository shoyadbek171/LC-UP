<?php
require "config.php";

// Only admin can access
if (!isset($_SESSION['user_id']) || ($_SESSION['role'] ?? $_SESSION['user_role']) !== 'admin') {
    header('Location: index.php');
    exit;
}

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);
    $password = $_POST['password'];
    $role = $_POST['role'];

    if (empty($name) || empty($phone) || empty($password)) {
        $error = 'Please fill in all fields!';
    } else {
        try {
            // Check if phone number exists
            $stmt = $pdo->prepare("SELECT id FROM users WHERE phone = ?");
            $stmt->execute([$phone]);

            if ($stmt->fetch()) {
                $error = 'This phone number is already registered!';
            } else {
                // Add new user
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                $stmt = $pdo->prepare("INSERT INTO users (name, phone, password, role) VALUES (?, ?, ?, ?)");

                if ($stmt->execute([$name, $phone, $hashedPassword, $role])) {
                    $success = 'User added successfully!';
                    // Clear form
                    $_POST = [];
                } else {
                    $error = 'Error adding user!';
                }
            }
        } catch (PDOException $e) {
            $error = 'Error: ' . $e->getMessage();
        }
    }
}

require "header/header.php";
?>

<section class="mt-6 ml-5 mr-5 mb-10">
    <div class="bg-white rounded-2xl shadow-sm p-6 max-w-2xl mx-auto">

        <!-- Header -->
        <div class="flex items-center gap-3 mb-6">
            <div class="bg-blue-100 p-3 rounded-xl">
                <i class="fa-solid fa-user-plus text-blue-600 text-2xl"></i>
            </div>
            <div>
                <h1 class="text-2xl font-bold text-gray-800">Add New User</h1>
                <p class="text-gray-500 text-sm">Add a Teacher or Admin</p>
            </div>
        </div>

        <!-- Messages -->
        <?php if ($error): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-xl mb-4">
                <i class="fa-solid fa-circle-exclamation mr-2"></i>
                <?php echo $error; ?>
            </div>
        <?php endif; ?>

        <?php if ($success): ?>
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-xl mb-4">
                <i class="fa-solid fa-circle-check mr-2"></i>
                <?php echo $success; ?>
            </div>
        <?php endif; ?>

        <!-- Form -->
        <form method="POST" action="" class="space-y-4">

            <!-- Name -->
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-700">
                    <i class="fa-regular fa-user mr-2"></i>
                    Name
                </label>
                <input
                    type="text"
                    name="name"
                    class="w-full p-3 border-2 border-gray-200 rounded-xl focus:outline-none focus:border-blue-500"
                    placeholder="John Doe"
                    value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>"
                    required>
            </div>

            <!-- Phone -->
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-700">
                    <i class="fa-solid fa-phone mr-2"></i>
                    Phone Number
                </label>
                <input
                    type="tel"
                    name="phone"
                    class="w-full p-3 border-2 border-gray-200 rounded-xl focus:outline-none focus:border-blue-500"
                    placeholder="+998901234567"
                    value="<?php echo isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : ''; ?>"
                    required>
            </div>

            <!-- Password -->
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-700">
                    <i class="fa-solid fa-lock mr-2"></i>
                    Password
                </label>
                <input
                    type="password"
                    name="password"
                    class="w-full p-3 border-2 border-gray-200 rounded-xl focus:outline-none focus:border-blue-500"
                    placeholder="••••••••"
                    required>
                <p class="text-gray-500 text-xs mt-1">At least 6 characters</p>
            </div>

            <!-- Role -->
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-700">
                    <i class="fa-solid fa-user-tag mr-2"></i>
                    Role
                </label>
                <select
                    name="role"
                    class="w-full p-3 border-2 border-gray-200 rounded-xl focus:outline-none focus:border-blue-500">
                    <option value="teacher">Teacher</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <!-- Buttons -->
            <div class="flex gap-3 pt-4">
                <a
                    href="users_list.php"
                    class="flex-1 px-6 py-3 bg-gray-100 text-gray-700 rounded-xl hover:bg-gray-200 transition text-center font-medium">
                    <i class="fa-solid fa-list mr-2"></i>
                    Users List
                </a>
                <button
                    type="submit"
                    class="flex-1 px-6 py-3 bg-blue-600 text-white rounded-xl hover:bg-blue-700 transition font-medium">
                    <i class="fa-solid fa-plus mr-2"></i>
                    Add
                </button>

            </div>
            <a href="javascript:history.back()"
                class="bg-blue-600 hover:bg-blue-700 text-white px-8 justify-center py-4 rounded-xl transition-all flex items-center gap-2 shadow-sm">
                <i class="fa-solid fa-arrow-left"></i>
                <span class="font-medium">Back</span>
            </a>
        </form>

    </div>
</section>

<?php require "header/footer.php"; ?>