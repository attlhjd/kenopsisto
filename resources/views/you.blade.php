<x-base-layout>
    <body class="bg-black flex flex-col items-center justify-center h-screen text-white text-center">
    <a href="/homepage" class="text-white font-fortyseven-micro underline underline-offset-4 cursor-pointer absolute top-0 left-0">home</a>
    <div class="flex items-center">
    <p class="text-white font-fortyseven-micro" style="color: #FFF;
        font-size: 32px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;">CAM 3 </p><img src="{{ asset('wiki/Ellipse 10.svg') }}" alt=""/>
    </div>
    <div class="border" style="border-color: red;width:1280px;height:720px;">
    <button id="pop" onclick="askPermission()" class="bg-white px-2 rounded text-black" style="position: absolute;top:50%;left:50%;">click me</button>
    <video></video>
    </div>
    <p class="font-neuebit" style="color: #FFF;
    font-size: 32px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;">The subject you may seen can be dangerous, please call FataOrgana Institute immediately.</p>
    <script>
        function askPermission(){

            //add constraints object
            var constraints = {
                audio:true,
                video:true};

            //call getUserMedia
            navigator.mediaDevices.getUserMedia(constraints).then(function(mediaStream){

                var video = document.querySelector('video');
                video.srcObject = mediaStream;
                video.play();
                document.getElementById('pop').style.display = 'none';
            }).catch(function(err){
                console.log("There's an error!" + err.message);
            })

        }
    </script>
    </body>
</x-base-layout>
