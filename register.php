<?php
require "config.php";

$error = '';
$success = '';

// Agar allaqachon login qilgan bo'lsa
if (isset($_SESSION['user_id'])) {
    header('Location: home.php');
    exit;
}

// Registratsiya formasini qayta ishlash
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validatsiya
    if (empty($name) || empty($phone) || empty($password) || empty($confirm_password)) {
        $error = 'Fill in all fields!';
    } elseif (strlen($password) < 6) {
        $error = 'Password must be at least 6 characters long!';
    } elseif ($password !== $confirm_password) {
        $error = 'Passwords do not match!';
    } else {
        try {
            // Telefon raqam mavjudligini tekshirish
            $stmt = $pdo->prepare("SELECT id FROM users WHERE phone = ?");
            $stmt->execute([$phone]);

            if ($stmt->fetch()) {
                $error = 'This phone number is already registered!';
            } else {
                // Yangi user qo'shish
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                $stmt = $pdo->prepare("INSERT INTO users (name, phone, password, role) VALUES (?, ?, ?, 'teacher')");

                if ($stmt->execute([$name, $phone, $hashedPassword])) {
                    $success = 'Registration successful! You can now log in.';
                    // 2 soniyadan keyin login sahifasiga yo'naltirish
                    header("refresh:2;url=index.php");
                } else {
                    $error = 'An error occurred during registration!';
                }
            }
        } catch (PDOException $e) {
            $error = 'Error: ' . $e->getMessage();
        }
    }
}

require "header/header.php";
?>

<div class="flex min-h-screen">

    <!-- LEFT IMAGE -->
    <div class="hidden rounded-3xl overflow-hidden top-2 left-2 lg:flex lg:w-1/2 bg-[#D8ECFF] relative">
        <img src="./image/a5d14c800b0faaec85901e77e28e522ff5aecaf6.png"
            class="w-full h-full p-8" alt="Model">

        <img src="./image/Logo.png"
            class="h-8 absolute top-8 left-8" alt="Logo">
    </div>

    <!-- RIGHT FORM -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-8">

        <form action="" method="POST" class="w-full max-w-md space-y-6">

            <div>
                <h1 class="text-3xl font-bold text-gray-800 text-center lg:text-left">
                    Sign up as a teacher
                </h1>
                <p class="text-gray-600 text-sm mt-2">
                    Already have an account? <a href="index.php" class="text-blue-600 hover:underline font-medium">Sign in</a>
                </p>
            </div>

            <!-- Error Message -->
            <?php if ($error): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-xl">
                    <i class="fa-solid fa-circle-exclamation mr-2"></i>
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>

            <!-- Success Message -->
            <?php if ($success): ?>
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-xl">
                    <i class="fa-solid fa-circle-check mr-2"></i>
                    <?php echo $success; ?>
                    <p class="text-sm mt-1">Redirecting to login page...</p>
                </div>
            <?php endif; ?>

            <!-- Name -->
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-700">
                    <i class="fa-regular fa-user mr-2"></i>
                    Full Name
                </label>
                <input type="text" name="name"
                    class="w-full p-3.5 border rounded-xl outline-none focus:ring-2 focus:ring-blue-600"
                    placeholder="John Doe"
                    value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>"
                    required>
            </div>

            <!-- Phone -->
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-700">
                    <i class="fa-solid fa-phone mr-2"></i>
                    Phone number
                </label>
                <input type="tel" name="phone"
                    class="w-full p-3.5 border rounded-xl outline-none focus:ring-2 focus:ring-blue-600"
                    placeholder="+998901234567"
                    value="<?php echo isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : ''; ?>"
                    required>
                <p class="text-gray-500 text-xs mt-1">
                    <i class="fa-solid fa-info-circle mr-1"></i>
                    Your phone number will be used for login
                </p>
            </div>

            <!-- Password -->
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-700">
                    <i class="fa-solid fa-lock mr-2"></i>
                    Password
                </label>
                <input type="password" name="password"
                    class="w-full p-3.5 border rounded-xl focus:ring-2 focus:ring-blue-600 outline-none"
                    placeholder="••••••••" required>
                <p class="text-gray-500 text-xs mt-1">At least 6 characters</p>
            </div>

            <!-- Confirm Password -->
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-700">
                    <i class="fa-solid fa-lock mr-2"></i>
                    Confirm Password
                </label>
                <input type="password" name="confirm_password"
                    class="w-full p-3.5 border rounded-xl focus:ring-2 focus:ring-blue-600 outline-none"
                    placeholder="••••••••" required>
            </div>

            <!-- Terms -->
            <div class="flex items-start">
                <input type="checkbox" id="terms" required
                    class="mt-1 w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <label for="terms" class="ml-2 text-sm text-gray-600">
                    I agree to the <a href="#" class="text-blue-600 hover:underline">terms of use</a> and
                    <a href="#" class="text-blue-600 hover:underline">privacy policy</a>
                </label>
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full h-[50px] bg-blue-600 text-white rounded-lg hover:brightness-110 active:scale-95 transition font-medium">
                <i class="fa-solid fa-user-plus mr-2"></i>
                Sign up
            </button>

            <!-- Login Link -->
            <div class="text-center">
                <p class="text-gray-600 text-sm">
                    Already have an account?
                    <a href="index.php" class="text-blue-600 hover:underline font-medium">Sign in</a>
                </p>
            </div>

        </form>
    </div>

</div>

<?php require "header/footer.php"; ?>