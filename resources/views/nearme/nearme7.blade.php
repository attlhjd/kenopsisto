<x-base-layout>
    <body class="bg-black">
    <div class="ml-[195px] mt-[94px] h-screen">
        <img class="block overflow-none" src="{{ asset('nearme_images/7.jpg') }}" style="width: 617px;
height: 822px;
flex-shrink: 0; object-fit: cover;" usemap="#map" >

        <map name="map">
            <area shape="rect" coords="31,225,334,411" href="{{ route('nearme10') }}" alt="Near Me 10">
            <area shape="rect" coords="387,384,416,419" href="{{ route('nearme9') }}" alt="Near Me 9">
        </map>
    </div>
    </body>
</x-base-layout>
