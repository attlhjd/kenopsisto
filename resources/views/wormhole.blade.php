<x-base-layout>
    <style>
        .popup {
            position: absolute;
            padding: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            width: 200px;
            height: 200px;
            z-index: 1000;
        }
    </style>
    <body class="bg-black">
    <a href="/homepage" class="text-white font-fortyseven-micro underline underline-offset-4 cursor-pointer absolute top-0 left-0">home</a>
    <div id="popup" class="popup" style="display:none;">
        <img id="popup-img" src="" alt="Image Aléatoire">
        <button onclick="closePopup()">Fermer</button>
    </div>

    <button onclick="showRandomImage()">Afficher une Image Aléatoire</button>

    <script>
            var imagePaths = [
            @for ($i = 5; $i <= 46; $i++)
            "{{ asset("wormhole/Fichier {$i}fleche.png") }}",
            @endfor
            ];

            document.addEventListener('DOMContentLoaded', function() {
                setInterval(createRandomImagePopup, 2000);
            });

            function createRandomImagePopup() {
                var randomIndex = Math.floor(Math.random() * imagePaths.length);
                var imagePath = imagePaths[randomIndex];
                var randomX = Math.floor(Math.random() * (window.innerWidth - 200));
                var randomY = Math.floor(Math.random() * (window.innerHeight - 200));

                var popup = document.createElement('div');
                popup.className = 'popup';
                popup.style.left = `${randomX}px`;
                popup.style.top = `${randomY}px`;

                var img = document.createElement('img');
                img.src = imagePath;
                img.style.width = '100%';
                img.style.height = 'auto';
                img.onclick = function() {
                    popup.remove();
                };

                popup.appendChild(img);
                document.body.appendChild(popup);
            }

    </script>
    </body>

</x-base-layout>
