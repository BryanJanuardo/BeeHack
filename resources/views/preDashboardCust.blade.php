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

    <div class="bg-[#F0F7F4] min-h-screen w-full flex justify-center items-center">
        <div class="min-h-screen w-5/6 bg-[#32292F] my-10">
            <form class="bg-[#F0F7F4] w-5/6 mx-auto mt-16 p-8">
                <p class="text-3xl text-[#32292F] text-center">Service List</p>
                <div class="flex flex-wrap justify-between p-4">
                    <div class="flex w-5/12 mb-5 justify-center items-center">
                        <input type="checkbox" />
                        <p class="mx-4 text-lg">Electric Work</p>
                        <div class="">
                            <p class="text-sm">Rating | ⭐0.0</p>
                            <p class="text-sm">Price | 0 IDR</p>
                        </div>
                    </div>


                </div>

                <button type="submit"
                    class="text-lg font-bold mt-5 my-2 block mx-auto text-center w-36 px-3 py-2 bg-[#99E1D9] rounded rounded-xl">Submit</button>
            </form>

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
