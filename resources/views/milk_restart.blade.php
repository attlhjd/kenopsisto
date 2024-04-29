<x-base-layout>
    <style>
        .bg-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        .bg-video__content {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
    <body class="bg-black">
    <a href="/homepage" class="text-white font-fortyseven-micro underline underline-offset-4 cursor-pointer absolute top-0 left-0">home</a>
    <!--
    <div class="bg-video">


        <video class="bg-video__content" src="{{ asset('videos/scene1.webm') }}" controls>
            Your browser does not support the video tag.
        </video>
    </div>
    -->
    </body>
</x-base-layout>
