<?php require "header/header.php"; ?>

<?php require "header/lc.php"; ?>

<div class="flex items-start">
        <section class="rounded-3xl ml-4" >
            <div class="mt-6 text-gray-500 ml-1">
                <ul class="flex flex-col gap-4 nn p-4 rounded-xl">
                    <a href="home.php"><li class="flex cursor-pointer nn w-44 h-10 items-center gap-2 p-2 rounded-2xl transition-all">
                       <img src="./image/elements.svg">
                        <span>Home</span>
                    </li></a>
                  <a href="group.php"><li class="flex cursor-pointer nn w-44 h-10 items-center gap-2 p-2 rounded-2xl transition-all">
                       <img src="./image/elements (1).svg" class="invert opacity-30" >
                        <span>Groups</span>
                    </li></a>
                    <a href="rating.php"><li class="flex cursor-pointer nn w-44 h-10 items-center gap-2 p-2 rounded-2xl transition-all">
                       <img src="./image/all-bookmark.png" alt="">
                         <span>Rating</span>
                    </li></a>
                    <a href="records.php"><li class="flex cursor-pointer bg-blue-500 text-white nn w-44 h-10 items-center gap-2 p-2 rounded-2xl transition-all">
<i class="fa-solid fa-list-ul"></i>
                         <span>Records</span>
                    </li></a>
                    <a href="https://t.me/odilov_IT"><li class="flex cursor-pointer nn w-44 h-10 items-center gap-2 p-2 rounded-2xl transition-all">
                       <img src="./image/elements (2).svg" alt="">
                         <span>Chat</span>
                    </li></a>
                    <a href="profile.php"><li class="flex cursor-pointer nn w-44 h-10 items-center gap-2 p-2 rounded-2xl transition-all">
                       <img src="./image/elements (3).svg" alt="">
                         <span>Profile</span>
                    </li></a>
                    <a href="face-id.php"><li class="flex cursor-pointer nn w-44 h-10 items-center gap-2 p-2 rounded-2xl transition-all">
                    <svg class="w-6 text-[#A1A1A1]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"><path d="M10.801 2.57a.71.71 0 0 1-.555.838a8.78 8.78 0 0 0-6.838 6.838a.71.71 0 1 1-1.394-.283a10.2 10.2 0 0 1 7.949-7.949a.71.71 0 0 1 .838.556M2.57 13.199a.71.71 0 0 1 .838.555a8.78 8.78 0 0 0 6.838 6.838a.71.71 0 1 1-.283 1.394a10.2 10.2 0 0 1-7.948-7.949a.71.71 0 0 1 .555-.838M13.199 2.57a.71.71 0 0 1 .838-.556a10.2 10.2 0 0 1 7.949 7.949a.711.711 0 0 1-1.394.283a8.78 8.78 0 0 0-6.838-6.838a.71.71 0 0 1-.555-.838m8.231 10.629a.71.71 0 0 1 .556.838a10.2 10.2 0 0 1-7.949 7.949a.711.711 0 0 1-.283-1.394a8.78 8.78 0 0 0 6.838-6.838a.71.71 0 0 1 .838-.555"/><path d="M12 19.583a7.583 7.583 0 1 0 0-15.166a7.583 7.583 0 0 0 0 15.166m-3.06-5.044a.71.71 0 0 1 .995-.148c.59.437 1.3.69 2.065.69a3.45 3.45 0 0 0 2.065-.69a.71.71 0 1 1 .846 1.142a4.87 4.87 0 0 1-2.911.97a4.87 4.87 0 0 1-2.911-.97a.71.71 0 0 1-.148-.994m6.377-4.139c0 .688-.37 1.245-.829 1.245s-.83-.557-.83-1.245c0-.687.372-1.244.83-1.244s.83.557.83 1.244m-5.805 1.245c.458 0 .83-.557.83-1.245c0-.687-.372-1.244-.83-1.244s-.83.557-.83 1.244c0 .688.372 1.245.83 1.245"/></g></svg>
                    <span>Face-id</span>
                  </li>
              </a>
                </ul>
            </div>
        </section>
     <div class="max-w-[1640px] mx-auto flex flex-col mt-5 flex-1 ml-5 mr-5 gap-6">
        <div class="flex gap-5 flex-row">
        <section class="flex items-center gap-2 mt-5 border-2 border-[#E1E2E5] rounded-xl px-2 py-1 w-[750px]">
            <!-- Active -->
           <a href="group.php"><button class="px-5 py-2 text-white bg-blue-500 rounded-xl font-medium">Attendance</button></a>

            <!-- Inactive -->
            <a href="evalution.php"><button class="px-5 py-2 text-gray-800 rounded-xl">Evaluation</button></a>
            <a href="tasks.php"><button class="px-5 py-2 text-gray-800 rounded-xl ">Tasks</button></a>
            <a href="rating.php"><button class="px-5 py-2 text-gray-800 rounded-xl">Rating</button></a>
           <a href="exams.php"><button class="px-5 py-2 text-gray-800 rounded-xl">Exams</button></a>
            <a href="zoom.php"><button class="px-5 py-2 text-gray-800 rounded-xl">Zoom</button></a>
            <a href="https://t.me/Odilovplay"><button class="px-5 py-2 text-gray-800 rounded-xl">Help</button></a>
        </section>
        <?php require 'header/group2.php'; ?>
        </div>

        <!-- Students Section -->
