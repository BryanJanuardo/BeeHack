<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    @if (Auth::guard('admin')->check())

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
    @elseif (Auth::guard('customer')->check())
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
    @elseif (Auth::guard('tukang')->check())
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
    @endif

    @yield('Content')

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
