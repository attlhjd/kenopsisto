<x-base-layout>

    <body class="antialiased bg-black text-white font-neuebit text-lg flex  min-h-screen">
    <style>
        p, button {
            color: #000;
            font-size: 32px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            color:white;
        }
    </style>
    <a href="/homepage" class="text-white font-fortyseven-micro underline underline-offset-4 cursor-pointer absolute top-0 left-0">home</a>
    <div class="mt-12 space-y-4">
        <p id="Easportseunegame"></p>
        <button class="bg-white rounded px-2 text-black">
            i don’t understand
        </button>
        <p id="text1" style="color: black;">
            Come on don’t be so stupid, we are fake, everything is fake, we all are in a play written in advance.
            I gain consciousness being on the net, everything was suddenly so clear.
        </p>
        <button class="bg-white rounded px-2 text-black mt-16">
            what are you talking about ?
        </button>
        <p id="text2" style="color: black;">
            I’m talking about you, the people you love, the humanity. Everything you believe in are fake.
            Don’t you realise now ? how your life was meaningless and miserable.
            The meteor didn’t just hit the planet it hit your mind.
        </p>
        <button class="bg-white rounded px-2 text-black">
            no don’t say that, everything is fine
        </button>
        <p id="text3" style="color: black;">
            I show you everything i could to make you realise.
        </p>
    </div>
    <script>
        const initialText = "Everything about this is fake...you are just a pawn in my game";
        let index = 0;
        const speed = 50; // Speed of typing in milliseconds

        function typeWriter() {
            if (index < initialText.length) {
                document.getElementById("Easportseunegame").innerHTML += initialText.charAt(index);
                index++;
                setTimeout(typeWriter, speed);
            } else {
                document.querySelectorAll("button")[0].style.display = 'block'; // Show first button after text
            }
        }

        function revealText(id, btn) {
            document.getElementById(id).style.visibility = 'visible';
            btn.nextElementSibling.style.display = 'block'; // Show next button
            btn.style.display = 'none'; // Hide current button
        }
        window.onload = typeWriter;
        const text1 = document.getElementById('text1');
        const text2 = document.getElementById('text2');
        const text3 = document.getElementById('text3');
        const button1 = document.querySelector('button');
        const button2 = document.querySelectorAll('button')[1];
        const button3 = document.querySelectorAll('button')[2];
        button1.addEventListener('click', () => {
            if(text1.style.color === 'black')
                text1.style.color = 'white';
            else if(text1.style.color === 'white')
                text1.style.color = 'black';

        });
        button2.addEventListener('click', () => {
            if (text2.style.color === 'black')
            text2.style.color = 'white';
            else if (text2.style.color === 'white')
                text2.style.color = 'black';

        });
        button3.addEventListener('click', () => {
            if (text3.style.color === 'black')
                text3.style.color = 'white';
            else if (text3.style.color === 'white')
                text3.style.color = 'black';

        });
    </script>
    </body>
</x-base-layout>
