<x-base-layout>
    <body class="bg-black">
    <div class="ml-[648px] mt-[44px] h-screen">
        <img class="block overflow-none" src="{{ asset('nearme_images/4.jpg') }}" style="width: 620px; height: 828px; flex-shrink: 0; object-fit: cover;" usemap="#map">

        <map name="map">
            <area shape="rect" coords="121,20,290,194" href="{{ route('nearme7') }}" alt="Near Me 7">
            <area shape="rect" coords="173,359,301,405" href="{{ route('nearme1') }}" alt="Near Me 1">
            <area shape="rect" coords="471,341,505,451" href="{{ route('nearme5') }}" alt="Near Me 5">
        </map>
    </div>
    </body>
</x-base-layout>
