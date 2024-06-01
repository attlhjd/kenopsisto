<x-base-layout>

    <body class="antialiased bg-black text-white font-neuebit text-lg flex items-center justify-center min-h-screen">
    <style>
        input[type='radio'] {
            accent-color: red;
        }

    </style>
    <a href="/homepage" class="text-white font-fortyseven-micro underline underline-offset-4 cursor-pointer absolute top-0 left-0">home</a>
    <div class="text-center">
        <p class="text-2xl font-bold mb-4">It's all submitted. <br> Do you want us to print your form for you ?</p>
        <div>
            <a href="/homepage"><button id="submitButton" class="bg-white text-black rounded px-2 font-semibold ">Home</button></a>
            <a target="_blank" href="{{asset('forms_file/here.pdf')}}"><button id="submitButton" class="bg-white text-black rounded px-2 font-semibold ml-8">Print</button></a>
        </div>
    </div>

    </body>
</x-base-layout>
