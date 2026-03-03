<?php require "header/header.php"; ?>
<?php require "header/lc.php"; ?>
        
<div class="flex items-start">    <?php require "header/sidebar.php"; ?><div class="max-w-[1640px] mx-auto flex flex-col mt-5 flex-1 ml-5 mr-5 gap-6">
        <div class="flex gap-44 flex-row w-[1141px] justify-between">
        <section class="flex items-center gap-2 mt-5 border-2 border-[#E1E2E5] rounded-xl px-2 py-1 w-[736px]">
            <!-- Active -->
           <a href="group.php"><button class="px-5 py-2 text-gray-500  rounded-xl font-medium">Attendance</button></a>

            <!-- Inactive -->
            <a href="evalution.php"><button class="px-5 py-2 text-gray-800 rounded-xl ">Evaluation</button></a>
            <a href="tasks.php"><button class="px-5 py-2 text-gray-800 rounded-xl">Tasks</button></a>
            <a href="rating.php"><button class="px-5 py-2 text-gray-800 rounded-xl">Rating</button></a>
           <a href="exams.php"><button class="px-5 py-2 text-white bg-blue-500 rounded-xl">Exams</button></a>
            <a href="zoom.php"><button class="px-5 py-2 text-gray-800 rounded-xl">Zoom</button></a>
            <a href="https://t.me/Odilovplay"><button class="px-5 py-2 text-gray-800 rounded-xl">Help</button></a>
        </section>
        <div class="ml-80 w-[286px]">
                <?php require "header/group2.php" ?>
                </div>
                </div>

                <section class="bg-[#FAFAFA]  p-4 rounded-2xl" >
                    <div class="flex justify-between ml-8" >
                        <h1 class="text-2xl">Exam list</h1>
                        <div class="flex items-center gap-3 mr-10">
                            <button id="openexam" class="bg-[#0B7BE3] text-white p-3  flex items-center gap-2 rounded-xl"><i class="fa-solid fa-plus"></i>Exam preparation</button>
                        </div>
                    </div>
                      <section class="p-6 bg-[#FAFAFA]">

        <div class="w-full">
            <div class="grid grid-cols-9 p-4 text-[#5A5A5A] mb-2 bg-white rounded-2xl text-sm font-medium  text-center">
                <div>Name</div>
                <div>Date </div>
                <div>Passing mark</div>
                <div>Class</div>
                <div>General mark</div>
                <div>Grades</div>
                <div>Grades</div>
                <div>Count</div>
                <div>Action</div>
            </div>
            
            <div class="grid grid-cols-9 items-center bg-white p-4 rounded-2xl mb-2 transition-colors cursor-pointer text-center">
                <div class="flex items-center ml-16">
                      Monthly
                </div>
                <div class="text-gray-600">Jan 17, 2026</div>
                <div class="text-gray-600">25</div>
                <div class="text-gray-600">Writing</div>
                <div class="text-gray-600">100</div>
                <div class="text-gray-600">200</div>
                <div class="text-[#049741]">70</div>
                <div class="text-gray-600">Average</div>
                <div class="flex flex-row gap-2 ml-16">
                    <i class="exam-row fa-regular fa-eye"></i>
                    <img src="./image/pencil.svg" class="open w-4 h-4">
                </div>
            </div>
            <div class="grid grid-cols-9 items-center bg-white p-4 rounded-2xl mb-2 transition-colors cursor-pointer text-center">
                <div class="flex items-center ml-16">
                    Salary
                </div>
                <div class="text-gray-600">Jan 17, 2026</div>
                <div class="text-gray-600">25</div>
                <div class="text-gray-600">Writing</div>
                <div class="text-gray-600">100</div>
                <div class="text-gray-600">200</div>
                <div class="text-[#049741]">70</div>
                <div class="text-gray-600">Average</div>
                <div class="flex flex-row gap-2 ml-16">
                    <i class="exam-row fa-regular fa-eye"></i>
                    <img src="./image/pencil.svg" class="open w-4 h-4">
                </div>
            </div>
            <div class="grid grid-cols-9 items-center bg-white p-4 rounded-2xl mb-2 transition-colors cursor-pointer text-center">
                <div class="flex items-center ml-16">
                    Salary
                </div>
                <div class="text-gray-600">Jan 17, 2026</div>
                <div class="text-gray-600">25</div>
                <div class="text-gray-600">Writing</div>
                <div class="text-gray-600">100</div>
                <div class="text-gray-600">200</div>
                <div class="text-[#049741]">70</div>
                <div class="text-gray-600">Average</div>
                <div class="flex flex-row gap-2 ml-16">
                    <i class="exam-row fa-regular fa-eye"></i>
                    <img src="./image/pencil.svg" class="open w-4 h-4">
                </div>
            </div>
            <div class="grid grid-cols-9 items-center bg-white p-4 rounded-2xl mb-2 transition-colors cursor-pointer text-center">
                <div class="flex items-center ml-16">
                    Salary
                </div>
                <div class="text-gray-600">Jan 17, 2026</div>
                <div class="text-gray-600">25</div>
                <div class="text-gray-600">Writing</div>
                <div class="text-gray-600">100</div>
                <div class="text-gray-600">200</div>
                <div class="text-[#049741]">70</div>
                <div class="text-gray-600">Average</div>
                <div class="flex flex-row gap-2 ml-16">
                    <i class="exam-row fa-regular fa-eye"></i>
                    <img src="./image/pencil.svg" class="open w-4 h-4">
                </div>
            </div>
            <div class="grid grid-cols-9 items-center bg-white p-4 rounded-2xl mb-2 transition-colors cursor-pointer text-center">
                <div class="flex items-center ml-16">
                    Salary
                </div>
                <div class="text-gray-600">Jan 17, 2026</div>
                <div class="text-gray-600">25</div>
                <div class="text-gray-600">Writing</div>
                <div class="text-gray-600">100</div>
                <div class="text-gray-600">200</div>
                <div class="text-[#049741]">70</div>
                <div class="text-gray-600">Average</div>
                <div class="flex flex-row gap-2 ml-16">
                    <i class="exam-row fa-regular fa-eye"></i>
                    <img src="./image/pencil.svg" class="open w-4 h-4">
                </div>
            </div>
            <div class="grid grid-cols-9 items-center bg-white p-4 rounded-2xl mb-2 transition-colors cursor-pointer text-center">
                <div class="flex items-center ml-16">
                    Salary
                </div>
                <div class="text-gray-600">Jan 17, 2026</div>
                <div class="text-gray-600">70</div>
                <div class="text-gray-600">Writing</div>
                <div class="text-gray-600">100</div>
                <div class="text-gray-600">200</div>
                <div class="text-[#049741]">70</div>
                <div class="text-gray-600">Average</div>
                <div class="flex flex-row gap-2 ml-16">
                    <i class="exam-row fa-regular fa-eye"></i>
                    <img src="./image/pencil.svg" class="open w-4 h-4">
                </div>
            </div>
            <div class="grid grid-cols-9 items-center bg-white p-4 rounded-2xl mb-2 transition-colors cursor-pointer text-center">
                <div class="flex items-center ml-16">
                    Salary
                </div>
                <div class="text-gray-600">Jan 17, 2026</div>
                <div class="text-gray-600">70</div>
                <div class="text-gray-600">Writing</div>
                <div class="text-gray-600">100</div>
                <div class="text-gray-600">200</div>
                <div class="text-[#049741]">70</div>
                <div class="text-gray-600">Average</div>
                <div class="flex flex-row gap-2 ml-16">
                    <i class="exam-row fa-regular fa-eye"></i>
                    <img src="./image/pencil.svg" class="open w-4 h-4">
                </div>
            </div>
            <div class="grid grid-cols-9 items-center bg-white p-4 rounded-2xl mb-2 transition-colors cursor-pointer text-center">
                <div class="flex items-center ml-16">
                    Salary
                </div>
                <div class="text-gray-600">Jan 17, 2026</div>
                <div class="text-gray-600">70</div>
                <div class="text-gray-600">Writing</div>
                <div class="text-gray-600">100</div>
                <div class="text-gray-600">200</div>
                <div class="text-[#049741]">70</div>
                <div class="text-gray-600">Average</div>
                <div class="flex flex-row gap-2 ml-16">
                    <i class="exam-row fa-regular fa-eye"></i>
                    <img src="./image/pencil.svg" class="open w-4 h-4">
                </div>
            </div>
            <div class="grid grid-cols-9 items-center bg-white p-4 rounded-2xl mb-2 transition-colors cursor-pointer text-center">
                <div class="flex items-center ml-16">
                    Salary
                </div>
                <div class="text-gray-600">Jan 17, 2026</div>
                <div class="text-gray-600">70</div>
                <div class="text-gray-600">Writing</div>
                <div class="text-gray-600">100</div>
                <div class="text-gray-600">200</div>
                <div class="text-[#049741]">70</div>
                <div class="text-gray-600">Average</div>
                <div class="flex flex-row gap-2 ml-16">
                    <i class="exam-row fa-regular fa-eye"></i>
                    <img src="./image/pencil.svg" class="open w-4 h-4">
                </div>
            </div>
            </div>
    </section>
                </section>



            <section
  id="hidden"
  class="fixed inset-0 z-50 hidden flex items-center justify-center bg-[#09131A80]"
