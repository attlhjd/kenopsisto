<x-base-layout>
    <body class="antialiased bg-black text-white">
    <main class="flex flex-col justify-center items-center w-full min-h-screen">
        <img class="block mb-4" src="{{asset('images/titre.png')}}" alt="titre">
        <section class="text-center">
            <div class="grid grid-cols-2 gap-32">
                <a href="{{ route('nearme1') }}"><span>>NEAR ME</span></a>
                <a href="{{ route('homepage') }}"><span>>ENTER</span></a>
            </div>
        </section>
    </main>
    </body>
</x-base-layout>
