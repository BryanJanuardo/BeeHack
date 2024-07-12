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

    <div class="min-h-screen w-full flex justify-center items-center bg-[#F0F7F4]">
        <form class="w-96 bg-[#32292F] min-h-screen my-10 p-10">
            <h2 class="text-center text-3xl text-[#99E1D9] font-bold">Register Worker</h2>
            <div class="">
                <input placeholder="Full Name" type="text" class="w-full mt-4 p-3" required />
                <input placeholder="Age" type="number" class="w-full mt-4 p-3" required />

                <div class="w-full py-4 text-[#F0F7F4]">
                    <p class="mb-2 text-lg">Gender</p>
                    <input type="radio" name="gender" value="male" id="male" required>
                    <label for="male" class="">Male</label>

                    <input type="radio" name="gender" value="female" id="female" required>
                    <label for="female" class="">Female</label>
                </div>
                <input placeholder="Phone Number" type="text" class="w-full p-3" required />
                <input placeholder="Location" type="text" class="w-full mt-4 p-3" required />

                <div class="flex flex-col my-3 text-[#F0F7F4]">
                    <label for="cv">Upload Your CV/Portfolio</label>
                    <input type="file" id="cv" accept=".pdf, .doc, .docx" required />
                </div>

                <textarea placeholder="Description" class="w-full mt-4 p-3" required></textarea>
            </div>
            <button type="submit"
                class="text-lg font-bold mt-5 my-2 block mx-auto text-center w-44 px-5 py-2 bg-[#99E1D9] rounded rounded-xl">Register</button>
        </form>
    </div>

</body>

</html>
