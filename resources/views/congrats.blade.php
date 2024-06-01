<x-base-layout>
    <body class="bg-black flex items-center justify-center h-screen text-white text-center">
    <style>
        p {
            color: #FFF;
            text-align: center;
            font-size: 32px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
        }
    </style>
    <p style="top:40px;left:10px;" class="text-white font-neuebit absolute" id="Easportseunegame"></p>
    <div>
        <a href="/homepage" class="absolute font-fortyseven-micro top-0 left-0 underline-offset-4 underline text-white">home</a>
        <p class="font-neuebit">
            CONGRATS TO YOU FOR FINDING THIS SECRET PAGE!<br> Please enter your mail address to receive your prize.
        </p>
        <input type="text" class="mt-4 p-2 text-black w-full" placeholder="email address"><br>
        <button id="submitButton" class="bg-white text-black rounded px-2 mt-4" onclick="submitadress()">Submit</button>
    </div>
    <script>
        const initialText = "subject found the special link";
        let index = 0;
        const speed = 50; // Speed of typing in milliseconds

        function typeWriter() {
            if (index < initialText.length) {
                document.getElementById("Easportseunegame").innerHTML += initialText.charAt(index);
                index++;
                setTimeout(typeWriter, speed);
            } else {
                setTimeout(() => {
                    document.getElementById("Easportseunegame").innerHTML = '';
                }, 7000);

            }
        }
        function submitadress() {
            const email = document.querySelector('input').value;
            if (email.includes('@')) {
                alert('Thank you ! You will receive a  mail soon.');
            } else {
                alert('Please enter a valid email address.');
            }
        }
        window.onload = typeWriter;
    </script>
    </body>
</x-base-layout>
