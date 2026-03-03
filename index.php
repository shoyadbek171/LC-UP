<?php
require './config.php';

$error = '';
$success = '';

// If already logged in
if (isset($_SESSION['user_id'])) {
    header('Location: home.php');
    exit;
}

// Login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $phone = trim($_POST['phone']);
    $password = $_POST['password'];

    if (empty($phone) || empty($password)) {
        $error = 'Please fill in all fields!';
    } else {
        try {
            // Search in users table
            $stmt = $pdo->prepare("SELECT * FROM users WHERE phone = :phone LIMIT 1");
            $stmt->execute([':phone' => $phone]);
            $user = $stmt->fetch();

            if ($user && password_verify($password, $user['password'])) {
                // Create session
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['name'];
                $_SESSION['user_phone'] = $user['phone'];
                $_SESSION['role'] = $user['role'] ?? 'student';

                header('Location: home.php');
                exit;
            } else {
                $error = 'Incorrect phone number or password!';
            }
        } catch (PDOException $e) {
            $error = 'Error: ' . $e->getMessage();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - LC-UP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <div class="flex min-h-screen">

        <!-- LEFT -->
        <div class="hidden lg:flex w-1/2 bg-linear-to-br from-indigo-600 via-purple-600 to-pink-500 p-12 flex-col justify-between text-white relative overflow-hidden">
            <img src="./image/Logo.png" class="absolute top-8 left-8 h-10" alt="Logo">
            <div class="flex items-center justify-center w-full p-12">
                <img src="./image/a5d14c800b0faaec85901e77e28e522ff5aecaf6.png" class="w-full max-w-xl" alt="Illustration">
            </div>
        </div>

        <!-- RIGHT -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-8 bg-white">
            <div class="w-full max-w-md">

                <div class="mb-8">
                    <h1 class="text-3xl font-bold text-gray-800 mb-2">Sign in as a teacher</h1>
                    <p class="text-gray-500">Enter your phone number to sign in</p>
                </div>

                <?php if ($error): ?>
                    <div class="bg-red-50 border-2 border-red-200 text-red-700 px-4 py-3 rounded-xl mb-6">
                        <p class="font-semibold flex items-center">
                            <i class="fa-solid fa-circle-exclamation mr-2"></i>
                            <?php echo htmlspecialchars($error); ?>
                        </p>
                    </div>
                <?php endif; ?>

                <form method="POST" class="space-y-6">

                    <div>
                        <label class="block mb-2 text-sm font-semibold text-gray-700">Phone number</label>
                        <div class="relative">
                            <div class="absolute left-4 top-1/2 -translate-y-1/2">
                                <i class="fa-solid fa-phone text-gray-400"></i>
                            </div>
                            <input
                                type="text"
                                name="phone"
                                class="w-full pl-12 pr-4 py-3.5 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:outline-none"
                                placeholder="+998901234567"
                                value="<?php echo isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : ''; ?>"
                                required>
                        </div>
                    </div>

                    <div>
                        <label class="block mb-2 text-sm font-semibold text-gray-700">Password</label>
                        <div class="relative">
                            <div class="absolute left-4 top-1/2 -translate-y-1/2">
                                <i class="fa-solid fa-lock text-gray-400"></i>
                            </div>
                            <input
                                type="password"
                                name="password"
                                id="password"
                                class="w-full pl-12 pr-12 py-3.5 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:outline-none"
                                placeholder="Password"
                                required>
                            <button type="button" onclick="togglePassword()" class="absolute right-4 top-1/2 -translate-y-1/2">
                                <i class="fa-solid fa-eye text-gray-400" id="eye-icon"></i>
                            </button>
                        </div>

                        <div class="flex justify-between mt-3">
                            <a href="forgot_password.php" class="text-sm text-blue-600 hover:underline">Forgot password?</a>
                            <a href="register.php" class="text-sm text-blue-600 hover:underline">Register</a>
                        </div>
                    </div>

                    <button
                        type="submit"
                        class="w-full py-4 bg-blue-600 text-white rounded-xl font-semibold hover:bg-blue-700 transition">
                        Sign in
                    </button>

                </form>

            </div>
        </div>

    </div>

    <script>
        function togglePassword() {
            const p = document.getElementById('password');
            const i = document.getElementById('eye-icon');
            p.type = p.type === 'password' ? 'text' : 'password';
            i.classList.toggle('fa-eye');
            i.classList.toggle('fa-eye-slash');
        }
    </script>
    <?php require 'header/footer.php' ?>