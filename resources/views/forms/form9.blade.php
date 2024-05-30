<x-base-layout>

    <body class="antialiased bg-black text-white font-neuebit text-lg flex items-center justify-center min-h-screen">
    <style>
        input[type='radio'] {
            accent-color: red;
        }
    </style>
    <a href="/homepage" class="text-white font-fortyseven-micro underline underline-offset-4 cursor-pointer absolute top-0 left-0">home</a>
    <div class="text-center">
        <p class="text-2xl font-bold mb-4">What's the name of the person you <br> lost during the apocalypse ?</p>
        <div class="mb-2">
            <input class="bg-black border border-white rounded w-64 px-2" type="text" id="nameInput" name="human" oninput="enableSubmit()" />
        </div>
        <button id="submitButton" class="bg-white text-black rounded px-2 font-semibold button-disabled">Submit</button>
    </div>

    <script>
        function enableSubmit() {
            const submitButton = document.getElementById('submitButton');
            const nameInput = document.getElementById('nameInput');
            if (nameInput.value.trim() !== '') {
                submitButton.classList.remove('button-disabled');
            } else {
                submitButton.classList.add('button-disabled');
            }
        }

        // Initially disable submit button until a choice is made
        document.getElementById('submitButton').addEventListener('click', function(event) {
            if (this.classList.contains('button-disabled')) {
                event.preventDefault(); // Prevent the navigation
            } else {
                window.location.href = "{{ route('form10') }}"; // Redirect if not disabled
            }
        });
    </script>
    </body>
</x-base-layout>
