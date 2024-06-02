<x-base-layout>
    <body class="bg-black flex flex-col items-center justify-center h-screen text-white text-center">
    <a href="/homepage" class="text-white font-fortyseven-micro underline underline-offset-4 cursor-pointer absolute top-0 left-0">home</a>
    <div class="flex items-center justify-center">
        <p class="text-white font-fortyseven-micro" style="font-size: 32px;">CAM 3 </p>
        <img src="{{ asset('wiki/Ellipse 10.svg') }}" alt=""/>
    </div>
    <div class="video-container flex items-center justify-center" style="width: 1280px; height: 720px; position: relative;">
        <button id="pop" onclick="askPermission()" class="bg-white px-2 rounded text-black absolute" style="top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 10;">click me</button>
        <video style="width: 100%; height: 100%;"></video>
    </div>
    <p class="font-neuebit" style="font-size: 32px;">The subject you may seen can be dangerous, please call FataOrgana Institute immediately.</p>
    <script>
        function askPermission() {
            var constraints = { audio: true, video: true };
            navigator.mediaDevices.getUserMedia(constraints).then(function(mediaStream) {
                var video = document.querySelector('video');
                video.srcObject = mediaStream;
                video.play();
                document.getElementById('pop').style.display = 'none';
            }).catch(function(err) {
                console.log("There's an error! " + err.message);
            });
        }
    </script>
    </body>
</x-base-layout>
