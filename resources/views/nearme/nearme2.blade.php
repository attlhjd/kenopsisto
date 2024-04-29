<x-base-layout>
    <body class="bg-black">
    <div class="ml-[405px] mt-[20px] h-screen">
        <img  src="{{ asset('nearme_images/2.jpg') }}" style="width: 1170px;
height: 789px;
flex-shrink: 0; object-fit: cover;" usemap="#map" >

        <map name="map">
            <area shape="rect" coords="98,335,284,519" href="{{ route('nearme3') }}" alt="Near Me 2">
            <area shape="rect" coords="502,259,553,307" href="{{ route('nearme9') }}" alt="Near Me 9">
            <area shape="rect" coords="1055,140,1146,200" href="{{ route('nearme15') }}" alt="Near Me 15">
        </map>
    </div>
    </body>
</x-base-layout>
