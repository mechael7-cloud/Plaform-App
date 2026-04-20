<x-template>
    <main class="mt-4 ml-8">
        <p class="text-[#3323CC] font-bold mb-3">current issue</p>
        <h2 class="text-7xl font-bold mb-4">Perspective in Modern <span class="block">Design.</span></h2>
        <h4>Curated insights on architectural digital design, minimalist workflows, and the <span class="block">future of editorial experiences. </span></h4>
        <section class="mt-10 relative pr-8 grid grid-cols-3  gap-11">
            <div class="card bg-white  hover:text-[#4D44E3] overflow-hidden mb-10 rounded-lg col-span-2">
                <div class="image w-full  overflow-hidden aspect-video">
                    <img src="{{ asset('image/image-4.png') }}" alt="" class="rounded-lg transition delay-100 duration-150 ease-in-out w-full h-full  hover:scale-110 object-cover">
                </div>
                <p class="grid-cols-2 absolute inset-y-4 inset-x-4 p-2 bg-[#4D44E3] w-24 h-10 text-sm text-white rounded-lg font-medium">Architecture</p>
                <div class="card-info">
                    <h2 class="m-4 text-3xl font-medium">Creative and minimalist home office desk. Simple workspace.</h2>
                    <h4 class="m-4 text-lg text-black">This is simple workspace with lamp and macbook white simple</h4>
                    <div class="card-user flex items-center h-20">
                        <img src="{{asset('image/user-1.jpg')}}" alt="" class="w-10 m-4 rounded-4xl">
                        <h3 class="text-black">User</h3>
                        <span class="ml-auto p-10 font-bold text-3xl text-[#4D44E3]">&rarr;</span>
                    </div>
                </div>
            </div>
            <div class="card bg-white    hover:text-[#4D44E3] overflow-hidden mb-10 rounded-lg col-span-1"> 
                <div class="image w-184 h-auto overflow-hidden">
                    <img src="{{ asset('image/image-5.png') }}" alt="" class="rounded-lg transition delay-100 duration-150 ease-in-out w-full h-120  hover:scale-110 object-cover">
                </div>
                <p class="grid-cols-2 absolute inset-y-4 inset-x-4 p-2 bg-[#4D44E3] w-24 h-10 text-sm text-white rounded-lg font-medium">Architecture</p>
                <div class="card-info">
                    <h2 class="m-4 text-3xl font-medium">Creative and minimalist home office desk. Simple workspace.</h2>
                    <h4 class="m-4 text-lg text-black">This is simple workspace with lamp and macbook white simple</h4>
                    <div class="card-user flex items-center h-20">
                        <img src="{{asset('image/user-1.jpg')}}" alt="" class="w-10 m-4 rounded-4xl">
                        <h3 class="text-black">User</h3>
                        <span class="ml-auto p-10 font-bold text-3xl text-[#4D44E3]">&rarr;</span>
                    </div>
                </div>
            </div>
            <div class="container col-span-2 grid grid-cols-2 gap-16">
                <div class="card w-120 bg-white rounded-lg">
                    <h3 class="font-bold bg-[#4D44E3] text-white w-24 rounded-lg p-3 m-5 text-center">Editorial</h3>
                    <h2 class="text-3xl font-medium ml-4 mt-15">The Death of the Template</h2>
                    <h4 class="mt-10 ml-4 ">Breaking free from the rigid 12-column grid to create bespoke reading experiences that feel alive.</h4>
                    <div class="card-user flex items-center h-20 mt-30">
                        <img src="{{asset('image/user-1.jpg')}}" alt="" class="w-10 m-4 rounded-4xl">
                        <h3 class="text-black">User</h3>
                        <span class="ml-auto p-10 font-bold text-3xl text-[#4D44E3]">&rarr;</span>
                    </div>
                </div>
                <div class="card bg-white rounded-lg">
                    <div class="card-image w-full aspect-video overflow-hidden">
                    <img src="{{asset('image/image-7.png')}}" alt="" class="object-cover h-full w-full rounded-lg transition delay-100 duration-200 hover:scale-110">
                    </div>
                    <div class="card mt-5 p-4">
                        <a href="" class="ml-8 text-[#4D44E3] font-medium ">HARDWARE</a>
                        <a href="" class="font-medium text-[#C4C7C9] ml-4">TECHNIQUE</a>
                    <h2 class="ml-8 font-medium text-2xl mt-4">Analogue Tools in a Digital Age</h2>
                    <h4 class="ml-8 mt-4">Why the best digital editors still start their process with a fountain pen and heavy cardstock.</h4>
                    </div>
                </div>
            </div>
            <div class="card-subc bg-[#3323CC] rounded-lg">
                <img src="{{ asset('image/image-8.png') }}" alt="" class="h-25 ml-1 mt-4">
                <h2 class="ml-8 text-white text-3xl font-medium mt-2">Subscribe to the Architect</h2>
                <h3 class="text-white ml-8 mt-5">Get weekly insights on design, editorial strategy, and premium CMS management directly to your inbox.</h3>
                <div class="card-input mt-40 ml-5 bg-[#6760FD] p-3 rounded-lg mr-5">
                    <input type="text" placeholder="email@example.com">
                </div>
            </div>
        </section>
    </main>
</x-template>