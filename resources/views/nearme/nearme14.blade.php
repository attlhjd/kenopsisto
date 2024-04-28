<x-base-layout>
    <body class="bg-black">
    <div class="ml-[213px] mt-[110px] h-screen">
        <img class="block overflow-none" src="{{ asset('nearme_images/14.jpg') }}" style="width: 636px;
height: 848px;
flex-shrink: 0; object-fit: cover;" usemap="#map" >

        <map name="map">
            <area shape="rect" coords="41,519,210,669" href="{{ route('nearme1') }}" alt="Near Me 1">
            <area shape="rect" coords="270,403,307,436" href="{{ route('nearme9') }}" alt="Near Me 9">
        </map>
    </div>
    </body>
</x-base-layout>
