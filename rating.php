<?php require "header/header.php"; ?>

<?php require "header/lc.php"; ?>

        
<div class="flex items-start">
        <section class="rounded-3xl ml-4" >
            <div class="mt-6 text-gray-500 ml-1">
            <ul class="flex flex-col gap-4 p-4 rounded-xl bg-white">
    <li>
        <a href="home.php" class="flex cursor-pointer w-44 h-10 items-center gap-2 p-2 rounded-2xl hover:bg-blue-500 hover:text-white transition-all">
            <img src="./image/elements.svg" alt="Home icon">
            <span>Home</span>
        </a>
    </li>
    
    <li>
        <a href="group.php" class="flex cursor-pointer w-44 h-10 items-center text-gray-500 gap-2 p-2 rounded-xl hover:bg-blue-500 hover:text-white transition-all">
            <svg class="w-6 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="currentColor"><path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0a3.75 3.75 0 0 1-7.5 0m7.5 3a3 3 0 1 1 6 0a3 3 0 0 1-6 0m-13.5 0a3 3 0 1 1 6 0a3 3 0 0 1-6 0m4.06 5.368A6.75 6.75 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498a.75.75 0 0 1-.372.568A12.7 12.7 0 0 1 12 21.75a12.7 12.7 0 0 1-6.337-1.684a.75.75 0 0 1-.372-.568a6.8 6.8 0 0 1 1.019-4.38" clip-rule="evenodd"/><path d="m5.082 14.254l-.036.055a8.3 8.3 0 0 0-1.271 5.08a9.7 9.7 0 0 1-1.765-.44l-.115-.04a.56.56 0 0 1-.373-.487l-.01-.121Q1.5 18.15 1.5 18a3.75 3.75 0 0 1 3.582-3.746m15.144 5.135a8.3 8.3 0 0 0-1.308-5.135a3.75 3.75 0 0 1 3.57 4.047l-.01.121a.56.56 0 0 1-.373.486l-.115.04q-.851.302-1.764.441"/></g></svg>
            <span>Groups</span>
        </a>
    </li>
    <li>
        <a href="rating.php" class="flex cursor-pointer bg-blue-500 text-white w-44 h-10 items-center gap-2 p-2 rounded-xl transition-all">
            <img src="./image/all-bookmark.png" class="brightness-0 invert" alt="Rating">
            <span>Rating</span>
        </a>
    </li>
    <li>
        <a href="records.php" class="flex cursor-pointer w-44 h-10 items-center gap-2 p-2 rounded-2xl hover:bg-blue-500 hover:text-white transition-all">
            <i class="fa-solid fa-list-ul"></i>
            <span>Records</span>
        </a>
    </li>
    
    <li>
        <a href="https://t.me/odilov_IT" class="flex cursor-pointer w-44 h-10 items-center gap-2 p-2 rounded-2xl hover:bg-blue-500 hover:text-white transition-all">
            <img src="./image/elements (2).svg" alt="Chat icon">
            <span>Chat</span>
        </a>
    </li>
    
    <li>
        <a href="profile.php" class="flex cursor-pointer w-44 h-10 items-center gap-2 p-2 rounded-2xl hover:bg-blue-500 hover:text-white  transition-all">
            <img src="./image/elements (3).svg" class="hover:fill-white" alt="Profile icon">
            <span>Profile</span>
        </a>
    </li>
    <a href="face-id.php"><li class="flex cursor-pointer nn w-44 h-10 items-center gap-2 p-2 rounded-2xl transition-all">
                    <svg class="w-6 text-[#A1A1A1]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"><path d="M10.801 2.57a.71.71 0 0 1-.555.838a8.78 8.78 0 0 0-6.838 6.838a.71.71 0 1 1-1.394-.283a10.2 10.2 0 0 1 7.949-7.949a.71.71 0 0 1 .838.556M2.57 13.199a.71.71 0 0 1 .838.555a8.78 8.78 0 0 0 6.838 6.838a.71.71 0 1 1-.283 1.394a10.2 10.2 0 0 1-7.948-7.949a.71.71 0 0 1 .555-.838M13.199 2.57a.71.71 0 0 1 .838-.556a10.2 10.2 0 0 1 7.949 7.949a.711.711 0 0 1-1.394.283a8.78 8.78 0 0 0-6.838-6.838a.71.71 0 0 1-.555-.838m8.231 10.629a.71.71 0 0 1 .556.838a10.2 10.2 0 0 1-7.949 7.949a.711.711 0 0 1-.283-1.394a8.78 8.78 0 0 0 6.838-6.838a.71.71 0 0 1 .838-.555"/><path d="M12 19.583a7.583 7.583 0 1 0 0-15.166a7.583 7.583 0 0 0 0 15.166m-3.06-5.044a.71.71 0 0 1 .995-.148c.59.437 1.3.69 2.065.69a3.45 3.45 0 0 0 2.065-.69a.71.71 0 1 1 .846 1.142a4.87 4.87 0 0 1-2.911.97a4.87 4.87 0 0 1-2.911-.97a.71.71 0 0 1-.148-.994m6.377-4.139c0 .688-.37 1.245-.829 1.245s-.83-.557-.83-1.245c0-.687.372-1.244.83-1.244s.83.557.83 1.244m-5.805 1.245c.458 0 .83-.557.83-1.245c0-.687-.372-1.244-.83-1.244s-.83.557-.83 1.244c0 .688.372 1.245.83 1.245"/></g></svg>
                     <span>Face-id</span>
                </li></a>
