<?php require './header/header.php'; ?>
<?php require './header/lc.php'; ?>

<div class="flex">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-white p-6">
      <ul class="flex flex-col gap-4 nn p-4 rounded-xl">
                <a href="home.php">
                    <li class="flex cursor-pointer nn w-44 h-10 items-center gap-2 p-2 rounded-xl transition-all">
                   <svg xmlns="http://www.w3.org/2000/svg" class="w-6 text-[#A1A1A1]" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M13.106 22h-2.212c-3.447 0-5.17 0-6.345-1.012s-1.419-2.705-1.906-6.093l-.279-1.937c-.38-2.637-.57-3.956-.029-5.083s1.691-1.813 3.992-3.183l1.385-.825C9.8 2.622 10.846 2 12 2s2.199.622 4.288 1.867l1.385.825c2.3 1.37 3.451 2.056 3.992 3.183s.35 2.446-.03 5.083l-.278 1.937c-.487 3.388-.731 5.081-1.906 6.093S16.553 22 13.106 22m-4.708-6.447a.75.75 0 0 1 1.049-.156c.728.54 1.607.853 2.553.853s1.825-.313 2.553-.853a.75.75 0 1 1 .894 1.205A5.77 5.77 0 0 1 12 17.75a5.77 5.77 0 0 1-3.447-1.148a.75.75 0 0 1-.155-1.049" clip-rule="evenodd"/></svg>  
                   <span>Home</span>
                </li></a>
              <a href="group.php"><li class="flex cursor-pointer nn w-44 h-10 items-center gap-2 p-2 rounded-xl transition-all">
                   <svg class="text-[#A1A1A1] w-6 hover:text-[#FFFFFF]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="currentColor"><path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0a3.75 3.75 0 0 1-7.5 0m7.5 3a3 3 0 1 1 6 0a3 3 0 0 1-6 0m-13.5 0a3 3 0 1 1 6 0a3 3 0 0 1-6 0m4.06 5.368A6.75 6.75 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498a.75.75 0 0 1-.372.568A12.7 12.7 0 0 1 12 21.75a12.7 12.7 0 0 1-6.337-1.684a.75.75 0 0 1-.372-.568a6.8 6.8 0 0 1 1.019-4.38" clip-rule="evenodd"/><path d="m5.082 14.254l-.036.055a8.3 8.3 0 0 0-1.271 5.08a9.7 9.7 0 0 1-1.765-.44l-.115-.04a.56.56 0 0 1-.373-.487l-.01-.121Q1.5 18.15 1.5 18a3.75 3.75 0 0 1 3.582-3.746m15.144 5.135a8.3 8.3 0 0 0-1.308-5.135a3.75 3.75 0 0 1 3.57 4.047l-.01.56.56 0 0 1-.373.486l-.115.04q-.851.302-1.764.441"/></g></svg>
                    <span>Groups</span>
                </li></a>
                <a href="rating.php"><li class="flex cursor-pointer nn w-44 h-10 items-center gap-2 p-2 rounded-xl transition-all">
                   <img src="./image/all-bookmark.png" class="" alt="">
                     <span>Rating</span>
                </li></a>
                <a href="records.php"><li class="flex cursor-pointer text-[#A1A1A1] nn w-44 h-10 items-center gap-2 p-2 rounded-2xl transition-all">
                    <i class="fa-solid fa-list-ul"></i>
                     <span>Records</span>
                </li></a>
                <a href="https://t.me/odilov_IT"><li class="flex cursor-pointer nn w-44 h-10 items-center gap-2 p-2 rounded-xl transition-all">
                   <img src="./image/elements (2).svg" class="" alt="">
                     <span>Chat</span>
                </li></a>
                <a href="profile.php"><li class="flex cursor-pointer nn w-44 h-10 items-center gap-2 p-2 rounded-xl transition-all">
                   <img src="./image/elements (3).svg" class="" alt="">
                     <span>Profile</span>
                </li></a>
                <a href="face-id.php"><li class="flex cursor-pointer nn w-44 h-10 items-center gap-2 p-2 rounded-xl  bg-blue-500 text-white transition-all">
                    <svg class="w-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"><path d="M10.801 2.57a.71.71 0 0 1-.555.838a8.78 8.78 0 0 0-6.838 6.838a.71.71 0 1 1-1.394-.283a10.2 10.2 0 0 1 7.949-7.949a.71.71 0 0 1 .838.556M2.57 13.199a.71.71 0 0 1 .838.555a8.78 8.78 0 0 0 6.838 6.838a.71.71 0 1 1-.283 1.394a10.2 10.2 0 0 1-7.948-7.949a.71.71 0 0 1 .555-.838M13.199 2.57a.71.71 0 0 1 .838-.556a10.2 10.2 0 0 1 7.949 7.949a.711.711 0 0 1-1.394.283a8.78 8.78 0 0 0-6.838-6.838a.71.71 0 0 1-.555-.838m8.231 10.629a.71.71 0 0 1 .556.838a10.2 10.2 0 0 1-7.949 7.949a.711.711 0 0 1-.283-1.394a8.78 8.78 0 0 0 6.838-6.838a.71.71 0 0 1 .838-.555"/><path d="M12 19.583a7.583 7.583 0 1 0 0-15.166a7.583 7.583 0 0 0 0 15.166m-3.06-5.044a.71.71 0 0 1 .995-.148c.59.437 1.3.69 2.065.69a3.45 3.45 0 0 0 2.065-.69a.71.71 0 1 1 .846 1.142a4.87 4.87 0 0 1-2.911.97a4.87 4.87 0 0 1-2.911-.97a.71.71 0 0 1-.148-.994m6.377-4.139c0 .688-.37 1.245-.829 1.245s-.83-.557-.83-1.245c0-.687.372-1.244.83-1.244s.83.557.83 1.244m-5.805 1.245c.458 0 .83-.557.83-1.245c0-.687-.372-1.244-.83-1.244s-.83.557-.83 1.244c0 .688.372 1.245.83 1.245"/></g></svg>
                     <span>Face-id</span>
                </li></a>
            </ul>
    </aside>


    <!-- MAIN CONTENT -->
    <main class="flex-1 p-8">

        <!-- TOP BAR -->
        <div class="flex items-center justify-between mb-6">

            <div class="flex items-center gap-4">

                <!-- FILTER BUTTONS -->
                <div class="flex bg-white border-2 border-[#E5E7EB] rounded-xl p-1">
                    <a href="#" class="px-6 py-2 text-sm bg-[#007AFF] text-white rounded-lg">Everything</a>
                    <a href="#" class="px-6 py-2 text-sm text-[#6B7280] hover:bg-[#007AFF] hover:text-white rounded-lg transition">Ustozlar</a>
                    <a href="#" class="px-6 py-2 text-sm text-[#6B7280] hover:bg-[#007AFF] hover:text-white rounded-lg transition">Hodimlar</a>
                </div>

                <!-- DATE -->
                <div class="flex items-center gap-2 bg-white border-2 border-[#E5E7EB] w-[130px] text-center rounded-2xl p-1">
                    <img src="./image/calendar.svg" class="w-5">
                    <div class="leading-tight">
                        <p class="text-xs text-[#9CA3AF]">Today</p>
                        <p class="text-sm font-semibold text-[#111827]">19.02.2026</p>
                    </div>
                </div>

            </div>

            <!-- SEARCH -->
