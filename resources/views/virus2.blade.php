<x-base-layout>

    <body>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
            background-color: black;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            overflow: auto; /* Allows scrolling */
            color: white;
            font-family: 'Arial', sans-serif;
        }

        .gif-container {
            margin: 20px auto; /* Center and space out each set of GIFs */
            text-align: center; /* Center the GIFs within their container */
        }

        img {
            width: 300px; /* Standardize width for all GIFs */
            height: auto;
        }

        audio {
            display: none; /* Hide the audio player interface */
        }
    </style>
    <div id="content">
        <div class="gif-container ">
            <img src="{{asset('idiot/idiot.gif')}}" alt="GIF 1">
            <img src="{{asset('idiot/idiot2.gif')}}" alt="GIF 2">
        </div>
        <audio id="audioPlayer" src="{{asset('idiot/idioto.mp3')}}" autoplay loop></audio>
    </div>

    <script>
        const audioPlayer = document.getElementById('audioPlayer');
        const gifPaths = ['{{asset('idiot/idiot.gif')}}', '{{asset('idiot/idiot2.gif')}}']; // Add paths to your GIFs

        function addRandomGifs() {
            const gifContainer = document.createElement('div');
            gifContainer.className = 'gif-container';

            // Create two images inside the container
            gifPaths.forEach(path => {
                const img = document.createElement('img');
                img.src = path;
                img.alt = 'Animated GIF';
                gifContainer.appendChild(img);
            });

            document.body.appendChild(gifContainer);

            // Position the container at a random location within the viewport
            const maxX = window.innerWidth - gifContainer.offsetWidth;
            const maxY = window.innerHeight - gifContainer.offsetHeight;
            const x = Math.random() * maxX;
            const y = Math.random() * maxY;
            gifContainer.style.position = 'absolute';
            gifContainer.style.left = `${x}px`;
            gifContainer.style.top = `${y}px`;

            // Restart the audio
            audioPlayer.pause();
            audioPlayer.currentTime = 0;
            audioPlayer.play();
        }

        // Duplicate GIFs every 10 seconds
        setInterval(addRandomGifs, 1000);
    </script>
    </body>
</x-base-layout>
