<?php
require './config.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}

$success = '';
$error = '';

// Fetch user data from MySQL
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$_SESSION['user_id']]);
$user = $stmt->fetch();

if (!$user) {
    header('Location: logout.php');
    exit;
}

// Save when Save is clicked
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save_profile'])) {
    $name = trim($_POST['name'] ?? '');
    $gender = $_POST['gender'] ?? 'male';
    $birthdate = trim($_POST['birthdate'] ?? '');
    $employment_date = trim($_POST['employment_date'] ?? '');
    $passport_expiry = trim($_POST['passport_expiry'] ?? '');
    $region = trim($_POST['region'] ?? '');
    $address = trim($_POST['address'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $instagram = trim($_POST['instagram'] ?? '');
    $telegram = trim($_POST['telegram'] ?? '');

    try {
        $stmt = $pdo->prepare("UPDATE users SET 
            name = ?, gender = ?, birthdate = ?, employment_date = ?,
            passport_expiry = ?, region = ?, address = ?, phone = ?,
            instagram = ?, telegram = ?
            WHERE id = ?");

        $stmt->execute([
            $name,
            $gender,
            $birthdate,
            $employment_date,
            $passport_expiry,
            $region,
            $address,
            $phone,
            $instagram,
            $telegram,
            $_SESSION['user_id']
        ]);

        // Update session
        $_SESSION['user_name'] = $name;
        $_SESSION['user_phone'] = $phone;

        $success = 'Information saved successfully!';

        // Re-fetch updated user
        $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$_SESSION['user_id']]);
        $user = $stmt->fetch();
    } catch (PDOException $e) {
        $error = 'Error: ' . $e->getMessage();
    }
}

require "header/header.php";
?>