>
  <!-- Modal box -->
  <div class="bg-white rounded-3xl p-6 w-[1153px] max-w-5xl mx-4 relative">

    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-xl font-semibold">Students</h1>
      <i id="back" class="fa-solid fa-x cursor-pointer text-gray-500 hover:text-black border border-[#E1E2E5] rounded-xl p-2"></i>
    </div>

    <!-- Table wrapper -->
    <div class="p-6 rounded-2xl bg-[#FAFAFA]">
      <div id="modal" class="w-full">

        <!-- Table head -->
        <div class="grid grid-cols-6 p-4 text-[#5A5A5A] mb-2 bg-white rounded-2xl text-sm font-semibold">
          <div>T/R</div>
          <div>Name</div>
          <div>Written work</div>
          <div>Test</div>
          <div>Result</div>
          <div>Discount</div>
        </div>

        <!-- Row 1 -->
        <div class="grid grid-cols-6 items-center bg-white p-4 rounded-2xl mb-2">
          <div>
            <img src="./image/4337a10d0e1aeba5cc1996107322400db14dd3a8.png" class="w-10 h-10">
          </div>
          <div>Yaxyobek</div>
          <div>70</div>
          <div>100</div>
          <div>0</div>
          <div class="text-green-600 font-semibold ml-4">70</div>
        </div>

        <!-- Row 2 -->
        <div class="grid grid-cols-6 items-center bg-white p-4 rounded-2xl mb-2">
          <div>
            <img src="./image/764a06538e11b453d8d66a10ce7a96e5f76a4cfb.png" class="w-10 h-10">
          </div>
          <div>Yaxyobek</div>
          <div>70</div>
          <div>100</div>
          <div>0</div>
          <div class="text-red-600 font-semibold ml-4">69</div>
        </div>

        <!-- Row 3 -->
        <div class="grid grid-cols-6 items-center bg-white p-4 rounded-2xl mb-2">
          <div>
            <img src="./image/a813e22415d345dca3a26f8b3f300fac10d7d9b6.png" class="w-10 h-10">
          </div>
          <div>Yaxyobek</div>
          <div>70</div>
          <div>100</div>
          <div>0</div>
          <div class="text-green-600 font-semibold ml-4">70</div>
        </div>

        <!-- Row 4 -->
        <div class="grid grid-cols-6 items-center bg-white p-4 rounded-2xl">
          <div>#4</div>
          <div>Yaxyobek</div>
          <div>70</div>
          <div>100</div>
          <div>0</div>
          <div class="text-green-600 font-semibold ml-4">70</div>
        </div>

      </div>
    </div>

    <!-- Bottom buttons -->
    <div class="flex flex-wrap gap-6 mt-8">
      <button class="flex items-center gap-3 justify-center bg-[#F2F3F7] px-6 py-3 w-[243px] rounded-2xl">
        <img src="./image/96557e54bd16f593f89b9c0125b418508dd3eb76.png" class="w-5 h-5">
        PDF
      </button>

      <button class="flex items-center gap-3 justify-center bg-[#F2F3F7] px-6 py-3 w-[243px] rounded-2xl">
        <img src="./image/19a17ea0e052a6ac78e7a4aab41cf32944bcd92e (1).png" class="w-5 h-5">
        Excel
      </button>

      <a href=""><button class="flex items-center gap-3 justify-center bg-[#F2F3F7] px-6 py-3 w-[243px] rounded-2xl">
        <img src="./image/mail-send-01.svg" class="w-5 h-5">
        Send parents
      </button></a>

      <div class="ml-auto flex items-center">
        Common result: 170
      </div>
    </div>
  </div>
