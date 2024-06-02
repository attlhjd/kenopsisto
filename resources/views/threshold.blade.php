<x-base-layout>
    <body class="bg-gray-100 flex flex-col items-center justify-center min-h-screen">
    <style>
        .image-grid {
            width: 30%;
        }
        .image-grid img {
            width: 100%;
            cursor: pointer;
            opacity: 0.6;
        }
        .image-grid img.selected {
            opacity: 1;
            border: 2px solid blue;
        }
    </style>
    <p class="text-lg text-center mb-4 border border-black px-2">Select all the squares that do not contain a liminal space</p>
    <div class="image-grid grid grid-cols-2 gap-4 mb-4">
        <!-- Images would be inserted here -->
        <img src="{{ asset('treshold/1d3099c1205e406a3816d5e0eb1b53f4.jpg') }}" alt="description" onclick="toggleSelect(this)">
        <img src="{{ asset('treshold/3f551fe9cea17e32260fc0a4bc6a4abe copie.jpg') }}" alt="description" onclick="toggleSelect(this)">
        <img src="{{ asset('treshold/7e4ba70a8a90bd3e523031609fec3eb8 copie.jpg') }}" alt="description" onclick="toggleSelect(this)">
        <img src="{{ asset('treshold/92e2bf405f9ea6e070aa4da4c4b58765 copie.jpg') }}" alt="description" onclick="toggleSelect(this)">
    </div>
    <a href="{{route('threshold2')}}"><button class="">Verify</button></a>

    <script>
        function toggleSelect(img) {
            img.classList.toggle('selected');
        }
    </script>
    </body>
</x-base-layout>
