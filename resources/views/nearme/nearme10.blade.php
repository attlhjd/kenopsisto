<x-base-layout>
    <body class="bg-black">
    <div class="ml-[73px] mt-[92px] h-screen">
        <img class="block overflow-none" src="{{ asset('nearme_images/10.jpg') }}" style="width: 809px;
height: 607px;
flex-shrink: 0; object-fit: cover;" usemap="#map" >

        <map name="map">
            <area shape="rect" coords="112,204,193,286" href="{{ route('nearme15') }}" alt="Near Me 15">
            <area shape="rect" coords="271,309,342,373" href="{{ route('video_scenario_3') }}" alt="video_scenario_3">
        </map>
    </div>
    </body>
</x-base-layout>
