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

require "header/header.php";
?>

<?php require "header/lc.php"; ?>

<div class="flex items-start"> <?php require "header/sidebar.php"; ?>
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
                class="w-6 h-6" />
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
                class="w-6 h-6" />
            </div>

            <div class="flex flex-col">
              <span class="text-lg font-semibold text-black">Lesson 1</span>
              <span class="text-sm text-gray-500">12 tasks</span>
            </div>
          </div>

          <!-- Right -->
          <div class="w-12 h-12 tank cursor-pointer rounded-full border-4 border-[#16A34A] flex items-center justify-center">
            <div class="w-6 h-6 bg-[#16A34A] rounded-md flex items-center justify-center">
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
                src="./image/pen-tool-03.png"
                alt="video"
                class="w-6 h-6" />
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
                fill="none" />

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
                transform="rotate(-90 40 40)" />
            </svg>

            <!-- text -->
            <span class="absolute inset-0 flex items-center justify-center text-xs text-gray-500">
              20%
            </span>
          </div>

        </div>
      </a>
      <a href="./gameplay.php">
        <div class="bg-white rounded-3xl px-8 py-6 flex record items-center justify-between  -sm">

          <!-- Left -->
          <div class="flex items-center gap-4">
            <div class="w-12 h-12 bg-[#F5F5F5] rounded-xl flex items-center justify-center">
              <img
                src="./image/pen-tool-03.png"
                alt="video"
                class="w-6 h-6" />
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
                fill="none" />

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
                transform="rotate(-90 40 40)" />
            </svg>

            <!-- text -->
            <span class="absolute inset-0 flex items-center justify-center text-xs text-gray-500">
              20%
            </span>
          </div>

        </div>
      </a>
      <a href="./gameplay.php">
        <div class="bg-white rounded-3xl px-8 py-6 flex record items-center justify-between  -sm">

          <!-- Left -->
          <div class="flex items-center gap-4">
            <div class="w-12 h-12 bg-[#F5F5F5] rounded-xl flex items-center justify-center">
              <img
                src="./image/pen-tool-03.png"
                alt="video"
                class="w-6 h-6" />
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
                fill="none" />

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
                transform="rotate(-90 40 40)" />
            </svg>

            <!-- text -->
            <span class="absolute inset-0 flex items-center justify-center text-xs text-gray-500">
              50%
            </span>
          </div>

        </div>
      </a>
      <div class="bg-white rounded-3xl px-8 py-6 flex record items-center justify-between  -sm">

        <!-- Left -->
        <div class="flex items-center gap-4">
          <div class="w-12 h-12 bg-[#F5F5F5] rounded-xl flex items-center justify-center">
            <img
              src="./image/pen-tool-03.png"
              alt="video"
              class="w-6 h-6" />
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
              fill="none" />

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
              transform="rotate(-90 40 40)" />
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
                class="w-6 h-6" />
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
                fill="none" />

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
                transform="rotate(-90 40 40)" />
            </svg>

            <!-- text -->
            <span class="absolute inset-0 flex items-center justify-center text-xs text-gray-500">
              70%
            </span>
          </div>

        </div>
      </a>
      <div class="bg-white rounded-3xl px-8 py-6 flex items-center record justify-between  -sm">

        <!-- Left -->
        <div class="flex items-center gap-4">
          <div class="w-12 h-12 bg-[#F5F5F5] rounded-xl flex items-center justify-center">
            <img
              src="./image/headphones.png"
              alt="video"
              class="w-6 h-6" />
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
                class="w-6 h-6" />
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
              class="w-6 h-6" />
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
                class="w-6 h-6" />
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
                class="w-6 h-6" />
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
      </a>

    </section>

    <?php require "header/footer.php" ?>