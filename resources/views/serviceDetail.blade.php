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
        <div class="w-5/6 min-h-screen py-16">
            <p class="text-4xl font-bold text-center mb-7">Service Detail</p>
            <div class="w-5/6 mx-auto bg-[#32292F] pb-14 p-5 flex">
                @foreach($tukangdetail as $td)
                <div class="w-2/6 flex flex-col justify-center items-center">
                    <img src="../img/employee.jpeg" class="" />
                    <button
                        class="text-lg font-bold mt-5 my-2 block mx-auto text-center w-36 px-2 py-1 bg-[#99E1D9] rounded rounded-xl">Hire</button>
                </div>
                <div class="w-4/6 text-[#F0F7F4]">
                    <div class="w-full flex h-3/6 ">
                        <div class="w-3/6 p-5 flex flex-col justify-center">
                            <h2 class="text-3xl font-bold text-[#99E1D9]">Identity</h2>
                            <p class="text-xl">{{ $td-> }} (20)</p>
                            <p class="text-lg">Jakarta Barat | Male</p>
                            <p class="">Painting and Decorating</p>
                        </div>
                        <div class="w-3/6 p-5 flex flex-col justify-center">
                            <h2 class="text-3xl font-bold text-[#99E1D9]">Contact</h2>
                            <p>Jamesnordan@gmail.com</p>
                            <p>+62 891011788</p>
                        </div>
                    </div>

                    <div class="w-full h-3/6 p-5 flex flex-col justify-center">
                        <h2 class="text-3xl font-bold text-[#99E1D9]">Service Information</h2>
                        <p class="">Painting and Decorating</p>
                        <p class="">Rating | ⭐8.9</p>
                        <p class="">Price | 500,000 IDR / Volunteer</p>
                        <p>
                            - Bisa mengecat dinding sesuai dengan warna keinginan pelanggan <br>
                            - Dapat merekomendasikan warna cat yang bagus<br>
                            - Dapat memperbaiki area yang terkelupas atau memudar<br>
                            - Bisa memasang wallpaper dengan berbagai pola dan tekstur<br>
                            - Bisa melukis dinding sesuai kreativitas dan sesuai keinginan pelanggan<br>
                        </p>
                    </div>
                </div>
            @endforeach    
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
