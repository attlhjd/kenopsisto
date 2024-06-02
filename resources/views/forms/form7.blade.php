<x-base-layout>

    <body class="antialiased bg-black text-white flex-col font-neuebit text-lg flex items-center justify-center min-h-screen">
    <style>
        input[type='radio'] {
            accent-color: red;
        }
         select {
            color: #000;
            font-size: 24px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
        }
        option {
            color: #000;
            font-size: 12px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
        }
    </style>
    <a href="/homepage" class="text-white font-fortyseven-micro underline underline-offset-4 cursor-pointer absolute top-0 left-0">home</a>
    <div class="text-center text-2xl ">
        <select name="first" id="first_select" class="text-black w-48 rounded ml-4">
            <option value="">All I want</option>
            <option value="">All I crave</option>
            <option value="">My only wish</option>
        </select>
        <select name="first" id="first_select" class="text-black rounded ml-4">
            <option value="">has to be</option>
            <option value="">is going to be</option>
        </select>
        <select name="first" id="first_select" class="text-black w-80 rounded ml-4">
            <option value="">lethal</option>
            <option value="">granted</option>
        </select>
    </div>
    <a href="/form8"><button id="submitButton" class="bg-white text-black rounded px-2 font-semibold mt-12">Submit</button></a>

    </body>
</x-base-layout>
