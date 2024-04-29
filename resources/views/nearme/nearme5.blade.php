<x-base-layout>
    <body class="bg-black">
    <div class="ml-[180px] mt-[5px] h-screen">
        <img class="block overflow-none" src="{{ asset('nearme_images/5.jpg') }}" style="width: 601px;
height: 901px;
flex-shrink: 0; object-fit: cover;" usemap="#map" >

        <map name="map">
            <area shape="rect" coords="28,27,190,190" href="{{ route('nearme6') }}" alt="Near Me 6">
        </map>
    </div>
    </body>
</x-base-layout>
