<x-base-layout>

    <body class="antialiased bg-black text-white font-neuebit text-lg flex items-center justify-center min-h-screen">
    <style>
        input[type='radio'] {
            accent-color: red;
        }
    </style>
    <a href="/homepage" class="text-white font-fortyseven-micro underline underline-offset-4 cursor-pointer absolute top-0 left-0">home</a>
    <div class="text-center">
        <p class="text-2xl font-bold mb-4">Can i track you ?</p>
        <div class="mb-2">
            <input type="radio" id="human_yes" name="human" onclick="enableSubmit()" />
            <label for="human_yes" class="text-lg cursor-pointer">yes</label>
        </div>
        <div class="mb-4">
            <input type="radio" id="human_no" name="human" onclick="enableSubmit()" />
            <label for="human_no" class="text-lg cursor-pointer">no</label>
        </div>
        <button id="submitButton" class="bg-white text-black rounded px-2 font-semibold button-disabled">Submit</button>
    </div>
    <img id="tete" class="absolute top-10 right-10" src="{{asset('images/location.png')}}" alt="">
    <script>
        function enableSubmit() {
            const submitButton = document.getElementById('submitButton');
            if (document.querySelector('input[name="human"]:checked')) {
                submitButton.classList.remove('button-disabled');
            } else {
                submitButton.classList.add('button-disabled');
            }
        }
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(() => {
                document.getElementById('tete').classList.add('hidden');
            }, 2000);
        });
        // Initially disable submit button until a choice is made
        document.getElementById('submitButton').addEventListener('click', function(event) {
            if (this.classList.contains('button-disabled')) {
                event.preventDefault(); // Prevent the navigation
            } else {
                window.location.href = "{{ route('form9') }}"; // Redirect if not disabled
            }
        });
    </script>
    </body>
</x-base-layout>
