<?php
require './config.php';
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}

// Schedule data (from JSON file)
$scheduleFile = 'schedule_data.json';
$scheduleData = [];
if (file_exists($scheduleFile)) {
    $scheduleData = json_decode(file_get_contents($scheduleFile), true) ?? [];
}

$days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
$timeSlots = ['09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00'];
// Save schedule
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save_schedule'])) {
    $newEntry = [
        'id' => uniqid(),
        'group' => trim($_POST['group_name']),
        'day' => $_POST['day'],
        'time_start' => $_POST['time_start'],
        'time_end' => $_POST['time_end'],
        'room' => trim($_POST['room']),
        'subject' => trim($_POST['subject']),
        'color' => $_POST['color'] ?? '#3B82F6',
        'created_by' => $_SESSION['user_name'],
        'timestamp' => time()
    ];
    $scheduleData[] = $newEntry;
    file_put_contents($scheduleFile, json_encode($scheduleData, JSON_PRETTY_PRINT));
    header('Location: schedule.php');
    exit;
}

// Delete
if (isset($_GET['delete'])) {
    $scheduleData = array_filter($scheduleData, fn($item) => ($item['id'] ?? '') !== $_GET['delete']);
    $scheduleData = array_values($scheduleData);
    file_put_contents($scheduleFile, json_encode($scheduleData, JSON_PRETTY_PRINT));
    header('Location: schedule.php');
    exit;
}

require "header/header.php";
require "header/lc.php";
?>

<div class="flex items-start">
    <?php require "header/sidebar.php"; ?>

    <div class="max-w-[1340px] flex-1 flex mt-3 flex-col ml-5 gap-6 mr-5 mb-10">

        <!-- Header -->
        <div class="flex items-center justify-between mt-6">
            <div class="flex items-center gap-3">
                <div class="bg-blue-100 p-3 rounded-xl">
                    <i class="fa-solid fa-calendar-days text-blue-600 text-2xl"></i>
                </div>
                <div>
                    <p class="text-gray-500 text-sm"><?php echo count($scheduleData); ?> lessons scheduled</p>
                </div>
            </div>
            <?php if ($_SESSION['role'] !== 'student'): ?>
                <button onclick="document.getElementById('addModal').classList.remove('hidden')"
                    class="bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700 transition flex items-center gap-2 shadow-lg shadow-blue-200">
                    <i class="fa-solid fa-plus"></i>
                    Add Lesson
                </button>
            <?php endif; ?>
        </div>

        <!-- Hafta kunlari -->
        <div class="grid grid-cols-6 gap-4">
            <?php foreach ($days as $dayIndex => $day): ?>
                <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
                    <div class="text-white p-3 text-center rounded-t-2xl" style="background: linear-gradient(to right, #3b82f6, #2563eb);">
                        <h3 class="font-semibold text-sm"><?php echo $day; ?></h3>
                    </div>
                    <div class="p-2 space-y-2 min-h-[400px]">
                        <?php
                        $dayLessons = array_filter($scheduleData, fn($item) => ($item['day'] ?? '') === $day);
                        usort($dayLessons, fn($a, $b) => strcmp($a['time_start'] ?? '', $b['time_start'] ?? ''));

                        if (empty($dayLessons)): ?>
                            <div class="text-center text-gray-400 text-xs py-8">
                                <i class="fa-regular fa-calendar-xmark text-2xl mb-2"></i>
                                <p>No lessons</p>
                            </div>
                            <?php else:
                            foreach ($dayLessons as $lesson): ?>
                                <div class="rounded-xl p-3 text-xs border-l-4 hover:shadow-md transition relative group"
                                    style="border-color: <?php echo $lesson['color']; ?>; background-color: <?php echo $lesson['color']; ?>15;">
                                    <div class="font-bold text-gray-800 mb-1"><?php echo htmlspecialchars($lesson['group']); ?></div>
                                    <div class="text-gray-500 flex items-center gap-1 mb-1">
                                        <i class="fa-regular fa-clock"></i>
                                        <?php echo $lesson['time_start']; ?> - <?php echo $lesson['time_end']; ?>
                                    </div>
                                    <?php if (!empty($lesson['room'])): ?>
                                        <div class="text-gray-500 flex items-center gap-1 mb-1">
                                            <i class="fa-solid fa-door-open"></i>
                                            Room <?php echo htmlspecialchars($lesson['room']); ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($lesson['subject'])): ?>
                                        <div class="text-gray-600 font-medium mt-1">
                                            <?php echo htmlspecialchars($lesson['subject']); ?>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($_SESSION['role'] !== 'student'): ?>
                                        <!-- Delete button -->
                                        <a href="schedule.php?delete=<?php echo $lesson['id']; ?>"
                                            onclick="return confirm('Do you want to delete?')"
                                            class="absolute top-1 right-1 text-gray-300 hover:text-red-500 opacity-0 group-hover:opacity-100 transition">
                                            <i class="fa-solid fa-xmark text-xs"></i>
                                        </a>
                                    <?php endif; ?>
                                </div>
                        <?php endforeach;
                        endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Bugungi darslar -->
        <?php
        $today = $days[date('N') - 1] ?? 'Monday';
        $todayLessons = array_filter($scheduleData, fn($item) => ($item['day'] ?? '') === $today);
        ?>
        <?php if (!empty($todayLessons)): ?>
            <div class="bg-white rounded-2xl shadow-sm p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-4">
                    <i class="fa-solid fa-sun text-yellow-500 mr-2"></i>
                    Today's lessons (<?php echo $today; ?>)
                </h2>
                <div class="grid grid-cols-3 gap-4">
                    <?php foreach ($todayLessons as $lesson): ?>
                        <div class="rounded-xl p-4 border border-blue-100" style="background: linear-gradient(to right, #3b82f6, #6366f1);">
                            <div class="flex items-center justify-between mb-2">
                                <span class="font-bold text-white"><?php echo htmlspecialchars($lesson['group']); ?></span>
                                <span class="text-xs bg-blue-100 text-blue-700 px-2 py-1 rounded-full">
                                    <?php echo $lesson['time_start']; ?> - <?php echo $lesson['time_end']; ?>
                                </span>
                            </div>
                            <?php if (!empty($lesson['subject'])): ?>
                                <p class="text-sm text-white"><?php echo htmlspecialchars($lesson['subject']); ?></p>
                            <?php endif; ?>
                            <?php if (!empty($lesson['room'])): ?>
                                <p class="text-xs text-white mt-1">
                                    <i class="fa-solid fa-door-open mr-1"></i>Room <?php echo htmlspecialchars($lesson['room']); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- Add Schedule Modal -->
