<x-base-layout>
    <body class="bg-black">
    <div class="ml-[645px] mt-[80px] h-screen">
        <img class="block overflow-none" src="{{ asset('nearme_images/11.jpg') }}" style="width: 691px;
height: 921px;
flex-shrink: 0; object-fit: cover;" usemap="#map" >

        <map name="map">
            <area shape="rect" coords="83,119,239,412" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" alt="video youtube">
            <area shape="rect" coords="563,272,616,412" href="{{ route('nearme16') }}" alt="Near Me 16">
        </map>
    </div>
    </body>
</x-base-layout>
