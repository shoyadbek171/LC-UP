<?php
// Sidebar component - qayta ishlatish uchun
$currentPage = basename($_SERVER['PHP_SELF']);
$userRole = $_SESSION['role'] ?? 'student'; // Default to student if not set

$sidebarItems = [
    ['url' => 'home.php', 'label' => 'Home', 'icon' => 'fa-solid fa-house', 'roles' => ['admin', 'teacher', 'student']],
    ['url' => 'dashboard.php', 'label' => 'Dashboard', 'icon' => 'fa-solid fa-chart-pie', 'roles' => ['admin', 'teacher', 'student']],
    ['url' => 'students.php', 'label' => 'Students', 'icon' => 'fa-solid fa-user-graduate', 'roles' => ['admin', 'teacher']],
    ['url' => 'group.php', 'label' => 'Groups', 'icon' => 'fa-solid fa-users', 'roles' => ['admin', 'teacher']],
    ['url' => 'employee.php', 'label' => 'Employees', 'icon' => 'fa-solid fa-user-tie', 'roles' => ['admin']],
    ['url' => 'rating.php', 'label' => 'Rating', 'icon' => 'fa-solid fa-star', 'roles' => ['admin', 'teacher', 'student']],
    ['url' => 'records.php', 'label' => 'Records', 'icon' => 'fa-solid fa-list-ul', 'roles' => ['admin', 'teacher']],
    ['url' => 'schedule.php', 'label' => 'Schedule', 'icon' => 'fa-solid fa-calendar-days', 'roles' => ['admin', 'teacher', 'student']],
    ['url' => 'attendance.php', 'label' => 'Attendance', 'icon' => 'fa-solid fa-clipboard-check', 'roles' => ['admin', 'teacher']],
    ['url' => 'homework.php', 'label' => 'Homework', 'icon' => 'fa-solid fa-book-open', 'roles' => ['admin', 'teacher', 'student']],
    ['url' => 'payments.php', 'label' => 'Payments', 'icon' => 'fa-solid fa-wallet', 'roles' => ['admin']],
    ['url' => 'progress.php', 'label' => 'Progress', 'icon' => 'fa-solid fa-chart-line', 'roles' => ['admin', 'teacher']],
    ['url' => 'export.php', 'label' => 'Export', 'icon' => 'fa-solid fa-download', 'roles' => ['admin']],
    ['url' => 'https://t.me/odilov_IT', 'label' => 'Chat', 'icon' => 'fa-solid fa-comment-dots', 'roles' => ['admin', 'teacher', 'student']],
    ['url' => 'profile.php', 'label' => 'Profile', 'icon' => 'fa-solid fa-user', 'roles' => ['admin', 'teacher', 'student']],
    ['url' => 'face-id.php', 'label' => 'Face-ID', 'icon' => 'fa-solid fa-face-smile', 'roles' => ['admin', 'teacher']],
];

// Role bo'yicha filter qilish
$filteredItems = array_filter($sidebarItems, function ($item) use ($userRole) {
    return in_array($userRole, $item['roles']);
});
?>
<section class="rounded-3xl ml-4 sidebar-section">
    <div class="mt-6 text-gray-500 ml-1">
        <ul class="flex flex-col gap-2 nn p-2 rounded-xl">
            <?php foreach ($filteredItems as $item):
                $isExternal = str_starts_with($item['url'], 'http');
                $isActive = !$isExternal && $currentPage === $item['url'];
                $activeClass = $isActive ? 'bg-blue-500 text-white' : 'hover:bg-blue-50 hover:text-blue-600';
                $target = $isExternal ? 'target="_blank"' : '';
            ?>
                <a href="<?php echo $item['url']; ?>" <?php echo $target; ?>>
                    <li class="flex cursor-pointer nn w-44 h-10 items-center gap-3 px-3 rounded-xl transition-all <?php echo $activeClass; ?>">
                        <i class="<?php echo $item['icon']; ?> w-5 text-center"></i>
                        <span class="text-sm font-medium"><?php echo $item['label']; ?></span>
                    </li>
                </a>
            <?php endforeach; ?>
        </ul>
    </div>
</section>