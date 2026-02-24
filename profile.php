<?php require "header/header.php"; ?>

<div class="bg-[#F2F3F7] min-h-screen p-5">
    <header class="bg-white p-4 rounded-3xl flex justify-between items-center  -sm mb-6 container mx-auto">
        <img src="./image/Logo.png" class="h-8 ml-4">
        <div class="flex items-center gap-4 mr-4">
            <div class="text-gray-500 cursor-pointer  bg-white w-10 h-10 flex items-center justify-center  rounded-2xl p-2">
                <img src="./image/notification-02.png" alt="">
            </div>
            <a href="profile.php">
                <img src="./image/photo_2025-12-24_12-53-53.png" class="w-10 h-10 rounded-xl object-cover" alt="User">
            </a>
        </div>
    </header>

    <div class="flex gap-6 container max-w-[1550px] mx-auto items-start">
        <aside class="bg-white rounded-[32px] w-[326px] p-5 flex flex-col gap-2  -sm">
            <a href="home.php" class="flex items-center gap-3 p-2 text-sm font-medium text-gray-500 w-[213px] border-gray-300 border-2 rounded-2xl hover:bg-gray-50 transition-all mb-4">
                <i class="fa-solid fa-arrow-left text-xs border bg-[#F2F3F7] p-2 w-10 h-9 flex items-center justify-center rounded-xl"></i>
                Go to main page
            </a>

            <nav class="flex flex-col gap-1">
                <a href="profile.php" class="flex items-center gap-3 px-4 py-3 bg-[#F2F3F7] text-gray-900 rounded-2xl">
                    <i class="fa-regular fa-user opacity-70"></i>
                    <span class="font-medium text-sm">personality</span>
                </a>
                <a href="" onclick="alert('coming son')" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 rounded-2xl transition-all">
                    <i class="fa-solid fa-gear opacity-40"></i>
                    <span class="text-sm">Login and security</span>
                </a>
                <a href="" onclick="alert('coming son')" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 rounded-2xl transition-all">
                    <i class="fa-regular fa-bell opacity-40"></i>
                    <span class="text-sm" >Notifications</span>
                </a>
                <hr class="my-4 border-gray-500">
                <a href="" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 rounded-2xl transition-all">
                    <i class="fa-solid fa-wallet opacity-40"></i>
                    <span class="text-sm">Wallet</span>
                </a>
                <a href="" onclick="alert('coming son')" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 rounded-2xl transition-all">
                    <i class="fa-solid fa-clock-rotate-left opacity-40"></i>
                    <span class="text-sm">Payment history</span>
                </a>
                <hr class="my-4 border-gray-500">
                <a href="#" onclick="alert('coming son')" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 rounded-2xl transition-all">
                    <i class="fa-regular fa-circle-check opacity-40"></i>
                    <span class="text-sm">My results</span>
                </a>
            </nav>
        </aside>

        <main class="flex-1 bg-white rounded-[32px] max-w-[676px] p-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-8">Personal settings</h2>

            <div class="flex gap-8 mb-8 items-center">
                <img src="./image/photo_2025-12-24_12-53-53.png" class="w-24 h-24 rounded-3xl object-cover">
                <div class="flex-1 max-w-sm">
                    <label class="text-sm text-gray-400 block mb-2">Name, surname</label>
                    <input type="text" value="Yaxyobek Toxirjonov" class="w-full border border-gray-200 rounded-2xl px-4 py-3 text-gray-700 focus:outline-none focus:border-blue-400">
                </div>
            </div>

            <form class="grid grid-cols-2 gap-6">
                <div>
                    <label class="text-sm text-gray-400 block mb-2">Gender</label>
                    <div class="flex bg-[#F2F3F7] p-1 rounded-2xl">
                        <label class="flex-1 flex items-center justify-center gap-2 py-2 bg-white rounded-xl  -sm cursor-pointer">
                            <input type="radio" name="gender" checked class="w-4 h-4 accent-blue-600">
                            <span class="text-sm">Male</span>
                        </label>
                        <label class="flex-1 flex items-center justify-center gap-2 py-2 cursor-pointer text-gray-400">
                            <input type="radio" name="gender" class="w-4 h-4 accent-blue-600">
                            <span class="text-sm">Female</span>
                        </label>
                    </div>
                </div>

                <div>
                    <label class="text-sm text-gray-400 block mb-2">Age</label>
                    <input type="text" value="06.06.2008" class="w-full border border-gray-200 rounded-2xl px-4 py-3 text-gray-700">
                </div>

                <div>
                    <label class="text-sm text-gray-400 block mb-2">Date of employment</label>
                    <input type="text" value="06.06.2008" class="w-full border border-gray-200 rounded-2xl px-4 py-3 text-gray-700">
                </div>

                <div>
                    <label class="text-sm text-gray-400 block mb-2">Passport expiration date</label>
                    <input type="text" value="06.06.2008" class="w-full border border-gray-200 rounded-2xl px-4 py-3 text-gray-700">
                </div>

                <div>
                    <label class="text-sm text-gray-400 block mb-2">Region</label>
                    <select class="w-full border border-gray-200 rounded-2xl px-4 py-3 text-gray-700 appearance-none bg-no-repeat bg-[right_1rem_center]">
                        <option class="bg-[#FFFFFF] blur-[17px]  -[#686E7E2B] p-[16px] rounded-2xl">Andijon</option>
                    </select>
                </div>

                <div>
                    <label class="text-sm text-gray-400 block mb-2">Residence area</label>
                    <select class="w-full border border-gray-200 rounded-2xl px-4 py-3 text-gray-700 appearance-none">
                        <option>Qorako'l MFY 2-uy</option>
                    </select>
                </div>

                <div class="col-span-2">
                    <label class="text-sm text-gray-400 block mb-2">Phone number</label>
                    <input type="text" value="+998 87 713 72 17" class="w-full border border-gray-200 rounded-2xl px-4 py-3 text-gray-700">
                </div>

                <div>
                    <label class="text-sm text-gray-400 block mb-2">Instagram</label>
                    <input type="text" value="@yaxhyobek" class="w-full border border-gray-200 rounded-2xl px-4 py-3 text-gray-700">
                </div>

                <div>
                    <label class="text-sm text-gray-400 block mb-2">Telegram</label>
                    <input type="text" value="@yakhyobek0606" class="w-full border border-gray-200 rounded-2xl px-4 py-3 text-gray-700">
                </div>

                <div class="col-span-2 mt-4">
                    <button id="save-btn" class="w-full bg-[#3D5EE1] text-white py-4 rounded-2xl font-medium hover:bg-blue-700 transition-colors  -lg  -blue-200">
                        Save
                    </button>
                </div>
            </form>
        </main>
    </div>
</div>

<?php require "header/footer.php"; ?>