<section class="grid grid-cols-2 mt-10 w-[1200px] bg-[#FAFAFA] px-6 py-5 gap-4 rounded-2xl">
  <a href="./gameplay.php">
 <div class="bg-white rounded-3xl px-8 py-6 record  flex items-center justify-between  -sm">
  
  <!-- Left -->
  <div class="flex items-center gap-4">
    <div class="w-12 h-12 bg-[#F5F5F5] rounded-xl flex items-center justify-center">
      <img
        src="./image/video-02.png"
        alt="video"
        class="w-6 h-6"
      />
    </div>

    <div class="flex flex-col">
      <span class="text-lg font-semibold text-black">Lesson 1</span>
      <span class="text-sm text-gray-500">12 tasks</span>
    </div>
  </div>

  <!-- Right -->
  <div class="w-12 h-12 rounded-full tank cursor-pointer border-4 border-[#16A34A] flex items-center justify-center">
    <div class="w-6 h-6 bg-[#16A34A]  rounded-md flex items-center justify-center">
      <i class="fa-solid fa-check text-white text-sm"></i>
    </div>
  </div>

</div>
</a>
<a href="./gameplay.php">
 <div class="bg-white rounded-3xl px-8 py-6 flex record items-center justify-between  -sm">
  
  <!-- Left -->
  <div class="flex items-center gap-4">
    <div class="w-12 h-12 bg-[#F5F5F5] rounded-xl flex items-center justify-center">
      <img
        src="./image/video-02.png"
        alt="video"
        class="w-6 h-6"
      />
    </div>

    <div class="flex flex-col">
      <span class="text-lg font-semibold text-black">Lesson 1</span>
      <span class="text-sm text-gray-500">12 mashq</span>
    </div>
  </div>

  <!-- Right -->
  <div class="w-12 h-12 tank cursor-pointer rounded-full border-4 border-[#16A34A] flex items-center justify-center">
    <div class="w-6 h-6 bg-[#16A34A] rounded-md flex items-center justify-center">
      <i class="fa-solid fa-check text-white text-sm"></i>
    </div>
  </div>

