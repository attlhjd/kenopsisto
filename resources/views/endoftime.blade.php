<x-base-layout>

    <body class="antialiased bg-black text-white font-neuebit text-lg flex items-center justify-center min-h-screen">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            background: black;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-family: Arial, sans-serif;
        }

        .cd-container {
            text-align: center;
            font-size: 2em; /* Adjust size for icons */
        }

        .cd-cover {
            width: 375px;
            height: 375px;
            flex-shrink: 0; /* Ensures the image doesn't scale */
            margin-bottom: 20px;
        }

        .controls {
            display: flex; /* Ensures flexbox layout */
            justify-content: center; /* Centers buttons horizontally */
            align-items: center; /* Aligns buttons vertically */
            width: 100%; /* Full width to spread out button spacing */
            gap: 15px; /* Ensures consistent spacing between buttons */
        }

        .control-btn {
            background: none;
            border: none;
            cursor: pointer;
            width: 64px; /* Consistent button size */
            height: 64px; /* Consistent button size */
        }

        .progress-bar {
            width: 100%;
            height: 4px;
            background: grey;
            position: relative;
            cursor: pointer;
        }

        .progress {
            height: 4px;
            background: white;
            width: 0%; /* Example progress */
            position: absolute;
        }
    </style>

    <a href="/homepage" class="text-white font-fortyseven-micro underline underline-offset-4 cursor-pointer absolute top-0 left-0">home</a>

    <div class="cd-container">
        <img src="{{ asset('images/cd.jpg') }}" alt="CD Cover" class="cd-cover">
        <audio id="audioPlayer" src="{{ asset('heaven_files/music.mp3') }}" autoplay></audio>
        <div class="progress-bar mb-8">
            <div class="progress" id="progress"></div>
        </div>
        <div class="controls">
            <button class="control-btn" onclick="previousTrack()"><img src="{{ asset('images/Fichier 3PLAY2.png') }}" alt="Previous"></button>
            <button class="control-btn" onclick="togglePlayPause()"><img src="{{ asset('images/Fichier 4ON.png') }}" alt="Play/Pause"></button>
            <button class="control-btn" onclick="nextTrack()"><img src="{{ asset('images/Fichier 2PLAY.png') }}" alt="Next"></button>
        </div>
    </div>

    </body>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const player = document.getElementById('audioPlayer');
            player.volume = 0.2; // Set the volume to 20%
            const progressBarContainer = document.querySelector('.progress-bar');
            const progressBar = document.getElementById('progress');

            // Play the audio right away if autoplay issues arise
            player.play().catch(error => console.error('Playback failed:', error));

            // Event listener for play/pause toggle
            document.querySelector('.control-btn:nth-child(2)').addEventListener('click', togglePlayPause);

            // Updates the progress bar as the audio plays
            player.addEventListener('timeupdate', function () {
                const percentage = Math.floor((100 / this.duration) * this.currentTime);
                progressBar.style.width = percentage + '%';
            });

            // Seek functionality when clicking on the progress bar
            progressBarContainer.addEventListener('click', function (e) {
                const bounds = this.getBoundingClientRect();
                const clickPosition = (e.pageX - bounds.left); // Horizontal position of click
                const totalWidth = bounds.width; // Total width of the progress bar
                const clickRatio = clickPosition / totalWidth;
                const newTime = clickRatio * player.duration;
                player.currentTime = newTime; // Seek the audio
            });

            // Play/Pause toggle function
            function togglePlayPause() {
                const playButton = document.querySelector('.control-btn:nth-child(2)'); // Play button
                if (player.paused || player.ended) {
                    playButton.innerHTML = '<img src="{{ asset('images/Fichier 5OFF.png') }}" alt="Play/Pause">'; // Change to pause symbol
                    player.play();
                } else {
                    playButton.innerHTML = '<img src="{{ asset('images/Fichier 4ON.png') }}" alt="Play/Pause">'; // Change to play symbol
                    player.pause();
                }
            }

            // Placeholder functions for next and previous track
            function nextTrack() {
                console.log("Next track");
                // Logic to switch to the next track
            }

            function previousTrack() {
                console.log("Previous track");
                // Logic to switch to the previous track
            }
        });
    </script>

    </body>
</x-base-layout>
