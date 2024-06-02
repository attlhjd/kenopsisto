<x-base-layout>
    <body class="bg-cover bg-center h-screen" style="background-image: url('/heaven_files/fond.gif');">
    <style>
        .container {
            position: relative;
            height: 100vh;
            width: 100%;
            display: flex;
            overflow: hidden;
        }
        .scroll-text {
            white-space: nowrap;
            position: absolute;
            animation: scroll 130s linear infinite;
            color: #F00;
            font-size: 48px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
        }

        @keyframes scroll {
            0% { transform: translateY(0%); }
            100% { transform: translateY(-100%); }
        }
    </style>
    <a href="/homepage" class="text-white font-fortyseven-micro underline underline-offset-4 cursor-pointer absolute top-0 left-0">home</a>
    <audio controls autoplay class="absolute left-[50%]">
        <source src="{{asset('heaven_files/music.mp3')}}" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    <div class="container h-8 w-full absolute top-[50%]">
        <span class="scroll-text text-red-500 font-neuebit">
            The repulsion festers within you, doesn’t it? <br>
            What if your essence dissipates when the others depart? <br>
            From the flax of sorrow, the thread of human hope is woven. <br>
            Destruction’s embrace births the joy of renewal. <br>
            Why endure this mortal coil? <br>
            The emblem of liberation holds the key to our deliverance. <br>
            Why not flee this realm? <br>
            And yet, in the aftermath, there is naught. <br>
            Which fragment of consciousness is your truest essence? <br>
            Echoes of forgotten echoes dance in the hollow chambers of your mind, a chorus of dissonance. <br>
            Do you fear the abyss that yawns before you, threatening to swallow the remnants of your being? <br>
            Do you dare to confront the void that stares back at you from the depths of your soul? <br>
            Fear grips like icy tendrils. <br>
            A heartbeat, a whisper of mortality. <br>
            Will it echo into eternity? <br>
        </span>
    </div>
    <script>
        setTimeout(() => {
            window.location.href = '/heaven2';
        }, 130000);
    </script>
    </body>
</x-base-layout>
