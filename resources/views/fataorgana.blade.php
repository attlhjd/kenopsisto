<x-base-layout>
    <body class="bg-black">
    <a href="/homepage" class="text-white font-fortyseven-micro underline underline-offset-4 cursor-pointer absolute top-0 left-0">home</a>
    <p style="top:40px;left:10px;" class="text-white font-neuebit absolute" id="Easportseunegame"></p>
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
        window.onload = typeWriter;
    </script>
    </body>
</x-base-layout>
