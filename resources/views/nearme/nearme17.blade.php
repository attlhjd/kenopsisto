<x-base-layout>
    <body class="bg-black">
    <div class="ml-[168px] mt-[30px] h-screen">
        <img class="block overflow-none" src="{{ asset('nearme_images/17.jpg') }}" style="width: 1120px;
height: 840px;
flex-shrink: 0; object-fit: cover;" usemap="#map" >

        <map name="map">
            <area shape="rect" coords="390,148,442,557" href="{{ route('nearme6') }}" alt="Near Me 6">
            <area shape="rect" coords="771,180,853,336" href="" alt="webcam">
            <area shape="rect" coords="695,624,854,775" href="{{ route('doc_txt') }}" alt="doc txt">
        </map>
    </div>
    </body>
</x-base-layout>

