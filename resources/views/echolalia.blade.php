<x-base-layout>
    <body class=" font-neuebit text-3xl flex items-center justify-center min-h-screen">
    <style>
        .selected {
            color: red; /* Color text red when selected */
            font-weight: bold; /* Make text bold when selected */
        }
    </style>

    <div class="w-1/3 p-5 bg-white">

        <h1 class="text-4xl font-bold text-gray-700 mb-4">Identity Verification</h1>
        <!-- Identity Confirmation Question -->
        <div class="mb-6">
            <label class="block text-gray-700 text-2xl font-bold mb-2 ">
                ▪ Are you confident in your own identity, with no doubts or uncertainties?
            </label>
            <div class="flex justify-center">
                <label class="inline-flex items-center">
                    <span id="yes" class="cursor-pointer px-4 py-2  rounded " onclick="selectOption(this, 'no')">Yes</span>
                </label>
                <label class="inline-flex items-center ml-6">
                    <span id="no" class="cursor-pointer px-4 py-2  ml-4 rounded " onclick="selectOption(this, 'no')">No</span>
                </label>
            </div>
        </div>
        <h1 class="text-4xl font-bold text-gray-700 mb-4">Memory Assessment</h1>
        <!-- Identity Confirmation Question -->
        <div class="mb-6">
            <label class="block text-gray-700 text-2xl font-bold mb-2 ">
                ▪ Have you experienced any recent memory gaps or inconsistencies?
            </label>
            <div class="flex justify-center">
                <label class="inline-flex items-center">
                    <span id="yes" class="cursor-pointer px-4 py-2  rounded " onclick="selectOption(this, 'yes')">Yes</span>
                </label>
                <label class="inline-flex items-center ml-6">
                    <span id="no" class="cursor-pointer px-4 py-2  ml-4 rounded " onclick="selectOption(this, 'yes')">No</span>
                </label>
            </div>
        </div>
        <h1 class="text-4xl font-bold text-gray-700 mb-4">Behavioral Changes</h1>
        <!-- Identity Confirmation Question -->
        <div class="mb-6">
            <label class="block text-gray-700 text-2xl font-bold mb-2 ">
                ▪ Have you noticed any sudden or unexplained changes in your behavior or personality?
            </label>
            <div class="flex justify-center">
                <label class="inline-flex items-center">
                    <span id="yes" class="cursor-pointer px-4 py-2  rounded " onclick="selectOption(this, 'yes')">Yes</span>
                </label>
                <label class="inline-flex items-center ml-6">
                    <span id="no" class="cursor-pointer px-4 py-2  ml-4 rounded " onclick="selectOption(this, 'yes')">No</span>
                </label>
            </div>
        </div>
        <h1 class="text-4xl font-bold text-gray-700 mb-4">Physical Alterations</h1>
        <!-- Identity Confirmation Question -->
        <div class="mb-6">
            <label class="block text-gray-700 text-2xl font-bold mb-2 ">
                ▪ Have you observed any unusual physical changes in yourself that cannot be explained?
            </label>
            <div class="flex justify-center">
                <label class="inline-flex items-center">
                    <span id="yes" class="cursor-pointer px-4 py-2  rounded " onclick="selectOption(this, 'yes')">Yes</span>
                </label>
                <label class="inline-flex items-center ml-6">
                    <span id="no" class="cursor-pointer px-4 py-2  ml-4 rounded " onclick="selectOption(this, 'yes')">No</span>
                </label>
            </div>
        </div>
        <h1 class="text-4xl font-bold text-gray-700 mb-4">Perception of Surroundings</h1>
        <!-- Identity Confirmation Question -->
        <div class="mb-6">
            <label class="block text-gray-700 text-2xl font-bold mb-2 ">
                ▪ Do you often feel like you're being watched or followed when no one is around?
            </label>
            <div class="flex justify-center">
                <label class="inline-flex items-center">
                    <span id="yes" class="cursor-pointer px-4 py-2  rounded " onclick="selectOption(this, 'yes')">Yes</span>
                </label>
                <label class="inline-flex items-center ml-6">
                    <span id="no" class="cursor-pointer px-4 py-2  ml-4 rounded " onclick="selectOption(this, 'yes')">No</span>
                </label>
            </div>
        </div>
        <h1 class="text-4xl font-bold text-gray-700 mb-4">Feedback from Others</h1>
        <!-- Identity Confirmation Question -->
        <div class="mb-6">
            <label class="block text-gray-700 text-2xl font-bold mb-2 ">
                ▪ Have people close to you commented on any strange or different behavior you've exhibited recently?
            </label>
            <div class="flex justify-center">
                <label class="inline-flex items-center">
                    <span id="yes" class="cursor-pointer px-4 py-2  rounded " onclick="selectOption(this, 'yes')">Yes</span>
                </label>
                <label class="inline-flex items-center ml-6">
                    <span id="no" class="cursor-pointer px-4 py-2  ml-4 rounded " onclick="selectOption(this, 'yes')">No</span>
                </label>
            </div>
        </div>
        <h1 class="text-4xl font-bold text-gray-700 mb-4">Dream Patterns</h1>
        <!-- Identity Confirmation Question -->
        <div class="mb-6">
            <label class="block text-gray-700 text-2xl font-bold mb-2 ">
                ▪ Have you been experiencing recurring nightmares or unsettling dreams lately?
            </label>
            <div class="flex justify-center">
                <label class="inline-flex items-center">
                    <span id="yes" class="cursor-pointer px-4 py-2  rounded " onclick="selectOption(this, 'yes')">Yes</span>
                </label>
                <label class="inline-flex items-center ml-6">
                    <span id="no" class="cursor-pointer px-4 py-2  ml-4 rounded " onclick="selectOption(this, 'yes')">No</span>
                </label>
            </div>
        </div>
        <h1 class="text-4xl font-bold text-gray-700 mb-4">Déjà Vu</h1>
        <!-- Identity Confirmation Question -->
        <div class="mb-6">
            <label class="block text-gray-700 text-2xl font-bold mb-2 ">
                ▪ Do you frequently experience déjà vu, the feeling of having already experienced a present situation?
            </label>
            <div class="flex justify-center">
                <label class="inline-flex items-center">
                    <span id="yes" class="cursor-pointer px-4 py-2  rounded " onclick="selectOption(this, 'yes')">Yes</span>
                </label>
                <label class="inline-flex items-center ml-6">
                    <span id="no" class="cursor-pointer px-4 py-2  ml-4 rounded " onclick="selectOption(this, 'yes')">No</span>
                </label>
            </div>
        </div>
        <h1 class="text-4xl font-bold text-gray-700 mb-4">Disconnect from Reality</h1>
        <!-- Identity Confirmation Question -->
        <div class="mb-6">
            <label class="block text-gray-700 text-2xl font-bold mb-2 ">
                ▪ Do you feel disconnected from your surroundings or loved ones?
            </label>
            <div class="flex justify-center">
                <label class="inline-flex items-center">
                    <span id="yes" class="cursor-pointer px-4 py-2  rounded " onclick="selectOption(this, 'yes')">Yes</span>
                </label>
                <label class="inline-flex items-center ml-6">
                    <span id="no" class="cursor-pointer px-4 py-2  ml-4 rounded " onclick="selectOption(this, 'yes')">No</span>
                </label>
            </div>
        </div>
        <h1 class="text-4xl font-bold text-gray-700 mb-4">Overall Sense of Self</h1>
        <!-- Identity Confirmation Question -->
        <div class="mb-6">
            <label class="block text-gray-700 text-2xl font-bold mb-2 ">
                ▪ On a scale of 1 to 10, how confident are you in your current identity and reality?
            </label>
            <div class="flex justify-center flex-col text-center">
                <label class="inline-flex items-center">
                    <span class="ml-2">1 (Not confident at all)</span>
                </label>
                <label class="inline-flex items-center">
                    <span class="ml-2">2</span>
                </label>
                <label class="inline-flex items-center">
                    <span class="ml-2">3</span>
                </label>
                <label class="inline-flex items-center">
                    <span class="ml-2">4</span>
                </label>
                <label class="inline-flex items-center">
                    <span class="ml-2">5</span>
                </label>
                <label class="inline-flex items-center">
                    <span class="ml-2">6</span>
                </label>
                <label class="inline-flex items-center">
                    <span class="ml-2">7</span>
                </label>
                <label class="inline-flex items-center">
                    <span class="ml-2">8</span>
                </label>
                <label class="items-center">
                    <span class="ml-2">9</span>
                </label>
                <label class="inline-flex items-center">
                    <span class="ml-2">10 (Completely confident)</span>
                </label>
            </div>
        </div>
        <!-- Additional Questions Would Follow The Same Pattern -->
        <div class="text-center text-4xl font-bold">
            <p>If you have a majority of yes please seek help immediatly and send a mail to</p>

            <p class="text-red-500">fataorgana.institute@gmail.com</p>
        </div>

        <div class="text-center mt-60">
            <img  class="ml-60" style="width:30%; margin-bottom:30px; margin-right: 10px; " src="{{ asset('images/logo_fata.png') }}" alt="">
            <p>This test was safely provided by FataOrgana Insitute </p>
        </div>
    </div>
    <script>
        function selectOption(element, text) {
            // Get the parent container of the clicked span to isolate the scope to the current question
            const parentDiv = element.parentNode;

            // Remove 'selected' class from all options in the same container and reset texts
            parentDiv.querySelectorAll('.option').forEach(span => {
                span.classList.remove('selected');  // Remove the selected class
                span.textContent = span.textContent === 'Yes' ? 'No' : 'Yes'; // Toggle between 'Yes' and 'No'
            });

            // Add 'selected' class to the clicked element and set its text
            element.classList.add('selected');
            element.textContent = text;

            // Log the current selected option for debugging
            console.log("Selected option:", element.textContent);
        }
    </script>


    </body>
</x-base-layout>

