<x-base-layout>
    <body class="bg-black h-screen flex flex-col justify-between">
    <a href="/homepage" class="text-white font-fortyseven-micro underline underline-offset-4 cursor-pointer absolute top-0 left-0">home</a>

    <!-- Top-left group of images -->
    <div class="flex-1 grid grid-cols-5 ml-[20px] mt-[60px] ">
        <div class="grid grid-cols-3 gap-2">
            <img src="{{asset('exulansist/directory_closed-4 copie.png')}}" style="width: 111px;height: 111px;flex-shrink: 0;" alt="dossier clos">
            <img src="{{asset('exulansist/directory_closed-4 copie.png')}}" style="width: 111px;height: 111px;flex-shrink: 0;" alt="dossier clos">
            <img src="{{asset('exulansist/directory_closed-4 copie.png')}}" style="width: 111px;height: 111px;flex-shrink: 0;" alt="dossier clos">
            <img src="{{asset('exulansist/directory_closed-4 copie.png')}}" style="width: 111px;height: 111px;flex-shrink: 0;"alt="dossier clos">
            <img src="{{asset('exulansist/directory_closed-4 copie.png')}}" style="width: 111px;height: 111px;flex-shrink: 0;" alt="dossier clos">
            <img src="{{asset('exulansist/directory_closed-4 copie.png')}}" style="width: 111px;height: 111px;flex-shrink: 0;" alt="dossier clos">
            <a href="{{ route('files') }}">
            <img src="{{asset('exulansist/directory_open_file_mydocs-4 copie.png')}}" style="width: 111px;height: 111px;flex-shrink: 0;" alt="dossier ouvert">
            </a>
        </div>
    </div>
    <div class="mt-64">

    </div>
    <!-- Bottom-right group of images -->
    <div class="flex-1 flex justify-end">
        <div class="mr-[20px] mb-[20px] grid grid-cols-2 gap-2">
            <div></div>
            <a href="">
            <img src="{{asset('exulansist/file_win_shortcut-2 copie.png')}}"  style="width: 111px;height: 111px;flex-shrink: 0;" alt="file win shortcut">
            </a>
            <a href="">
            <img src="{{asset('exulansist/notepad_file-2 copie.png')}}" style="width: 111px;height: 111px;flex-shrink: 0;" alt="notepad file">
            </a>
            <a href="{{ route('audio') }}">
            <img src="{{asset('exulansist/wm_file-_4.png')}}" style="width: 111px;height: 111px;flex-shrink: 0;" alt="wm file">
            </a>
        </div>
    </div>
    </body>
</x-base-layout>
