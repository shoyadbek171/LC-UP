<?php
require './config.php';
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}

// Foydalanuvchi roli va guruhi
$userRole = $_SESSION['role'] ?? 'student';
$userGroup = '';

if ($userRole === 'student') {
    // Get student's group
    $stmt = $pdo->prepare("SELECT group_name FROM users WHERE id = ?");
    $stmt->execute([$_SESSION['user_id']]);
    $u = $stmt->fetch();
    $userGroup = $u['group_name'] ?? '';
}

// Uy vazifasi ma'lumotlari
$hwFile = 'homework_data.json';
$hwData = [];
if (file_exists($hwFile)) {
    $hwData = json_decode(file_get_contents($hwFile), true) ?? [];
}

// Vazifa saqlash (faqat o'qituvchi/admin uchun)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save_hw'])) {
    if ($userRole === 'student') {
        header('Location: homework.php?error=no_permission');
        exit;
    }
    $newHw = [
        'id' => uniqid(),
        'title' => trim($_POST['title']),
        'description' => trim($_POST['description']),
        'group' => trim($_POST['group']),
        'subject' => trim($_POST['subject']),
        'deadline' => $_POST['deadline'],
        'priority' => $_POST['priority'] ?? 'medium',
        'status' => 'active',
        'teacher' => $_SESSION['user_name'],
        'date' => date('d.m.Y H:i'),
        'timestamp' => time()
    ];
    $hwData[] = $newHw;
    file_put_contents($hwFile, json_encode($hwData, JSON_PRETTY_PRINT));

    // Telegram Notification
    $botToken = '8716325606:AAHVFJtckyx_9v6scgyFrxrr3InooNk1ukU';
    $chatId = '985122719';
    $text = "📚 *Yangi Uy Vazifasi*\n\n";
    $text .= "📝 *Mavzu:* " . $newHw['title'] . "\n";
    $text .= "👥 *Guruh:* " . $newHw['group'] . "\n";
    $text .= "📖 *Fan:* " . $newHw['subject'] . "\n";
    $text .= "👤 *O'qituvchi:* " . $newHw['teacher'] . "\n";
    $text .= "⏰ *Muddati:* " . $newHw['deadline'] . "\n\n";
    $text .= "🔗 [Tizimga kirish](http://localhost:8000/homework.php)";

    $url = "https://api.telegram.org/bot{$botToken}/sendMessage";
    $params = [
        'chat_id' => $chatId,
        'text' => $text,
        'parse_mode' => 'Markdown'
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_exec($ch);
    curl_close($ch);

    header('Location: homework.php?success=1');
    exit;
}

// Status o'zgartirish (hamma uchun ochiq)
if (isset($_GET['complete'])) {
    foreach ($hwData as &$hw) {
        if (($hw['id'] ?? '') === $_GET['complete']) {
            $hw['status'] = 'completed';
        }
    }
    file_put_contents($hwFile, json_encode($hwData, JSON_PRETTY_PRINT));
    header('Location: homework.php');
    exit;
}

// O'chirish (faqat o'qituvchi/admin uchun)
if (isset($_GET['delete'])) {
    if ($userRole === 'student') {
        header('Location: homework.php?error=no_permission');
        exit;
    }
    $hwData = array_filter($hwData, fn($item) => ($item['id'] ?? '') !== $_GET['delete']);
    $hwData = array_values($hwData);
    file_put_contents($hwFile, json_encode($hwData, JSON_PRETTY_PRINT));
    header('Location: homework.php');
    exit;
}

// Filter homework for students
if ($userRole === 'student') {
    $filteredHw = array_filter($hwData, function ($h) use ($userGroup) {
        return ($h['group'] ?? '') === $userGroup;
    });
} else {
    $filteredHw = $hwData;
}

$activeCount = count(array_filter($filteredHw, fn($h) => ($h['status'] ?? '') === 'active'));
$completedCount = count(array_filter($filteredHw, fn($h) => ($h['status'] ?? '') === 'completed'));

require "header/header.php";
require "header/lc.php";
?>

