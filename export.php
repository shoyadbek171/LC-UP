<?php
// Export - Download data in CSV format
require './config.php';
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}

if ($_SESSION['role'] !== 'admin') {
    header('Location: dashboard.php');
    exit;
}

$type = $_GET['type'] ?? '';

if ($type === 'payments') {
    $file = 'payments_data.json';
    $data = file_exists($file) ? (json_decode(file_get_contents($file), true) ?? []) : [];

    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename="payments_' . date('Y-m-d') . '.csv"');

    $output = fopen('php://output', 'w');
    fprintf($output, chr(0xEF) . chr(0xBB) . chr(0xBF)); // UTF-8 BOM
    fputcsv($output, ['Student', 'Group', 'Month', 'Amount', 'Type', 'Status', 'Date']);

    foreach ($data as $row) {
        fputcsv($output, [
            $row['student_name'] ?? '',
            $row['group'] ?? '',
            $row['month'] ?? '',
            $row['amount'] ?? 0,
            ($row['type'] ?? '') === 'cash' ? 'Cash' : 'Card',
            ($row['status'] ?? '') === 'paid' ? 'Paid' : 'Debt',
            $row['date'] ?? ''
        ]);
    }
    fclose($output);
    exit;
}

if ($type === 'attendance') {
    $file = 'attendance_data.json';
    $data = file_exists($file) ? (json_decode(file_get_contents($file), true) ?? []) : [];

    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename="attendance_' . date('Y-m-d') . '.csv"');

    $output = fopen('php://output', 'w');
    fprintf($output, chr(0xEF) . chr(0xBB) . chr(0xBF));
    fputcsv($output, ['Date', 'Group', 'Student', 'Status', 'Teacher']);

    foreach ($data as $record) {
        foreach (($record['students'] ?? []) as $student) {
            fputcsv($output, [
                $record['date'] ?? '',
                $record['group'] ?? '',
                $student['name'] ?? '',
                ($student['status'] ?? '') === 'present' ? 'Present' : 'Absent',
                $record['teacher'] ?? ''
            ]);
        }
    }
    fclose($output);
    exit;
}

if ($type === 'homework') {
    $file = 'homework_data.json';
    $data = file_exists($file) ? (json_decode(file_get_contents($file), true) ?? []) : [];

    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename="homework_' . date('Y-m-d') . '.csv"');

    $output = fopen('php://output', 'w');
    fprintf($output, chr(0xEF) . chr(0xBB) . chr(0xBF));
    fputcsv($output, ['Title', 'Description', 'Group', 'Subject', 'Deadline', 'Priority', 'Status', 'Teacher']);

    foreach ($data as $row) {
        $priorityLabels = ['high' => 'High', 'medium' => 'Medium', 'low' => 'Low'];
        fputcsv($output, [
            $row['title'] ?? '',
            $row['description'] ?? '',
            $row['group'] ?? '',
            $row['subject'] ?? '',
            $row['deadline'] ?? '',
            $priorityLabels[$row['priority'] ?? 'medium'],
            ($row['status'] ?? '') === 'active' ? 'Active' : 'Completed',
            $row['teacher'] ?? ''
        ]);
    }
    fclose($output);
    exit;
}

// Export page - if type is not selected
require "header/header.php";
require "header/lc.php";
?>

<div class="flex items-start">
    <?php require "header/sidebar.php"; ?>

    <div class="max-w-[1340px] flex-1 flex mt-3 flex-col ml-5 gap-6 mr-5 mb-10">
        <div class="flex items-center gap-3 mt-6">
            <div class="bg-indigo-100 p-3 rounded-xl">
                <i class="fa-solid fa-file-export text-indigo-600 text-2xl"></i>
            </div>
            <div>
                <h1 class="text-2xl font-bold text-gray-800">Export Data</h1>
                <p class="text-gray-500 text-sm">Download in CSV format (opens in Excel)</p>
            </div>
        </div>

        <div class="grid grid-cols-3 gap-6">
            <!-- Payments Export -->
            <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition">
                <div class="bg-emerald-100 w-16 h-16 rounded-2xl flex items-center justify-center mb-4">
                    <i class="fa-solid fa-wallet text-emerald-600 text-2xl"></i>
                </div>
                <h3 class="font-bold text-gray-800 text-lg mb-2">Payments</h3>
                <p class="text-sm text-gray-500 mb-4">All payment records: student, group, amount, status</p>
                <a href="export.php?type=payments"
                    class="w-full bg-emerald-600 text-white py-3 rounded-xl font-medium hover:bg-emerald-700 transition flex items-center justify-center gap-2">
                    <i class="fa-solid fa-download"></i>
                    Download CSV
                </a>
            </div>

            <!-- Attendance Export -->
            <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition">
                <div class="bg-green-100 w-16 h-16 rounded-2xl flex items-center justify-center mb-4">
                    <i class="fa-solid fa-clipboard-check text-green-600 text-2xl"></i>
                </div>
                <h3 class="font-bold text-gray-800 text-lg mb-2">Attendance</h3>
                <p class="text-sm text-gray-500 mb-4">All attendance records: date, group, student, status</p>
                <a href="export.php?type=attendance"
                    class="w-full bg-green-600 text-white py-3 rounded-xl font-medium hover:bg-green-700 transition flex items-center justify-center gap-2">
                    <i class="fa-solid fa-download"></i>
                    Download CSV
                </a>
            </div>

            <!-- Homework Export -->
            <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition">
                <div class="bg-orange-100 w-16 h-16 rounded-2xl flex items-center justify-center mb-4">
                    <i class="fa-solid fa-book-open text-orange-600 text-2xl"></i>
                </div>
                <h3 class="font-bold text-gray-800 text-lg mb-2">Homework</h3>
                <p class="text-sm text-gray-500 mb-4">All tasks: title, group, deadline, status</p>
                <a href="export.php?type=homework"
                    class="w-full bg-orange-500 text-white py-3 rounded-xl font-medium hover:bg-orange-600 transition flex items-center justify-center gap-2">
                    <i class="fa-solid fa-download"></i>
                    Download CSV
                </a>
            </div>
        </div>

        <!-- Info -->
        <div class="bg-blue-50 border border-blue-200 rounded-xl p-4 flex items-start gap-3">
            <i class="fa-solid fa-info-circle text-blue-600 mt-0.5"></i>
            <div>
                <p class="text-sm font-medium text-blue-800">About CSV File</p>
                <p class="text-xs text-blue-600 mt-1">
                    You can open downloaded files in Microsoft Excel, Google Sheets, or LibreOffice Calc.
                    The file is saved in UTF-8 format.
                </p>
            </div>
        </div>
    </div>
</div>

<?php require "header/footer.php"; ?>