<?php require "header/header.php"; ?>

<?php require "header/lc.php"; ?>


<div class="flex items-start"> <?php require "header/sidebar.php"; ?>
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
            <div class="flex gap-3 mt-12">
                <div class="bg-[#0B7BE3] text-white p-4 rounded-3xl">
                    <button>My group</button>
                </div>
                <div>
                    <button class="bg-[#E3E3E8] p-4 rounded-3xl">Learning Center</button>
                </div>
                <div>
                    <button class="bg-[#E3E3E8]  p-4 rounded-3xl">Common</button>
                </div>
                <div class="flex flex-row ml-10 justify-between">
                    <button class="bg-[#E3E3E8] p-2 rounded-4xl flex gap-2 items-center">
                        <div class="bg-white flex items-center justify-center  rounded-2xl">
                            <img src="./image/327b176db650c8d8c333709eb7c0639de2e772e0.png" class="w-10">
                        </div>
                        <img src="./image/d3c330e4fff1e2b0d58b74ec0ff7aeae30443a8a.png" class="w-10">
                    </button>
                </div>

        </section>
        <section class="bg-[#FAFAFA] p-4 rounded-2xl gap-4">
            <div class="flex items-center bg-white p-2 justify-between rounded-2xl mb-2  transition-colors cursor-pointer">
                <div class="flex">
                    <div class="flex items-center gap-3  text-gray-600 ">
                        <span class="">1</span> <img src="./image/photo_2025-12-24_12-53-53.png" class="w-18 h-18 rounded-full">
                    </div>
                    <div class="flex flex-col gap-1 ml-4">
                        <div class="text-gray-600 items-center">
                            <h1>Shoyadbek Odilov</h1>
                        </div>
                        <div class="flex flex-row items-center gap-1"><img src="./image/327b176db650c8d8c333709eb7c0639de2e772e0.png" class="w-10">2526</div>
                    </div>
                </div>
                <div class="text-gray-600 items-center"><img src="./image/4337a10d0e1aeba5cc1996107322400db14dd3a8.png" class="w-32 rotate-[7.72deg]"></div>
            </div>
            <div class="flex items-center bg-white p-2 justify-between rounded-2xl mb-2  transition-colors cursor-pointer">
                <div class="flex">
                    <div class="flex items-center gap-3  text-gray-600 ">
                        <span class="">2</span> <img src="./image/50af3b183f4bd401f649241361aa1278ef1da165.png" class="w-18 h-18 rounded-full">
                    </div>
                    <div class="flex flex-col gap-1 ml-4">
                        <div class="text-gray-600 items-center">
                            <h1>Shoyadbek Odilov</h1>
                        </div>
                        <div class="flex flex-row items-center gap-1"><img src="./image/d3c330e4fff1e2b0d58b74ec0ff7aeae30443a8a.png" class="w-10">450</div>
                    </div>
                </div>
                <div class="text-gray-600 items-center"><img src="./image/764a06538e11b453d8d66a10ce7a96e5f76a4cfb.png" class="w-32 rotate-[7.72deg]"></div>
            </div>
            <div class="flex items-center bg-white p-2 justify-between rounded-2xl mb-2  transition-colors cursor-pointer">
                <div class="flex">
                    <div class="flex items-center gap-3  text-gray-600 ">
                        <span class="">3</span> <img src="./image/9d5e5cd461f08a3ac3f6b0c31878be4f666a64db.png" class="w-18 h-18 rounded-full">
                    </div>
                    <div class="flex flex-col gap-1 ml-4">
                        <div class="text-gray-600 items-center">
                            <h1>Shoyadbek Odilov</h1>
                        </div>
                        <div class="flex flex-row items-center gap-1"><img src="./image/327b176db650c8d8c333709eb7c0639de2e772e0.png" class="w-10">2526</div>
                    </div>
                </div>
                <div class="text-gray-600 items-center"><img src="./image/a813e22415d345dca3a26f8b3f300fac10d7d9b6.png" class="w-32 rotate-[7.72deg]"></div>
            </div>
            <div class="flex items-center bg-white p-2 justify-between rounded-2xl mb-2  transition-colors cursor-pointer">
                <div class="flex">
                    <div class="flex items-center gap-3  text-gray-600 ">
                        <span class="">4</span> <img src="./image/02ea22fe33783c608ab3aca54e6fece214706e45.png" class="w-18 h-18 rounded-full">
                    </div>
                    <div class="flex flex-col gap-1 ml-4">
                        <div class="text-gray-600 items-center">
                            <h1>Shoyadbek Odilov</h1>
                        </div>
                        <div class="flex gap-2">
                            <div class="flex flex-row items-center gap-1 bg-[#F5F5F5] rounded-xl p-1 w-20"><img src="./image/81b886e58e4ee9adda159c9997c32087509cb82f.png" class="w-8">2526</div>
                            <div class="flex flex-row items-center gap-1 bg-[#F5F5F5] rounded-xl p-1 w-20"><img src="./image/327b176db650c8d8c333709eb7c0639de2e772e0.png" class="w-8">1438</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php require "header/footer.php"; ?>