<x-base-layout>
    <body class="bg-black">
    <div class="ml-[542px] mt-[11px] h-screen">
        <img class="block overflow-none" src="{{ asset('nearme_images/8.jpg') }}" style="width: 896px;
height: 899px;
flex-shrink: 0; object-fit: cover;" usemap="#map" >

        <map name="map">
            <area shape="rect" coords="330,283,498,451" href="{{ route('nearme15') }}" alt="Near Me 15">
        </map>
    </div>
    </body>
</x-base-layout>
