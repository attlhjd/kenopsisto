<x-base-layout>
    <body class="bg-black">
    <style>
        body { background-color: black; }
        .drop-zone {
            width: 400px;
            height: 600px;
            border: 2px solid white;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            overflow: hidden; /* Keep everything within the zone */
        }
        img {
            transition: transform 0.2s ease-in-out;
            cursor: pointer;
            position: absolute; /* Allows positioning within the drop zone */
        }
        .hidden {
            display: none;
        }
    </style>
    <a href="/homepage" class="text-white font-fortyseven-micro underline underline-offset-4 cursor-pointer absolute top-0 left-0">Home</a>
    <div id="dropZone" class="drop-zone">
    </div>
    <img class="top-[7%] left-[7%]" src="{{ asset('reconnaissance_image/reconnaissance1.png') }}" alt="img1" draggable="true" id="img1">
    <img class="top-[57%] left-[7%]" src="{{ asset('reconnaissance_image/reconnaissance2.png') }}" alt="img2" draggable="true" id="img2">
    <img class="top-[7%] left-[67%]" src="{{ asset('reconnaissance_image/reconnaissance3.png') }}" alt="img3" draggable="true" id="img3">
    <img class="top-[67%] left-[67%]" src="{{ asset('reconnaissance_image/reconnaissance4.png') }}" alt="img4" draggable="true" id="img4">
    <button  id="submitButton" class="hidden absolute top-[90%] left-[50%] bg-white px-2 rounded font-neuebit" onclick="window.location.href='/complete'">Submit</button>

    <script>
        const dropZone = document.getElementById('dropZone');
        const submitButton = document.getElementById('submitButton');
        const images = document.querySelectorAll('img');
        let imagesInZone = 0;

        images.forEach(img => {
            img.addEventListener('dragstart', function(e) {
                e.dataTransfer.setData('text', e.target.id);
                e.dataTransfer.setDragImage(e.target, 0, 0); // Sets the drag image position
            });
        });

        dropZone.addEventListener('dragover', function(e) {
            e.preventDefault(); // Necessary to allow drop
            this.style.backgroundColor = 'grey'; // Highlight the drop zone
        });

        dropZone.addEventListener('dragleave', function(e) {
            this.style.backgroundColor = ''; // Reset background when dragging out
        });

        dropZone.addEventListener('drop', function(e) {
            e.preventDefault();
            this.style.backgroundColor = '';
            const id = e.dataTransfer.getData('text');
            const img = document.getElementById(id);
            const dropRect = dropZone.getBoundingClientRect();
            const x = e.clientX - dropRect.left - (img.width / 2); // Position image based on cursor
            const y = e.clientY - dropRect.top - (img.height / 2); // Position image based on cursor
            img.style.left = `${x}px`;
            img.style.top = `${y}px`;
            if (!this.contains(img)) {
                this.appendChild(img);
                imagesInZone++;
                checkImages();
            }
        });

        function checkImages() {

            if (imagesInZone === 4) {
                submitButton.classList.remove('hidden');
            }
            console.log(submitButton);
        }
    </script>
    </body>
</x-base-layout>
