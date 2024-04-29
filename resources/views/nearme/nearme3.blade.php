<x-base-layout>
    <body class="bg-black">
    <div class="ml-[573px] mt-[18px] h-screen">
        <img class="block overflow-none" src="{{ asset('nearme_images/3.jpg') }}" style="width: 751.5px; height: 939.6px; flex-shrink: 0; object-fit: cover;" usemap="#map">

        <map name="map">
            <area shape="rect" coords="82.8,109.8,197.1,299.7" href="{{ route('nearme5') }}" alt="Near Me 5">
            <area shape="rect" coords="375.3,524.7,529.2,644.4" href="{{ route('nearme9') }}" alt="Near Me 9">
        </map>
    </div>
    </body>
</x-base-layout>
