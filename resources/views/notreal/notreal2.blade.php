<x-base-layout>

    <body class="antialiased bg-black text-white font-neuebit text-lg flex items-center justify-center min-h-screen">
    <style>
        .image-container {
            display: flex;  /* Enables flexbox */
            justify-content: center; /* Centers content horizontally */
            align-items: center; /* Centers content vertically */
            background-color: white;
            padding: 2px;
            margin-bottom: 8px;
        }

        input[type='radio'] {
            accent-color: red;
        }
    </style>
    <a href="/homepage" class="text-white font-fortyseven-micro underline underline-offset-4 cursor-pointer absolute top-0 left-0">home</a>
    <div class="text-center">
        <div class="image-container">
            <img height="60px" src="{{asset('notreal_images/capchat2.png')}}" alt="">
        </div>
        <div class="mb-2">
            <input class="bg-black border border-white rounded w-64 px-2" type="text" id="nameInput" name="human" oninput="enableSubmit()" />
        </div>
        <button id="submitButton" class="bg-white text-black rounded px-2 font-semibold button-disabled">Submit</button>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", enableSubmit());
        function enableSubmit() {
            const submitButton = document.getElementById('submitButton');
            const nameInput = document.getElementById('nameInput');
            if (nameInput.value.trim() === 'not real') {
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
                window.location.href = "{{ route('notreal3') }}"; // Redirect if not disabled
            }
        });
    </script>
    </body>
</x-base-layout>
