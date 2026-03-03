<?php
// Student progress page
require './config.php';
if (!isset($_SESSION['user_id']) || !in_array($_SESSION['role'], ['admin', 'teacher'])) {
    header('Location: dashboard.php');
    exit;
}
require "header/header.php";
require "header/lc.php";

// Data gathering
$attendanceFile = 'attendance_data.json';
$paymentsFile = 'payments_data.json';
$hwFile = 'homework_data.json';

$attendance = file_exists($attendanceFile) ? (json_decode(file_get_contents($attendanceFile), true) ?? []) : [];
$payments = file_exists($paymentsFile) ? (json_decode(file_get_contents($paymentsFile), true) ?? []) : [];
$homework = file_exists($hwFile) ? (json_decode(file_get_contents($hwFile), true) ?? []) : [];

// Collect student list (from attendance and payments)
$students = [];

// Collect students from attendance
foreach ($attendance as $record) {
    $group = $record['group'] ?? '';
    foreach (($record['students'] ?? []) as $s) {
        $name = $s['name'] ?? '';
        if (empty($name)) continue;
        $key = $name . '_' . $group;
        if (!isset($students[$key])) {
            $students[$key] = [
                'name' => $name,
                'group' => $group,
                'present' => 0,
                'absent' => 0,
                'total_attendance' => 0,
                'payments_total' => 0,
                'payments_paid' => 0,
                'payments_debt' => 0
            ];
        }
        if (($s['status'] ?? '') === 'present') {
            $students[$key]['present']++;
        } else {
            $students[$key]['absent']++;
        }
        $students[$key]['total_attendance']++;
    }
}

// Add data from payments
foreach ($payments as $p) {
    $name = $p['student_name'] ?? '';
    $group = $p['group'] ?? '';
    if (empty($name)) continue;
    $key = $name . '_' . $group;
    if (!isset($students[$key])) {
        $students[$key] = [
            'name' => $name,
            'group' => $group,
            'present' => 0,
            'absent' => 0,
            'total_attendance' => 0,
            'payments_total' => 0,
            'payments_paid' => 0,
            'payments_debt' => 0
        ];
    }
    $students[$key]['payments_total'] += ($p['amount'] ?? 0);
    if (($p['status'] ?? '') === 'paid') {
        $students[$key]['payments_paid'] += ($p['amount'] ?? 0);
    } else {
        $students[$key]['payments_debt'] += ($p['amount'] ?? 0);
    }
}

$students = array_values($students);

// Search
$search = trim($_GET['search'] ?? '');
if (!empty($search)) {
    $students = array_filter($students, function ($s) use ($search) {
        return stripos($s['name'], $search) !== false || stripos($s['group'], $search) !== false;
    });
    $students = array_values($students);
}
?>

<div class="flex items-start">
    <?php require "header/sidebar.php"; ?>

    <div class="max-w-[1340px] flex-1 flex mt-3 flex-col ml-5 gap-6 mr-5 mb-10">

        <!-- Header -->
        <div class="flex items-center justify-between mt-6">
            <div class="flex items-center gap-3">
                <div class="bg-purple-100 p-3 rounded-xl">
                    <i class="fa-solid fa-chart-pie text-purple-600 text-2xl"></i>
                </div>
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">Student Progress</h1>
                    <p class="text-gray-500 text-sm"><?php echo count($students); ?> students found</p>
                </div>
            </div>

            <!-- Search -->
            <form method="GET" class="flex items-center gap-2">
                <div class="relative">
                    <i class="fa-solid fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    <input type="text" name="search" value="<?php echo htmlspecialchars($search); ?>"
                        placeholder="Search student or group..."
                        class="pl-10 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:border-purple-500 focus:outline-none w-72">
                </div>
                <button type="submit" class="bg-purple-600 text-white px-5 py-3 rounded-xl hover:bg-purple-700 transition">
                    <i class="fa-solid fa-search"></i>
                </button>
            </form>
        </div>

        <?php if (empty($students)): ?>
            <div class="bg-white rounded-2xl shadow-sm p-12 text-center">
                <i class="fa-solid fa-user-graduate text-gray-300 text-5xl mb-4"></i>
                <h3 class="text-xl font-semibold text-gray-700 mb-2">No students found</h3>
                <p class="text-gray-500">Students will appear here when attendance or payment records are added</p>
            </div>
        <?php else: ?>

            <!-- Students Table -->
            <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
                <div class="grid grid-cols-7 gap-2 p-4 text-xs text-gray-500 font-medium bg-gray-50">
                    <div>Student</div>
                    <div>Group</div>
                    <div>Attendance</div>
                    <div>Attendance %</div>
                    <div>Paid</div>
                    <div>Debt</div>
                    <div>Overall Score</div>
                </div>

                <?php foreach ($students as $student):
                    $attendPercent = $student['total_attendance'] > 0
                        ? round(($student['present'] / $student['total_attendance']) * 100)
                        : 0;

                    // Overall score (based on attendance and payment)
                    $payPercent = $student['payments_total'] > 0
                        ? round(($student['payments_paid'] / $student['payments_total']) * 100)
                        : 0;
                    $overallScore = round(($attendPercent + $payPercent) / 2);

                    $scoreColor = $overallScore >= 80 ? 'text-green-600 bg-green-100' : ($overallScore >= 50 ? 'text-yellow-600 bg-yellow-100' : 'text-red-600 bg-red-100');
                    $barColor = $attendPercent >= 80 ? 'bg-green-500' : ($attendPercent >= 50 ? 'bg-yellow-500' : 'bg-red-500');
                ?>
                    <div class="grid grid-cols-7 gap-2 items-center p-4 border-t border-gray-100 hover:bg-gray-50 transition">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center">
                                <i class="fa-solid fa-user text-purple-600 text-sm"></i>
                            </div>
                            <span class="font-semibold text-gray-800 text-sm"><?php echo htmlspecialchars($student['name']); ?></span>
                        </div>
                        <div>
                            <span class="text-xs px-2 py-1 rounded-full bg-blue-100 text-blue-700 font-medium">
                                <?php echo htmlspecialchars($student['group']); ?>
                            </span>
                        </div>
                        <div class="text-sm text-gray-600">
                            <span class="text-green-600 font-medium"><?php echo $student['present']; ?></span> /
                            <span class="text-red-500"><?php echo $student['absent']; ?></span>
                            <span class="text-gray-400 text-xs"> days</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-full bg-gray-200 rounded-full h-2 flex-1">
                                <div class="<?php echo $barColor; ?> h-2 rounded-full transition" style="width: <?php echo $attendPercent; ?>%"></div>
                            </div>
                            <span class="text-xs font-bold <?php echo $attendPercent >= 80 ? 'text-green-600' : ($attendPercent >= 50 ? 'text-yellow-600' : 'text-red-600'); ?>">
                                <?php echo $attendPercent; ?>%
                            </span>
                        </div>
                        <div class="text-sm font-medium text-green-600">
                            <?php echo number_format($student['payments_paid']); ?>
                        </div>
                        <div class="text-sm font-medium text-red-500">
                            <?php echo number_format($student['payments_debt']); ?>
                        </div>
                        <div>
                            <span class="text-sm font-bold px-3 py-1 rounded-full <?php echo $scoreColor; ?>">
                                <?php echo $overallScore; ?>%
                            </span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php require "header/footer.php"; ?>