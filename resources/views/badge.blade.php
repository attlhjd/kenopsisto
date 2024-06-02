<x-base-layout>
    <body>
    <style>
        body {
            background-color: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
    </style>
    <img style="width:30%" src="{{ asset('images/badge.jpg') }}" alt="">
    <p id="angle" class="text-white">click here for an another angle</p>
    <img width="60%" style="display: none;" src="{{ asset('images/badgo.gif') }}" alt="">
    <script>
        document.getElementById('angle').addEventListener('click', function() {
            document.querySelector('img').style.display = 'none';
            document.querySelector('p').style.display = 'none';
            document.querySelector('img:last-of-type').style.display = 'block';
        });
    </script>
    </body>
</x-base-layout>
