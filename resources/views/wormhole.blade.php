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

    <button onclick="createRandomImagePopup()">Afficher une Image Aléatoire</button>

    <script>
        var regularImagePaths = [
            @for ($i = 5; $i <= 46; $i++)
                @if (!in_array($i, [19, 25, 42, 45, 40,8,12]))
                "{{ asset('wormhole/Fichier ' . $i . 'fleche.png') }}",
            @endif
            @endfor
        ];

        var specialImagesInfo = [
            { path: "{{ asset('wormhole/Fichier 40fleche.png') }}", route: "/sword" },
            { path: "{{ asset('wormhole/Fichier 8fleche.png') }}", route: "/congrats" },
            { path: "{{ asset('wormhole/Fichier 12fleche.png') }}", route: "/virus" }
        ];

        var allRoutes = ["/sword", "/congrats", "/virus"]; // All possible routes

        var currentDelay = 2000; // Initial delay for popups

        function scheduleNextPopup() {
            setTimeout(function() {
                if (regularImagePaths.length > 0) {
                    createRandomImagePopup(regularImagePaths);
                    scheduleNextPopup();
                } else if (specialImagesInfo.length > 0) {
                    const imageInfo = specialImagesInfo.shift();
                    displayPopup(imageInfo.path, imageInfo);
                    currentDelay /= 2;  // Update delay for next special image
                    scheduleNextPopup();
                } else {
                    redirectToRandomRoute();
                }
            }, currentDelay);
        }

        document.addEventListener('DOMContentLoaded', function() {
            scheduleNextPopup();
        });

        function createRandomImagePopup(paths) {
            var randomIndex = Math.floor(Math.random() * paths.length);
            var imagePath = paths.splice(randomIndex, 1)[0];
            displayPopup(imagePath);
        }

        function displayPopup(imagePath, imageInfo = null) {
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
                if (imageInfo && imageInfo.route) {
                    window.location.href = imageInfo.route;
                }
            };

            popup.appendChild(img);
            document.body.appendChild(popup);

            if (imageInfo) {
                setTimeout(function() {
                    popup.style.transform = "scale(2)"; // Double the size over 10 minutes
                }, 600000); // 10 minutes
            }
        }
        function redirectToRandomRoute() {
            var randomRouteIndex = Math.floor(Math.random() * allRoutes.length);
            window.location.href = allRoutes[randomRouteIndex];
        }
    </script>
    </body>
</x-base-layout>
