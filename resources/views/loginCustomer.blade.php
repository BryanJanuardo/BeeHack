<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

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
        <form action="{{route('customer.login.post')}}" method="POST" class="w-96 bg-[#32292F] p-10">
            @csrf
            <h2 class="text-center text-3xl text-[#99E1D9] font-bold">Customer Login</h2>
            <div class="">
                <input name="Email" placeholder="Email" type="email" class="w-full my-4 p-3" required />
                <input name="Password" placeholder="Password" type="password" class="w-full mb-5 p-3" required />
            </div>
            <a href="{{route('customer.register.index')}}" class="underline text-[#F0F7F4] block text-center">Forgot Password</a>
            <button type="submit"
                class="text-lg font-bold my-2 block mx-auto text-center w-44 px-5 py-2 bg-[#99E1D9] rounded rounded-xl">Login</button>
            <span class="text-[#F0F7F4] block text-center">Don't have account?<a href=""
                    class="underline">Register</a></span>
            <div class="flex">
                <a href="{{route('admin.login.index')}}"
                class="font-semibold mt-2 mx-1 text-center w-40 px-1 py-1 bg-[#99E1D9] rounded rounded-xl">Login as Admin</a>
                <a href="{{route('tukang.login.index')}}"
                class="font-semibold mt-2 mx-1 text-center w-40 px-1 py-1 bg-[#99E1D9] rounded rounded-xl">Login as Worker</a>
            </div>
        </form>
    </div>

</body>

</html>
