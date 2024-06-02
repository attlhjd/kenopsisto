<x-base-layout>
    <style>
        .placemoisa {
            position: absolute;
            top: 50%;
            left: 70%;
        }
        p {
            color: #000;
            font-family: Whyte;
            font-size: 16px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
        }
        span{
            color: #000;
            font-family: Whyte;
            font-size: 16px;
            font-style: italic;
            font-weight: 350;
            line-height: normal;
        }
        input  {
            width: 200px;
            height: 40px;
            border: 4px solid #000;
        }
        .placeholder {
            position: absolute;
            top: 40%;
            left: 3%;
            letter-spacing: 4px;
        }
        .h_line {
            width: 170px;
            height: 4px;
            background-color: #000;
            position: absolute;
            top: 70%;
            left: 10%;
        }
    </style>
    <body class="bg-white">
    <a href="/homepage" class="text-black font-fortyseven-micro underline underline-offset-4 cursor-pointer absolute top-0 left-0">home</a>
    <div class="placemoisa">
        <p>FATAORGANA-<span>LOGIN</span></p>
        <input type="text" class="px-2">
        <p class="placeholder">--------</p>
        <a style="color: #000;leading-trim: both;text-edge: cap;font-size: 12px;font-style: normal;font-weight: 500;line-height: normal;">SUBMIT_</a>
        <p>/////</p>
        <div class="h_line"></div>
        <p>CURR_NETWORK : UNKNOWN</p>
    </div>
    <script>
        document.querySelector('input').addEventListener('input', function(e) {
            if (e.target.value === '21122012') {
                window.location.href = '/employee';
            }
        });
    </script>
    </body>
</x-base-layout>
