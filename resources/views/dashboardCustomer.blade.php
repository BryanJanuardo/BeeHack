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
    {{-- Navbar --}}
    <div class="h-24 bg-[#32292F] w-full flex items-center justify-between px-8">
        <div class="text-[#99E1D9] font-extrabold">
            <a href="" class="text-2xl">CariTukang.com</a>
        </div>
        <div>
            <a href="" class="text-xl text-[#99E1D9] font-semibold ml-8">History</a>
            <a href="" class="text-xl text-[#99E1D9] font-semibold ml-8">Order</a>
            <a href="" class="text-xl text-[#99E1D9] font-semibold ml-8">Worker Page</a>
            <a href="" class="text-xl text-[#99E1D9] font-semibold ml-8">Help</a>
            <a href="" class="text-xl text-[#99E1D9] font-semibold ml-8">Account</a>
        </div>
    </div>

    

    <div href="" class="flex flex-col justify-center items-center w-full min-h-screen">
        <div class="w-5/6 min-h-screen my-10">
            <p class="text-2xl font-bold mb-7">Welcome User - Ucup!</p>
            <div class="w-full h-full justify-around flex flex-wrap">
                {{-- cards --}}
                <div
                    class=" w-full md:w-5/12 md:h-80 mb-8 bg-[#32292F] py-5 md:p-5 flex md:flex-row flex-col justify-center items-center">
                    <div class="w-5/6 md:w-2/6 flex justify-center">
                        <img src="../img/employee.jpeg" class="" />
                    </div>
                    <div class="w-5/6 md:w-4/6 text-[#F0F7F4] pl-5 flex flex-col justify-center">
                        <p class="text-xl font-bold">James Nordan (20)</p>
                        <p class="text-lg font-semibold mb-3">Jakarta Barat | Male</p>
                        <p class="text-sm ">Painting and Decorating</p>
                        <p class="mb-2">Rating | ⭐8.9</p>
                        <p class="mb-3">Price | 500.000 - 1.000.000 IDR</p>
                        <a href=""
                            class="text-md text-[#32292F] font-semibold w-32 m-auto px-3 py-1 bg-[#99E1D9] rounded">Detailed
                            Info</a>
                    </div>
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

</body>

</html>
