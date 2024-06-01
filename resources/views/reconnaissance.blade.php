<x-base-layout>
    <body class="bg-black">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
            background-color: black;
            overflow: hidden;
            position: relative;
        }

        .drop-zone {
            width: 500px;
            height: 600px;
            border: 3px solid white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        img {
            width: 300px; /* Adjust based on your image size */
            height: 300px;
            position: absolute;
            cursor: grab; /* Default cursor for dragging */
        }

        .hidden {
            display: none;
        }

        button {
            position: absolute;
            top: 90%;
            left: 50%;
            transform: translateX(-50%);
            background: white;
            color: black;
            padding: 10px;
            border: none;
            cursor: pointer;
            display: none; /* Initially hidden */
        }
    </style>
    <a href="/homepage" class="text-white font-fortyseven-micro underline underline-offset-4 cursor-pointer absolute top-0 left-0">Home</a>
    <div class="drop-zone font-neuebit" id="dropZone">Drop here</div>
    <img alt="img1" src="{{ asset('reconnaissance_image/reconnaissance1.png')}}" class="image" style="top: 7%; left: 7%;" id="img1">
    <img alt="img2" src="{{ asset('reconnaissance_image/reconnaissance2.png')}}" class="image" style="top: 57%; left: 7%;" id="img2">
    <img alt="img3" src="{{ asset('reconnaissance_image/reconnaissance3.png')}}" class="image" style="top: 7%; left: 67%;" id="img3">
    <img alt="img4" src="{{ asset('reconnaissance_image/reconnaissance4.png')}}" class="image" style="top: 67%; left: 67%;" id="img4">
    <a href="{{route('complete')}}"><button id="submitButton" class="rounded font-neuebit">Submit</button></a>

    <script>
        const images = document.querySelectorAll('.image');

        images.forEach(img => {
            let offsetX, offsetY, isDragging = false;

            img.addEventListener('mousedown', function(e) {
                // Ensure default drag behavior is suppressed
                e.preventDefault();
                offsetX = e.clientX - img.offsetLeft;
                offsetY = e.clientY - img.offsetTop;
                isDragging = true;
                img.style.cursor = 'grabbing';

                // Attach move and up listeners to document to ensure smooth dragging
                document.addEventListener('mousemove', mouseMoveHandler);
                document.addEventListener('mouseup', mouseUpHandler);
            });

            function mouseMoveHandler(e) {
                if (isDragging) {
                    img.style.left = `${e.clientX - offsetX}px`;
                    img.style.top = `${e.clientY - offsetY}px`;
                }
            }

            function mouseUpHandler(e) {
                isDragging = false;
                img.style.cursor = 'grab';
                document.removeEventListener('mousemove', mouseMoveHandler);
                document.removeEventListener('mouseup', mouseUpHandler);
                checkDropZone(img);
            }
        });

        function checkDropZone(img) {
            const dzRect = document.getElementById('dropZone').getBoundingClientRect();
            const imgRect = img.getBoundingClientRect();

            // Check if any part of the image overlaps with the drop zone
            if (imgRect.left < dzRect.right && imgRect.right > dzRect.left &&
                imgRect.top < dzRect.bottom && imgRect.bottom > dzRect.top) {
                document.getElementById('submitButton').style.display = 'block'; // Show submit button if any image is in the drop zone
            }
        }
    </script>
    </body>
</x-base-layout>