</ul>
            </div>
        </section>
      <div class="max-w-[1640px] mx-auto flex flex-col mt-5 flex-1 ml-5 mr-5 gap-6">
        <div class="flex gap-28 flex-row">
        <section class="flex items-center gap-2 mt-5 border-2 border-[#E1E2E5] rounded-xl px-2 py-1 w-[736px]">
            <!-- Active -->
           <a href="group.php"><button class="px-5 py-2 text-gray-800 rounded-xl">Attendance</button></a>

            <!-- Inactive -->
            <a href="evalution.php"><button class="px-5 py-2 text-gray-800 rounded-xl">Evaluation</button></a>
            <a href="tasks.php"><button class="px-5 py-2 text-gray-800 rounded-xl">Tasks</button></a>
            <a href="rating.php"><button class="px-5 py-2 text-white bg-blue-500 rounded-xl ">Rating</button></a>
           <a href="exams.php"><button class="px-5 py-2 text-gray-800 rounded-xl">Exams</button></a>
            <a href="zoom.php"><button class="px-5 py-2 text-gray-800 rounded-xl">Zoom</button></a>
            <a href="https://t.me/Odilovplay"><button class="px-5 py-2 text-gray-800 rounded-xl">Help</button></a>
        </section>
        <div class="ml-96">
    <?php require "./header/group2.php"  ?>
    </div>
</div>
<section class=" flex flex-col p-4 rounded-2xl">
    <img src="./image/Frame 2087327624.png" alt="">
</section>
<section>
        <div class="flex gap-3 mt-12" >
            <div class="bg-[#0B7BE3] text-white p-4 rounded-3xl" >
                <button>My group</button>
            </div>
            <div>
                <button class="bg-[#E3E3E8] p-4 rounded-3xl" >Learning Center</button>
            </div>
            <div>
                <button class="bg-[#E3E3E8]  p-4 rounded-3xl" >Common</button>
        </div>
           <div class="flex flex-row ml-10 justify-between">
       <button class="bg-[#E3E3E8] p-2 rounded-4xl flex gap-2 items-center">
        <div class="bg-white flex items-center justify-center  rounded-2xl" >
        <img src="./image/327b176db650c8d8c333709eb7c0639de2e772e0.png" class="w-10"></div>
        <img src="./image/d3c330e4fff1e2b0d58b74ec0ff7aeae30443a8a.png" class="w-10">
    </button>
        </div>

