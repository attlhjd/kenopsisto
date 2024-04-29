<x-base-layout>
    <body class="bg-black h-screen">
    <div class="mx-[534px] my-[30px] h-screen">
        <img class="flex" src="{{ asset('nearme_images/1.jpg') }}" style="width: 820.8px; height: 868.5px; flex-shrink: 0; object-fit: cover;" usemap="#map">

        <map name="map">
            <area shape="rect" coords="153.9,231.3,621.9,551.7" href="{{ route('nearme2') }}" alt="Near Me 2">
        </map>
    </div>
    </body>
</x-base-layout>
