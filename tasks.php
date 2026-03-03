<?php require "header/header.php"; ?>
<?php require "header/lc.php"; ?>

<div class="flex items-start"> <?php require "header/sidebar.php"; ?>

    <div class="max-w-[1640px] mx-auto flex flex-col mt-5 flex-1 ml-5 mr-5 gap-6">
        <div class="flex gap-5 flex-row">
            <section class="flex items-center gap-2 mt-5 border-2 border-[#E1E2E5] rounded-xl px-2 py-1 w-[736px]">
                <a href="group.php"><button class="px-5 py-2 text-gray-500 rounded-xl font-medium">Attendance</button></a>
                <a href="evalution.php"><button class="px-5 py-2 text-gray-800 rounded-xl">Evaluation</button></a>
                <a href="tasks.php"><button class="px-5 py-2 text-white rounded-xl bg-blue-500">Tasks</button></a>
                <a href="rating.php"><button class="px-5 py-2 text-gray-800 rounded-xl">Rating</button></a>
                <a href="exams.php"><button class="px-5 py-2 text-gray-800 rounded-xl">Exams</button></a>
                <a href="zoom.php"><button class="px-5 py-2 text-gray-800 rounded-xl">Zoom</button></a>
                <a href="https://t.me/Odilovplay"><button class="px-5 py-2 text-gray-800 rounded-xl">Help</button></a>
            </section>
            <div class="ml-16">
                <?php require 'header/group2.php'; ?>
            </div>
        </div>

        <!-- Students Section -->
        <section class="mt-10 w-[1250px] bg-[#FAFAFA] p-4 border-l-4 border-blue-500 pl-4 rounded-2xl">
            <!-- Header -->
            <div class="grid grid-cols-[220px_repeat(12,60px)] gap-2 items-center mb-4">
                <div class="font-medium text-gray-600">Students</div>
                <div class="text-center text-sm text-gray-500">1</div>
                <div class="text-center text-sm text-gray-500">2</div>
                <div class="text-center text-sm text-gray-500">3</div>
                <div class="text-center text-sm text-gray-500">4</div>
                <div class="text-center text-sm text-gray-500">5</div>
                <div class="text-center text-sm text-gray-500">6</div>
                <div class="text-center text-sm text-gray-500">7</div>
                <div class="text-center text-sm text-gray-500">8</div>
                <div class="text-center text-sm text-gray-500">9</div>
                <div class="text-center text-sm text-gray-500">10</div>
                <div class="text-center text-sm text-gray-500">11</div>
                <div class="text-center text-sm text-gray-500">12</div>
            </div>

            <!-- Student Row 1 -->
            <div class="grid grid-cols-[220px_repeat(12,60px)] gap-2 items-center mb-3">
                <div class="flex items-center gap-2">
                    <img src="./image/photo_2025-12-24_12-53-53.png" class="w-8 h-8 rounded-full cursor-pointer student-avatar">
                    <span class="text-sm font-medium">Yaxyobek Toxirov</span>
                </div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition">
                    <h1 class="grade-text font-semibold">5</h1>
                </div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition">
                    <h1 class="grade-text font-semibold">5</h1>
                </div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition">
                    <h1 class="grade-text font-semibold">5</h1>
                </div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition">
                    <h1 class="grade-text font-semibold">5</h1>
                </div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
            </div>

            <!-- Student Row 2 -->
            <div class="grid grid-cols-[220px_repeat(12,60px)] gap-2 items-center mb-3">
                <div class="flex items-center gap-2">
                    <img src="./image/Vector.svg" alt="">
                    <img src="./image/photo_2025-12-24_12-53-53.png" class="w-8 h-8 rounded-full cursor-pointer student-avatar">
                    <span class="text-sm font-medium">Yaxyobek Toxirov</span>
                </div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition">
                    <h1 class="grade-text font-semibold">5</h1>
                </div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
            </div>

            <!-- Student Row 3 -->
            <div class="grid grid-cols-[220px_repeat(12,60px)] gap-2 items-center mb-3">
                <div class="flex items-center gap-2">
                    <img src="./image/Vector.svg" alt="">
                    <img src="./image/photo_2025-12-24_12-53-53.png" class="w-8 h-8 rounded-full cursor-pointer student-avatar">
                    <span class="text-sm font-medium">Yaxyobek Toxirov</span>
                </div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition">
                    <h1 class="grade-text font-semibold">5</h1>
                </div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
            </div>

            <!-- Student Row 4 -->
            <div class="grid grid-cols-[220px_repeat(12,60px)] gap-2 items-center mb-3">
                <div class="flex items-center gap-2">
                    <img src="./image/Vector.png" alt="">
                    <img src="./image/photo_2025-12-24_12-53-53.png" class="w-8 h-8 rounded-full cursor-pointer student-avatar">
                    <span class="text-sm font-medium">Yaxyobek Toxirov</span>
                </div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition">
                    <h1 class="grade-text font-semibold">5</h1>
                </div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition">
                    <h1 class="grade-text font-semibold">5</h1>
                </div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition">
                    <h1 class="grade-text font-semibold">5</h1>
                </div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
            </div>

            <!-- Student Row 5 -->
            <div class="grid grid-cols-[220px_repeat(12,60px)] gap-2 items-center mb-3">
                <div class="flex items-center gap-2">
                    <img src="./image/photo_2025-12-24_12-53-53.png" class="w-8 h-8 rounded-full cursor-pointer student-avatar">
                    <span class="text-sm font-medium">Yaxyobek Toxirov</span>
                </div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition">
                    <h1 class="grade-text font-semibold">5</h1>
                </div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
            </div>

            <!-- Add the remaining 5 rows... -->
            <!-- Shortened version, full version should have all 10 rows -->
            <div class="grid grid-cols-[220px_repeat(12,60px)] gap-2 items-center mb-3">
                <div class="flex items-center gap-2">
                    <img src="./image/photo_2025-12-24_12-53-53.png" class="w-8 h-8 rounded-full cursor-pointer student-avatar">
                    <span class="text-sm font-medium">Yaxyobek Toxirov</span>
                </div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition">
                    <h1 class="grade-text font-semibold">5</h1>
                </div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
            </div>
            <div class="grid grid-cols-[220px_repeat(12,60px)] gap-2 items-center mb-3">
                <div class="flex items-center gap-2">
                    <img src="./image/photo_2025-12-24_12-53-53.png" class="w-8 h-8 rounded-full cursor-pointer student-avatar">
                    <span class="text-sm font-medium">Yaxyobek Toxirov</span>
                </div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition">
                    <h1 class="grade-text font-semibold">5</h1>
                </div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
            </div>
            <div class="grid grid-cols-[220px_repeat(12,60px)] gap-2 items-center mb-3">
                <div class="flex items-center gap-2">
                    <img src="./image/photo_2025-12-24_12-53-53.png" class="w-8 h-8 rounded-full cursor-pointer student-avatar">
                    <span class="text-sm font-medium">Yaxyobek Toxirov</span>
                </div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition">
                    <h1 class="grade-text font-semibold">5</h1>
                </div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
            </div>
            <div class="grid grid-cols-[220px_repeat(12,60px)] gap-2 items-center mb-3">
                <div class="flex items-center gap-2">
                    <img src="./image/photo_2025-12-24_12-53-53.png" class="w-8 h-8 rounded-full cursor-pointer student-avatar">
                    <span class="text-sm font-medium">Yaxyobek Toxirov</span>
                </div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition">
                    <h1 class="grade-text font-semibold">5</h1>
                </div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
            </div>
            <div class="grid grid-cols-[220px_repeat(12,60px)] gap-2 items-center mb-3">
                <div class="flex items-center gap-2">
                    <img src="./image/photo_2025-12-24_12-53-53.png" class="w-8 h-8 rounded-full cursor-pointer student-avatar">
                    <span class="text-sm font-medium">Yaxyobek Toxirov</span>
                </div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition">
                    <h1 class="grade-text font-semibold">5</h1>
                </div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
                <div class="grade-box w-[48px] h-[48px] border-2 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-400 transition"></div>
            </div>

        </section>
    </div>
</div>


<?php require "./header/footer.php"; ?>