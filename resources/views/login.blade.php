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
            <a href="" class="text-[#3323CC] bg-[#A9ABAD] border-black pt-2 pb-2 pl-4 pr-4 mr-4 rounded-lg">Login</a>
            <a href="" class="font-bold text-white bg-[#3323cc] pt-2 pb-2 pl-4 pr-5 rounded-lg">Dasboard</a>
        </div>
    </header>
    <main>
        <div class="card-login w-80 h-4/5 border-2 border-black flex flex-col justify-self-center">
            <img src="" alt="">
            <h3>Welcome Back</h3>
            <h5>Continue your ediorial journey</h5>
            <label for="Email">Email Address</label>
            <input type="text" placeholder="youremail@gmail.com">
            <label for="Password">Password</label>
            <p>Forget?</p>
            <input type="password" placeholder="********">
            <input type="checkbox"><p>Keep me sing-in for 30 days</p>
            <button>Sing in</button>
            <button>Sing in With Google</button>
            <p>Dont'n have account?</p>
            <a href="">Register</a>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>