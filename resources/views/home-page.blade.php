<x-template>
    <main class="m-4">
        <p class="text-[#3323CC] font-bold mb-3">current issue</p>
        <h2 class="text-7xl font-bold mb-4">Perspective in Modern <span class="block">Design.</span></h2>
        <h4>Curated insights on architectural digital design, minimalist workflows, and the <span class="block">future of editorial experiences. </span></h4>
        <section class="mt-4 relative bg-white w-184">
            <div class="card">
                <img src="{{ asset('image/image-1.jpg') }}" alt="" class="rounded-lg">
                <p class="grid-cols-2 absolute inset-y-4 inset-x-4 p-2 bg-[#4D44E3] w-24 h-10 text-sm text-white rounded-lg font-medium">Architecture</p>
                <div class="card-info  ">
                    <h2 class="m-4 text-3xl font-medium">Creative and minimalist home office desk. Simple workspace.</h2>
                    <h4 class="m-4 text-lg">This is simple workspace with lamp and macbook white simple</h4>
                    <div class="card-user flex items-center">
                        <img src="{{asset('image/user-1.jpg')}}" alt="" class="w-10 m-4 rounded-4xl">
                        <h3 class="">User</h3>
                        <p class="ml-auto p-10 font-bold">&rarr;</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-template>