<div class="flex items-start">
    <?php require "header/sidebar.php"; ?>

    <div class="max-w-[1340px] flex-1 flex mt-3 flex-col ml-5 gap-6 mr-5 mb-10">

        <!-- Header -->
        <div class="flex items-center justify-between mt-6">
            <div class="flex items-center gap-3">
                <div class="bg-orange-100 p-3 rounded-xl">
                    <i class="fa-solid fa-book-open text-orange-600 text-2xl"></i>
                </div>
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">Homework</h1>
                    <p class="text-gray-500 text-sm"><?php echo $activeCount; ?> active | <?php echo $completedCount; ?> completed</p>
                </div>
            </div>
            <?php if ($userRole !== 'student'): ?>
                <button onclick="document.getElementById('hwModal').classList.remove('hidden')"
                    class="bg-orange-500 text-white px-6 py-3 rounded-xl hover:bg-orange-600 transition flex items-center gap-2 shadow-lg shadow-orange-200">
                    <i class="fa-solid fa-plus"></i>
                    Assign Homework
                </button>
            <?php endif; ?>
        </div>

        <?php if (isset($_GET['success'])): ?>
            <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-xl flex items-center gap-2">
                <i class="fa-solid fa-check-circle"></i>
                Homework saved successfully!
            </div>
        <?php endif; ?>

        <?php if (isset($_GET['error']) && $_GET['error'] === 'no_permission'): ?>
            <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl flex items-center gap-2">
                <i class="fa-solid fa-triangle-exclamation"></i>
                You don't have permission for this action!
            </div>
        <?php endif; ?>

        <!-- Stats -->
        <div class="grid grid-cols-3 gap-4">
            <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100 flex items-center gap-4">
                <div class="bg-blue-100 p-4 rounded-xl">
                    <i class="fa-solid fa-list-check text-blue-600 text-xl"></i>
                </div>
                <div>
                    <p class="text-xs text-gray-500">Total Tasks</p>
                    <p class="text-2xl font-bold text-gray-800"><?php echo count($filteredHw); ?></p>
                </div>
            </div>
            <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100 flex items-center gap-4">
                <div class="bg-orange-100 p-4 rounded-xl">
                    <i class="fa-solid fa-hourglass-half text-orange-600 text-xl"></i>
                </div>
                <div>
                    <p class="text-xs text-gray-500">Active</p>
                    <p class="text-2xl font-bold text-orange-600"><?php echo $activeCount; ?></p>
                </div>
            </div>
            <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100 flex items-center gap-4">
                <div class="bg-green-100 p-4 rounded-xl">
                    <i class="fa-solid fa-circle-check text-green-600 text-xl"></i>
                </div>
                <div>
                    <p class="text-xs text-gray-500">Completed</p>
                    <p class="text-2xl font-bold text-green-600"><?php echo $completedCount; ?></p>
                </div>
            </div>
        </div>

        <!-- Tasks Grid -->
        <?php if (empty($filteredHw)): ?>
            <div class="bg-white rounded-2xl shadow-sm p-12 text-center">
                <i class="fa-solid fa-book text-gray-300 text-5xl mb-4"></i>
                <h3 class="text-xl font-semibold text-gray-700 mb-2">No homework assigned yet</h3>
                <p class="text-gray-500">Click the button above to assign the first homework</p>
            </div>
        <?php else: ?>
            <div class="grid grid-cols-2 gap-4">
                <?php
                $sorted = $filteredHw;
                usort($sorted, fn($a, $b) => ($b['timestamp'] ?? 0) - ($a['timestamp'] ?? 0));

                foreach ($sorted as $hw):
                    $isActive = ($hw['status'] ?? '') === 'active';
                    $isExpired = $isActive && strtotime($hw['deadline'] ?? '') < time();
                    $priorityColors = [
                        'high' => 'bg-red-100 text-red-700 border-red-200',
                        'medium' => 'bg-yellow-100 text-yellow-700 border-yellow-200',
                        'low' => 'bg-green-100 text-green-700 border-green-200'
                    ];
                    $priorityLabels = ['high' => 'High', 'medium' => 'Medium', 'low' => 'Low'];
                ?>
                    <div class="bg-white rounded-2xl shadow-sm p-5 border <?php echo $isActive ? ($isExpired ? 'border-red-200' : 'border-gray-100') : 'border-green-200 opacity-75'; ?> hover:shadow-md transition">
                        <div class="flex items-start justify-between mb-3">
                            <div class="flex items-center gap-2">
                                <span class="text-xs px-2 py-1 rounded-full <?php echo $priorityColors[$hw['priority'] ?? 'medium']; ?>">
                                    <?php echo $priorityLabels[$hw['priority'] ?? 'medium']; ?>
                                </span>
                                <span class="text-xs px-2 py-1 rounded-full bg-blue-100 text-blue-700">
                                    <?php echo htmlspecialchars($hw['group']); ?>
                                </span>
                                <?php if (!$isActive): ?>
                                    <span class="text-xs px-2 py-1 rounded-full bg-green-100 text-green-700">
                                        <i class="fa-solid fa-check mr-1"></i>Completed
                                    </span>
                                <?php elseif ($isExpired): ?>
                                    <span class="text-xs px-2 py-1 rounded-full bg-red-100 text-red-700">
                                        <i class="fa-solid fa-clock mr-1"></i>Expired
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="flex gap-1">
                                <?php if ($isActive): ?>
                                    <a href="homework.php?complete=<?php echo $hw['id']; ?>"
                                        class="text-gray-400 hover:text-green-600 transition p-1" title="Complete">
                                        <i class="fa-solid fa-check text-sm"></i>
                                    </a>
                                <?php endif; ?>

                                <?php if ($userRole !== 'student'): ?>
                                    <a href="homework.php?delete=<?php echo $hw['id']; ?>"
                                        onclick="return confirm('Are you sure you want to delete?')"
                                        class="text-gray-400 hover:text-red-500 transition p-1" title="Delete">
                                        <i class="fa-regular fa-trash-can text-sm"></i>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>

                        <h3 class="font-bold text-gray-800 text-lg mb-2 <?php echo !$isActive ? 'line-through' : ''; ?>">
                            <?php echo htmlspecialchars($hw['title']); ?>
                        </h3>
                        <p class="text-sm text-gray-600 mb-3 line-clamp-2"><?php echo htmlspecialchars($hw['description']); ?></p>

                        <div class="flex items-center justify-between text-xs text-gray-500">
                            <div class="flex items-center gap-3">
                                <span><i class="fa-solid fa-book mr-1"></i><?php echo htmlspecialchars($hw['subject'] ?? ''); ?></span>
                                <span><i class="fa-regular fa-user mr-1"></i><?php echo $hw['teacher'] ?? ''; ?></span>
                            </div>
                            <span class="<?php echo $isExpired ? 'text-red-500 font-bold' : ''; ?>">
                                <i class="fa-regular fa-calendar mr-1"></i>
                                <?php echo $hw['deadline'] ?? ''; ?>
                            </span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- Homework Modal -->
