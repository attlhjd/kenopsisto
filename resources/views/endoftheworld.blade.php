<x-base-layout>
    <body class="bg-black">
    <style>
        p {
            color: #FFF;
            text-align: center;
            font-size: 48px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
        }
    </style>
    <a href="/homepage" class="text-white font-fortyseven-micro underline underline-offset-4 cursor-pointer absolute top-0 left-0">home</a>
    <div class="w-full text-center absolute top-[30%] font-neuebit">
        <p id="message" class="text-white"></p>
    </div>
    <script>
        const text = [
            "YOU SHOULD STOP WHAT YOU ARE DOING RIGHT NOW.",
            "WE KNOW WHO YOU ARE.",
            "",
            "YOU DO NOT REALIZE THE CONSEQUENCES OF YOUR ACTIONS.",
            "WE WILL NOT INTERFERE WITH WHAT IS COMING."
        ];

        const messageElement = document.getElementById('message');
        let currentLine = 0;
        let currentChar = 0;
        let interval = null;

        function typeLine() {
            if (currentLine < text.length) {
                if (currentChar < text[currentLine].length) {
                    messageElement.innerHTML += text[currentLine][currentChar++];
                } else {
                    messageElement.innerHTML += '<br><br>';
                    currentLine++;
                    currentChar = 0;
                }
            } else {
                clearInterval(interval);
                setTimeout(() => {
                    window.location.href = '/theabyss'; // Redirect after the message
                }, 2000); // Wait for 2 seconds before redirecting
            }
        }

        interval = setInterval(typeLine, 50); // Adjust typing speed by changing delay here
    </script>
    </body>
</x-base-layout>
