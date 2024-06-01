<x-base-layout>
    <style>
        .bg-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 80%;
            overflow: hidden;
        }
        .bg-video__content {
            position: absolute;
            top: 20%;
            left: 10%;
            width: 80%;
            height: 80%;
        }
        p {
            position: absolute;
            bottom: 10%;
            left: 0;
            width: 100%;
            text-align: center;
            font-size: 1.5rem;
        }
    </style>
    <body class="bg-black">
    <div class="bg-video">

        <video class="bg-video__content" src="{{ asset('videos/phone_call.webm') }}" controls>
            Your browser does not support the video tag.
        </video>


    </div>
    <p class="text-white absolute">
        This a retranscription of a phone call that FataOrgana received on MONDAY,NOVEMBER 2014, 02:13 AM
    </p>
    </body>
</x-base-layout>