</div></a>
<a href="./gameplay.php">
 <div class="bg-white rounded-3xl px-8 py-6 flex record items-center justify-between  -sm">
  
  <!-- Left -->
  <div class="flex items-center gap-4">
    <div class="w-12 h-12 bg-[#F5F5F5] rounded-xl flex items-center justify-center">
      <img
        src="./image/pen-tool-03.png"
        alt="video"
        class="w-6 h-6"
      />
    </div>

    <div class="flex flex-col">
      <span class="text-lg font-semibold text-black">Lesson 1</span>
      <span class="text-sm text-gray-500">12 mashq</span>
    </div>
  </div>

  <!-- Right : Progress -->
  <div class="relative tank cursor-pointer w-14 h-14">
    <svg class="w-full h-full" viewBox="0 0 80 80">
      <!-- background -->
      <circle
        cx="40"
        cy="40"
        r="32"
        stroke="#E5E5E5"
        stroke-width="6"
        fill="none"
      />

      <!-- progress (20%) -->
      <circle
        cx="40"
        cy="40"
        r="32"
        stroke="#FF0000"
        stroke-width="6"
        fill="none"
        stroke-linecap="round"
        stroke-dasharray="201"
        stroke-dashoffset="161"
        transform="rotate(-90 40 40)"
      />
    </svg>

    <!-- text -->
    <span class="absolute inset-0 flex items-center justify-center text-xs text-gray-500">
      20%
    </span>
  </div>

</div></a>
<a href="./gameplay.php">
  <div class="bg-white rounded-3xl px-8 py-6 flex record items-center justify-between  -sm">
  
  <!-- Left -->
  <div class="flex items-center gap-4">
    <div class="w-12 h-12 bg-[#F5F5F5] rounded-xl flex items-center justify-center">
      <img
        src="./image/pen-tool-03.png"
        alt="video"
        class="w-6 h-6"
      />
    </div>

    <div class="flex flex-col">
      <span class="text-lg font-semibold text-black">Lesson 1</span>
      <span class="text-sm text-gray-500">12 mashq</span>
    </div>
  </div>

  <!-- Right : Progress -->
  <div class="relative tank cursor-pointer w-14 h-14">
    <svg class="w-full h-full" viewBox="0 0 80 80">
      <!-- background -->
      <circle
        cx="40"
        cy="40"
        r="32"
        stroke="#E5E5E5"
        stroke-width="6"
        fill="none"
      />

      <!-- progress (20%) -->
      <circle
        cx="40"
        cy="40"
        r="32"
        stroke="#FF0000"
        stroke-width="6"
        fill="none"
        stroke-linecap="round"
        stroke-dasharray="201"
        stroke-dashoffset="161"
        transform="rotate(-90 40 40)"
      />
    </svg>

    <!-- text -->
    <span class="absolute inset-0 flex items-center justify-center text-xs text-gray-500">
      20%
    </span>
  </div>

</div></a>
<a href="./gameplay.php">
  <div class="bg-white rounded-3xl px-8 py-6 flex record items-center justify-between  -sm">
  
  <!-- Left -->
  <div class="flex items-center gap-4">
    <div class="w-12 h-12 bg-[#F5F5F5] rounded-xl flex items-center justify-center">
      <img
        src="./image/pen-tool-03.png"
        alt="video"
        class="w-6 h-6"
      />
    </div>

    <div class="flex flex-col">
      <span class="text-lg font-semibold text-black">Lesson 1</span>
      <span class="text-sm text-gray-500">12 mashq</span>
    </div>
  </div>

  <!-- Right : Progress -->
  <div class="relative tank cursor-pointer w-14 h-14">
    <svg class="w-full h-full" viewBox="0 0 80 80">
      <!-- background -->
      <circle
        cx="40"
        cy="40"
        r="32"
        stroke="#E5E5E5"
        stroke-width="6"
        fill="none"
      />

      <!-- progress (20%) -->
      <circle
        cx="40"
        cy="40"
        r="32"
        stroke="#FFC107"
        stroke-width="6"
        fill="none"
        stroke-linecap="round"
        stroke-dasharray="201"
        stroke-dashoffset="100"
        transform="rotate(-90 40 40)"
      />
    </svg>

    <!-- text -->
    <span class="absolute inset-0 flex items-center justify-center text-xs text-gray-500">
      50%
    </span>
  </div>

