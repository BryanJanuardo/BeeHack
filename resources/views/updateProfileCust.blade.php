<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>

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

    <div class="bg-[#F0F7F4] min-h-screen">
        <div class="w-full h-28 text-center flex justify-center items-center bg-slate-200">
            <p class="text-3xl font-bold">Customer Profile</p>
        </div>
        <form class="w-11/12 min-h-screen bg-[#303030] mb-10 mx-auto flex">
            <div class="w-3/12 text-[#F0F7F4] p-10">
                <img src="../img/employee1.jpg" class="" />
                <label>Update Image</label>
                <input type="file" accept=".jpg, .jpeg, .png" required />
            </div>
            <div class="w-8/12 p-10">
                <h2 class="text-center text-2xl text-[#99E1D9] font-bold">Account Details</h2>
                <input placeholder="Username" type="text" class="w-full mt-4 p-3" required />
                <input placeholder="Email" type="email" class="w-full my-4 p-3" required />
                <input placeholder="Phone Number" type="text" class="w-full p-3" required />
                <input placeholder="Password" type="password" class="w-full my-4 p-3" required />
                <input placeholder="Confirm Password" type="password" class="w-full p-3" required />

                <h2 class="text-center text-2xl text-[#99E1D9] font-bold mt-8">Address Information</h2>
                <input placeholder="Street" type="text" class="w-full mt-4 p-3" required />
                <input placeholder="State" type="text" class="w-full mt-4 p-3" required />
                <input placeholder="City" type="text" class="w-full mt-4 p-3" required />
                <input placeholder="Zip Code" type="number" class="w-full mt-4 p-3" required />

                <div class="flex justify-end mt-5">
                    <a href=""
                        class="text-lg font-bold text-center w-32 px-1 py-1 bg-slate-200 rounded rounded-xl">Cancel</a>
                    <button type="submit"
                        class="text-lg font-bold text-center w-32 px-1 py-1 bg-[#99E1D9] rounded rounded-xl">Update</button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>
