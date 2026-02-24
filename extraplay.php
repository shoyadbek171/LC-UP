<?php require "./header/header.php" ?>
<section class="bg-[#fafafa]">
<section class="mt-6 ml-5 mr-5">
    <header class="bg-[#ffff] p-4 rounded-2xl flex justify-between items-center  -sm">
    
    <!-- Close icon -->
     <div class="flex items-center gap-3 w-full">
        <a href="./records.php">
            <i class="fa-solid fa-xmark cursor-pointer text-2xl text-gray-600 hover:text-black"></i>
        </a>

        <div class="flex-1 flex ml-[440px]">
            <button class="px-6 py-3 bg-[#0B7BE3] text-white rounded-3xl font-medium min-w-[525px]">
                <span>4/5</span>
            </button>
        </div>
        
 <!-- Spacer for centering -->
    </div>
    
    <!-- Profile section -->
    <div class="flex items-center p-2 w-[242px] bg-[#FFFFFF] rounded-xl gap-3">
        <a href="profile.php">
            <img 
                src="./image/photo_2025-12-24_12-53-53.png" 
                class="w-10 h-10 rounded-full object-cover border"
                alt="Profile"
            >
        </a>

        <div class="flex flex-col">
            <span class="text-sm font-medium text-gray-800">
                Shoyadbek Odilov
            </span>
        </div>
    </div>

</header>

<section class="mt-10 rounded-2xl ml-80 p-6">
    <div class="max-w-[600px] ml-80 mt-10">
    <h1 class="mb-6 font-bold text-xl text-gray-800">Find words</h1>
<div class="flex flex-wrap -mx-2">
    
    <!-- Row 1 -->
    <div class="w-1/2 px-2 mb-3">
        <div class="border-2 border-gray-200 py-3 text-center rounded-2xl text-gray-400 font-medium bg-white">forest</div>
    </div>
    <div class="w-1/2 px-2 mb-3">
        <div class="border-2 border-gray-200 py-3 text-center rounded-2xl text-gray-400 font-medium bg-white">daraxt</div>
    </div>

    <!-- Row 2 -->
    <div class="w-1/2 px-2 mb-3">
        <div class="border-2 border-gray-200 py-3 text-center rounded-2xl text-gray-400 font-medium bg-white">tree</div>
    </div>
    <div class="w-1/2 px-2 mb-3">
        <div class="border-2 border-gray-200 py-3 text-center rounded-2xl text-gray-400 font-medium bg-white">O'rmon</div>
    </div>

    <!-- Row 3 - Incorrect (Red) -->
    <div class="w-1/2 px-2 mb-3">
        <div class="border-2 border-[#F12E31] bg-[#F12E311F] py-3 text-center rounded-2xl text-gray-800 font-medium">leaf</div>
    </div>
    <div class="w-1/2 px-2 mb-3">
        <div class="border-2 border-[#F12E31] bg-[#F12E311F] py-3 text-center rounded-2xl text-gray-800 font-medium">gul</div>
    </div>

    <!-- Row 4 - Mixed -->
    <div class="w-1/2 px-2 mb-3">
        <div class="border-2 border-[#049741] bg-[#0497411F] py-3 text-center rounded-2xl text-gray-800 font-medium">share</div>
    </div>
    <div class="w-1/2 px-2 mb-3">
        <div class="border-2 border-gray-200 py-3 text-center rounded-2xl text-gray-800 font-medium bg-white hover:border-blue-400 cursor-pointer transition">barg</div>
    </div>

    <!-- Row 5 - Mixed -->
    <div class="w-1/2 px-2 mb-3">
        <div class="border-2 border-gray-200 py-3 text-center rounded-2xl text-gray-400 font-medium bg-white">flower</div>
    </div>
    <div class="w-1/2 px-2 mb-3">
        <div class="border-2 border-[#049741] bg-[#0497411F] py-3 text-center rounded-2xl text-gray-800 font-medium">ulashmoq</div>
    </div>

    <!-- Row 6 -->
    <div class="w-1/2 px-2 mb-3">
        <div class="border-2 border-gray-200 py-3 text-center rounded-2xl text-gray-800 font-medium bg-white hover:border-blue-400 cursor-pointer transition">share</div>
    </div>
    <div class="w-1/2 px-2 mb-3">
        <div class="border-2 border-gray-200 py-3 text-center rounded-2xl text-gray-800 font-medium bg-white hover:border-blue-400 cursor-pointer transition">barg</div>
    </div>

    <!-- Row 7 -->
    <div class="w-1/2 px-2 mb-3">
        <div class="border-2 border-gray-200 py-3 text-center rounded-2xl text-gray-800 font-medium bg-white hover:border-blue-400 cursor-pointer transition">share</div>
    </div>
    <div class="w-1/2 px-2 mb-3">
        <div class="border-2 border-gray-200 py-3 text-center rounded-2xl text-gray-800 font-medium bg-white hover:border-blue-400 cursor-pointer transition">barg</div>
    </div>

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
        <a href="hplay.php">
            <button
                class="flex items-center justify-center gap-3 w-[241px] h-[60px] bg-white border rounded-xl hover:bg-gray-50 transition">
                <i class="fa-solid fa-arrow-left"></i>
                <span class="font-medium">Back</span>
            </button>
        </a>
        <a href="endgame.php">
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


</section>
<?php require "./header/footer.php" ?>