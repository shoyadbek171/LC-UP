<?php require "header/header.php"; ?>

<div class="flex min-h-screen">

    <!-- LEFT IMAGE -->
    <div class="hidden rounded-3xl overflow-hidden top-2 left-2 lg:flex lg:w-1/2 bg-[#D8ECFF] relative">
        <img src="./image/a5d14c800b0faaec85901e77e28e522ff5aecaf6.png"
            class="w-full h-full  -2xl p-8" alt="Model">

        <img src="./image/Logo.png"
            class="h-8 absolute top-8 left-8" alt="Logo">
    </div>

    <!-- RIGHT FORM -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-8">

        <form action="home.php" method="POST" class="w-full max-w-md space-y-6">

            <h1 class="text-3xl font-bold text-gray-800 text-center lg:text-left">
                Sign up as a teacher
            </h1>

            <div>
                <label class="block mb-2 text-sm font-medium text-gray-700">
                    Phone number
                </label>
                <input type="tel" name="phone"
                    class="w-full p-3.5 border rounded-xl outline-none"
                    placeholder="+998" required>
            </div>

            <div>
                <label class="block mb-2 text-sm font-medium text-gray-700">
                    Password
                </label>
                <input type="password" name="password"
                    class="w-full p-3.5 border rounded-xl focus:ring-2 focus:ring-blue-600 outline-none"
                    placeholder="Password" required> 

                <div class="flex justify-center mt-2">
                    <a href="#" class="text-sm text-blue-600 hover:underline">
                        Forgot password?
                    </a>
                </div>
            </div>

            <button type="submit"
                class="w-full h-[40px] bg-blue-600 text-white rounded-lg hover:brightness-110 active:scale-95 transition">
                Sign up
            </button>

        </form>
    </div>

</div>
