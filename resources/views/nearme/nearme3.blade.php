<x-base-layout>
    <body class="bg-black">
    <div class="ml-[573px] mt-[18px] h-screen">
        <img class="block overflow-none" src="{{ asset('nearme_images/3.jpg') }}" style="width: 835px;
height: 1044px;
flex-shrink: 0; object-fit: cover;" usemap="#map" >

        <map name="map">
            <area shape="rect" coords="92,122,219,333" href="{{ route('nearme5') }}" alt="Near Me 5">
            <area shape="rect" coords="417,583,588,716" href="{{ route('nearme9') }}" alt="Near Me 9">
        </map>
    </div>
    </body>
</x-base-layout>
