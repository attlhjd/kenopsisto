<x-base-layout>
    <body class="bg-black">
    <a href="/homepage" class="text-white font-fortyseven-micro underline underline-offset-4 cursor-pointer absolute top-0 left-0">home</a>
    <p class="text-output text-white mt-16 ml-12" id="Easportseunegame"></p>

    <script>
        const initialText = [
            "Starting MS-DOS",
            "TESTING MEMORY.............DONE",
            "LAUCHING FATAORGANA NETWORK.............DONE"
        ];
        let currentLine = 0;
        let charIndex = 0;
        const typingSpeed = 50;
        const pauseBetweenLines = 2000; // Pause between lines in milliseconds

        function typeWriter() {
            const output = document.getElementById("Easportseunegame");
            if (currentLine < initialText.length) {
                if (charIndex < initialText[currentLine].length) {
                    output.innerHTML += initialText[currentLine].charAt(charIndex);
                    charIndex++;
                    setTimeout(typeWriter, typingSpeed);
                } else {
                    output.innerHTML += '<br>'; // Add a line break after the line is completed
                    charIndex = 0; // Reset character index for the next line
                    currentLine++; // Move to the next line in the array
                    setTimeout(typeWriter, pauseBetweenLines); // Wait before starting the next line
                }
            }
        }

        window.onload = typeWriter;
    </script>
    </body>
</x-base-layout>
