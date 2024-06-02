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
        <img src="{{ asset('treshold/d1c90bcfa53f1fbdd242718b960a56c0 copie.jpg') }}" alt="description" onclick="toggleSelect(this)">
        <img src="{{ asset('treshold/f3abec71ad9691ca2df9eb5949836ab1 copie.jpg') }}" alt="description" onclick="toggleSelect(this)">
        <img src="{{ asset('treshold/f7c351b568a4fc16fedc6199b828b559 copie.jpg') }}" alt="description" onclick="toggleSelect(this)">
        <img src="{{ asset('treshold/fe729d4fd1136901269c10b93ef4fb45 copie.jpg') }}" alt="description" onclick="toggleSelect(this)">
    </div>
    <a href="{{route('threshold')}}"><button class="">Verify</button></a>

    <script>
        function toggleSelect(img) {
            img.classList.toggle('selected');
        }
    </script>
    </body>
</x-base-layout>
