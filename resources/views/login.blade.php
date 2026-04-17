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
            <a href="" class="text-[#8E9193] m-2 ">Home</a>
            <a href="" class="text-[#8E9193] m-2">Categories</a>
            <a href="" class="text-[#8E9193] m-2">About</a>
        </div>
        <div class="nav-login-dash  p-4">
            <a href="" class="text-[#3323CC] bg-[#E0E3E5] border-black pt-2 pb-2 pl-4 pr-4 mr-4 rounded-lg">Login</a>
            <a href="" class="font-bold text-white bg-[#3323cc] pt-2 pb-2 pl-4 pr-5 rounded-lg">Dasboard</a>
        </div>
    </header>
    <main>
        <div class="card-login w-100 h-4/5  rounded-lg border-none flex flex-col justify-self-center bg-white mt-5">
            <img src="{{ asset('image/Screenshot 2026-04-17 032525.png') }}" alt="" class="mix-blend-multiply w-25 m-auto">
            <h3 class="font-bold text-center text-3xl mt-5 mb-3">Welcome Back</h3>
            <h5 class="text-center">Continue your ediorial journey</h5>
            <label for="Email" class="pl-4 pt-4 pb-2">Email Address</label>
            <input type="text" placeholder="youremail@gmail.com" class="input-email h-10 bg-[#C4C7C9] rounded-lg outline-none">
            <div class="password flex pr-4">
                <label for="Password" class="inline pl-4 pt-4 pb-2">Password</label>
                <p class="inline ml-auto text-[#1D00A5] text-sm pt-5 pb-2">Forget?</p>
            </div>     
            <input type="password" placeholder="********" class="input-password h-10 bg-[#C4C7C9] rounded-lg outline-none">
            <div class="input-cek flex ml-4 mt-3">
                <input type="checkbox">
                <p class="ml-2">Keep me sing-in for 30 days</p>
            </div>
            <button class="mt-3 bg-[#4D44E3] h-15 w-83 m-auto rounded-lg text-white">Sing in</button>
            <div class="line-button mt-10 flex flex-col m-auto">
                <hr class="mb-10 w-80 bg-[#C4C7C9] border-0 h-0.5">
                <button class=" w-83 bg-[#c4c7c9] h-10 rounded-lg">Sing in With Google</button>
            </div>
            <div class="log-account flex m-auto mt-5 mb-5">
                <p>Dont'n have an account?</p>
                <a href="" class="text-[#4d44e3] ml-2">Create Account</a>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>