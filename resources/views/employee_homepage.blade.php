<x-base-layout>
    <body>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
            background: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 16px;
            line-height: 1.5;
        }

        .menu {
            position: absolute;
            left: 0;
            top: 0;
            padding: 50px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            height: 100%;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 30px;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        li {
            margin-bottom: 15px;
            font-weight: bold;
        }

        .message {
            position: absolute;
            right: 50px;
            top:  60%;
            transform: translateY(-50%);
            font-size: 24px;
            writing-mode: vertical-rl;
            text-align: center;
            transform-origin: bottom;
            color: #000;
            font-family: Whyte;
            font-size: 32px;
            font-style: normal;
            font-weight: 900;
            line-height: normal;
        }
        .vertical-line {
            position: absolute;
            right: 60px;
            top: 100px;
            bottom: 0;
            width: 2px; /* Line thickness */
            background-color: black; /* Line color */
            height: 30%;
        }
        .coin-bas {
            position: absolute;
            right: 60px;
            bottom:  60px;
            width: 150px;
            height: 150px;
            background-color: white;
            border-right: 3px solid black;
            border-bottom: 3px solid black;
        }
        .coin-haut {
            position: absolute;
            left: 30px;
            top:  30px;
            width: 150px;
            height: 150px;
            border-left: 3px solid black;
            border-top: 3px solid black;
        }
    </style>

    <div class="menu" style="z-index: 3">
        <div class="flex items-center align-middle">
            <img style="width:3%; margin-bottom:30px; margin-right: 10px; " src="{{ asset('images/logo_fata.png') }}" alt=""><h1>FATAORGANA INSTITUTE- EMPLOYEE PORTAL</h1>
        </div>
        <ul >
            <a href="{{ route('handbook') }}"><li class="cursor-pointer" id="text1">■ Handbook</li></a>
            <a href="{{ route('badge') }}"><li class="cursor-pointer" id="text2">■ Badge</li></a>
        </ul>
    </div>
    </body>
</x-base-layout>
