<x-base-layout>
    <body class="bg-black">
    <div class="ml-[648px] mt-[84px] h-screen">
        <img class="block overflow-none" src="{{ asset('nearme_images/4.jpg') }}" style="width: 684px;
height: 912px;
flex-shrink: 0; object-fit: cover;" usemap="#map" >

        <map name="map">
            <area shape="rect" coords="134,22,320,214" href="{{ route('nearme7') }}" alt="Near Me 7">
            <area shape="rect" coords="191,395,332,446" href="{{ route('nearme1') }}" alt="Near Me 1">
            <area shape="rect" coords="520,375,557,496" href="{{ route('nearme5') }}" alt="Near Me 5">
        </map>
    </div>
    </body>
</x-base-layout>
