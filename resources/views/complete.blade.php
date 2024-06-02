<x-base-layout>
    <body class="bg-black">
    <a href="/homepage" class="text-white font-fortyseven-micro underline underline-offset-4 cursor-pointer absolute top-0 left-0">home</a>
    <div class="absolute top-[45%] left-[45%] text-center">
        <img src="{{asset('complete_image/icone.png')}}" style="width: 223px;
height: 124px;" class="" alt="">
        <a href="{{route('transcript')}}" class="text-white">transcript.txt</a>
    </div>
    </body>
</x-base-layout>
