<x-base-layout>
    <body class="bg-black">
    <div class="ml-[666px] mt-[10px] h-screen">
        <img class="block overflow-none" src="{{ asset('nearme_images/13.jpg') }}" style="width: 648px;
height: 864px;
flex-shrink: 0; object-fit: cover;" usemap="#map" >

        <map name="map">
            <area shape="rect" coords="38,65,242,143" href="{{ route('nearme17') }}" alt="Near Me 17">
            <area shape="rect" coords="344,360,420,430" href="{{ route('endoftime') }}" alt="tulpa2">
        </map>
    </div>
    </body>
</x-base-layout>