<!-- SEARCH FULL -->
<div class="flex justify-center items-center gap-3">
    <!-- Search input container -->
    <div class="flex items-center w-[320px] bg-white border-2 border-gray-200 rounded-2xl px-4 py-2.5">
        <!-- Search icon -->
        <i class="fa-solid fa-magnifying-glass text-gray-400 text-base"></i>
        
        <!-- Input -->
        <input 
            type="text"
            placeholder="Search..."
            class="bg-transparent outline-none text-sm flex-1 mx-3 placeholder:text-gray-400 text-gray-700"
        >
        
        <!-- Filter icon -->
        <img src="./image/Frame 2087328743.png" alt="">
    </div>
    
    <!-- Settings button -->
    <button id="searchF" class="flex items-center justify-center w-12 h-12 bg-[#F2F2F7] border border-gray-200 rounded-2xl text-[#686E7E] hover:bg-gray-50 transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6" viewBox="0 0 24 24">
            <g fill="none" stroke="currentColor" stroke-width="1.5">
                <circle cx="12" cy="12" r="3"/>
                <path d="M13.765 2.152C13.398 2 12.932 2 12 2s-1.398 0-1.765.152a2 2 0 0 0-1.083 1.083c-.092.223-.129.484-.143.863a1.62 1.62 0 0 1-.79 1.353a1.62 1.62 0 0 1-1.567.008c-.336-.178-.579-.276-.82-.308a2 2 0 0 0-1.478.396C4.04 5.79 3.806 6.193 3.34 7s-.7 1.21-.751 1.605a2 2 0 0 0 .396 1.479c.148.192.355.353.676.555c.473.297.777.803.777 1.361s-.304 1.064-.777 1.36c-.321.203-.529.364-.676.556a2 2 0 0 0-.396 1.479c.052.394.285.798.75 1.605c.467.807.7 1.21 1.015 1.453a2 2 0 0 0 1.479.396c.24-.032.483-.13.819-.308a1.62 1.62 0 0 1 1.567.008c.483.28.77.795.79 1.353c.014.38.05.64.143.863a2 2 0 0 0 1.083 1.083C10.602 22 11.068 22 12 22s1.398 0 1.765-.152a2 2 0 0 0 1.083-1.083c.092-.223.129-.483.143-.863c.02-.558.307-1.074.79-1.353a1.62 1.62 0 0 1 1.567-.008c.336.178.579.276.819.308a2 2 0 0 0 1.479-.396c.315-.242.548-.646 1.014-1.453s.7-1.21.751-1.605a2 2 0 0 0-.396-1.479c-.148-.192-.355-.353-.676-.555A1.62 1.62 0 0 1 19.562 12c0-.558.304-1.064.777-1.36c.321-.203.529-.364.676-.556a2 2 0 0 0 .396-1.479c-.052-.394-.285-.798-.75-1.605c-.467-.807-.7-1.21-1.015-1.453a2 2 0 0 0-1.479-.396c-.24.032-.483.13-.819-.308a1.62 1.62 0 0 1-1.566-.008a1.62 1.62 0 0 1-.79-1.353c-.014-.38-.05-.64-.143-.863a2 2 0 0 0-1.083-1.083Z"/>
            </g>
        </svg>
    </button>