</section>
     <section
  id="hidden2"
  class="fixed inset-0 z-50 hidden flex  items-center justify-center bg-[#09131A80]"
>
  <!-- Modal box -->
  <div class="bg-white rounded-3xl p-6 w-[1153px] max-w-5xl mx-4 relative">

    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-xl font-semibold">Result Student</h1>
      <i id="comeback" class="fa-solid fa-x cursor-pointer text-gray-500 hover:text-black border border-[#E1E2E5] rounded-xl p-2"></i>
    </div>
  <div class="bg-[#FAFAFA] items-center rounded-2xl">

    <!-- Table wrapper -->
     <div class="items-center">
     <div class="Label grid grid-cols-5 bg-white p-4 rounded-2xl items-center">
      <div class="text-gray-500">
     <input type="checkbox" class="w-4 h-4 cheackbox">
      </div>                  
<div class="text-gray-500">Students</div>
<div class="text-gray-500">Written work</div>
<div class="text-gray-500 ml-12">Test</div>
<div class="text-gray-500">Result</div>
</div>
<div class="Label grid grid-cols-5 mt-2 bg-white p-4 rounded-2xl items-center">
    <div class="text-gray-500">
    <input type="checkbox" class="w-4 h-4 cheackbox">
     </div>
<div class="">Shoyadbek</div>
<div class="border-[#CBD5E1] border-2 rounded-2xl w-[112px] px-4  py-2 text-center">70</div>
<div class="border-[#CBD5E1] border-2 rounded-2xl w-[112px] px-4  py-2 text-center">70</div>
<div class="text-[#049741] font-semibold ml-4">70</div>
</div>
<div class="Label grid grid-cols-5 mt-2 bg-white p-4 rounded-2xl items-center">
  <div class="text-gray-500" >
    <input type="checkbox" class="w-4 h-4 cheackbox">
  </div>
