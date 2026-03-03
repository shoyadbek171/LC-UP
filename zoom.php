<?php require "header/header.php"; ?>
<?php require "header/lc.php"; ?>
        
<div class="flex items-start">    <?php require "header/sidebar.php"; ?>  <div class="max-w-[1640px] mx-auto flex flex-col mt-5 flex-1 ml-5 mr-5 gap-6">
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