</div>


        </div>


        <!-- TABLE CONTAINER -->
        <div class="bg-[#FAFAFA] rounded-xl p-4 shadow-sm overflow-hidden">

            <!-- HEADER -->
            <div class="grid grid-cols-4 bg-[#FFFFFF] rounded-2xl p-6 text-sm text-[#9CA3AF] font-medium border-b border-[#F2F2F7]">
                <span class="ml-4">F.I</span>
                <span>Come</span>
                <span class="ml-10">Left</span>
                <span class="ml-72">Harakat</span>
            </div>


            <!-- ROW -->
            <div class="grid bg-[#ffffff] rounded-2xl mt-2 grid-cols-[220px_1fr_1fr_180px] items-center px-6 py-4 border-b border-[#F2F2F7]">

                <!-- USER -->
                <div class="flex items-center gap-3">
                   <a href="employee.php"> <img src="./image/photo_2025-12-24_12-53-53.png" class="w-11 h-11 rounded-xl object-cover"></a>
                    <span class="font-medium text-[#374151]">Yaxyobek</span>
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
                <!-- ACTION -->
                <div class="flex justify-end">
                    <button class="w-36 h-11 bg-[#0B7BE3] hover:bg-[#0066D6] text-white rounded-xl text-sm font-medium transition">
                        Come
                    </button>
                </div>

            </div>


            <!-- ROW 2 -->
            <div class="grid bg-[#ffffff] rounded-2xl mt-2 grid-cols-[220px_1fr_1fr_180px] items-center px-6 py-4">

                <div class="flex items-center gap-3">
                    <a href="employee.php"><img src="./image/photo_2025-12-24_12-53-53.png" class="w-11 h-11 rounded-xl object-cover"></a>
                    <span class="font-medium text-[#374151]">Yaxyobek</span>
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
                <div class="flex justify-end">
                    <button class="w-36 h-11 bg-[#FF8D28] hover:bg-[#e68600] text-white rounded-xl text-sm font-medium transition">
                        Left
                    </button>
                </div>

            </div>
