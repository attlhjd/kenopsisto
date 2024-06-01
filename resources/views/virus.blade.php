<x-base-layout>
    <body class="bg-black">
    <style>
        body {
            background-color: #333; /* Dark background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
            overflow: hidden;
            font-family: 'Arial', sans-serif;
        }

        .switch-grid {
            width: 90%;
            height: 90%;
            display: grid;
            grid-template-columns: repeat(10, 1fr); /* 10 columns as an example */
            grid-gap: 10px;
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 68px;
            height: 40px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: black;
            border: 1px solid white;
            transition: .8s;
            border-radius: 34px;

        }

        .slider:before {
            position: absolute;
            content: "";
            height: 20px;
            width: 20px;
            left: 8px;
            bottom: 8px;
            background-color: white;
            transition: .8s;
            border-radius: 50%;
        }

        input:checked + .slider {
            background-color: red;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px red;
        }

        input:checked + .slider:before {
            transform: translateX(28px);
        }
    </style>
    <a href="/homepage" class="text-white font-fortyseven-micro underline underline-offset-4 cursor-pointer absolute top-0 left-0">home</a>
    <div id="switchGrid" class="switch-grid">

    </div>
    <script>
        function createSwitchGrid(rows, columns) {
            const grid = document.getElementById('switchGrid');
            grid.style.gridTemplateColumns = `repeat(${columns}, 1fr)`;

            for (let i = 0; i < rows * columns; i++) {
                const switchLabel = document.createElement('label');
                switchLabel.className = 'switch';

                const switchInput = document.createElement('input');
                switchInput.type = 'checkbox';

                const sliderSpan = document.createElement('span');
                sliderSpan.className = 'slider round';

                switchLabel.appendChild(switchInput);
                switchLabel.appendChild(sliderSpan);

                switchInput.addEventListener('change', checkAllSwitches);
                grid.appendChild(switchLabel);
            }

        }
        function checkAllSwitches() {
            const switches = document.querySelectorAll('#switchGrid input[type="checkbox"]');
            const allChecked = Array.from(switches).every(checkbox => checkbox.checked);

            if (allChecked) {
                window.location.href = '{{route('virus2')}}'; // Redirect to a new page when all are checked
            }
        }
        // Specify the number of rows and columns you want for the grid
        createSwitchGrid(10, 10); // Creates a 10x10 grid of toggle switches
    </script>
    </body>
</x-base-layout>
