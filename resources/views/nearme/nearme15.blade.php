<x-base-layout>
    <body class="bg-black">
    <div class="ml-[146px] mt-[16px] h-screen">
        <img class="block overflow-none" src="{{ asset('nearme_images/15.jpg') }}" style="width: 1151px;
height: 863px;
flex-shrink: 0;object-fit: cover;" usemap="#map" >

        <map name="map">
            <area shape="rect" coords="140,376,310,546" href="{{ route('nearme8') }}" alt="Near Me 8">
            <area shape="rect" coords="684,246,811,376" href="{{ route('nearme16') }}" alt="Near Me 16">
        </map>
    </div>
    </body>
</x-base-layout>
