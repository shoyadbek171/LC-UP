<?php
require './config.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}
// Get user data
$userName = $_SESSION['user_name'];
$userRole = $_SESSION['role'] ?? 'student';
?>
<?php require "header/header.php"; ?>
<?php require "header/lc.php"; ?>

<div class="flex items-start">
    <?php require "header/sidebar.php"; ?>

    <div class="max-w-[1340px] flex-1 flex mt-3 flex-col ml-5 gap-6 mr-5">

        <section class="p-4 w-full bg-[#FAFAFA] mt-6 rounded-2xl flex flex-row gap-4 overflow-x-auto no-scrollbar">
            <div class="flex gap-4 min-w-max">
                <img src="./image/story (2).png" class=" -md w-20 h-15 border-2 border-blue-500 p-0.5 object-cover rounded-xl hover:scale-105 transition-transform cursor-pointer">
                <img src="./image/story (1).png" class=" -md w-20 h-15 border-2 border-blue-500 p-0.5 object-cover rounded-xl hover:scale-105 transition-transform cursor-pointer">
                <img src="./image/image 13.png" class=" -md w-20 h-15 border-2 border-blue-500 p-0.5 object-cover rounded-xl hover:scale-105 transition-transform cursor-pointer">
                <img src="./image/story (1).png" class=" -md w-20 h-15 border-2 border-blue-500 p-0.5 object-cover rounded-xl hover:scale-105 transition-transform cursor-pointer">
                <img src="./image/story (2).png" class=" -md w-20 h-15 border-2 border-blue-500 p-0.5 object-cover rounded-xl hover:scale-105 transition-transform cursor-pointer">
                <img src="./image/story (1).png" class=" -md w-20 h-15 border-2 border-blue-500 p-0.5 object-cover rounded-xl hover:scale-105 transition-transform cursor-pointer">
                <img src="./image/image 13.png" class=" -md w-20 h-15 border-2 border-blue-500 p-0.5 object-cover rounded-xl hover:scale-105 transition-transform cursor-pointer">
                <img src="./image/story (1).png" class=" -md w-20 h-15 border-2 border-blue-500 p-0.5 object-cover rounded-xl hover:scale-105 transition-transform cursor-pointer">
                <img src="./image/image 13.png" class=" -md w-20 h-15 border-2 border-blue-500 p-0.5 object-cover rounded-xl hover:scale-105 transition-transform cursor-pointer">
                <img src="./image/story (1).png" class=" -md w-20 h-15 border-2 border-blue-500 p-0.5 object-cover rounded-xl hover:scale-105 transition-transform cursor-pointer">
                <img src="./image/image 13.png" class=" -md w-20 h-15 border-2 border-blue-500 p-0.5 object-cover rounded-xl hover:scale-105 transition-transform cursor-pointer">
                <img src="./image/story (1).png" class=" -md w-20 h-15 border-2 border-blue-500 p-0.5 object-cover rounded-xl hover:scale-105 transition-transform cursor-pointer">
                <img src="./image/story (2).png" class=" -md w-20 h-15 border-2 border-blue-500 p-0.5 object-cover rounded-xl hover:scale-105 transition-transform cursor-pointer">
            </div>
        </section>

        <section class="grid grid-cols-2 gap-5">
            <div class="bg-[#FAFAFA] p-5 rounded-3xl  -sm flex justify-between items-center border border-gray-100">
                <div>
                    <p class="text-xs text-gray-400 font-medium">Rating</p>
                    <h1 class="text-2xl font-bold text-gray-800">12th</h1>
                </div>
                <img src="./image/image-d2E4v7g51TmwSQg2ReSaW4fkv80sBI 1.svg" class="w-26 h-26 object-contain" alt="Rank">
            </div>

            <div class="bg-[#FAFAFA] p-5 rounded-3xl  -sm flex justify-between items-center border border-gray-100">

                <!-- Icon + text-->
                <div class="flex items-center gap-4">
                    <img src="./image/Color-Blind--Streamline-Ultimate (2).svg" class="w-8 h-8" alt="icon">
                    <div class="flex flex-col">
                        <p class="text-xs text-gray-400 font-medium">Statue</p>
                        <h1 class="text-xl font-bold text-gray-800">*****</h1>
                    </div>
                </div>

                <img
                    src="./image/1586c333b78031b330f7250d03ba0ce121573835.png"
                    class="w-24 h-24 object-contain"
                    alt="Wallet">
            </div>

        </section>

        <div class="flex items-center mt-6 justify-between mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Groups</h2>
            <div class="flex border-2 border-gray-200 p-1 rounded-xl">
                <button class="px-4 py-1 text-sm font-medium rounded-lg">Today</button>
                <button class="px-4 py-1 text-sm font-medium rounded-lg">Even</button>
                <button class="px-4 py-1 bg-blue-600 text-white  -sm text-sm font-medium rounded-lg">Odd</button>
            </div>
        </div>
        <section class="p-6 bg-[#FAFAFA] rounded-3xl  -sm">

            <div class="w-full">
                <div class="grid grid-cols-4 items-center bg-white p-4 rounded-2xl mb-2  transition-colors cursor-pointer">
                    <div class="flex items-center gap-3  text-gray-600 ">
                        Group name
                    </div>
                    <div class="text-gray-600">Level</div>
                    <div class="text-gray-600">Students count</div>
                    <div class="text-gray-600">Room</div>
                </div>

                <div class="grid grid-cols-4 items-center bg-white p-4 rounded-2xl mb-2 transition-colors cursor-pointer">
                    <div class="flex items-center gap-3 font-semibold text-[#000000]">
                        <img src="./image/arrow-up-right.svg" alt="arrow-up-right" class="">
                        <p class="hover:underline cursor-pointer hover:text-[#0B7BE3]"> A25</p>
                    </div>
                    <div class="text-gray-600">Beginner</div>
                    <div class="text-gray-600">25</div>
                    <div class="text-gray-600">3th</div>
                </div>
                <div class="grid grid-cols-4 items-center bg-white p-4 rounded-2xl mb-2 transition-colors cursor-pointer">
                    <div class="flex items-center gap-3 font-semibold text-[#000000]">
                        <img src="./image/arrow-up-right.svg" alt="arrow-up-right">
                        <p class="hover:underline cursor-pointer hover:text-[#0B7BE3]"> A25</p>
                    </div>
                    <div class="text-gray-600">Beginner</div>
                    <div class="text-gray-600">25</div>
                    <div class="text-gray-600">3th</div>
                </div>
                <div class="grid grid-cols-4 items-center bg-white p-4 rounded-2xl mb-2 transition-colors cursor-pointer">
                    <div class="flex items-center gap-3 font-semibold text-[#000000]">
                        <img src="./image/arrow-up-right.svg" alt="arrow-up-right">
                        <p class="hover:underline cursor-pointer hover:text-[#0B7BE3]"> A25</p>
                    </div>
                    <div class="text-gray-600">Beginner</div>
                    <div class="text-gray-600">25</div>
                    <div class="text-gray-600">3th</div>
                </div>
                <div class="grid grid-cols-4 items-center bg-white p-4 rounded-2xl mb-2  transition-colors cursor-pointer">
                    <div class="flex items-center gap-3 font-semibold text-[#000000]">
                        <img src="./image/arrow-up-right.svg" alt="arrow-up-right">
                        <p class="hover:underline cursor-pointer hover:text-[#0B7BE3]"> A25</p>
                    </div>
                    <div class="text-gray-600">Beginner</div>
                    <div class="text-gray-600">25</div>
                    <div class="text-gray-600">3th</div>
                </div>
                <div class="grid grid-cols-4 items-center bg-white p-4 rounded-2xl mb-2 transition-colors cursor-pointer">
                    <div class="flex items-center gap-3 font-semibold text-[#000000]">
                        <img src="./image/arrow-up-right.svg" alt="arrow-up-right">
                        <p class="hover:underline cursor-pointer hover:text-[#0B7BE3]"> A25</p>
                    </div>
                    <div class="text-gray-600">Beginner</div>
                    <div class="text-gray-600">25</div>
                    <div class="text-gray-600">3th</div>
                </div>
                <div class="grid grid-cols-4 items-center bg-white p-4 rounded-2xl mb-2 transition-colors cursor-pointer">
                    <div class="flex items-center gap-3 font-semibold text-[#000000]">
                        <img src="./image/arrow-up-right.svg" alt="arrow-up-right">
                        <p class="hover:underline cursor-pointer hover:text-[#0B7BE3]"> A25</p>
                    </div>
                    <div class="text-gray-600">Beginner</div>
                    <div class="text-gray-600">25</div>
                    <div class="text-gray-600">3th</div>
                </div>
            </div>
        </section>
        <div class="flex items-center mt-6 justify-between mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Teachers</h2>
            <div class="flex border-2 border-gray-200 gap-3 p-1 rounded-xl">
                <span class="text-gray-400 self-center ml-2"><i class="fa-solid fa-search"></i></span>
                <input type="text" name="search" id="search" placeholder="Search" class="border-none outline-none">
                <img src="./image/Frame 2087328743.png" alt="filter">
            </div>
        </div>
        <section class="p-6 bg-[#FAFAFA] rounded-3xl  -sm">

            <div class="w-full">
                <div class="grid grid-cols-4 pb-4 px-4 text-gray-400 text-sm font-medium">
                    <div>Student name</div>
                    <div>Level</div>
                    <div>Age</div>
                    <div>Subject</div>
                </div>

                <div class="grid grid-cols-4 items-center bg-white p-4 rounded-2xl mb-2 transition-colors cursor-pointer">
                    <div class="flex items-center gap-3 font-semibold text-[#000000]">
                        <img src="./image/arrow-up-right.svg" alt="arrow-up-right">
                        <p class="hover:underline cursor-pointer hover:text-[#0B7BE3]">Shoyadbek</p>
                    </div>
                    <div class="text-gray-600">Expert</div>
                    <div class="text-gray-600">25</div>
                    <div class="text-gray-600">Math</div>
                </div>
                <div class="grid grid-cols-4 items-center bg-white p-4 rounded-2xl mb-2 transition-colors cursor-pointer">
                    <div class="flex items-center gap-3 font-semibold text-[#000000]">
                        <img src="./image/arrow-up-right.svg" class="hover:outline-2 hover:outline-blue-800" alt="arrow-up-right">
                        <p class="hover:underline cursor-pointer hover:text-[#0B7BE3]">Shoyadbek</p>
                    </div>
                    <div class="text-gray-600">Expert</div>
                    <div class="text-gray-600">25</div>
                    <div class="text-gray-600">Math</div>
                </div>
                <div class="grid grid-cols-4 items-center bg-white p-4 rounded-2xl mb-2 transition-colors cursor-pointer">
                    <div class="flex items-center gap-3 font-semibold text-[#000000]">
                        <img src="./image/arrow-up-right.svg" alt="arrow-up-right">
                        <p class="hover:underline cursor-pointer hover:text-[#0B7BE3]">Shoyadbek</p>
                    </div>
                    <div class="text-gray-600">Expert</div>
                    <div class="text-gray-600">25</div>
                    <div class="text-gray-600">Math</div>
                </div>
                <div class="grid grid-cols-4 items-center bg-white p-4 rounded-2xl mb-2 transition-colors cursor-pointer">
                    <div class="flex items-center gap-3 font-semibold text-[#000000]">
                        <img src="./image/arrow-up-right.svg" alt="arrow-up-right">
                        <p class="hover:underline cursor-pointer hover:text-[#0B7BE3]">Shoyadbek</p>
                    </div>
                    <div class="text-gray-600">Expert</div>
                    <div class="text-gray-600">25</div>
                    <div class="text-gray-600">Math</div>
                </div>
                <div class="grid grid-cols-4 items-center bg-white p-4 rounded-2xl mb-2 transition-colors cursor-pointer">
                    <div class="flex items-center gap-3 font-semibold text-[#000000]">
                        <img src="./image/arrow-up-right.svg" alt="arrow-up-right">
                        <p class="hover:underline cursor-pointer hover:text-[#0B7BE3]">Shoyadbek</p>
                    </div>
                    <div class="text-gray-600">Expert</div>
                    <div class="text-gray-600">25</div>
                    <div class="text-gray-600">Math</div>
                </div>
                <div class="grid grid-cols-4 items-center bg-white p-4 rounded-2xl mb-2 transition-colors cursor-pointer">
                    <div class="flex items-center gap-3 font-semibold text-[#000000]">
                        <img src="./image/arrow-up-right.svg" alt="arrow-up-right">
                        <p class="hover:underline cursor-pointer hover:text-[#0B7BE3]">Shoyadbek</p>
                    </div>
                    <div class="text-gray-600">Expert</div>
                    <div class="text-gray-600">25</div>
                    <div class="text-gray-600">Math</div>
                </div>
            </div>
        </section>
    </div>
    <?php require "header/footer.php"; ?>