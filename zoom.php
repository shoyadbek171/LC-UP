<?php require "header/header.php"; ?>
<?php require "header/lc.php"; ?>
        
<div class="flex items-start">
        <section class="rounded-3xl ml-4" >
            <div class="mt-6 text-gray-500 ml-1">
                <ul class="flex flex-col gap-4 nn p-4 rounded-xl">
                    <a href="home.php"><li class="flex cursor-pointer nn w-44 h-10 items-center gap-2 p-2 rounded-2xl hover:bg-blue-500 hover:text-white transition-all">
                       <img src="./image/elements.svg">
                        <span>Home</span>
                    </li></a>
                  <a href="group.php"><li class="flex cursor-pointer nn w-44 h-10 items-center bg-blue-500 text-white gap-2 p-2 rounded-xl transition-all">
                       <img src="./image/elements (1).svg" class="fill-white" >
                        <span>Groups</span>
                    </li></a>
                    <a href="rating.php"><li class="flex cursor-pointer nn w-44 h-10 items-center gap-2 p-2 rounded-2xl transition-all">
                       <img src="./image/all-bookmark.png" alt="">
                         <span>Rating</span>
                    </li></a>
                    <a href="records.php"><li class="flex cursor-pointer nn w-44 h-10 items-center gap-2 p-2 rounded-2xl transition-all">
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
                </li></a>
                
                </ul>
            </div>
        </section>  <div class="max-w-[1640px] mx-auto flex flex-col mt-5 flex-1 ml-5 mr-5 gap-6">
        <div class="flex gap-40 flex-row">
        <section class="flex items-center gap-2 mt-5 border-2 border-[#E1E2E5] rounded-xl px-2 py-1 w-[736px]">
            <!-- Active -->
           <a href="group.php"><button class="px-5 py-2 text-gray-500  rounded-xl font-medium">Attendance</button></a>

            <!-- Inactive -->
            <a href="evalution.php"><button class="px-5 py-2 text-gray-800 rounded-xl ">Evaluation</button></a>
            <a href="tasks.php"><button class="px-5 py-2 text-gray-800 rounded-xl">Tasks</button></a>
            <a href="rating.php"><button class="px-5 py-2 text-gray-800 rounded-xl">Rating</button></a>
           <a href="exams.php"><button class="px-5 py-2 text-gray-800  rounded-xl">Exams</button></a>
            <a href="zoom.php"><button class="px-5 py-2 text-white bg-blue-500 rounded-xl">Zoom</button></a>
            <a href="https://t.me/Odilovplay"><button class="px-5 py-2 text-gray-800 rounded-xl">Help</button></a>
        </section>
        <div class="ml-80" >
                <?php require "header/group2.php" ?>
                </div>
                </div>

                <section class="bg-[#FAFAFA] p-4 rounded-2xl" >
                    <div class="flex justify-between ml-8" >
                        <h1 class="text-2xl">Zoom meeting list</h1>
                        <div class="flex items-center gap-3 mr-10">
                            <button id="openmeet" class="bg-[#0B7BE3] text-white p-3  flex items-center gap-2 rounded-xl"><i class="fa-solid fa-plus"></i>Meeting preparation</button>
                        </div>
                    </div>
                      <section class="p-6 bg-[#FAFAFA]">
    <div class="grid grid-cols-6 px-6 py-4 rounded-[24px] bg-white text-[#8E8E8E] mb-2 text-sm font-medium">
        <div class="text-left">Topic</div>
        <div class="text-center">Host</div>
        <div class="text-center">Start time</div>
        <div class="text-center">Duration</div>
        <div class="text-center">Status</div>
        <div class="text-center">Action</div>
    </div>
    
    <div class="space-y-3">
        <div class="grid grid-cols-6 items-center bg-white p-5 rounded-[24px] cursor-pointer">
            <div class="text-left text-[#2D2D2D]">
                A25 meeting
            </div>
            <div class="text-center text-[#5A5A5A]">Yaxyobek Toxirjonov</div>
            <div class="text-center text-[#5A5A5A]">Jan 17, 2026</div>
            <div class="text-center text-[#5A5A5A]">6 min</div>
            <div class="text-center text-[#5A5A5A]">ended</div>
            <div class="flex justify-center items-center gap-5">
                <button class="text-[#5A5A5A] hover:text-red-500 transition-colors">
                    <i class="fa-regular fa-trash-can text-lg"></i>
                </button>
                <button class="text-[#5A5A5A] hover:text-blue-500 transition-colors">
                    <i class="fa-solid fa-video text-lg"></i>
                </button>
            </div>
        </div>

        <div class="grid grid-cols-6 items-center bg-white p-5 rounded-[24px] cursor-pointer">
            <div class="text-left text-[#2D2D2D]">A25 meeting</div>
            <div class="text-center text-[#5A5A5A]">Yaxyobek Toxirjonov</div>
            <div class="text-center text-[#5A5A5A]">Jan 17, 2026</div>
            <div class="text-center text-[#5A5A5A]">6 min</div>
            <div class="text-center text-[#5A5A5A]">ended</div>
            <div class="flex justify-center items-center gap-5">
                <i class="fa-regular fa-trash-can text-lg text-[#5A5A5A]"></i>
                <i class="fa-solid fa-video text-lg text-[#5A5A5A]"></i>
            </div>
        </div>
         <div class="grid grid-cols-6 items-center bg-white p-5 rounded-[24px] cursor-pointer">
            <div class="text-left text-[#2D2D2D]">A25 meeting</div>
            <div class="text-center text-[#5A5A5A]">Yaxyobek Toxirjonov</div>
            <div class="text-center text-[#5A5A5A]">Jan 17, 2026</div>
            <div class="text-center text-[#5A5A5A]">6 min</div>
            <div class="text-center text-[#5A5A5A]">ended</div>
            <div class="flex justify-center items-center gap-5">
                <i class="fa-regular fa-trash-can text-lg text-[#5A5A5A]"></i>
                <i class="fa-solid fa-video text-lg text-[#5A5A5A]"></i>
            </div>
        </div>
         <div class="grid grid-cols-6 items-center bg-white p-5 rounded-[24px] cursor-pointer">
            <div class="text-left text-[#2D2D2D]">A25 meeting</div>
            <div class="text-center text-[#5A5A5A]">Yaxyobek Toxirjonov</div>
            <div class="text-center text-[#5A5A5A]">Jan 17, 2026</div>
            <div class="text-center text-[#5A5A5A]">6 min</div>
            <div class="text-center text-[#5A5A5A]">ended</div>
            <div class="flex justify-center items-center gap-5">
                <i class="fa-regular fa-trash-can text-lg text-[#5A5A5A]"></i>
                <i class="fa-solid fa-video text-lg text-[#5A5A5A]"></i>
            </div>
        </div>
         <div class="grid grid-cols-6 items-center bg-white p-5 rounded-[24px] cursor-pointer">
            <div class="text-left text-[#2D2D2D]">A25 meeting</div>
            <div class="text-center text-[#5A5A5A]">Yaxyobek Toxirjonov</div>
            <div class="text-center text-[#5A5A5A]">Jan 17, 2026</div>
            <div class="text-center text-[#5A5A5A]">6 min</div>
            <div class="text-center text-[#5A5A5A]">ended</div>
            <div class="flex justify-center items-center gap-5">
                <i class="fa-regular fa-trash-can text-lg text-[#5A5A5A]"></i>
                <i class="fa-solid fa-video text-lg text-[#5A5A5A]"></i>
            </div>
        </div>
         <div class="grid grid-cols-6 items-center bg-white p-5 rounded-[24px] cursor-pointer">
            <div class="text-left text-[#2D2D2D]">A25 meeting</div>
            <div class="text-center text-[#5A5A5A]">Yaxyobek Toxirjonov</div>
            <div class="text-center text-[#5A5A5A]">Jan 17, 2026</div>
            <div class="text-center text-[#5A5A5A]">6 min</div>
            <div class="text-center text-[#5A5A5A]">ended</div>
            <div class="flex justify-center items-center gap-5">
                <i class="fa-regular fa-trash-can text-lg text-[#5A5A5A]"></i>
                <i class="fa-solid fa-video text-lg text-[#5A5A5A]"></i>
            </div>
        </div>
    </div>
</div>
    </section>
<section id="hidden4" class="fixed inset-0 z-50 hidden flex  items-center justify-center bg-[#09131A80]">
    <div class="bg-white rounded-3xl p-6 w-[483px] max-w-5xl mx-4 relative">

    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-xl font-semibold">Zoom</h1>
      <i id="cmbk2" class="fa-solid fa-x cursor-pointer text-gray-500 hover:text-black border border-[#E1E2E5] rounded-xl p-2"></i>
    </div>
  <div class="bg-[#FAFAFA] rounded-2xl"></div>

  <div class="items-center">
            <div class="flex border border-[#E1E2E5] text-gray-500 rounded-2xl p-2 mt-2 items-center justify-between">
                <input type="text" name="" id="" placeholder="Topic">
            </div>

  <div class="flex gap-2 mt-4">
    <button class="p-3 bg-[#F5F5F5] w-1/2 rounded-2xl" >Cancel</button>
    <button class="bg-[#0B7BE3] text-white p-3 w-1/2 rounded-2xl" >Save</button>
  </div>
  </div>
</section>

<?php require "header/footer.php"; ?>