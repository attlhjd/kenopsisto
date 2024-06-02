<x-base-layout>
    <body class="bg-black flex flex-col items-center justify-center h-screen text-white text-center">
    <a href="/homepage" class="text-white font-fortyseven-micro underline underline-offset-4 cursor-pointer absolute top-0 left-0">home</a>

    <div class="grid grid-cols-2">
        <div>
            <div class="flex items-center">
                <p class="text-white font-fortyseven-micro" style="color: #FFF;
        font-size: 32px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;">CAM 1 </p><img src="{{ asset('wiki/Ellipse 10.svg') }}" alt=""/>
            </div>
            <video src="{{ asset('security_files/You are not real .webm') }}" autoplay repeat></video>
        </div>
        <div>
            <div>
                <div class="flex items-center">
                    <p class="text-white font-fortyseven-micro" style="color: #FFF;
        font-size: 32px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;">CAM 2 </p><img src="{{ asset('wiki/Ellipse 10.svg') }}" alt=""/>
                </div>
                <video style="width: 40%" src="{{ asset('security_files/panneau 2.webm') }}" autoplay repeat></video>
            </div>
        </div>
    </div>
    <a href="{{ route('you') }}" class="absolute" style="bottom:5%;right:7%">
    <div class="flex items-center flex flex-row-reverse">
        <p class="text-white font-fortyseven-micro" style="color: #FFF;
        font-size: 32px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;">CAM 3 </p><img src="{{ asset('wiki/Ellipse 10.svg') }}" alt=""/>
    </div>
    </a>
    </body>
</x-base-layout>