<div class="">Shoyadbek</div>
<div class="border-[#CBD5E1] border-2 rounded-2xl w-[112px] px-4  py-2 text-center">70</div>
<div class="border-[#CBD5E1] border-2 rounded-2xl w-[112px] px-4  py-2 text-center">70</div>
<div class="text-[#049741] font-semibold ml-4">70</div>
</div>
<div class="Label grid grid-cols-5 mt-2 bg-white p-4 rounded-2xl items-center">
  <div class="text-gray-500" >
    <input type="checkbox" class="w-4 h-4 cheackbox">
  </div>
<div class="">Shoyadbek</div>
<div class="border-[#CBD5E1] border-2 rounded-2xl w-[112px] px-4  py-2 text-center">70</div>
<div class="border-[#CBD5E1] border-2 rounded-2xl w-[112px] px-4  py-2 text-center">70</div>
<div class="text-[#049741] font-semibold ml-4">70</div>
</div>
<div class="Label grid grid-cols-5 mt-2 bg-white p-4 rounded-2xl items-center">
  <div class="text-gray-500" >
    <input type="checkbox" class="w-4 h-4 cheackbox">
  </div>
<div class="">Shoyadbek</div>
<div class="border-[#CBD5E1] border-2 rounded-2xl w-[112px] px-4  py-2 text-center">70</div>
<div class="border-[#CBD5E1] border-2 rounded-2xl w-[112px] px-4  py-2 text-center">70</div>
<div class="text-[#049741] font-semibold ml-4">70</div>
</div>
<div class="Label grid grid-cols-5 mt-2 bg-white p-4 rounded-2xl items-center">
  <div class="text-gray-500" >
    <input type="checkbox" class="w-4 h-4 cheackbox">
  </div>