<div class="bg-[#F2F3F7] min-h-screen p-5">
    <header class="bg-white p-4 rounded-3xl flex justify-between items-center shadow-sm mb-6 container mx-auto">
        <img src="./image/Logo.png" class="h-8 ml-4">
        <div class="flex items-center gap-4 mr-4">
            <a href="notifications.php">
                <div class="text-gray-500 cursor-pointer bg-white w-10 h-10 flex items-center justify-center rounded-2xl p-2">
                    <img src="./image/notification-02.png" alt="">
                </div>
            </a>
            <a href="profile.php">
                <img src="./image/photo_2025-12-24_12-53-53.png" class="w-10 h-10 rounded-xl object-cover" alt="User">
            </a>
        </div>
    </header>

    <div class="flex gap-6 container max-w-[1550px] mx-auto items-start">
        <aside class="bg-white rounded-[32px] w-[326px] p-5 flex flex-col gap-2 shadow-sm">
            <a href="home.php" class="flex items-center gap-3 p-2 text-sm font-medium text-gray-500 w-[213px] border-gray-300 border-2 rounded-2xl hover:bg-gray-50 transition-all mb-4">
                <i class="fa-solid fa-arrow-left text-xs border bg-[#F2F3F7] p-2 w-10 h-9 flex items-center justify-center rounded-xl"></i>
                Go to main page
            </a>

            <nav class="flex flex-col gap-1">
                <?php
                $profilePage = basename($_SERVER['PHP_SELF']);
                ?>
                <a href="profile.php" class="flex items-center gap-3 px-4 py-3 <?php echo $profilePage === 'profile.php' ? 'bg-[#F2F3F7] text-gray-900' : 'text-gray-500 hover:bg-gray-50'; ?> rounded-2xl transition-all">
                    <i class="fa-regular fa-user <?php echo $profilePage === 'profile.php' ? 'opacity-70' : 'opacity-40'; ?>"></i>
                    <span class="font-medium text-sm">Personality</span>
                </a>
                <a href="update-password.php" class="flex items-center gap-3 px-4 py-3 <?php echo $profilePage === 'update-password.php' ? 'bg-[#F2F3F7] text-gray-900' : 'text-gray-500 hover:bg-gray-50'; ?> rounded-2xl transition-all">
                    <i class="fa-solid fa-gear <?php echo $profilePage === 'update-password.php' ? 'opacity-70' : 'opacity-40'; ?>"></i>
                    <span class="text-sm">Login and security</span>
                </a>
                <a href="notifications.php" class="flex items-center gap-3 px-4 py-3 <?php echo $profilePage === 'notifications.php' ? 'bg-[#F2F3F7] text-gray-900' : 'text-gray-500 hover:bg-gray-50'; ?> rounded-2xl transition-all">
                    <i class="fa-regular fa-bell <?php echo $profilePage === 'notifications.php' ? 'opacity-70' : 'opacity-40'; ?>"></i>
                    <span class="text-sm">Notifications</span>
                </a>
                <hr class="my-4 border-gray-100">
                <a href="payments.php" class="flex items-center gap-3 px-4 py-3 <?php echo $profilePage === 'payments.php' ? 'bg-[#F2F3F7] text-gray-900' : 'text-gray-500 hover:bg-gray-50'; ?> rounded-2xl transition-all">
                    <i class="fa-solid fa-wallet <?php echo $profilePage === 'payments.php' ? 'opacity-70' : 'opacity-40'; ?>"></i>
                    <span class="text-sm">Wallet</span>
                </a>
                <a href="payments.php" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 rounded-2xl transition-all">
                    <i class="fa-solid fa-clock-rotate-left opacity-40"></i>
                    <span class="text-sm">Payment history</span>
                </a>
                <?php if ($_SESSION['role'] !== 'student'): ?>
                    <hr class="my-4 border-gray-100">
                    <a href="progress.php" class="flex items-center gap-3 px-4 py-3 <?php echo $profilePage === 'progress.php' ? 'bg-[#F2F3F7] text-gray-900' : 'text-gray-500 hover:bg-gray-50'; ?> rounded-2xl transition-all">
                        <i class="fa-regular fa-circle-check <?php echo $profilePage === 'progress.php' ? 'opacity-70' : 'opacity-40'; ?>"></i>
                        <span class="text-sm">My results</span>
                    </a>
                <?php endif; ?>
            </nav>
        </aside>

        <main class="flex-1 bg-white rounded-[32px] max-w-[676px] p-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-8">Personal settings</h2>

            <?php if ($success): ?>
                <div id="successMsg" class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-xl mb-6 flex items-center gap-2 transition-all duration-500" style="opacity:1;">
                    <i class="fa-solid fa-check-circle"></i>
                    <?php echo htmlspecialchars($success); ?>
                </div>
                <script>
                    setTimeout(function() {
                        var el = document.getElementById('successMsg');
                        if (el) {
                            el.style.opacity = '0';
                            el.style.transform = 'translateY(-10px)';
                            setTimeout(function() {
                                el.remove();
                            }, 500);
                        }
                    }, 5000);
                </script>
            <?php endif; ?>

            <?php if ($error): ?>
                <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl mb-6 flex items-center gap-2">
                    <i class="fa-solid fa-exclamation-circle"></i>
                    <?php echo htmlspecialchars($error); ?>
                </div>
            <?php endif; ?>

            <form method="POST">
                <input type="hidden" name="save_profile" value="1">

                <div class="flex gap-8 mb-8 items-center">
                    <img src="./image/photo_2025-12-24_12-53-53.png" class="w-24 h-24 rounded-3xl object-cover">
                    <div class="flex-1 max-w-sm">
                        <label class="text-sm text-gray-400 block mb-2">Name, surname</label>
                        <input type="text" name="name" value="<?php echo htmlspecialchars($user['name']); ?>"
                            class="w-full border border-gray-200 rounded-2xl px-4 py-3 text-gray-700 focus:outline-none focus:border-blue-400">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label class="text-sm text-gray-400 block mb-2">Gender</label>
                        <div class="flex bg-[#F2F3F7] p-1 rounded-2xl">
                            <label class="flex-1 flex items-center justify-center gap-2 py-2 <?php echo ($user['gender'] ?? 'male') === 'male' ? 'bg-white rounded-xl shadow-sm' : ''; ?> cursor-pointer">
                                <input type="radio" name="gender" value="male" <?php echo ($user['gender'] ?? 'male') === 'male' ? 'checked' : ''; ?> class="w-4 h-4 accent-blue-600">
                                <span class="text-sm">Male</span>
                            </label>
                            <label class="flex-1 flex items-center justify-center gap-2 py-2 <?php echo ($user['gender'] ?? '') === 'female' ? 'bg-white rounded-xl shadow-sm' : ''; ?> cursor-pointer text-gray-400">
                                <input type="radio" name="gender" value="female" <?php echo ($user['gender'] ?? '') === 'female' ? 'checked' : ''; ?> class="w-4 h-4 accent-blue-600">
                                <span class="text-sm">Female</span>
                            </label>
                        </div>
                    </div>

                    <div>
                        <label class="text-sm text-gray-400 block mb-2">Age / Birthday</label>
                        <input type="text" name="birthdate" value="<?php echo htmlspecialchars($user['birthdate'] ?? ''); ?>"
                            class="w-full border border-gray-200 rounded-2xl px-4 py-3 text-gray-700"
                            placeholder="06.06.2000">
                    </div>

                    <div>
                        <label class="text-sm text-gray-400 block mb-2">Date of employment</label>
                        <input type="text" name="employment_date" value="<?php echo htmlspecialchars($user['employment_date'] ?? ''); ?>"
                            class="w-full border border-gray-200 rounded-2xl px-4 py-3 text-gray-700"
                            placeholder="01.09.2024">
                    </div>

                    <div>
                        <label class="text-sm text-gray-400 block mb-2">Passport expiration date</label>
                        <input type="text" name="passport_expiry" value="<?php echo htmlspecialchars($user['passport_expiry'] ?? ''); ?>"
                            class="w-full border border-gray-200 rounded-2xl px-4 py-3 text-gray-700"
                            placeholder="01.01.2030">
                    </div>

                    <div>
                        <label class="text-sm text-gray-400 block mb-2">Region</label>
                        <select name="region" class="w-full border border-gray-200 rounded-2xl px-4 py-3 text-gray-700 appearance-none">
                            <?php
                            $regions = ['Tashkent', 'Andijan', 'Bukhara', 'Fergana', 'Jizzakh', 'Khorezm', 'Namangan', 'Navoi', 'Kashkadarya', 'Samarkand', 'Sirdaryo', 'Surxondaryo', 'Karakalpakstan'];
                            foreach ($regions as $r): ?>
                                <option value="<?php echo $r; ?>" <?php echo ($user['region'] ?? '') === $r ? 'selected' : ''; ?>><?php echo $r; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div>
                        <label class="text-sm text-gray-400 block mb-2">Residence area</label>
                        <input type="text" name="address" value="<?php echo htmlspecialchars($user['address'] ?? ''); ?>"
                            class="w-full border border-gray-200 rounded-2xl px-4 py-3 text-gray-700"
                            placeholder="123 Main St, Apt 4B">
                    </div>

                    <div class="col-span-2">
                        <label class="text-sm text-gray-400 block mb-2">Phone number</label>
                        <input type="text" name="phone" value="<?php echo htmlspecialchars($user['phone']); ?>"
                            class="w-full border border-gray-200 rounded-2xl px-4 py-3 text-gray-700">
                    </div>

                    <div>
                        <label class="text-sm text-gray-400 block mb-2">Instagram</label>
                        <input type="text" name="instagram" value="<?php echo htmlspecialchars($user['instagram'] ?? ''); ?>"
                            class="w-full border border-gray-200 rounded-2xl px-4 py-3 text-gray-700"
                            placeholder="@username">
                    </div>

                    <div>
                        <label class="text-sm text-gray-400 block mb-2">Telegram</label>
                        <input type="text" name="telegram" value="<?php echo htmlspecialchars($user['telegram'] ?? ''); ?>"
                            class="w-full border border-gray-200 rounded-2xl px-4 py-3 text-gray-700"
                            placeholder="@username">
                    </div>

                    <div class="col-span-2 mt-4 <?php echo $success ? 'hidden' : ''; ?>" id="saveButtonContainer">
                        <button type="submit" class="w-full bg-[#3D5EE1] text-white py-4 rounded-2xl font-medium hover:bg-blue-700 transition-colors shadow-lg shadow-blue-200">
                            Save
                        </button>
                    </div>
                </div>
            </form>

            <script>
                // Watch form elements
                const form = document.querySelector('form');
                const saveBtn = document.getElementById('saveButtonContainer');

                if (form && saveBtn) {
                    form.querySelectorAll('input, select, textarea').forEach(input => {
                        input.addEventListener('input', () => {
                            saveBtn.classList.remove('hidden');
                        });
                        input.addEventListener('change', () => {
                            saveBtn.classList.remove('hidden');
                        });
                    });
                }
            </script>

            <!-- Wallet Section (Simplified as requested) -->
            <div class="mt-12">
                <h2 class="text-xl font-semibold text-gray-800 mb-6">Wallets</h2>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-blue-500 p-6 rounded-[24px] text-white shadow-lg">
                        <div class="flex justify-between items-start mb-8">
                            <i class="fa-solid fa-wallet text-2xl opacity-80"></i>
                            <span class="text-xs font-medium uppercase tracking-wider opacity-60">Personal Balance</span>
                        </div>
                        <div class="text-3xl font-bold mb-1">0.00 <span class="text-lg opacity-80 font-normal">UZS</span></div>
                        <p class="text-xs opacity-60">Last updated: Just now</p>
                    </div>
                    <div class="bg-emerald-500 p-6 rounded-[24px] text-white shadow-lg">
                        <div class="flex justify-between items-start mb-8">
                            <i class="fa-solid fa-gem text-2xl opacity-80"></i>
                            <span class="text-xs font-medium uppercase tracking-wider opacity-60">Bonus Points</span>
                        </div>
                        <div class="text-3xl font-bold mb-1">540 <span class="text-lg opacity-80 font-normal">PTS</span></div>
                        <p class="text-xs opacity-60">Active bonuses</p>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<?php require "header/footer.php"; ?>