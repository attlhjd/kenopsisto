<x-base-layout>
    <style>
        li {
            margin: 0;
            padding: 0;
            line-height: 0.75;
            cursor: pointer;
            color: red; /* Ensures visibility on a black background */
        }
        .video-container {
            display: none; /* Initially hidden */
            position: fixed;
            right: 100px;
            top: 200px; /* Adjust based on your header's height */
            width: 30%; /* Adjust width as needed */
            height: auto;
            z-index: 100;
        }
        video {
            width: 100%;
            height: 500px; /* Adjust based on your needs */
        }
    </style>
    <body class="bg-black">
    <a href="/homepage" class="text-white font-fortyseven-micro underline underline-offset-4 cursor-pointer absolute top-0 left-0">home</a>
    <div class="text-red-500 font-neuebit text-4xl font-bold mt-12 ml-12">
        <ul class="space-y-0 text-red-500">
            <li onclick="showVideo('incident 70.webm')">-FILE_13698</li>
            <li>-FILE_13705</li>
            <li onclick="showVideo('incident 34.webm')">-FILE_13892</li>
            <li onclick="showVideo('incident 10.webm')">-FILE_14037</li>
            <li>-FILE_14320</li>
            <li onclick="showVideo('incident 27.webm')">-FILE_14581</li>
            <li>-FILE_14706</li>
            <li onclick="showVideo('incident 27 Bis.webm')">-FILE_15072</li>
            <li onclick="showVideo('incident 36.webm')">-FILE_15209</li>
            <li>-FILE_15474</li>
            <li onclick="showVideo('incident 17.webm')">-FILE_15635</li>
            <li>-FILE_15940</li>
            <li onclick="showVideo('incident 02.webm')">-FILE_16508</li>
            <li onclick="showVideo('incident 80.webm')">-FILE_16217</li>
        </ul>
    </div>
    <div id="videoContainer" class="video-container">
        <video id="videoPlayer" autoplay></video>
    </div>
    <script>
        function showVideo(videoName) {
            var videoPath = "{{ asset('videos/webm/') }}/" + videoName;
            var videoPlayer = document.getElementById('videoPlayer');
            var videoContainer = document.getElementById('videoContainer');

            // Check if the video file exists, if not, hide the container
            fetch(videoPath).then(response => {
                if (response.ok) {
                    videoPlayer.src = videoPath; // Set the source of the video
                    videoContainer.style.display = 'block'; // Show the video container
                } else {
                    videoContainer.style.display = 'none'; // Hide the video container if video does not exist
                    console.log('No video available for ' + videoName);
                }
            }).catch(error => {
                videoContainer.style.display = 'none'; // Hide on error
                console.log('Error fetching video: ', error);
            });
        }
    </script>
    </body>
</x-base-layout>