<div class="grid bg-[#ffffff] rounded-2xl mt-2 grid-cols-[220px_1fr_1fr_180px] items-center px-6 py-4 border-b border-[#F2F2F7]">

                <!-- USER -->
                <div class="flex items-center gap-3">
                   <a href="employee.php"><img src="./image/photo_2025-12-24_12-53-53.png" class="w-11 h-11 rounded-xl object-cover"></a>
                    <span class="font-medium text-[#374151]">Yaxyobek</span>
                </div>


                <div class="flex items-center ml-36 gap-3">
                    <div class="flex items-center gap-2 border-2 border-[#E5E7EB] rounded-xl h-8 p-2 w-20 bg-white">
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

                <!-- ACTION -->
                <div class="flex justify-end text-center">
    <button class="p-4 face-idTask bg-[#CBD5E1] rounded-2xl w-12 h-12 flex items-center">
        <i class="fa-solid fa-plus"></i>
    </button>
</div>

            </div>


            <!-- ROW 2 -->
            <div class="grid bg-[#ffffff] rounded-2xl mt-2 grid-cols-[220px_1fr_1fr_180px] items-center px-6 py-4">

                <div class="flex items-center gap-3">
                    <img src="./image/photo_2025-12-24_12-53-53.png" class="w-11 h-11 rounded-xl object-cover">
                    <span class="font-medium text-[#374151]">Yaxyobek</span>
                </div>

           <div class="flex items-center ml-36 gap-3">
                    <div class="flex items-center gap-2 border-2 border-[#E5E7EB] rounded-xl h-8 p-2 w-20 bg-white">
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
                <div class="flex justify-end">
                    <button class="w-36 h-11 bg-[#FF8D28] hover:bg-[#e68600] text-white rounded-xl text-sm font-medium transition">
                        Left
                    </button>
                </div>

            </div><div class="grid bg-[#ffffff] rounded-2xl mt-2 grid-cols-[220px_1fr_1fr_180px] items-center px-6 py-4 border-b border-[#F2F2F7]">

                <!-- USER -->
                <div class="flex items-center gap-3">
                    <a href="employee.php"><img src="./image/photo_2025-12-24_12-53-53.png" class="w-11 h-11 rounded-xl object-cover"></a>
                    <span class="font-medium text-[#374151]">Yaxyobek</span>
                </div>

                <div class="flex ml-36 items-center gap-3">
                    <div class="flex items-center gap-2 border-2 border-[#E5E7EB] rounded-xl h-8 p-2 w-20 bg-white">
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

                <!-- ACTION -->
                <div class="flex justify-end">
                    <button class="w-36 h-11 bg-[#0B7BE3] hover:bg-[#0066D6] text-white rounded-xl text-sm font-medium transition">
                         Come
                    </button>
                </div>

            </div>


            <!-- ROW 2 -->
            <div class="grid bg-[#ffffff] rounded-2xl mt-2 grid-cols-[220px_1fr_1fr_180px] items-center px-6 py-4">

                <div class="flex items-center gap-3">
                    <a href="employee.php"><img src="./image/photo_2025-12-24_12-53-53.png" class="w-11 h-11 rounded-xl object-cover"></a>
                    <span class="font-medium text-[#374151]">Yaxyobek</span>    
                </div>

               <div class="flex ml-36 items-center gap-3">
                    <div class="flex items-center gap-2 border-2 border-[#E5E7EB] rounded-xl h-8 p-2 w-20 bg-[#ffffff]">
                        <img src="./image/camera.svg" class="w-4">
                        <hr>
                        <span class="font-semibold text-sm">9:00</span>
                    </div>
                    <span class="text-red-500 text-sm font-medium">-20 min</span>
                </div>

                <!-- Left -->
                <div class="flex items-center gap-3">
                    <div class="flex items-center gap-2 border-2 border-[#E5E7EB] rounded-xl p-2 h-8 w-20 bg-[#ffffff]">
                     <img src="./image/icon.svg" class="w-4">
                        <span class="font-semibold text-sm">9:00</span>
                    </div>
                    <span class="text-green-600 text-sm font-medium">+20 min</span>
                </div>

                <div class="flex justify-end">
                    <button class="w-36 h-11 bg-[#FF8D28] hover:bg-[#e68600] text-white rounded-xl text-sm font-medium transition">
                        Left
                    </button>
                </div>

            </div>
        </div>

    </main>

