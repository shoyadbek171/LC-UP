<?php
// Dashboard statistics page
require './config.php';
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}
require "header/header.php";
require "header/lc.php";

// Collect all data
$paymentsFile = 'payments_data.json';
$attendanceFile = 'attendance_data.json';
$hwFile = 'homework_data.json';
$scheduleFile = 'schedule_data.json';

$payments = file_exists($paymentsFile) ? (json_decode(file_get_contents($paymentsFile), true) ?? []) : [];
$attendance = file_exists($attendanceFile) ? (json_decode(file_get_contents($attendanceFile), true) ?? []) : [];
$homework = file_exists($hwFile) ? (json_decode(file_get_contents($hwFile), true) ?? []) : [];
$schedule = file_exists($scheduleFile) ? (json_decode(file_get_contents($scheduleFile), true) ?? []) : [];

// Statistics
$totalIncome = array_sum(array_map(fn($p) => ($p['status'] ?? '') === 'paid' ? ($p['amount'] ?? 0) : 0, $payments));
$totalDebt = array_sum(array_map(fn($p) => ($p['status'] ?? '') === 'debt' ? ($p['amount'] ?? 0) : 0, $payments));
$activeHw = count(array_filter($homework, fn($h) => ($h['status'] ?? '') === 'active'));
$totalLessons = count($schedule);

// Monthly income (12 months)
$monthlyIncome = [];
$months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
$monthsFull = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
for ($i = 0; $i < 12; $i++) {
    $monthIncome = 0;
    foreach ($payments as $p) {
        $pMonth = $p['month'] ?? '';
        if ($pMonth === $monthsFull[$i] && ($p['status'] ?? '') === 'paid') {
            $monthIncome += ($p['amount'] ?? 0);
        }
    }
    $monthlyIncome[] = $monthIncome;
}

// Weekly attendance
$weeklyAttendance = [];
$weekDays = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
for ($i = 6; $i >= 0; $i--) {
    $date = date('Y-m-d', strtotime("-$i days"));
    $present = 0;
    $absent = 0;
    foreach ($attendance as $rec) {
        if (($rec['date'] ?? '') === $date) {
            foreach (($rec['students'] ?? []) as $s) {
                if (($s['status'] ?? '') === 'present') $present++;
                else $absent++;
            }
        }
    }
    $weeklyAttendance[] = ['present' => $present, 'absent' => $absent, 'day' => date('D', strtotime($date))];
}
?>

