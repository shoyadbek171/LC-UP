<?php require "./header/header.php" ?>
<section class="mt-6 ml-5 mr-5">
    <header class="bg-[#FAFAFA] p-4 rounded-2xl flex justify-between items-center  -sm">
    
    <!-- Close icon -->
     <div class="flex items-center gap-3 w-full">
        <a href="./records.php">
            <i class="fa-solid fa-xmark cursor-pointer text-2xl text-gray-600 hover:text-black"></i>
        </a>

        <div class="flex-1 flex ml-[440px]">
            <button class="px-6 py-3 bg-[#0B7BE3] text-white rounded-3xl font-medium min-w-[347px]">
                <span>3/5</span>
            </button>
        </div>
        
 <!-- Spacer for centering -->
    </div>
    
    <!-- Profile section -->
        <div class="flex items-center w-[243px] p-2 bg-[#FFFFFF] rounded-2xl gap-4">
        <a href="profile.php">
            <img 
                src="./image/photo_2025-12-24_12-53-53.png" 
                class="w-12 h-12 rounded-full object-cover border"
                alt="Profile"
            >
        </a>

        <div class="flex flex-row">
            <span class="text-sm font-semibold text-gray-800">
                Shoyadbek Odilov
            </span>
        </div>
    </div>

</header>

<section class="mt-10 rounded-2xl ml-80 p-6">
    <div class="max-w-4xl mx-auto">
        <h1 class="mb-6 font-semibold text-xl text-gray-800">
            Type the words into the appropriate boxes.
        </h1>

        <!-- Word buttons pool -->
        <div class="flex flex-wrap gap-2 mb-4">
            <button class="border-2 border-gray-300 px-5 py-2.5 rounded-xl bg-white hover:bg-gray-50 transition font-medium text-gray-700">book</button>
            <button class="border-2 border-gray-300 px-5 py-2.5 rounded-xl bg-white hover:bg-gray-50 transition font-medium text-gray-700">apple</button>
            <button class="border-2 border-gray-300 px-5 py-2.5 rounded-xl bg-white hover:bg-gray-50 transition font-medium text-gray-700">chair</button>
            <button class="border-2 border-gray-300 px-5 py-2.5 rounded-xl bg-white hover:bg-gray-50 transition font-medium text-gray-700">water</button>
            <button class="border-2 border-gray-300 px-5 py-2.5 rounded-xl bg-white hover:bg-gray-50 transition font-medium text-gray-700">sugar</button>
        </div>

        <div class="flex flex-wrap gap-2 mb-4">
            <button class="border-2 border-gray-300 px-5 py-2.5 rounded-xl bg-white hover:bg-gray-50 transition font-medium text-gray-700">information</button>
            <button class="border-2 border-gray-300 px-5 py-2.5 rounded-xl bg-white hover:bg-gray-50 transition font-medium text-gray-700">furniture</button>
            <button class="border-2 border-[#F12E31] bg-[#F12E311F] px-5 py-2.5 rounded-xl font-medium text-gray-700">advice</button>
            <button class="border-2 border-[#F12E31] bg-[#F12E311F] px-5 py-2.5 rounded-xl font-medium text-gray-700">bag</button>
        </div>

        <div class="flex flex-wrap gap-2 mb-8">
            <button class="border-2 border-gray-300 px-4 py-2.5 rounded-xl bg-white hover:bg-gray-50 transition font-medium text-gray-700">sugar</button>
            <button class="border-2 border-gray-300 px-4 py-2.5 rounded-xl bg-white hover:bg-gray-50 transition font-medium text-gray-700">bag</button>
            <button class="border-2 border-[#049741] px-4 py-2.5 rounded-xl bg-[#0497411F] font-medium text-gray-700">water</button>
            <button class="border-2 border-[#049741] px-4 py-2.5 rounded-xl bg-[#0497411F] font-medium text-gray-700">apple</button>
            <button class="border-2 border-[#049741] px-4 py-2.5 rounded-xl bg-[#0497411F] font-medium text-gray-700">book</button>
        </div>
        <!-- Drop zones above containers -->
        <div class="flex ml-16 gap-32 mb-6">
            <div class="text-center">
                <button class="border-2  px-5 py-2.5 rounded-xl bg-[white] font-medium text-gray-700 mb-2">apple</button>
            </div>
            <div class="text-center">
                <button class="border-2 px-5 py-2.5 rounded-xl bg-white font-medium text-gray-700 mb-2">bag</button>
            </div>
        </div>

<hr class="w-[475px] border border-[#E0E0E0]">
        <!-- Drop zones above containers -->
        <div class="flex mt-10 gap-32 ml-16">
            <div class="text-center ">
                <button class="border-2 border-[#049741] px-5 py-2.5 rounded-xl bg-[#0497411F] font-medium text-gray-700 mb-2">apple</button>
            </div>
            <div class="text-center">
                <button class="border-2 border-[#F12E31] px-5 py-2.5 rounded-2xl bg-[#F12E311F] font-medium text-gray-700 mb-2">bag</button>
            </div>
        </div>
        <div class="relative ml-12 flex items-start gap-8 mb-8">
            <div class="text-center">
                <img src="./image/Frame 2087327458.svg" alt="Countable" class="w-40 h-48 object-contain">
            </div>
            <div class="text-center">
                <img src="./image/Frame 2087327459.svg" alt="Uncountable" class="w-40 h-48 object-contain">
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
        <a href="newplay.php">
            <button
                class="flex items-center justify-center gap-3 w-[241px] h-[60px] bg-white border rounded-xl hover:bg-gray-50 transition">
                <i class="fa-solid fa-arrow-left"></i>
                <span class="font-medium">Back</span>
            </button>
        </a>
        <a href="extraplay.php">
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