<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

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
        <form method="POST" action="{{ route('tukang.register.post') }}" enctype="multipart/form-data" class="w-96 bg-[#32292F] min-h-screen my-10 p-10">
            @csrf
            <h2 class="text-center text-3xl text-[#99E1D9] font-bold">Register Worker</h2>
            <div class="">
                <div class="form-body">
                        <input placeholder="Full Name" name="Nama" type="text" class="w-full mt-4 p-3" required />
                        @error('Nama')
                            <span class="text-center text-red-500">{{ $message }}</span>
                        @enderror

                        <input placeholder="Age" name="Umur" type="number" class="w-full mt-4 p-3" required />
                        @error('Umur')
                            <span class="text-center text-red-500">{{ $message }}</span>
                        @enderror

                        <div class="w-full py-4 text-[#F0F7F4]">
                            <p class="mb-2 text-lg">Gender</p>
                            <input type="radio" name="Gender" value="Male" id="male">
                            <label for="male" class="">Male</label>

                            <input type="radio" name="Gender" value="Female" id="female">
                            <label for="female" class="">Female</label>
                        </div>
                        @error('Gender')
                            <span class="text-center text-red-500">{{ $message }}</span>
                        @enderror

                        <input placeholder="Email" name="Email" type="text" class="w-full p-3" required />
                        @error('Email')
                            <span class="text-center text-red-500">{{ $message }}</span>
                        @enderror

                        <input placeholder="Phone Number" name="NomorTelepon" type="text" class="w-full mt-4 p-3" required />
                        @error('NomorTelepon')
                            <span class="text-center text-red-500">{{ $message }}</span>
                        @enderror

                        <input placeholder="Location" name="Alamat" type="text" class="w-full mt-4 p-3" required />
                        @error('Alamat')
                            <span class="text-center text-red-500">{{ $message }}</span>
                        @enderror

                        <input placeholder="Password" name="Password" type="text" class="w-full mt-4 p-3" required />
                        @error('Password')
                            <span class="text-center text-red-500">{{ $message }}</span>
                        @enderror

                        <input placeholder="ConfirmPassword" name="ConfirmPassword" type="text" class="w-full mt-4 p-3" required />
                        @error('ConfirmPassword')
                            <span class="text-center text-red-500">{{ $message }}</span>
                        @enderror

                        <textarea placeholder="Description" name="Deskripsi" class="w-full mt-4 p-3" required></textarea>
                        @error('Deskripsi')
                            <span class="text-center text-red-500">{{ $message }}</span>
                        @enderror

                        <div class="flex flex-col my-3 text-[#F0F7F4]">
                            <label for="cv">Upload Your CV/Portfolio</label>
                            <input type="file" id="cv" accept=".pdf, .doc, .docx" required />
                        </div>
                    </div>
                    <span class="text-center block text-white">Have Account? <a href="{{route('tukang.login.index')}}" class="underline">Sign In</a></span>

                    <button type="submit"
                    class="text-lg font-bold mt-5 my-2 block mx-auto text-center w-44 px-5 py-2 bg-[#99E1D9] rounded rounded-xl">Register</button>
            </div>
        </form>
    </div>

</body>

</html>
