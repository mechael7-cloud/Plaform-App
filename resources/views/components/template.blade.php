<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="bg-[#f8fafc]">
    <header class="flex bg-white items-center">
        <h2 class="m-4 text-4xl text-[#4f46e5]  font-bold">Plaform</h2>
        <div class="nav-bar flex m-auto" >
            <a href="" class="text-[#8E9193] m-2 hover:underline hover:text-[#3323CC]">Home</a>
            <a href="" class="text-[#8E9193] m-2 hover:underline hover:text-[#3323CC]">Categories</a>
            <a href="" class="text-[#8E9193] m-2 hover:underline hover:text-[#3323CC]">About</a>
        </div>
        <div class="nav-login-dash  p-4">
            <a href="" class="text-[#3323CC] bg-[#E0E3E5] border-black pt-2 pb-2 pl-4 pr-4 mr-4 rounded-lg  ">Login</a>
            <a href="" class="font-bold text-white bg-[#3323cc] pt-2 pb-2 pl-4 pr-5 rounded-lg transition-all duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:shadow-lg">Dasboard</a>
        </div>
    </header>

    {{ $slot }}

    <footer>

    </footer>
</body>
</html>