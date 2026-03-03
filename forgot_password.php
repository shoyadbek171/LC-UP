<?php
require './config.php';

$error = '';
$success = '';
$step = 'phone'; // phone -> verify -> reset

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['step'])) {
        switch ($_POST['step']) {
            case 'phone':
                $phone = trim($_POST['phone']);
                if (empty($phone)) {
                    $error = 'Enter phone number!';
                } else {
                    $stmt = $pdo->prepare("SELECT id, name FROM users WHERE phone = ? LIMIT 1");
                    $stmt->execute([$phone]);
                    $user = $stmt->fetch();

                    if ($user) {
                        $_SESSION['reset_user_id'] = $user['id'];
                        $_SESSION['reset_user_name'] = $user['name'];
                        $_SESSION['reset_phone'] = $phone;
                        $step = 'reset';
                    } else {
                        $error = 'This phone number was not found in the system!';
                    }
                }
                break;

            case 'reset':
                $newPassword = $_POST['new_password'];
                $confirmPassword = $_POST['confirm_password'];

                if (empty($newPassword) || empty($confirmPassword)) {
                    $error = 'Fill in all fields!';
                    $step = 'reset';
                } elseif (strlen($newPassword) < 6) {
                    $error = 'Password must be at least 6 characters long!';
                    $step = 'reset';
                } elseif ($newPassword !== $confirmPassword) {
                    $error = 'Passwords do not match!';
                    $step = 'reset';
                } else {
                    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                    $stmt = $pdo->prepare("UPDATE users SET password = ? WHERE id = ?");

                    if ($stmt->execute([$hashedPassword, $_SESSION['reset_user_id']])) {
                        $success = 'Password changed successfully!';
                        unset($_SESSION['reset_user_id'], $_SESSION['reset_user_name'], $_SESSION['reset_phone']);
                        header("refresh:2;url=index.php");
                    } else {
                        $error = 'An error occurred!';
                        $step = 'reset';
                    }
                }
                break;
        }
    }
}

