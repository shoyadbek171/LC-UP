<?php
require './config.php';
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}

if (!in_array($_SESSION['role'], ['admin', 'teacher'])) {
    header('Location: dashboard.php');
    exit;
}

// Attendance data
$attendanceFile = 'attendance_data.json';
$attendanceData = [];
if (file_exists($attendanceFile)) {
    $attendanceData = json_decode(file_get_contents($attendanceFile), true) ?? [];
}

$today = date('Y-m-d');

// Save attendance
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save_attendance'])) {
    $date = $_POST['date'] ?? $today;
    $group = trim($_POST['group_name']);
    $students = $_POST['students'] ?? [];

    $entry = [
        'id' => uniqid(),
        'date' => $date,
        'group' => $group,
        'students' => $students,
        'teacher' => $_SESSION['user_name'],
        'timestamp' => time()
    ];

    $attendanceData[] = $entry;
    file_put_contents($attendanceFile, json_encode($attendanceData, JSON_PRETTY_PRINT));
    header('Location: attendance.php?success=1');
    exit;
}

// Delete
if (isset($_GET['delete'])) {
    $attendanceData = array_filter($attendanceData, fn($item) => ($item['id'] ?? '') !== $_GET['delete']);
    $attendanceData = array_values($attendanceData);
    file_put_contents($attendanceFile, json_encode($attendanceData, JSON_PRETTY_PRINT));
    header('Location: attendance.php');
    exit;
}

// Statistics
$totalRecords = count($attendanceData);
$todayRecords = count(array_filter($attendanceData, fn($item) => ($item['date'] ?? '') === $today));

