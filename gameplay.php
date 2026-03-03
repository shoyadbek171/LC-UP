<?php require "./header/header.php" ?>
<section class="mt-6 ml-5 mr-5">
    <header class="bg-[#FAFAFA] p-4 rounded-2xl flex justify-between items-center  -sm">

        <!-- Close icon -->
        <div class="flex items-center gap-70">
            <a href="./records.php"> <i class="fa-solid fa-xmark cursor-pointer text-2xl text-gray-600 hover:text-black"></i></a>

            <div><button class="p-2 bg-[#0B7BE3] h-[48px] text-white ml-40 rounded-2xl w-30"><span>1/30</span></button></div>
        </div>
        <!-- Profile section -->
        <div class="flex items-center p-2 bg-[#FFFFFF] rounded-2xl gap-4">
            <a href="profile.php">
                <img
                    src="./image/photo_2025-12-24_12-53-53.png"
                    class="w-12 h-12 rounded-full object-cover border"
                    alt="Profile">
            </a>

            <div class="flex flex-col">
                <span class="text-sm font-semibold text-gray-800">
                    Shoyadbek Odilov
                </span>
            </div>
        </div>

    </header>
</section>
<section id="from" class="bg-[#fafafa] mt-10 ml-120 rounded-2xl p-6 w-[852px]  -sm">

    <!-- Title -->
    <div class="flex items-center gap-3 mb-6">
        <div class="bg-[#0B7BE3] p-3 rounded-xl">
            <i class="fa-solid fa-volume-high text-white"></i>
        </div>
        <div>
            <p class="text-sm text-[#0B7BE3]">Select the correct image</p>
            <h2 class="text-xl font-semibold">Forest</h2>
        </div>
    </div>

    <!-- Cards -->
    <div class="flex gap-6">

        <!-- Grass -->
        <div class="w-40 h-48 bg-white rounded-xl border flex flex-col items-center justify-center cursor-pointer hover: ">
            <img src="./image/3d0b4f326a71fb95ac4cf7bee995e8947298359b.png" class="w-[169px] mb-3" alt="">
            <p class="text-sm">Grass</p>
        </div>

        <!-- Mushuk (selected blue) -->
        <div class="w-40 h-48 bg-blue-50 rounded-xl border-2 border-blue-500 flex flex-col items-center justify-center cursor-pointer">
            <img src="./image/f86e7b6069988289d5208b14126144ccb45a1cde (1).png" class="w-[169px] mb-3" alt="">
            <p class="text-sm font-medium">Cat</p>
        </div>

        <!-- Daraxt (wrong – red) -->
        <div class="w-40 h-48 bg-red-50 rounded-xl border-2 border-red-500 flex flex-col items-center justify-center cursor-pointer">
            <img src="./image/3c280ba97ed18957fc4c78e0273793033265c550 (1).png" class="w-[169px] mb-3" alt="">
            <p class="text-sm font-medium">Tree</p>
        </div>

        <!-- O‘rmon -->
        <div class="w-40 h-48 bg-white rounded-xl border flex flex-col items-center justify-center cursor-pointer hover: ">
            <img src="./image/2748ff4a62519750d9bea5562fb1a5cc56c84e81.png" class="w-[169px] mb-3" alt="">
            <p class="text-sm">Forest</p>
        </div>

    </div>
</section>
<footer class="bg-[#fafafa] flex items-center justify-between rounded-2xl p-6  -sm mt-90">

    <!-- Left: result -->
    <div class="flex items-center gap-4 cursor-pointer" id="reportBtn">
        <div class="bg-[#F12E31] w-16 text-center bg-opacity-70 p-4 rounded-xl">
            <i class="fa-regular fa-flag text-center text-white text-xl"></i>
        </div>
        <p class="text-gray-800 font-medium">
            Correct answer count: <span class="font-semibold">15/30</span>
        </p>
    </div>

    <!-- Right: buttons -->
    <div class="flex gap-4">
        <a href="records.php">
            <button
                class="flex items-center justify-center gap-3 w-[241px] h-[60px] bg-white border rounded-xl hover:bg-gray-50 transition">
                <i class="fa-solid fa-arrow-left"></i>
                <span class="font-medium">Back</span>
            </button>
        </a>
        <a href="newplay.php">
            <button
                class="flex items-center justify-center gap-3 w-[241px] h-[60px] bg-white border rounded-xl hover:bg-gray-50 transition">
                <span class="font-medium">Next</span>
                <i class="fa-solid fa-arrow-right"></i>
            </button>
        </a>
    </div>

</footer>

<!-- Report Modal -->
<div id="reportModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-2xl p-6 w-96  -xl">
        <!-- Header -->
        <div class="flex items-center justify-between mb-4">
            <div class="flex gap-2">
                <i class="fa-solid fa-flag bg-[#D5353C1F] p-2 rounded-md     text-[#D5353C]"></i>
                <h3 class="text-lg font-semibold text-gray-800">Submit a complaint</h3>
            </div>

            <button id="closeReportModal" class="text-gray-400 hover:text-gray-600">
                <i class="fa-solid fa-xmark text-xl"></i>
            </button>
        </div>

        <!-- Info text -->
        <p class="text-sm text-gray-500 mb-4"><span class="text-[#F12E31]">*</span> Give feedback</p>

        <!-- Textarea -->
        <textarea
            id="reportMessage"
            rows="4"
            class="w-full border-2 border-gray-200 rounded-xl p-3 focus:outline-none focus:border-blue-500 resize-none mb-4"
            placeholder="Please, write down the problem..."></textarea>

        <!-- Buttons -->
        <div class="flex gap-3 justify-end">
            <button
                id="cancelReport"
                class="px-6 py-2 bg-[#F5F5F5] w-1/2 text-gray-700 rounded-xl hover:bg-gray-200 transition">
                Back
            </button>
            <button
                id="sendReport"
                class="px-6 py-2 bg-[#0B7BE3] w-1/2 text-white rounded-xl hover:bg-blue-600 transition">
                Send
            </button>
        </div>
    </div>
</div>

<?php require "./header/footer.php" ?>