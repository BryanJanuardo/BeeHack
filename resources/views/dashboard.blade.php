<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Outfit', sans-serif;
        }
    </style>
</head>

<body>

    <div class="w-full">
        {{-- Navbar --}}
        <div class="h-24 bg-[#32292F] w-full flex items-center justify-between px-8">
            <div class="text-[#99E1D9] font-extrabold">
                <a href="" class="text-2xl">CariTukang.com</a>
            </div>
            <div>
                <a href="" class="text-xl text-[#99E1D9] font-semibold ml-8">Login</a>
                <a href="" class="text-xl text-[#99E1D9] font-semibold ml-8">Register</a>
            </div>
        </div>

        {{-- First Section --}}
        <div class="bg-[#F0F7F4] flex w-full h-screen flex-col md:flex-row items-center">
            <div class="w-4/6 md:w-3/6 h-full flex justify-center items-center">
                <img src="../img/main.svg" class="w-full md:w-4/6">
            </div>
            <div class="w-5/6 md:w-3/6 h-full flex flex-col justify-center">
                <h2 class="text-4xl font-bold">Find Your Worker at CariTukang.com</h2>
                <p class="text-lg my-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe, labore.</p>
                <a href=""
                    class="text-xl font-semibold w-16 px-3 py-2 bg-[#99E1D9] animate-bounce rounded">Hire</a>
            </div>
        </div>

        {{-- Second Section --}}
        <div class="bg-[#32292F] py-10 md:py-0 md:h-screen flex justify-center items-center">
            <div class="h-5/6 md:h-4/6 w-5/6 flex flex-col justify-around">
                <div>
                    <h2 class="text-4xl my-10 md:my-0 font-bold text-[#F0F7F4] animate-bounce">Why CariTukang...</h2>
                </div>
                <div class="flex justify-around items-center flex-col md:flex-row">
                    <div class="h-72 md:h-48 lg:56 xl:h-72 w-72 md:w-48 xl:w-72 mt-10 md:mt-0 bg-[#F0F7F4]"></div>
                    <div class="h-72 md:h-48 lg:56 xl:h-72 w-72 md:w-48 xl:w-72 my-16 md:my-0 bg-[#F0F7F4]"></div>
                    <div class="h-72 md:h-48 lg:56 xl:h-72 w-72 md:w-48 xl:w-72 bg-[#F0F7F4]"></div>
                </div>
            </div>
        </div>

        {{-- Third Section --}}
        <div class="bg-[#F0F7F4] h-screen flex justify-center items-center">
            <div class="h-4/6 w-5/6 flex flex-col justify-around">
                <div>
                    <h2 class="text-4xl font-bold text-[#32292F] animate-bounce">What Could You Get</h2>
                </div>
                <div class="flex flex-col md:flex-row ">
                    <div class="my-10 flex justify-center">
                        <img src="../img/main.svg" class="w-4/6 md:w-5/6">
                    </div>
                    <div class="flex items-center">
                        <p class="text-lg font-semibold">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae
                            voluptate expedita voluptates aut
                            et incidunt dolor eos corporis unde fugiat.</p>
                    </div>

                </div>
            </div>
        </div>

        {{-- Footer --}}
        <div class="bg-[#32292F] text-[#F0F7F4] flex flex-col md:flex-row p-10 w-full">
            <div class="w-full md:w-2/6 text-center md:text-start">
                <p class="font-bold text-lg">Contact Us</p>
                <p>✉️ CariTukang@gmail.com</p>
                <p>📞 +62 123456789</p>
            </div>
            <div class="w-full md:w-2/6 my-5 md:my-0 text-center">
                <h2 class="font-bold text-3xl text-[#99E1D9]">CariTukang.Com</h2>
                <p>©CariTukang.com 2024. All Rights Reserved</p>
            </div>
            <div class="w-full md:w-2/6 text-center md:text-right">
                <p class="font-bold text-lg">Reach out us at</p>
                <p class="">Jl. Kebon Jeruk Raya No. 27, Kebon Jeruk Jakarta Barat 11530, Indonesia</p>
            </div>
        </div>

    </div>

</body>

</html>
