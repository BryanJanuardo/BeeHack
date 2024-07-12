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
            <a href="" class="text-xl text-[#99E1D9] font-semibold ml-8">Home</a>
            <a href="" class="text-xl text-[#99E1D9] font-semibold ml-8">Account</a>
        </div>
    </div>

    <div class="min-h-screen py-10 w-full bg-[#F0F7F4]">
        <div class=" mx-auto w-5/6">
            <p class="text-xl font-bold mb-4">Approval Worker List</p>
            <div class="grid grid-cols-9 gap-4 border border-black p-2">

                <div class="font-bold text-center">Nama Tukang</div>
                <div class="font-bold text-center">Umur</div>
                <div class="font-bold text-center">Gender</div>
                <div class="font-bold text-center">Phone Number</div>
                <div class="font-bold text-center">Description</div>
                <div class="font-bold text-center">Location</div>
                <div class="font-bold text-center">CV/Portfolio</div>
                <div class="font-bold text-center">Photo</div>
                <div class="font-bold text-center">Action</div>

                <div class="text-center">James</div>
                <div class="text-center">20</div>
                <div class="text-center">Male</div>
                <div class="text-center">+62 091231231</div>
                <div class="text-center">Saya seorang pekerja keras dan suka membantu orang</div>
                <div class="text-center">Jln. Kebun Jeruk, RT 12/RW 12 No. 5, Kec. Palmerah, Palmerah, Jakarta Barat
                </div>
                <div class="text-center"><a>Link Porto</a></div>
                <div class="text-center"><a>Link Photo</a></div>
                <div class="text-center flex">
                    <button class="bg-green-500 h-10 px-1 rounded">Approve</button>
                    <button class="bg-red-500 h-10 px-1 rounded">Reject</button>
                </div>
            </div>
        </div>
        <div class="my-8 mx-auto w-5/6">
            <p class="text-xl font-bold mb-4">Approval New Service Type</p>
            <div class="grid grid-cols-7 gap-4 border border-black p-2">

                <div class="font-bold text-center">ID Tukang</div>
                <div class="font-bold text-center">Service Type Name</div>
                <div class="font-bold text-center">Deskripsi</div>
                <div class="font-bold text-center">Status</div>
                <div class="font-bold text-center">Proposed Date</div>
                <div class="font-bold text-center">Approved Date</div>
                <div class="font-bold text-center">Action</div>


                <div class="text-center">56</div>
                <div class="text-center">Painting & Decoration</div>
                <div class="text-center">Menyediakan jasa pengecatan dan dekorasi ruangan</div>
                <div class="text-center">Pending</div>
                <div class="text-center">06-11-2023</div>
                <div class="text-center">-</div>
                <div class="text-center flex">
                    <button class="bg-green-500 h-10 px-1 rounded">Approve</button>
                    <button class="bg-red-500 h-10 px-1 rounded">Reject</button>
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