<div class="">Shoyadbek</div>
<div class="border-[#CBD5E1] border-2 rounded-2xl w-[112px] text-center px-4  py-2">70</div>
<div class="border-[#CBD5E1] border-2 rounded-2xl w-[112px] text-center px-4  py-2">70</div>
<div class="text-[#049741] font-semibold ml-4">70</div>
</div>
</div>
    <!-- Bottom buttons -->
    <div class="flex flex-row gap-6 mt-8">

      <button class="flex items-center w-1/2 gap-3 justify-center bg-[#F2F3F7] px-6 py-3 rounded-2xl">
        <img src="./image/19a17ea0e052a6ac78e7a4aab41cf32944bcd92e (1).png" class="w-5 h-5">
        Excel
      </button>

      <button class="flex items-center w-1/2 gap-3 justify-center bg-[#F2F3F7] px-6 py-3 rounded-2xl">
        <img src="./image/mail-send-01.svg" class="w-5 h-5">
        Send to parent
      </button>
    </div>

  </div>
</div>
</section>
<section id="hidden3" class="fixed inset-0 z-50 hidden flex  items-center justify-center bg-[#09131A80]">
    <div class="bg-white rounded-3xl p-6 w-[483px] max-w-5xl mx-4 relative">

    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-xl font-semibold">Add Exam</h1>
      <i id="back_2" class="fa-solid fa-x cursor-pointer text-gray-500 hover:text-black border border-[#E1E2E5] rounded-xl p-2"></i>
    </div>
  <div class="bg-[#FAFAFA] rounded-2xl"></div>

  <div class="items-center">
    <label class="text-gray-500" for="">exam template</label>
<table class="w-full">
                <thead>
                    <tr>
                        <th scope="col">
                            <div class="flex border border-[#E1E2E5] text-gray-500 rounded-2xl p-2 mt-2 items-center justify-between">
                                <select name="" id="" class=" w-full appearance-none font-normal outline-none">
                                    <option value="">Control work</option>
                                    <option value="">English</option>
                                    <option value="">Math</option>
                                    <option value="">Rus</option>
                                </select>
                                <i class="fa-solid fa-caret-down text-[#999FABB2]"></i>
                            </div>
                        </th>
                    </tr>
                </thead>
            </table>
  </div>

    <div class="items-center mt-5">
    <label class="text-gray-500" for="">Date</label>
<table class="w-full">
                <thead>
                    <tr>
                        <th scope="col">
                            <div class="flex border border-[#E1E2E5] text-gray-500 rounded-2xl p-2 mt-2 items-center justify-between">
                                <select name="" id="" class=" w-full appearance-none font-normal outline-none">
                                    <option value="">Jan 12, 2026</option>
                                    <option value="">Jan 13, 2026</option>
                                    <option value="">Jan 14, 2026</option>
                                    <option value="">Jan 15, 2026</option>
                                </select>
                                <i class="fa-solid fa-caret-down text-[#999FABB2]"></i>
                            </div>
                        </th>
                    </tr>
                </thead>
            </table>
  </div>
  <div class="flex gap-2 mt-4">
    <button class="p-3 bg-[#F5F5F5] w-1/2 rounded-2xl" >Cancel</button>
    <button class="bg-[#0B7BE3] text-white p-3 w-1/2 rounded-2xl" >Save</button>
  </div>
</section>
<?php require "header/footer.php"; ?>