<x-base-layout>
    <body class="bg-black">
    <div class="ml-[645px] mt-[20px] h-screen">
        <img class="block overflow-none" src="{{ asset('nearme_images/11.jpg') }}" style="width: 657.6px; height: 877.2px; flex-shrink: 0; object-fit: cover;" usemap="#map" >

        <map name="map">
            <area shape="rect" coords="79.1,113.3,227.5,392.2" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" alt="video youtube">
            <area shape="rect" coords="536.4,259.2,587.2,392.2" href="{{ route('nearme16') }}" alt="Near Me 16">
        </map>
    </div>
    </body>
</x-base-layout>
