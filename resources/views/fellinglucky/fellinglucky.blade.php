<x-base-layout>

    <body class="antialiased bg-black text-white font-neuebit text-lg flex items-center justify-center min-h-screen">
    <style>
        input[type='radio'] {
            accent-color: red;
        }
    </style>
    <a href="/homepage" class="text-white font-fortyseven-micro underline underline-offset-4 cursor-pointer absolute top-0 left-0">home</a>
    <div class="text-center">
        <button id="submitButton" class="bg-white text-black rounded px-2 font-semibold button-disabled">I'm Feeling Lucky</button>
    </div>
    <script>
        const button = document.getElementById('submitButton');
        routes = [
            "{{ route('mirror') }}",
            "{{ route('helpline') }}",
            "{{ route('almostwikipedia') }}",
            "{{ route('wrongtime') }}"
        ];
        button.addEventListener('click', () => {
            window.location.href = routes[Math.floor(Math.random() * routes.length)];
        });
    </script>
    </body>
</x-base-layout>
