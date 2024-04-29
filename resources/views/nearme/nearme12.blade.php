<x-base-layout>
    <body class="bg-black">
    <div class="ml-[213px] h-screen">
        <img class="block overflow-none" src="{{ asset('nearme_images/12.jpg') }}" style="width: 1102px;
height: 910px;
flex-shrink: 0; object-fit: cover;" usemap="#map" >

        <map name="map">
            <area shape="rect" coords="545,283,653,472" href="{{ route('nearme8') }}" alt="Near Me 8">
            <area shape="rect" coords="869,215,1012,377" href="{{ route('nearme16') }}" alt="Near Me 16">
        </map>
    </div>
    </body>
</x-base-layout>