// Agar session'da reset_user_id bo'lsa, reset step'ga o'tish
if (isset($_SESSION['reset_user_id']) && $step === 'phone' && empty($error)) {
    $step = 'reset';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password - LC-UP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/x-icon" href="https://asset.lc-up.com/storage/10396/PtyKMKmhQ69287oTNvafGpngKeOffD-metacGhvdG9fMjAyNS0wMi0xM18xMS0xNC01OC5qcGc=-.jpg">
</head>

<body>

    <div class="flex min-h-screen">

        <!-- LEFT -->
        <div class="hidden lg:flex lg:w-1/2 relative" style="background: linear-gradient(135deg, #dbeafe, #bfdbfe);">
            <img src="./image/Logo.png" class="absolute top-8 left-8 h-10" alt="Logo">
            <div class="flex items-center justify-center w-full p-12">
                <div class="text-center">
                    <div class="bg-white/30 backdrop-blur-sm rounded-3xl p-12 shadow-xl">
                        <i class="fa-solid fa-key text-blue-600 text-8xl mb-6"></i>
                        <h2 class="text-3xl font-bold text-gray-800 mb-3">Reset Password</h2>
                        <p class="text-gray-600">Update your password to re-enter your account</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- RIGHT -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-8 bg-white">
            <div class="w-full max-w-md">

                <!-- Progress Steps -->
                <div class="flex items-center justify-center mb-8 gap-4">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-full flex items-center justify-center text-sm font-bold <?php echo $step === 'phone' ? 'bg-blue-600 text-white' : 'bg-green-500 text-white'; ?>">
                            <?php echo $step === 'phone' ? '1' : '<i class="fa-solid fa-check text-xs"></i>'; ?>
                        </div>
                        <span class="text-sm font-medium text-gray-700">Phone</span>
                    </div>
                    <div class="w-12 h-0.5 bg-gray-300"></div>
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-full flex items-center justify-center text-sm font-bold <?php echo $step === 'reset' ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-500'; ?>">
                            2
                        </div>
                        <span class="text-sm font-medium text-gray-500">New Password</span>
                    </div>
                </div>

                <?php if ($error): ?>
                    <div class="bg-red-50 border-2 border-red-200 text-red-700 px-4 py-3 rounded-xl mb-6">
                        <p class="font-semibold flex items-center">
                            <i class="fa-solid fa-circle-exclamation mr-2"></i>
                            <?php echo htmlspecialchars($error); ?>
                        </p>
                    </div>
                <?php endif; ?>

                <?php if ($success): ?>
                    <div class="bg-green-50 border-2 border-green-200 text-green-700 px-4 py-3 rounded-xl mb-6">
                        <p class="font-semibold flex items-center">
                            <i class="fa-solid fa-circle-check mr-2"></i>
                            <?php echo htmlspecialchars($success); ?>
                        </p>
                        <p class="text-sm mt-1">Redirecting to login page...</p>
                    </div>
                <?php endif; ?>

                <?php if ($step === 'phone'): ?>
                    <!-- Step 1: Phone -->
                    <div class="mb-6">
                        <h1 class="text-3xl font-bold text-gray-800 mb-2">Reset Password</h1>
                        <p class="text-gray-500">Enter your registered phone number</p>
                    </div>

                    <form method="POST" class="space-y-6">
                        <input type="hidden" name="step" value="phone">
                        <div>
                            <label class="block mb-2 text-sm font-semibold text-gray-700">Phone Number</label>
                            <div class="relative">
                                <div class="absolute left-4 top-1/2 -translate-y-1/2">
                                    <i class="fa-solid fa-phone text-gray-400"></i>
                                </div>
                                <input type="text" name="phone"
                                    class="w-full pl-12 pr-4 py-3.5 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:outline-none transition"
                                    placeholder="+998901234567" required>
                            </div>
                        </div>

                        <button type="submit" class="w-full py-4 bg-blue-600 text-white rounded-xl font-semibold hover:bg-blue-700 transition">
                            <i class="fa-solid fa-arrow-right mr-2"></i>
                            Continue
                        </button>
                    </form>

                <?php elseif ($step === 'reset'): ?>
                    <!-- Step 2: New Password -->
                    <div class="mb-6">
                        <h1 class="text-3xl font-bold text-gray-800 mb-2">Set New Password</h1>
                        <p class="text-gray-500">
                            <i class="fa-solid fa-user mr-1"></i>
                            Enter a new password for
                            <?php echo htmlspecialchars($_SESSION['reset_user_name'] ?? ''); ?>
                        </p>
                    </div>

                    <form method="POST" class="space-y-6">
                        <input type="hidden" name="step" value="reset">

                        <div>
                            <label class="block mb-2 text-sm font-semibold text-gray-700">New Password</label>
                            <div class="relative">
                                <div class="absolute left-4 top-1/2 -translate-y-1/2">
                                    <i class="fa-solid fa-lock text-gray-400"></i>
                                </div>
                                <input type="password" name="new_password" id="new_password"
                                    class="w-full pl-12 pr-12 py-3.5 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:outline-none transition"
                                    placeholder="New Password" required minlength="6">
                                <button type="button" onclick="togglePass('new_password', 'eye1')" class="absolute right-4 top-1/2 -translate-y-1/2">
                                    <i class="fa-solid fa-eye text-gray-400" id="eye1"></i>
                                </button>
                            </div>
                        </div>

                        <div>
                            <label class="block mb-2 text-sm font-semibold text-gray-700">Confirm Password</label>
                            <div class="relative">
                                <div class="absolute left-4 top-1/2 -translate-y-1/2">
                                    <i class="fa-solid fa-lock text-gray-400"></i>
                                </div>
                                <input type="password" name="confirm_password" id="confirm_password"
                                    class="w-full pl-12 pr-12 py-3.5 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:outline-none transition"
                                    placeholder="Confirm your password" required minlength="6">
                                <button type="button" onclick="togglePass('confirm_password', 'eye2')" class="absolute right-4 top-1/2 -translate-y-1/2">
                                    <i class="fa-solid fa-eye text-gray-400" id="eye2"></i>
                                </button>
                            </div>
                        </div>

                        <button type="submit" class="w-full py-4 bg-blue-600 text-white rounded-xl font-semibold hover:bg-blue-700 transition">
                            <i class="fa-solid fa-check mr-2"></i>
                            Change Password
                        </button>
                    </form>
                <?php endif; ?>

                <div class="mt-6 text-center">
                    <a href="index.php" class="text-blue-600 hover:underline text-sm font-medium">
                        <i class="fa-solid fa-arrow-left mr-1"></i>
                        Back to Login Page
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function togglePass(inputId, iconId) {
            const p = document.getElementById(inputId);
            const i = document.getElementById(iconId);
            p.type = p.type === 'password' ? 'text' : 'password';
            i.classList.toggle('fa-eye');
            i.classList.toggle('fa-eye-slash');
        }
    </script>
</body>

</html>