// Last 7 days statistics
$last7days = [];
for ($i = 6; $i >= 0; $i--) {
    $date = date('Y-m-d', strtotime("-$i days"));
    $dayName = date('D', strtotime($date));
    $count = 0;
    $present = 0;
    foreach ($attendanceData as $record) {
        if (($record['date'] ?? '') === $date) {
            foreach (($record['students'] ?? []) as $s) {
                $count++;
                if (($s['status'] ?? '') === 'present') $present++;
            }
        }
    }
    $last7days[] = ['date' => $date, 'day' => $dayName, 'total' => $count, 'present' => $present];
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
                <div class="bg-green-100 p-3 rounded-xl">
                    <i class="fa-solid fa-clipboard-check text-green-600 text-2xl"></i>
                </div>
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">Attendance</h1>
                    <p class="text-gray-500 text-sm">Total <?php echo $totalRecords; ?> records | Today <?php echo $todayRecords; ?> records</p>
                </div>
            </div>
            <button onclick="document.getElementById('attendModal').classList.remove('hidden')"
                class="bg-green-600 text-white px-6 py-3 rounded-xl hover:bg-green-700 transition flex items-center gap-2 shadow-lg shadow-green-200">
                <i class="fa-solid fa-plus"></i>
                Take Attendance
            </button>
        </div>

        <?php if (isset($_GET['success'])): ?>
            <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-xl flex items-center gap-2">
                <i class="fa-solid fa-check-circle"></i>
                Attendance saved successfully!
            </div>
        <?php endif; ?>

        <!-- Stats Cards -->
        <div class="grid grid-cols-4 gap-4">
            <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100">
                <div class="flex items-center gap-3">
                    <div class="bg-blue-100 p-3 rounded-xl">
                        <i class="fa-solid fa-calendar text-blue-600"></i>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500">Total Records</p>
                        <p class="text-2xl font-bold text-gray-800"><?php echo $totalRecords; ?></p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100">
                <div class="flex items-center gap-3">
                    <div class="bg-green-100 p-3 rounded-xl">
                        <i class="fa-solid fa-check text-green-600"></i>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500">Today's Attendance</p>
                        <p class="text-2xl font-bold text-gray-800"><?php echo $todayRecords; ?></p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100">
                <div class="flex items-center gap-3">
                    <div class="bg-yellow-100 p-3 rounded-xl">
                        <i class="fa-solid fa-chart-line text-yellow-600"></i>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500">Weekly Average</p>
                        <?php
                        $weekTotal = array_sum(array_column($last7days, 'total'));
                        $weekPresent = array_sum(array_column($last7days, 'present'));
                        $avgPercent = $weekTotal > 0 ? round(($weekPresent / $weekTotal) * 100) : 0;
                        ?>
                        <p class="text-2xl font-bold text-gray-800"><?php echo $avgPercent; ?>%</p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100">
                <div class="flex items-center gap-3">
                    <div class="bg-purple-100 p-3 rounded-xl">
                        <i class="fa-solid fa-users text-purple-600"></i>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500">Today's Date</p>
                        <p class="text-lg font-bold text-gray-800"><?php echo date('d.m.Y'); ?></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Records -->
        <div class="bg-white rounded-2xl shadow-sm p-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">
                <i class="fa-solid fa-clock-rotate-left text-gray-400 mr-2"></i>
                Recent Records
            </h2>

            <?php if (empty($attendanceData)): ?>
                <div class="text-center py-12 text-gray-400">
                    <i class="fa-solid fa-clipboard text-4xl mb-3"></i>
                    <p>No attendance records yet</p>
                </div>
            <?php else: ?>
                <div class="space-y-3">
                    <?php
                    $sorted = $attendanceData;
                    usort($sorted, fn($a, $b) => ($b['timestamp'] ?? 0) - ($a['timestamp'] ?? 0));
                    $sorted = array_slice($sorted, 0, 20);

                    foreach ($sorted as $record):
                        $presentCount = 0;
                        $absentCount = 0;
                        foreach (($record['students'] ?? []) as $s) {
                            if (($s['status'] ?? '') === 'present') $presentCount++;
                            else $absentCount++;
                        }
                        $total = $presentCount + $absentCount;
                        $percent = $total > 0 ? round(($presentCount / $total) * 100) : 0;
                    ?>
                        <div class="flex items-center justify-between bg-gray-50 rounded-xl p-4 hover:bg-gray-100 transition">
                            <div class="flex items-center gap-4">
                                <div class="bg-white p-3 rounded-xl shadow-sm">
                                    <i class="fa-solid fa-users text-blue-600"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800"><?php echo htmlspecialchars($record['group']); ?></h3>
                                    <p class="text-xs text-gray-500">
                                        <i class="fa-regular fa-calendar mr-1"></i>
                                        <?php echo $record['date']; ?> |
                                        <i class="fa-regular fa-user mr-1"></i>
                                        <?php echo $record['teacher'] ?? 'Unknown'; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="flex items-center gap-3 text-sm">
                                    <span class="text-green-600 font-medium">
                                        <i class="fa-solid fa-check mr-1"></i><?php echo $presentCount; ?>
                                    </span>
                                    <span class="text-red-500 font-medium">
                                        <i class="fa-solid fa-xmark mr-1"></i><?php echo $absentCount; ?>
                                    </span>
                                </div>
                                <div class="w-20 bg-gray-200 rounded-full h-2">
                                    <div class="bg-green-500 h-2 rounded-full" style="width: <?php echo $percent; ?>%"></div>
                                </div>
                                <span class="text-sm font-bold <?php echo $percent >= 80 ? 'text-green-600' : ($percent >= 50 ? 'text-yellow-600' : 'text-red-600'); ?>">
                                    <?php echo $percent; ?>%
                                </span>
                                <a href="attendance.php?delete=<?php echo $record['id']; ?>"
                                    onclick="return confirm('Are you sure you want to delete?')"
                                    class="text-gray-300 hover:text-red-500 transition">
                                    <i class="fa-regular fa-trash-can"></i>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- Attendance Modal -->
<div id="attendModal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50 p-8">
    <div class="bg-white rounded-3xl p-8 w-full max-w-2xl ml-96 mt-28 shadow-2xl relative max-h-[90vh] overflow-y-auto">
        <button onclick="document.getElementById('attendModal').classList.add('hidden')"
            class="absolute top-4 right-4 text-gray-400 hover:text-gray-600">
            <i class="fa-solid fa-xmark text-xl"></i>
        </button>

        <h2 class="text-2xl font-bold text-gray-800 mb-6">
            <i class="fa-solid fa-clipboard-check text-green-600 mr-2"></i>
            Take Attendance
        </h2>

        <form method="POST" class="space-y-4">
            <input type="hidden" name="save_attendance" value="1">

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm text-gray-600 mb-1">Group Name</label>
                    <input type="text" name="group_name" id="group_name_input" required
                        class="w-full border-2 border-gray-200 rounded-xl px-4 py-3 focus:border-green-500 focus:outline-none"
                        placeholder="A25">
                </div>
                <div>
                    <label class="block text-sm text-gray-600 mb-1">Date</label>
                    <input type="date" name="date" value="<?php echo $today; ?>"
                        class="w-full border-2 border-gray-200 rounded-xl px-4 py-3 focus:border-green-500 focus:outline-none">
                </div>
            </div>

            <!-- Students List -->
            <div>
                <div class="flex items-center justify-between mb-3">
                    <label class="text-sm text-gray-600 font-semibold">Students</label>
                    <button type="button" onclick="addStudent()" class="text-sm text-green-600 hover:text-green-700 font-medium">
                        <i class="fa-solid fa-plus mr-1"></i> Add Student
                    </button>
                </div>
                <div id="studentsList" class="space-y-2">
                    <!-- JS orqali qo'shiladi -->
                </div>
            </div>

            <button type="submit" class="w-full bg-green-600 text-white py-4 rounded-xl font-semibold hover:bg-green-700 transition mt-4">
                <i class="fa-solid fa-check mr-2"></i>
                Save
            </button>
        </form>
    </div>
</div>

<script>
    let studentIndex = 0;

    function addStudent(name = '') {
        const container = document.getElementById('studentsList');
        const div = document.createElement('div');
        div.className = 'flex items-center gap-3 bg-gray-50 rounded-xl p-3';
        div.innerHTML = `
        <input type="text" name="students[${studentIndex}][name]" value="${name}" placeholder="Full Name" required
            class="flex-1 border border-gray-200 rounded-lg px-3 py-2 text-sm focus:border-green-500 focus:outline-none">
        <div class="flex gap-2">
            <label class="flex items-center gap-1 cursor-pointer">
                <input type="radio" name="students[${studentIndex}][status]" value="present" checked class="accent-green-600">
                <span class="text-xs text-green-600 font-medium">Present</span>
            </label>
            <label class="flex items-center gap-1 cursor-pointer">
                <input type="radio" name="students[${studentIndex}][status]" value="absent" class="accent-red-500">
                <span class="text-xs text-red-500 font-medium">Absent</span>
            </label>
        </div>
        <button type="button" onclick="this.parentElement.remove()" class="text-red-400 hover:text-red-600">
            <i class="fa-solid fa-trash text-xs"></i>
        </button>
    `;
        container.appendChild(div);
        studentIndex++;
    }

    // Auto-populate students by group
    const groupInput = document.getElementById('group_name_input');
    let debounceTimer;

    groupInput.addEventListener('input', function() {
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(() => {
            const group = this.value.trim();
            if (group.length < 1) return;

            fetch(`get_students.php?group=${encodeURIComponent(group)}`)
                .then(response => response.json())
                .then(students => {
                    if (students.length > 0) {
                        const container = document.getElementById('studentsList');
                        container.innerHTML = '';
                        studentIndex = 0;
                        students.forEach(name => addStudent(name));
                    }
                })
                .catch(err => console.error('Error fetching students:', err));
        }, 500);
    });

    // Initial 5 students (if list is empty)
    if (document.getElementById('studentsList').children.length === 0) {
        for (let i = 0; i < 5; i++) addStudent();
    }
</script>

<?php require "header/footer.php"; ?>