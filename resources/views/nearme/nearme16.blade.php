<x-base-layout>
    <body class="bg-black">
    <div class="ml-[156px] mt-[100px] h-screen">
        <img class="block overflow-none" src="{{ asset('nearme_images/16.jpg') }}" style="width: 750px;
height: 1209px;
flex-shrink: 0; object-fit: cover;" usemap="#map" >

        <map name="map">
            <area shape="rect" coords="168,203,330,363" href="{{ route('nearme5') }}" alt="Near Me 5">
            <area shape="rect" coords="247,440,414,557" href="{{ route('video_scenario_3') }}" alt="video youtube">
            <area shape="rect" coords="243,778,469,957" href="{{ route('nearme3') }}" alt="Near Me 3">
        </map>
    </div>
    </body>
</x-base-layout>
