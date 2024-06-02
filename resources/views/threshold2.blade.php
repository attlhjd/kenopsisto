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
        <img src="{{ asset('treshold/907ed270b8790e951460d0f85f0a9437 copie.jpg') }}" alt="description" onclick="toggleSelect(this)">
        <img src="{{ asset('treshold/4999dc9b54e387d6d18696de55e86020 copie.jpg') }}" alt="description" onclick="toggleSelect(this)">
        <img src="{{ asset('treshold/365679b57bd18eba126ba439c2e06a25 copie.jpg') }}" alt="description" onclick="toggleSelect(this)">
        <img src="{{ asset('treshold/9998702a762df88ef07cbae457879e7b copie.jpg') }}" alt="description" onclick="toggleSelect(this)">
    </div>
    <a href="{{route('threshold3')}}"><button class="">Verify</button></a>

    <script>
        function toggleSelect(img) {
            img.classList.toggle('selected');
        }
    </script>
    </body>
</x-base-layout>