<div id="addModal" class="hidden fixed inset-0 bg-black/50 backdrop-blur-sm z-50 flex items-center justify-center">
    <div class="bg-white rounded-3xl p-8 w-full max-w-lg shadow-2xl relative">
        <button onclick="document.getElementById('addModal').classList.add('hidden')"
            class="absolute top-4 right-4 text-gray-400 hover:text-gray-600">
            <i class="fa-solid fa-xmark text-xl"></i>
        </button>

        <h2 class="text-2xl font-bold text-gray-800 mb-6">
            <i class="fa-solid fa-plus-circle text-blue-600 mr-2"></i>
            Add New Lesson
        </h2>

        <form method="POST" class="space-y-4">
            <input type="hidden" name="save_schedule" value="1">

            <div>
                <label class="block text-sm text-gray-600 mb-1">Group Name</label>
                <input type="text" name="group_name" required
                    class="w-full border-2 border-gray-200 rounded-xl px-4 py-3 focus:border-blue-500 focus:outline-none"
                    placeholder="A25">
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm text-gray-600 mb-1">Day</label>
                    <select name="day" required class="w-full border-2 border-gray-200 rounded-xl px-4 py-3 focus:border-blue-500 focus:outline-none">
                        <?php foreach ($days as $d): ?>
                            <option value="<?php echo $d; ?>"><?php echo $d; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <label class="block text-sm text-gray-600 mb-1">Room</label>
                    <input type="text" name="room"
                        class="w-full border-2 border-gray-200 rounded-xl px-4 py-3 focus:border-blue-500 focus:outline-none"
                        placeholder="3">
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm text-gray-600 mb-1">Start Time</label>
                    <select name="time_start" required class="w-full border-2 border-gray-200 rounded-xl px-4 py-3 focus:border-blue-500 focus:outline-none">
                        <?php foreach ($timeSlots as $t): ?>
                            <option value="<?php echo $t; ?>"><?php echo $t; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <label class="block text-sm text-gray-600 mb-1">End Time</label>
                    <select name="time_end" required class="w-full border-2 border-gray-200 rounded-xl px-4 py-3 focus:border-blue-500 focus:outline-none">
                        <?php foreach ($timeSlots as $t): ?>
                            <option value="<?php echo $t; ?>"><?php echo $t; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div>
                <label class="block text-sm text-gray-600 mb-1">Subject Name</label>
                <input type="text" name="subject"
                    class="w-full border-2 border-gray-200 rounded-xl px-4 py-3 focus:border-blue-500 focus:outline-none"
                    placeholder="English">
            </div>

            <div>
                <label class="block text-sm text-gray-600 mb-1">Color</label>
                <div class="flex gap-3">
                    <?php $colors = ['#3B82F6', '#EF4444', '#10B981', '#F59E0B', '#8B5CF6', '#EC4899'];
                    foreach ($colors as $i => $c): ?>
                        <label class="cursor-pointer">
                            <input type="radio" name="color" value="<?php echo $c; ?>" <?php echo $i === 0 ? 'checked' : ''; ?> class="hidden peer">
                            <div class="w-8 h-8 rounded-full peer-checked:ring-4 ring-offset-2 transition" style="background-color: <?php echo $c; ?>"></div>
                        </label>
                    <?php endforeach; ?>
                </div>
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-4 rounded-xl font-semibold hover:bg-blue-700 transition mt-4">
                <i class="fa-solid fa-check mr-2"></i>
                Save
            </button>
        </form>
    </div>
</div>

<?php require "header/footer.php"; ?>