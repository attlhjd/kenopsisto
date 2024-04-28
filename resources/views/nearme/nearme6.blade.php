<x-base-layout>
    <body class="bg-black">
    <div class="ml-[180px] mt-[95px] h-screen">
        <img class="block overflow-none" src="{{ asset('nearme_images/6.jpg') }}" style="width: 620px;
height: 826px;
flex-shrink: 0; object-fit: cover;" usemap="#map" >

        <map name="map">
            <area shape="rect" coords="415,13,531,78" href="{{ route('nearme12') }}" alt="Near Me 12">
            <area shape="rect" coords="486,340,511,672" href="{{ route('nearme4') }}" alt="Near Me 4">
        </map>
    </div>
    </body>
</x-base-layout>
