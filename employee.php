<?php
require './config.php';
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}

if ($_SESSION['role'] !== 'admin') {
    header('Location: dashboard.php');
    exit;
}

require './header/header.php';
require './header/lc.php';
?>
<div class="flex">
    <?php require "header/sidebar.php"; ?>
    <main class="flex-1 p-8">

        <!-- TOP BAR -->
        <div class="flex items-center justify-between mb-6">

            <div class="flex items-center gap-4">

                <!-- DATE -->
                <div class="flex items-center gap-2 bg-white border-2 justify-center border-[#E5E7EB] w-[163.00000416944982px] text-center rounded-2xl p-1">
                    <img src="./image/calendar.svg" class="w-5">
                    <div class="leading-tight">
                        <p class="text-xs text-[#9CA3AF]">Today</p>
                        <p class="text-sm font-semibold text-[#111827]">19.02.2026</p>
                    </div>
                </div>

            </div>

            <!-- SEARCH -->
            <!-- SEARCH FULL -->
            <div class="flex items-center">
                <!-- Search input container -->
                <div class="flex gap-6 items-center w-[320px] pl-28 bg-white rounded-2xl px-4 py-2.5">
                    <img src="./image/photo_2025-12-24_12-53-53.png" class="w-11 h-11 rounded-xl" alt="">
                    <h1>Shoyadbek</h1>
                </div>

                <!-- Settings button -->
                <button id="searchE" class="flex items-center justify-center w-11 h-11 bg-[#F2F2F7] border border-gray-200 rounded-2xl text-[#686E7E] hover:bg-gray-50 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-width="1.5">
                            <circle cx="12" cy="12" r="3" />
                            <path d="M13.765 2.152C13.398 2 12.932 2 12 2s-1.398 0-1.765.152a2 2 0 0 0-1.083 1.083c-.092.223-.129.484-.143.863a1.62 1.62 0 0 1-.79 1.353a1.62 1.62 0 0 1-1.567.008c-.336-.178-.579-.276-.82-.308a2 2 0 0 0-1.478.396C4.04 5.79 3.806 6.193 3.34 7s-.7 1.21-.751 1.605a2 2 0 0 0 .396 1.479c.148.192.355.353.676.555c.473.297.777.803.777 1.361s-.304 1.064-.777 1.36c-.321.203-.529.364-.676.556a2 2 0 0 0-.396 1.479c.052.394.285.798.75 1.605c.467.807.7 1.21 1.015 1.453a2 2 0 0 0 1.479.396c.24-.032.483-.13.819-.308a1.62 1.62 0 0 1 1.567.008c.483.28.77.795.79 1.353c.014.38.05.64.143.863a2 2 0 0 0 1.083 1.083C10.602 22 11.068 22 12 22s1.398 0 1.765-.152a2 2 0 0 0 1.083-1.083c.092-.223.129-.483.143-.863c.02-.558.307-1.074.79-1.353a1.62 1.62 0 0 1 1.567-.008c.336.178.579.276.819.308a2 2 0 0 0 1.479-.396c.315-.242.548-.646 1.014-1.453s.7-1.21.751-1.605a2 2 0 0 0-.396-1.479c-.148-.192-.355-.353-.676-.555A1.62 1.62 0 0 1 19.562 12c0-.558.304-1.064.777-1.36c.321-.203.529-.364.676-.556a2 2 0 0 0 .396-1.479c-.052-.394-.285-.798-.75-1.605c-.467-.807-.7-1.21-1.015-1.453a2 2 0 0 0-1.479-.396c-.24.032-.483.13-.819-.308a1.62 1.62 0 0 1-1.566-.008a1.62 1.62 0 0 1-.79-1.353c-.014-.38-.05-.64-.143-.863a2 2 0 0 0-1.083-1.083Z" />
                        </g>
                    </svg>
                </button>
            </div>
        </div>

        <section class="mt-10 grid grid-cols-3 gap-80">
            <div class="w-[300px] rounded-3xl items-center text-center px-12 py-6 border-2 border-[#CBD5E1] ">
                <h1 class="font-medium text-3xl">10:30</h1>
                <h3 class="text-[#00274A4D] font-medium mt-4">How early did you arrive in general?</h3>
            </div>
            <div class="w-[300px] rounded-3xl items-center text-center px-12 py-6 border-2 border-[#CBD5E1] ">
                <h1 class="font-medium text-3xl">10:30</h1>
                <h3 class="text-[#00274A4D] font-medium mt-4">How early did you arrive in general?</h3>
            </div>
            <div class="w-[300px] rounded-3xl ml-6 items-center text-center px-12 py-6 border-2 border-[#CBD5E1] ">
                <h1 class="font-medium text-3xl">10:30</h1>
                <h3 class="text-[#00274A4D] font-medium mt-4">How early did you arrive in general?</h3>
            </div>
        </section>
        <section class="mt-6">
            <div class="bg-[#FAFAFA] rounded-xl p-4 shadow-sm overflow-hidden">

                <!-- HEADER -->
                <div class="grid grid-cols-4 bg-[#FFFFFF] rounded-2xl p-6 text-sm text-[#9CA3AF] font-medium border-b border-[#F2F2F7]">
                    <span class="ml-4">Date</span>
                    <span>Come</span>
                    <span class="ml-10">Left</span>
                </div>


                <!-- ROW -->
                <div class="grid bg-[#ffffff] rounded-2xl mt-2 grid-cols-[220px_1fr_1fr_180px] items-center px-6 py-4 border-b border-[#F2F2F7]">

                    <!-- USER -->
                    <div class="flex items-center gap-3">
                        <span class="font-medium text-[#808AA7]">16 Jan 2026</span>
                    </div>

                    <!--  Come -->
                    <div class="flex items-center gap-3 ml-36">
                        <div class="flex items-center gap-2 border-2 border-[#E5E7EB] rounded-xl h-8 p-2 w-20 bg-white">
                            <img src="./image/camera.svg" class="w-4">
                            <span class="font-semibold text-sm">9:00</span>
                        </div>
                        <span class="text-red-500 text-sm font-medium">-20 min</span>
                    </div>

                    <!-- Left -->
                    <div class="flex items-center gap-3">
                        <div class="flex items-center gap-2 border-2 border-[#E5E7EB] rounded-xl p-2 h-8 w-20 bg-white">
                            <img src="./image/icon.svg" class="w-4">
                            <span class="font-semibold text-sm">9:00</span>
                        </div>
                        <span class="text-green-600 text-sm font-medium">+20 min</span>
                    </div>

                </div>


                <!-- ROW 2 -->
                <div class="grid bg-[#ffffff] rounded-2xl mt-2 grid-cols-[220px_1fr_1fr_180px] items-center px-6 py-4">

                    <div class="flex items-center gap-3">
                        <span class="font-medium text-[#808AA7]">16 Jan 2026</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="flex items-center gap-2 border-2 ml-36 border-[#E5E7EB] rounded-xl h-8 p-2 w-20 bg-white">
                            <img src="./image/camera.svg" class="w-4">
                            <hr>
                            <span class="font-semibold text-sm">9:00</span>
                        </div>
                        <span class="text-red-500 text-sm font-medium">-20 min</span>
                    </div>

                    <!-- Left -->
                    <div class="flex items-center gap-3">
                        <div class="flex items-center gap-2 border-2 border-[#E5E7EB] rounded-xl p-2 h-8 w-20 bg-white">
                            <img src="./image/icon.svg" class="w-4">
                            <span class="font-semibold text-sm">9:00</span>
                        </div>
                        <span class="text-green-600 text-sm font-medium">+20 min</span>
                    </div>

                </div>
                <div class="grid bg-[#ffffff] rounded-2xl mt-2 grid-cols-[220px_1fr_1fr_180px] items-center px-6 py-4">

                    <div class="flex items-center gap-3">
                        <span class="font-medium text-[#808AA7]">16 Jan 2026</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="flex items-center gap-2 border-2 ml-36 border-[#E5E7EB] rounded-xl h-8 p-2 w-20 bg-white">
                            <img src="./image/camera.svg" class="w-4">
                            <hr>
                            <span class="font-semibold text-sm">9:00</span>
                        </div>
                        <span class="text-red-500 text-sm font-medium">-20 min</span>
                    </div>

                    <!-- Left -->
                    <div class="flex items-center gap-3">
                        <div class="flex items-center gap-2 border-2 border-[#E5E7EB] rounded-xl p-2 h-8 w-20 bg-white">
                            <img src="./image/icon.svg" class="w-4">
                            <span class="font-semibold text-sm">9:00</span>
                        </div>
                        <span class="text-green-600 text-sm font-medium">+20 min</span>
                    </div>

                </div>

        </section>

        <section
            id="Emp"
            class="fixed inset-0 z-50 hidden items-center justify-center bg-black bg-opacity-50">
            <!-- Modal box -->
            <div class="bg-white rounded-3xl p-8 w-[914px] relative shadow-2xl">

                <!-- Header -->
                <div class="flex justify-between items-center mb-8">
                    <h1 class="text-2xl font-semibold text-gray-800">Settings</h1>
                    <button id="EmpBack" class="text-gray-400 hover:text-gray-600 cursor-pointer transition">
                        <i class="fa-solid fa-xmark cursor-pointer text-gray-500 hover:text-black border border-[#E1E2E5] rounded-xl p-2"></i>
                    </button>
                </div>

                <div class="bg-[#FAFAFA] rounded-xl p-4 shadow-sm overflow-hidden">

                    <!-- HEADER -->
                    <div class="grid grid-cols-3 bg-[#FFFFFF] rounded-2xl p-6 text-sm text-[#9CA3AF] font-medium border-b border-[#F2F2F7]">
                        <span class="ml-4">Every day</span>
                        <span>Come</span>
                        <span class="ml-10">Left</span>
                    </div>


                    <!-- ROW -->
                    <div class=" grid bg-[#ffffff] rounded-2xl mt-2 grid-cols-[220px_1fr_1fr_180px] items-center px-6 py-4 border-b border-[#F2F2F7]">

                        <!-- USER -->
                        <div class="flex items-center gap-3">
                            <span class="font-medium text-[#808AA7]">Monday</span>
                        </div>
                        <style>
                            /* Chrome, Safari, Edge */
                            input[type="time"]::-webkit-calendar-picker-indicator {
                                display: none;
                                -webkit-appearance: none;
                                appearance: none;
                            }

                            /* Firefox */
                            input[type="time"] {
                                -moz-appearance: textfield;
                            }
                        </style>
                        <!--  Come -->
                        <input type="time" class="w-24 pl-8 ml-4 px-3 py-1.5 border border-[#E5E7EB] rounded-xl text-sm text-center focus:outline-none focus:ring-2 focus:ring-blue-400 bg-white">

                        <!-- Left -->
                        <input type="time" class="w-24 pl-6 px-3  ml-48 py-1.5 border border-[#E5E7EB] rounded-xl text-sm text-center focus:outline-none focus:ring-2 focus:ring-blue-400 bg-white">

                    </div>


                    <!-- ROW 2 -->
                    <div class="grid bg-[#ffffff] rounded-2xl mt-2 grid-cols-[220px_1fr_1fr_180px] items-center px-6 py-4">

                        <div class="flex items-center gap-3">
                            <span class="font-medium text-[#808AA7]">Tuesday</span>
                        </div>

                        <div class="flex items-center gap-3">
                            <input type="time" class="w-24 pl-6 px-3 ml-4 py-1.5 border border-[#E5E7EB] rounded-xl text-sm text-center focus:outline-none focus:ring-2 focus:ring-blue-400 bg-white">
                        </div>

                        <!-- Left -->
                        <input type="time" class="w-24 pl-6 px-3 ml-48 py-1.5 border border-[#E5E7EB] rounded-xl text-sm text-center focus:outline-none focus:ring-2 focus:ring-blue-400 bg-white">

                    </div>
                    <div class="grid bg-[#ffffff] rounded-2xl mt-2 grid-cols-[220px_1fr_1fr_180px] items-center px-6 py-4">

                        <div class="flex items-center gap-3">
                            <span class="font-medium text-[#808AA7]">Wednesday</span>
                        </div>

                        <input type="time" class="w-24 pl-6 px-3 py-1.5 ml-4 border border-[#E5E7EB] rounded-xl text-sm text-center focus:outline-none focus:ring-2 focus:ring-blue-400 bg-white">

                        <!-- Left -->
                        <input type="time" class="w-24 pl-6 px-3 ml-48 py-1.5 border border-[#E5E7EB] rounded-xl text-sm text-center focus:outline-none focus:ring-2 focus:ring-blue-400 bg-white">

                    </div>
                    <div class="grid bg-[#ffffff] rounded-2xl mt-2 grid-cols-[220px_1fr_1fr_180px] items-center px-6 py-4">

                        <div class="flex items-center gap-3">
                            <span class="font-medium text-[#808AA7]">Thursday</span>
                        </div>
                        <input type="time" class="w-24 px-3 pl-6 py-1.5 ml-4 border border-[#E5E7EB] rounded-xl text-sm text-center focus:outline-none focus:ring-2 focus:ring-blue-400 bg-white">

                        <!-- Left -->
                        <input type="time" class="w-24 pl-6 px-3  py-1.5 ml-48 border border-[#E5E7EB] rounded-xl text-sm text-center focus:outline-none focus:ring-2 focus:ring-blue-400 bg-white">
                    </div>
                    <div class="grid bg-[#ffffff] rounded-2xl mt-2  grid-cols-[220px_1fr_1fr_180px] items-center px-6 py-4">

                        <div class="flex items-center gap-3">
                            <span class="font-medium text-[#808AA7]">Friday</span>
                        </div>

                        <input type="time" class="w-24 px-3 pl-6 ml-4 py-1.5 border border-[#E5E7EB] rounded-xl text-sm text-center focus:outline-none focus:ring-2 focus:ring-blue-400 bg-white">

                        <!-- Left -->
                        <input type="time" class="w-24 px-3 pl-6 ml-48 py-1.5 border border-[#E5E7EB] rounded-xl text-sm text-center focus:outline-none focus:ring-2 focus:ring-blue-400 bg-white">

                    </div>
                    <div class="grid bg-[#ffffff] rounded-2xl mt-2 grid-cols-[220px_1fr_1fr_180px] items-center px-6 py-4">

                        <div class="flex items-center gap-3">
                            <span class="font-medium text-[#808AA7]">Saturday</span>
                        </div>

                        <input type="time" class="w-24 px-3 pl-6 ml-4 py-1.5 border border-[#E5E7EB] rounded-xl text-sm text-center focus:outline-none focus:ring-2 focus:ring-blue-400 bg-white">

                        <!-- Left -->
                        <input type="time" class="w-24 px-3 pl-6 ml-48 py-1.5 border border-[#E5E7EB] rounded-xl text-sm text-center focus:outline-none focus:ring-2 focus:ring-blue-400 bg-white">

                    </div>
                    <div class="grid bg-[#ffffff] rounded-2xl mt-2 grid-cols-[220px_1fr_1fr_180px] items-center px-6 py-4">

                        <div class="flex items-center gap-3">
                            <span class="font-medium text-[#808AA7]">Sunday</span>
                        </div>

                        <input type="time" class="w-24 px-3 py-1.5 ml-4 pl-6 border border-[#E5E7EB] rounded-xl text-sm text-center focus:outline-none focus:ring-2 focus:ring-blue-400 bg-white">

                        <!-- Left -->
                        <input type="time" class="w-24 pl-6 ml-48 px-3 py-1.5 border border-[#E5E7EB] rounded-xl text-sm text-center focus:outline-none focus:ring-2 focus:ring-blue-400 bg-white">
                    </div>



                </div>
                <!-- Bottom buttons -->
                <div class="flex items-center justify-end gap-4 mt-10">
                    <button id="bob" class="px-14 py-3 bg-[#F2F2F7] text-gray-700 rounded-2xl font-medium hover:bg-gray-200 transition">
                        Cancel
                    </button>
                    <button id="embS" class="px-14 py-3 bg-[#0B7BE3] text-white rounded-2xl font-medium hover:bg-[#0066D6] transition">
                        Save
                    </button>
                </div>
        </section>
    </main>
</div>

<?php require './header/footer.php'; ?>