<x-base-layout>

    <body class="antialiased bg-black text-white font-neuebit text-lg flex items-center justify-center min-h-screen">
    <style>
        input[type='radio'] {
            accent-color: red;
        }

    </style>
    <a href="/homepage" class="text-white font-fortyseven-micro underline underline-offset-4 cursor-pointer absolute top-0 left-0">home</a>
    <div class="text-center">
        <p class="text-2xl font-bold mb-4">Do you want this to be over ?</p>
        <div class="mb-2">
            <input type="radio" class="mr-2" id="human_yes" name="human" onclick="enableSubmit()" />
            <label for="human_yes" class="text-lg cursor-pointer">yes</label>
        </div>
        <div class="mb-4">
            <input type="radio" id="human_no" class="mr-2" name="human" onclick="enableSubmit()" />
            <label for="human_no" class="text-lg cursor-pointer">no</label>
        </div>
        <button id="submitButton" class="bg-white text-black rounded px-2 font-semibold button-disabled">Submit</button>
    </div>

    <script>
        function enableSubmit() {
            const submitButton = document.getElementById('submitButton');
            if (document.querySelector('input[name="human"]:checked')) {
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
                window.location.href = "{{ route('form12') }}"; // Redirect if not disabled
            }
        });
    </script>
    </body>
</x-base-layout>