</div></a>
 <div class="bg-white rounded-3xl px-8 py-6 flex record items-center justify-between  -sm">
  
  <!-- Left -->
  <div class="flex items-center gap-4">
    <div class="w-12 h-12 bg-[#F5F5F5] rounded-xl flex items-center justify-center">
      <img
        src="./image/pen-tool-03.png"
        alt="video"
        class="w-6 h-6"
      />
    </div>

    <div class="flex flex-col">
      <span class="text-lg font-semibold text-black">Lesson 1</span>
      <span class="text-sm text-gray-500">12 mashq</span>
    </div>
  </div>

  <!-- Right : Progress -->
  <div class="relative tank cursor-pointer w-14 h-14">
    <svg class="w-full h-full" viewBox="0 0 80 80">
      <!-- background -->
      <circle
        cx="40"
        cy="40"
        r="32"
        stroke="#E5E5E5"
        stroke-width="6"
        fill="none"
      />

      <!-- progress (20%) -->
      <circle
        cx="40"
        cy="40"
        r="32"
        stroke="#FF0000"
        stroke-width="6"
        fill="none"
        stroke-linecap="round"
        stroke-dasharray="201"
        stroke-dashoffset="161"
        transform="rotate(-90 40 40)"
      />
    </svg>

    <!-- text -->
    <span class="absolute inset-0 flex items-center justify-center text-xs text-gray-500">
      20%
    </span>
  </div>

</div>
<a href="./gameplay.php">
 <div class="bg-white rounded-3xl px-8 py-6 flex record items-center justify-between  -sm">
  
  <!-- Left -->
  <div class="flex items-center gap-4">
    <div class="w-12 h-12 bg-[#F5F5F5] rounded-xl flex items-center justify-center">
      <img
        src="./image/book-open-02.png"
        alt="video"
        class="w-6 h-6"
      />
    </div>

    <div class="flex flex-col">
      <span class="text-lg font-semibold text-black">Lesson 1</span>
      <span class="text-sm text-gray-500">12 mashq</span>
    </div>
  </div>

  <!-- Right -->
    <div class="relative w-14 h-14 tank cursor-pointer">
    <svg class="w-full h-full" viewBox="0 0 80 80">
      <!-- background -->
      <circle
        cx="40"
        cy="40"
        r="32"
        stroke="#E5E5E5"
        stroke-width="6"
        fill="none"
      />

      <!-- progress (20%) -->
      <circle
        cx="40"
        cy="40"
        r="32"
        stroke="#049741"
        stroke-width="6"
        fill="none"
        stroke-linecap="round"
        stroke-dasharray="201"
        stroke-dashoffset="40"
        transform="rotate(-90 40 40)"
      />
    </svg>

    <!-- text -->
    <span class="absolute inset-0 flex items-center justify-center text-xs text-gray-500">
      70%
    </span>
  </div>

</div></a>
 <div class="bg-white rounded-3xl px-8 py-6 flex items-center record justify-between  -sm">
  
  <!-- Left -->
  <div class="flex items-center gap-4">
    <div class="w-12 h-12 bg-[#F5F5F5] rounded-xl flex items-center justify-center">
      <img
        src="./image/headphones.png"
        alt="video"
        class="w-6 h-6"
      />
    </div>

    <div class="flex flex-col">
      <span class="text-lg font-semibold text-black">Lesson 1</span>
      <span class="text-sm text-gray-500">12 mashq</span>
    </div>
  </div>

  <!-- Right -->
   <div class="w-12 h-12 tank cursor-pointer rounded-full border-4 border-[#E0E0E0] flex items-center justify-center">
    <div class="w-6 h-6 rounded-md flex items-center justify-center">
      <img src="./image/Frame 33668.png" alt="">
    </div>
  </div>