</div>
 <section
  id="face-id"
  class="fixed inset-0 z-50 flex hidden items-center justify-center bg-black bg-opacity-50">
  <!-- Modal box -->
  <div class="bg-white rounded-3xl p-8 w-[500px] relative shadow-2xl">

    <!-- Header -->
    <div class="flex justify-between items-center mb-8">
      <h1 class="text-2xl font-semibold text-gray-800">Settings</h1>
      <button id="face-idBack" class="text-gray-400 hover:text-gray-600 cursor-pointer transition">
        <i class="fa-solid fa-xmark cursor-pointer text-gray-500 hover:text-black border border-[#E1E2E5] rounded-xl p-2"></i>
      </button>
    </div>

    <!-- Content -->
    <div class="space-y-5">

      <!-- Row 1 -->
      <div class="flex items-center justify-between">
        <span class="text-gray-700 text-sm">How many minutes before classes do teachers come</span>
        <input 
          type="text" 
          value="9:00" 
          class="w-20 text-center border-2 border-gray-200 rounded-xl px-3 py-2 text-sm font-semibold focus:outline-none focus:border-blue-500"
        >
      </div>

      <!-- Row 2 -->
      <div class="flex items-center justify-between">
        <span class="text-gray-700 text-sm">How many minutes can employees be late without a minus</span>
        <input 
          type="text" 
          value="9:00" 
          class="w-20 text-center border-2 border-gray-200 rounded-xl px-3 py-2 text-sm font-semibold focus:outline-none focus:border-blue-500"
        >
      </div>

      <!-- Row 3 -->
      <div class="flex items-center justify-between">
        <span class="text-gray-700 text-sm">If not present, how many minutes will be written as a fine:</span>
        <input 
          type="text" 
          value="9:00" 
          class="w-20 text-center border-2 border-gray-200 rounded-xl px-3 py-2 text-sm font-semibold focus:outline-none focus:border-blue-500"
        >
      </div>

      <!-- Row 4 - Checkbox 1 -->
      <div class="flex items-center justify-between">
        <span class="text-gray-700 text-sm">Show early</span>
          <input type="checkbox" class="mr-8">
      </div>

      <!-- Row 5 - Checkbox 2 -->
      <div class="flex items-center justify-between">
        <span class="text-gray-700 text-sm">Show late</span>
          <input type="checkbox" class="mr-8">
      </div>

    </div>

    <!-- Bottom buttons -->
    <div class="flex items-center justify-end gap-4 mt-10">
      <button id="setB" class="px-14 py-3 bg-[#F2F2F7] text-gray-700 rounded-2xl font-medium hover:bg-gray-200 transition">
        Cancel
      </button>
      <button id="saveBtn" class="px-14 py-3 bg-[#0B7BE3] text-white rounded-2xl font-medium hover:bg-[#0066D6] transition">
        Save
      </button>
    </div>

  </div>
</section>

<section id="face-id2" class="fixed inset-0 z-50 hidden flex  items-center justify-center bg-[#09131A80]">
    <div class="bg-white rounded-3xl p-6 w-[483px] max-w-5xl mx-4 relative">

    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-xl font-semibold">Come</h1>
      <i id="Fback_2" class="fa-solid fa-x cursor-pointer text-gray-500 hover:text-black border border-[#E1E2E5] rounded-xl p-2"></i>
    </div>

  <div class="bg-[#FAFAFA] rounded-2xl"></div>

    <div class="ml-40 items-center mt-5">
        <div>
            <h1>Come time:</h1>
            <div class="flex mt-10 items-center gap-2 border-2 border-[#E5E7EB] text-sm rounded-xl h-8 p-2 w-24 bg-white">
                        <span class="font-semibold text-sm pl-6">9:00</span>
                    </div>
        </div>

  </div>
  <div class="flex gap-4 mt-8">
    <button id="bb" class="p-3 bg-[#F5F5F5] w-1/2 rounded-2xl" >Cancel</button>
    <button class="bg-[#0B7BE3] text-white p-3 w-1/2 rounded-2xl" >Save</button>
  </div>
</section>
<?php include './header/footer.php'; ?>
