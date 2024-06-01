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
            width: 50%; /* Adjust based on your preference */
            margin-bottom: 20px;
        }

        .controls {
            margin: 20px 0;
        }

        .control-btn {
            background: none;
            border: none;
            color: white;
            font-size: 2em; /* Adjust the size of the control buttons */
            cursor: pointer;
            margin: 0 15px;
        }

        .progress-bar {
            width: 100%;
            height: 4px;
            background: grey;
            position: relative;
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
        <img style="width: 375px;
height: 375px;
flex-shrink: 0;" src="{{ asset('images/cd.jpg') }}" alt="CD Cover" class="cd-cover">
        <audio id="audioPlayer" src="{{ asset('heaven_files/music.mp3') }}" autoplay></audio> <!-- Replace with your audio file -->
        <div class="progress-bar mb-8">
            <div class="progress" id="progress"></div>
        </div>
        <div class="controls">
            <button class="control-btn" onclick="previousTrack()">⏮︎</button>
            <button class="control-btn" onclick="togglePlayPause()">&#9658;</button>
            <button class="control-btn" onclick="nextTrack()">⏭︎</button>
        </div>

    </div>
    </body>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const player = document.getElementById('audioPlayer');
            player.volume = 0.2; // Set the volume to 20%
           player.play();
            const playButton = document.querySelector('.control-btn:nth-child(2)'); // Play button
                playButton.innerHTML = '&#10074;&#10074;';
        });
        // Toggles play and pause
        function togglePlayPause() {
            const player = document.getElementById('audioPlayer');
            const playButton = document.querySelector('.control-btn:nth-child(2)'); // Play button
            if (player.paused || player.ended) {
                playButton.innerHTML = '&#10074;&#10074;'; // Change to pause symbol
                player.play();
            } else {
                playButton.innerHTML = '&#9658;'; // Change to play symbol
                player.pause();
            }
        }

        // Updates the progress bar as the audio plays
        document.getElementById('audioPlayer').addEventListener('timeupdate', function () {
            const progressBar = document.getElementById('progress');
            const percentage = Math.floor((100 / this.duration) * this.currentTime);
            progressBar.style.width = percentage + '%';
        });

        // Placeholder functions for next and previous track
        function nextTrack() {
            // Logic to switch to the next track
            console.log("Next track");
        }

        function previousTrack() {
            // Logic to switch to the previous track
            console.log("Previous track");
        }
    </script>

    </body>
</x-base-layout>