</div>
<a href="./gameplay.php">
 <div class="bg-white rounded-3xl px-8 py-6 flex record items-center justify-between  -sm">
  
  <!-- Left -->
  <div class="flex items-center gap-4">
    <div class="w-12 h-12 bg-[#F5F5F5] rounded-xl flex items-center justify-center">
      <img
        src="./image/headphones.png"
        alt="video"
        class="w-6 h-6"
      />
    </div>

    <div class="flex flex-col">
      <span class="text-lg font-semibold text-black">Lesson 1</span>
      <span class="text-sm text-gray-500">12 mashq</span>
    </div>
  </div>

  <!-- Right -->
  <div class="w-12 tank cursor-pointer h-12 rounded-full border-4 border-[#E0E0E0] flex items-center justify-center">
    <div class="w-6 h-6 rounded-md flex items-center justify-center">
      <img src="./image/Frame 33668.png" alt="">
    </div>
  </div>

</div>
</a>
 <div class="bg-white rounded-3xl px-8 py-6 flex record items-center justify-between  -sm">
  
  <!-- Left -->
  <div class="flex items-center gap-4">
    <div class="w-12 h-12 bg-[#F5F5F5] rounded-xl flex items-center justify-center">
      <img
        src="./image/headphones.png"
        alt="video"
        class="w-6 h-6"
      />
    </div>

    <div class="flex flex-col">
      <span class="text-lg font-semibold text-black">Lesson 1</span>
      <span class="text-sm text-gray-500">12 mashq</span>
    </div>
  </div>

  <!-- Right -->
  <div class="w-12 h-12 tank cursor-pointer rounded-full border-4 border-[#E0E0E0] flex items-center justify-center">
    <div class="w-6 h-6 rounded-md flex items-center justify-center">
      <img src="./image/Frame 33668.png" alt="">
    </div>
  </div>

</div>
<a href="./gameplay.php">
 <div class="bg-white rounded-3xl px-8 py-6 flex record items-center justify-between  -sm">
  
  <!-- Left -->
  <div class="flex items-center gap-4">
    <div class="w-12 h-12 bg-[#F5F5F5] rounded-xl flex items-center justify-center">
      <img
        src="./image/headphones.png"
        alt="video"
        class="w-6 h-6"
      />
    </div>

    <div class="flex flex-col">
      <span class="text-lg font-semibold text-black">Lesson 1</span>
      <span class="text-sm text-gray-500">12 mashq</span>
    </div>
  </div>

  <!-- Right -->
  <div class="w-12 h-12 rounded-full tank cursor-pointer border-4 border-[#E0E0E0] flex items-center justify-center">
    <div class="w-6 h-6 rounded-md flex items-center justify-center">
      <img src="./image/Frame 33668.png" alt="">
    </div>
  </div>

</div>
</a>
<a href="./gameplay.php">
 <div class="bg-white rounded-3xl px-8 py-6 flex record items-center justify-between  -sm">
  
  <!-- Left -->
  <div class="flex items-center gap-4">
    <div class="w-12 h-12 bg-[#F5F5F5] rounded-xl flex items-center justify-center">
      <img
        src="./image/elements.png"
        alt="video"
        class="w-6 h-6"
      />
    </div>

    <div class="flex flex-col">
      <span class="text-lg font-semibold text-black">Lesson 1</span>
      <span class="text-sm text-gray-500">12 mashq</span>
    </div>
  </div>

  <!-- Right -->
  <div class="w-12 h-12 tank cursor-pointer rounded-full border-4 border-[#E0E0E0] flex items-center justify-center">
    <div class="w-6 h-6 rounded-md flex items-center justify-center">
      <img src="./image/Frame 33668.png" alt="">
    </div>
  </div>

</div></a>

</section>

<?php require "header/footer.php" ?>