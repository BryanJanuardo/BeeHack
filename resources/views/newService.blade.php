<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Service</title>

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

    <div class="h-screen w-full flex justify-center items-center bg-[#F0F7F4]">
        <form method="POST" action="{{ route('registerservicetype') }}" enctype="multipart/form-data" class="w-96 bg-[#32292F] p-10">
            @csrf
            <h2 class="text-center text-3xl text-[#99E1D9] font-bold">New Service Type</h2>
            <div class="">
                <input placeholder="Service Name" name="ServiceNama" type="text" class="w-full my-4 p-3" required />
                @error('ServiceNama')
                    <span class="text-center text-red-500">{{ $message }}</span>
                @enderror
                <textarea placeholder="Description" name="DeskripsiService" class="w-full mb-5 p-3" required></textarea>
                @error('DeskripsiService')
                    <span class="text-center text-red-500">{{ $message }}</span>
                @enderror

            </div>
            <button type="submit"
                class="text-lg font-bold block mx-auto text-center w-44 px-5 py-2 bg-[#99E1D9] rounded-xl">Submit</button>
        </form>
    </div>

</body>

</html>
