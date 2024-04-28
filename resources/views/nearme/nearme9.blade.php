<x-base-layout>
    <body class="bg-black">
    <div class="ml-[124px] mt-[90px] h-screen">
        <img class="block overflow-none" src="{{ asset('nearme_images/9.jpg') }}" style="width: 478px;
height: 849px;
flex-shrink: 0; object-fit: cover;" usemap="#map" >

        <map name="map">
            <area shape="rect" coords="80,226,102,280" href="{{ route('nearme14') }}" alt="Near Me 14">
            <area shape="rect" coords="251,629,375,816" href="{{ route('nearme16') }}" alt="Near Me 16">
        </map>
    </div>
    </body>
</x-base-layout>