<div id="hwModal" class="hidden fixed inset-0 bg-black/50 backdrop-blur-sm z-50 flex items-center justify-center">
    <div class="bg-white rounded-3xl p-8 w-full max-w-lg shadow-2xl relative">
        <button onclick="document.getElementById('hwModal').classList.add('hidden')"
            class="absolute top-4 right-4 text-gray-400 hover:text-gray-600">
            <i class="fa-solid fa-xmark text-xl"></i>
        </button>

        <h2 class="text-2xl font-bold text-gray-800 mb-6">
            <i class="fa-solid fa-pen text-orange-500 mr-2"></i>
            Assign New Task
        </h2>

        <form method="POST" class="space-y-4">
            <input type="hidden" name="save_hw" value="1">

            <div>
                <label class="block text-sm text-gray-600 mb-1">Task Name</label>
                <input type="text" name="title" required
                    class="w-full border-2 border-gray-200 rounded-xl px-4 py-3 focus:border-orange-500 focus:outline-none"
                    placeholder="Grammar test">
            </div>

            <div>
                <label class="block text-sm text-gray-600 mb-1">Description</label>
                <textarea name="description" rows="3" required
                    class="w-full border-2 border-gray-200 rounded-xl px-4 py-3 focus:border-orange-500 focus:outline-none resize-none"
                    placeholder="Task details..."></textarea>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm text-gray-600 mb-1">Group</label>
                    <input type="text" name="group" required
                        class="w-full border-2 border-gray-200 rounded-xl px-4 py-3 focus:border-orange-500 focus:outline-none"
                        placeholder="A25">
                </div>
                <div>
                    <label class="block text-sm text-gray-600 mb-1">Subject</label>
                    <input type="text" name="subject" required
                        class="w-full border-2 border-gray-200 rounded-xl px-4 py-3 focus:border-orange-500 focus:outline-none"
                        placeholder="English">
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm text-gray-600 mb-1">Deadline</label>
                    <input type="date" name="deadline" required
                        class="w-full border-2 border-gray-200 rounded-xl px-4 py-3 focus:border-orange-500 focus:outline-none">
                </div>
                <div>
                    <label class="block text-sm text-gray-600 mb-1">Priority</label>
                    <select name="priority" class="w-full border-2 border-gray-200 rounded-xl px-4 py-3 focus:border-orange-500 focus:outline-none">
                        <option value="low">Low</option>
                        <option value="medium" selected>Medium</option>
                        <option value="high">High</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="w-full bg-orange-500 text-white py-4 rounded-xl font-semibold hover:bg-orange-600 transition mt-4">
                <i class="fa-solid fa-paper-plane mr-2"></i>
                Assign Task
            </button>
        </form>
    </div>
</div>

<?php require "header/footer.php"; ?>