</section>
<section class="bg-[#FAFAFA] p-4 rounded-2xl gap-4" >
       <div class="flex items-center bg-white p-2 justify-between rounded-2xl mb-2  transition-colors cursor-pointer">
        <div class="flex" >
                <div class="flex items-center gap-3  text-gray-600 ">
                   <span class="">1</span> <img src="./image/photo_2025-12-24_12-53-53.png" class="w-18 h-18 rounded-full">
                </div>
                <div class="flex flex-col gap-1 ml-4" >
                <div class="text-gray-600 items-center"><h1>Shoyadbek Odilov</h1></div>
                <div class="flex flex-row items-center gap-1" ><img src="./image/327b176db650c8d8c333709eb7c0639de2e772e0.png" class="w-10">2526</div>
                </div>
                </div>
                <div class="text-gray-600 items-center"><img src="./image/4337a10d0e1aeba5cc1996107322400db14dd3a8.png" class="w-32 rotate-[7.72deg]"></div>
            </div>
                <div class="flex items-center bg-white p-2 justify-between rounded-2xl mb-2  transition-colors cursor-pointer">
        <div class="flex" >
                <div class="flex items-center gap-3  text-gray-600 ">
                   <span class="">2</span> <img src="./image/50af3b183f4bd401f649241361aa1278ef1da165.png" class="w-18 h-18 rounded-full">
                </div>
                <div class="flex flex-col gap-1 ml-4" >
                <div class="text-gray-600 items-center"><h1>Shoyadbek Odilov</h1></div>
                <div class="flex flex-row items-center gap-1" ><img src="./image/d3c330e4fff1e2b0d58b74ec0ff7aeae30443a8a.png" class="w-10">450</div>
                </div>
                </div>
                <div class="text-gray-600 items-center"><img src="./image/764a06538e11b453d8d66a10ce7a96e5f76a4cfb.png" class="w-32 rotate-[7.72deg]"></div>
            </div>
                <div class="flex items-center bg-white p-2 justify-between rounded-2xl mb-2  transition-colors cursor-pointer">
        <div class="flex" >
                <div class="flex items-center gap-3  text-gray-600 ">
                   <span class="">3</span> <img src="./image/9d5e5cd461f08a3ac3f6b0c31878be4f666a64db.png" class="w-18 h-18 rounded-full">
                </div>
                <div class="flex flex-col gap-1 ml-4" >
                <div class="text-gray-600 items-center"><h1>Shoyadbek Odilov</h1></div>
                <div class="flex flex-row items-center gap-1" ><img src="./image/327b176db650c8d8c333709eb7c0639de2e772e0.png" class="w-10">2526</div>
                </div>
                </div>
                <div class="text-gray-600 items-center"><img src="./image/a813e22415d345dca3a26f8b3f300fac10d7d9b6.png" class="w-32 rotate-[7.72deg]"></div>
            </div>
                <div class="flex items-center bg-white p-2 justify-between rounded-2xl mb-2  transition-colors cursor-pointer">
        <div class="flex" >
                <div class="flex items-center gap-3  text-gray-600 ">
                   <span class="">4</span> <img src="./image/02ea22fe33783c608ab3aca54e6fece214706e45.png" class="w-18 h-18 rounded-full">
                </div>
                <div class="flex flex-col gap-1 ml-4" >
                <div class="text-gray-600 items-center"><h1>Shoyadbek Odilov</h1></div>
                <div class="flex gap-2" >
                <div class="flex flex-row items-center gap-1 bg-[#F5F5F5] rounded-xl p-1 w-20" ><img src="./image/81b886e58e4ee9adda159c9997c32087509cb82f.png" class="w-8">2526</div>
                <div class="flex flex-row items-center gap-1 bg-[#F5F5F5] rounded-xl p-1 w-20" ><img src="./image/327b176db650c8d8c333709eb7c0639de2e772e0.png" class="w-8">1438</div>
                </div>
                </div>
                </div>
            </div>
</section>
</div>
</div>
<?php require "footer/footer.php"; ?>
