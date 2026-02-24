<?php require "header/header.php"; ?>
<?php require "header/lc.php"; ?>
        
<div class="flex items-start">
    <section class="rounded-3xl ml-4">
        <div class="mt-6 text-gray-500 ml-1">
            <ul class="flex flex-col gap-4 nn p-4 rounded-xl">
                <a href="home.php"><li class="flex cursor-pointer nn w-44 h-10 items-center gap-2 p-2 rounded-2xl hover:bg-blue-500 hover:text-white transition-all">
                   <img src="./image/elements.svg">
                    <span>Home</span>
                </li></a>
              <a href="group.php"><li class="flex cursor-pointer nn w-44 h-10 items-center bg-blue-500 text-white gap-2 p-2 rounded-xl transition-all">
                   <svg class="w-6 text-[#FFFFFF]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="currentColor"><path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0a3.75 3.75 0 0 1-7.5 0m7.5 3a3 3 0 1 1 6 0a3 3 0 0 1-6 0m-13.5 0a3 3 0 1 1 6 0a3 3 0 0 1-6 0m4.06 5.368A6.75 6.75 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498a.75.75 0 0 1-.372.568A12.7 12.7 0 0 1 12 21.75a12.7 12.7 0 0 1-6.337-1.684a.75.75 0 0 1-.372-.568a6.8 6.8 0 0 1 1.019-4.38" clip-rule="evenodd"/><path d="m5.082 14.254l-.036.055a8.3 8.3 0 0 0-1.271 5.08a9.7 9.7 0 0 1-1.765-.44l-.115-.04a.56.56 0 0 1-.373-.487l-.01-.121Q1.5 18.15 1.5 18a3.75 3.75 0 0 1 3.582-3.746m15.144 5.135a8.3 8.3 0 0 0-1.308-5.135a3.75 3.75 0 0 1 3.57 4.047l-.01.121a.56.56 0 0 1-.373.486l-.115.04q-.851.302-1.764.441"/></g></svg>
                    <span>Groups</span>
                </li></a>
                <a href="rating.php"><li class="flex cursor-pointer nn w-44 h-10 items-center gap-2 p-2 rounded-2xl transition-all">
                   <img src="./image/all-bookmark.png" class="" alt="">
                     <span>Rating</span>
                </li></a>
                <a href="records.php"><li class="flex cursor-pointer nn w-44 h-10 items-center gap-2 p-2 rounded-2xl transition-all">
                    <i class="fa-solid fa-list-ul"></i>
                     <span>Records</span>
                </li></a>
                <a href="https://t.me/odilov_IT"><li class="flex cursor-pointer nn w-44 h-10 items-center gap-2 p-2 rounded-2xl transition-all">
                   <img src="./image/elements (2).svg" class="" alt="">
                     <span>Chat</span>
                </li></a>
                <a href="profile.php"><li class="flex cursor-pointer nn w-44 h-10 items-center gap-2 p-2 rounded-2xl transition-all">
                   <img src="./image/elements (3).svg" class="" alt="">
                     <span>Profile</span>
                </li></a>
                <a href="./lcup2/face-id.php"><li class="flex cursor-pointer nn w-44 h-10 items-center gap-2 p-2 rounded-2xl transition-all">
                   <svg class="w-6 text-[#A1A1A1]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"><path d="M10.801 2.57a.71.71 0 0 1-.555.838a8.78 8.78 0 0 0-6.838 6.838a.71.71 0 1 1-1.394-.283a10.2 10.2 0 0 1 7.949-7.949a.71.71 0 0 1 .838.556M2.57 13.199a.71.71 0 0 1 .838.555a8.78 8.78 0 0 0 6.838 6.838a.71.71 0 1 1-.283 1.394a10.2 10.2 0 0 1-7.948-7.949a.71.71 0 0 1 .555-.838M13.199 2.57a.71.71 0 0 1 .838-.556a10.2 10.2 0 0 1 7.949 7.949a.711.711 0 0 1-1.394.283a8.78 8.78 0 0 0-6.838-6.838a.71.71 0 0 1-.555-.838m8.231 10.629a.71.71 0 0 1 .556.838a10.2 10.2 0 0 1-7.949 7.949a.711.711 0 0 1-.283-1.394a8.78 8.78 0 0 0 6.838-6.838a.71.71 0 0 1 .838-.555"/><path d="M12 19.583a7.583 7.583 0 1 0 0-15.166a7.583 7.583 0 0 0 0 15.166m-3.06-5.044a.71.71 0 0 1 .995-.148c.59.437 1.3.69 2.065.69a3.45 3.45 0 0 0 2.065-.69a.71.71 0 1 1 .846 1.142a4.87 4.87 0 0 1-2.911.97a4.87 4.87 0 0 1-2.911-.97a.71.71 0 0 1-.148-.994m6.377-4.139c0 .688-.37 1.245-.829 1.245s-.83-.557-.83-1.245c0-.687.372-1.244.83-1.244s.83.557.83 1.244m-5.805 1.245c.458 0 .83-.557.83-1.245c0-.687-.372-1.244-.83-1.244s-.83.557-.83 1.244c0 .688.372 1.245.83 1.245"/></g></svg>
                     <span>Face-id</span>
                </li></a>
            </ul>
        </div>
    </section>

    <div class="max-w-[1640px] mx-auto flex flex-col mt-5 flex-1 ml-5 mr-5 gap-6">
        <div class="flex gap-5 flex-row">
            <section class="flex items-center gap-2 mt-5 border-2 border-[#E1E2E5] rounded-xl px-2 py-1 w-[736px]">
                <a href="group.php"><button class="px-5 py-2 text-gray-500 rounded-xl font-medium">Attendance</button></a>
                <a href="evalution.php"><button class="px-5 py-2 bg-blue-500 text-white rounded-xl">Evaluation</button></a>
                <a href="tasks.php"><button class="px-5 py-2  rounded-xl text-gray-800 ">Tasks</button></a>
                <a href="rating.php"><button class="px-5 py-2 text-gray-800 rounded-xl">Rating</button></a>
                <a href="exams.php"><button class="px-5 py-2 text-gray-800 rounded-xl">Exams</button></a>
                <a href="zoom.php"><button class="px-5 py-2 text-gray-800 rounded-xl">Zoom</button></a>
                <a href="https://t.me/Odilovplay"><button class="px-5 py-2 text-gray-800 rounded-xl">Help</button></a>
            </section>
            <div class="ml-16" >
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
            <!-- I've shortened it, in the full version, all 10 rows should be -->
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