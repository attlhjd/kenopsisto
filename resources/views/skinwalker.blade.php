<x-base-layout>
    <style>
        /* Style pour centrer le contenu verticalement et horizontalement */
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: black;
        }
        .grid {
            display: flex;
            justify-content: center;
            gap: 10px; /* Espace entre les images */
        }
        .footer-text {
            margin-top: 170px; /* Espace entre le div des images et le texte */
            color: white; /* Couleur du texte */
            text-align: center;
            color: #FFF;
            font-family: "PP NeueBit";
            font-size: 40px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
        }
    </style>
    <body class="bg-black h-screen">
    <a href="/homepage" class="text-white font-fortyseven-micro underline underline-offset-4 cursor-pointer absolute top-0 left-0">home</a>
    <div class="grid grid-cols-3 place-items-center mt-20">
        <a id="angel" href="{{ route('angel') }}"><img src="{{ asset('skinwalkers/brique def.png') }}" class="hover-image" data-hover="{{ asset('skinwalkers/Fichier 5fleche.png') }}"></a>
        <a href="{{ route('milkpack') }}"><img src="{{ asset('skinwalkers/brique def.png') }}" class="hover-image" data-hover="{{ asset('skinwalkers/Fichier 5fleche.png') }}"></a>
        <a href="{{ route('headonthefloor') }}"><img src="{{ asset('skinwalkers/brique def.png') }}" class="hover-image" data-hover="{{ asset('skinwalkers/Fichier 5fleche.png') }}"></a>
    </div>
    <div class="footer-text font-neuebit">
        the images are not loading ? please <a href="{{ route('milk') }}"><span style="color: #FF0101">click here</span></a> to restart the page
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const images = document.querySelectorAll('.hover-image');

            images.forEach(img => {
                const originalSrc = img.src;
                const hoverSrc = img.getAttribute('data-hover');

                img.addEventListener('mouseover', function() {
                    img.src = hoverSrc;
                });

                img.addEventListener('mouseout', function() {
                    img.src = originalSrc;
                });
            });

        });

    </script>
    </body>
</x-base-layout>
