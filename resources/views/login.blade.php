<x-template>
    <main>
        <div class="card-login w-100 h-4/5  rounded-lg border-none flex flex-col justify-self-center bg-white mt-5 p-10">
            <img src="{{ asset('image/Screenshot 2026-04-17 032525.png') }}" alt="" class="mix-blend-multiply w-25 m-auto">
            <h3 class="font-bold text-center text-3xl mt-5 mb-3">Welcome Back</h3>
            <h5 class="text-center">Continue your ediorial journey</h5>
            <label for="Email" class="pl-4 pt-4 pb-2">Email Address</label>
            <input type="text" placeholder="youremail@gmail.com" class="input-email h-10 bg-[#C4C7C9] rounded-lg outline-none" autocomplete="off">
            <div class="password flex pr-4">
                <label for="Password" class="inline pl-4 pt-4 pb-2">Password</label>
                <p class="inline ml-auto text-[#1D00A5] text-sm pt-5 pb-2">Forget?</p>
            </div>     
            <input type="password" placeholder="********" class="input-password h-10 bg-[#C4C7C9] rounded-lg outline-none">
            <div class="input-cek flex ml-4 mt-3">
                <input type="checkbox">
                <p class="ml-2">Keep me sing-in for 30 days</p>
            </div>
            <button class="mt-3 bg-[#4D44E3] h-15 w-[95%] m-auto rounded-lg text-white transition delay-100 duration-200 ease-in-out hover:-tranlate-y-1 hover:scale-105 hover:shadow-xl" >Sing in &rarr;</button>
            <div class="line-button mt-10 flex flex-col m-auto w-full">
                <hr class="mb-10 w-80 bg-[#C4C7C9] border-0 h-0.5 m-auto">
                <button class=" w-[95%] bg-[#c4c7c9] h-10 rounded-lg m-auto">Sing in With Google</button>
            </div>
            <div class="log-account flex m-auto mt-5 mb-5">
                <p>Dont'n have an account?</p>
                <a href="" class="text-[#4d44e3] ml-2">Create Account</a>
            </div>
        </div>
    </main>
</x-template>