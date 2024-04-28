<x-base-layout title="home page" >
    <body class="text-white bg-black grid grid-cols-1 place-items-center space-y-48">

    <div class="mt-32">
        <a href="{{ route('benotafraid') }}">
            <img class="flex" src="{{asset('home/maison.png')}}" alt="titre">
        </a>
    </div>
    <div>
        <a href="{{ route('theabyss') }}">
            <img class="flex" src="{{asset('home/silhouette.png')}}" alt="titre">
        </a>
    </div>
    <div>
        <a href="">
            <img class="flex" src="{{asset('home/abysse.png')}}" alt="titre">
        </a>
    </div>
    <div>
        <a href="">
            <img class="flex" src="{{asset('home/lumiere.png')}}" alt="titre">
        </a>
    </div>
    <div>
        <a href="">
            <img class="flex" src="{{asset('home/ORDI.png')}}" alt="titre">
        </a>
    </div>
    <div>
        <a href="">
            <img class="flex" src="{{asset('home/PANNEAU.png')}}" alt="titre">
        </a>
    </div>
    <div>
        <a href="">
            <img class="flex" src="{{asset('home/TOBOGGAN.png')}}" alt="titre">
        </a>
    </div>


    </body>
</x-base-layout>