<div class="flex items-start">
    <?php require "header/sidebar.php"; ?>

    <div class="max-w-[1340px] flex-1 flex mt-3 flex-col ml-5 gap-6 mr-5 mb-10">

        <!-- Header -->
        <div class="flex items-center justify-between mt-6">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">Dashboard</h1>
                <p class="text-gray-500 text-sm mt-1">
                    <i class="fa-regular fa-calendar mr-1"></i>
                    <?php echo date('d.m.Y, l'); ?>
                </p>
            </div>
            <a href="export.php" class="bg-gray-100 text-gray-700 px-5 py-3 rounded-xl hover:bg-gray-200 transition flex items-center gap-2">
                <i class="fa-solid fa-download"></i>
                Download Report
            </a>
        </div>

        <!-- Stat Cards -->
        <div class="grid grid-cols-4 gap-4">
            <div class="rounded-2xl p-5 text-white shadow-lg hover:scale-[1.02] transition" style="background: linear-gradient(135deg, #3b82f6, #2563eb);">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-blue-100 text-xs">Total Lessons</p>
                        <p class="text-3xl font-bold mt-1"><?php echo $totalLessons; ?></p>
                    </div>
                    <div class="bg-white/20 p-3 rounded-xl"><i class="fa-solid fa-chalkboard-user text-xl"></i></div>
                </div>
                <div class="mt-3 flex items-center text-xs text-blue-100">
                    <i class="fa-solid fa-arrow-up mr-1"></i> Weekly schedule
                </div>
            </div>
            <div class="rounded-2xl p-5 text-white shadow-lg hover:scale-[1.02] transition" style="background: linear-gradient(135deg, #10b981, #059669);">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-emerald-100 text-xs">Total Income</p>
                        <p class="text-2xl font-bold mt-1"><?php echo number_format($totalIncome / 1000); ?>k</p>
                    </div>
                    <div class="bg-white/20 p-3 rounded-xl"><i class="fa-solid fa-coins text-xl"></i></div>
                </div>
                <div class="mt-3 flex items-center text-xs text-emerald-100">
                    <i class="fa-solid fa-wallet mr-1"></i> UZS
                </div>
            </div>
            <div class="rounded-2xl p-5 text-white shadow-lg hover:scale-[1.02] transition" style="background: linear-gradient(135deg, #f97316, #ea580c);">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-orange-100 text-xs">Active Tasks</p>
                        <p class="text-3xl font-bold mt-1"><?php echo $activeHw; ?></p>
                    </div>
                    <div class="bg-white/20 p-3 rounded-xl"><i class="fa-solid fa-book text-xl"></i></div>
                </div>
                <div class="mt-3 flex items-center text-xs text-orange-100">
                    <i class="fa-solid fa-hourglass mr-1"></i> Homework
                </div>
            </div>
            <div class="rounded-2xl p-5 text-white shadow-lg hover:scale-[1.02] transition" style="background: linear-gradient(135deg, #ef4444, #dc2626);">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-red-100 text-xs">Debt</p>
                        <p class="text-2xl font-bold mt-1"><?php echo number_format($totalDebt / 1000); ?>k</p>
                    </div>
                    <div class="bg-white/20 p-3 rounded-xl"><i class="fa-solid fa-triangle-exclamation text-xl"></i></div>
                </div>
                <div class="mt-3 flex items-center text-xs text-red-100">
                    <i class="fa-solid fa-arrow-down mr-1"></i> UZS
                </div>
            </div>
        </div>

        <!-- Charts Row -->
        <div class="grid grid-cols-2 gap-6">
            <!-- Income Chart -->
            <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-100">
                <h3 class="font-bold text-gray-800 mb-4">
                    <i class="fa-solid fa-chart-line text-blue-600 mr-2"></i>
                    Monthly Income
                </h3>
                <canvas id="incomeChart" height="200"></canvas>
            </div>

            <!-- Attendance Chart -->
            <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-100">
                <h3 class="font-bold text-gray-800 mb-4">
                    <i class="fa-solid fa-chart-bar text-green-600 mr-2"></i>
                    Weekly Attendance
                </h3>
                <canvas id="attendanceChart" height="200"></canvas>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-100">
            <h3 class="font-bold text-gray-800 mb-4">
                <i class="fa-solid fa-bolt text-yellow-500 mr-2"></i>
                Quick Actions
            </h3>
            <div class="grid grid-cols-5 gap-3">
                <a href="schedule.php" class="flex flex-col items-center gap-2 p-4 bg-blue-50 rounded-xl hover:bg-blue-100 transition group">
                    <i class="fa-solid fa-calendar-days text-blue-600 text-xl group-hover:scale-110 transition"></i>
                    <span class="text-xs font-medium text-gray-700">Schedule</span>
                </a>
                <a href="attendance.php" class="flex flex-col items-center gap-2 p-4 bg-green-50 rounded-xl hover:bg-green-100 transition group">
                    <i class="fa-solid fa-clipboard-check text-green-600 text-xl group-hover:scale-110 transition"></i>
                    <span class="text-xs font-medium text-gray-700">Attendance</span>
                </a>
                <a href="homework.php" class="flex flex-col items-center gap-2 p-4 bg-orange-50 rounded-xl hover:bg-orange-100 transition group">
                    <i class="fa-solid fa-book-open text-orange-600 text-xl group-hover:scale-110 transition"></i>
                    <span class="text-xs font-medium text-gray-700">Homework</span>
                </a>
                <a href="payments.php" class="flex flex-col items-center gap-2 p-4 bg-emerald-50 rounded-xl hover:bg-emerald-100 transition group">
                    <i class="fa-solid fa-wallet text-emerald-600 text-xl group-hover:scale-110 transition"></i>
                    <span class="text-xs font-medium text-gray-700">Payments</span>
                </a>
                <a href="notifications.php" class="flex flex-col items-center gap-2 p-4 bg-purple-50 rounded-xl hover:bg-purple-100 transition group">
                    <i class="fa-solid fa-bell text-purple-600 text-xl group-hover:scale-110 transition"></i>
                    <span class="text-xs font-medium text-gray-700">Messages</span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Income Chart
    const incomeCtx = document.getElementById('incomeChart').getContext('2d');
    new Chart(incomeCtx, {
        type: 'line',
        data: {
            labels: <?php echo json_encode($months); ?>,
            datasets: [{
                label: 'Income',
                data: <?php echo json_encode($monthlyIncome); ?>,
                borderColor: '#3B82F6',
                backgroundColor: 'rgba(59,130,246,0.1)',
                borderWidth: 3,
                fill: true,
                tension: 0.4,
                pointBackgroundColor: '#3B82F6',
                pointBorderColor: '#fff',
                pointBorderWidth: 2,
                pointRadius: 5
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: '#f3f4f6'
                    },
                    ticks: {
                        callback: function(value) {
                            return (value / 1000) + 'k';
                        }
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            }
        }
    });

    // Attendance Chart
    const attCtx = document.getElementById('attendanceChart').getContext('2d');
    new Chart(attCtx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode(array_column($weeklyAttendance, 'day')); ?>,
            datasets: [{
                    label: 'Present',
                    data: <?php echo json_encode(array_column($weeklyAttendance, 'present')); ?>,
                    backgroundColor: '#10B981',
                    borderRadius: 8
                },
                {
                    label: 'Absent',
                    data: <?php echo json_encode(array_column($weeklyAttendance, 'absent')); ?>,
                    backgroundColor: '#EF4444',
                    borderRadius: 8
                }
            ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom'
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: '#f3f4f6'
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            }
        }
    });
</script>

<?php require "header/footer.php"; ?>