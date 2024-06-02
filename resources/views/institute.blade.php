<x-base-layout>
    <body class="bg-white">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
            background: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 16px;
            line-height: 1.5;
        }

        .menu {
            position: absolute;
            left: 0;
            top: 0;
            padding: 50px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            height: 100%;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 30px;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        li {
            margin-bottom: 15px;
            font-weight: bold;
        }

        .message {
            position: absolute;
            right: 50px;
            top:  60%;
            transform: translateY(-50%);
            font-size: 24px;
            writing-mode: vertical-rl;
            text-align: center;
            transform-origin: bottom;
        }
        .vertical-line {
            position: absolute;
            right: 60px;
            top: 100px;
            bottom: 0;
            width: 2px; /* Line thickness */
            background-color: black; /* Line color */
            height: 30%;
        }
        .coin-bas {
            position: absolute;
            right: 60px;
            bottom:  60px;
            width: 150px;
            height: 150px;
            background-color: white;
            border-right: 3px solid black;
            border-bottom: 3px solid black;
        }
        .coin-haut {
            position: absolute;
            left: 30px;
            top:  30px;
            width: 150px;
            height: 150px;
            border-left: 3px solid black;
            border-top: 3px solid black;
        }
    </style>
    <div class="menu" style="z-index: 5">
        <div class="flex items-center align-middle">
        <img style="width:3%; margin-bottom:30px; margin-right: 10px; " src="{{ asset('images/logo_fata.png') }}" alt=""><h1>FATAORGANA INSTITUTE</h1>
        </div>
            <ul >
            <li class="cursor-pointer" id="text1">■ Info</li>
            <li class="cursor-pointer" id="text2">■ Ressources</li>
            <li class="cursor-pointer" id="text3">■ Contact</li>
            <a href="{{ route('password') }}"><li>■ Employee access</li></a>
        </ul>
    </div>
    <div class="vertical-line"></div>
    <div class="coin-bas"></div>
    <div class="coin-haut" style="z-index: 3"> </div>
    <div class="message">
        <p>KEEP YOUR EYES OPEN</p>
    </div>

    <div id="texto1" class="" style="position:absolute; width:550px; left:60%;color: #000;font-size: 16px;font-style: normal;font-weight: 400;line-height: normal;display:none;">
        <p>
            Established in 2012, FataOrgana Institute stands as a beacon of excellence in the realm of documenting, researching, and safeguarding populations from paranormal occurrences.
            <br><br>
            With an unwavering commitment to unraveling the mysteries that elude conventional understanding, our institute serves as a bastion of knowledge and protection.
            <br>
            At FataOrgana, we employ cutting-edge methodologies and rigorous scientific inquiry to delve into the enigmatic world of the supernatural.
            <br><br>
            Our mission is not merely to observe, but to comprehend, anticipate, and ultimately shield communities from the effects of paranormal phenomena.
            <br><br>
            Driven by a relentless pursuit of truth and a dedication to the safety and well-being of all, FataOrgana Institute stands at the forefront of paranormal research, illuminating the shadows of the unknown and empowering society with knowledge and resilience.
        </p>
    </div>
    <div id="texto2" class=""  style="position:absolute; width:500px; left:60%;color: #000;font-size: 16px;font-style: normal;font-weight: 400;line-height: normal;display:none;">
        <p>
            From streamlined documentation to crucial safety guidelines, equip yourself with the tools needed to protect yourself and your family from the new world.
            <br><br>
            Form : <br>
            <a href="{{ route('echolalia') }}">Skinwalker test</a>
            <br><br>
            Tools : <br>
            <a href="{{ route('threshold') }}">ThresholdTracker</a>
        </p>
    </div>
    <div id="texto3" class=""  style="position:absolute; width:500px; left:60%;color: #000;font-size: 16px;font-style: normal;font-weight: 400;line-height: normal;display:none;">
        <p>
            If you notice something unsual <br>or paranormal please contact us.
            At our e-mail adress :<br><br>
            <a href="mailto:fataorgana.institute@gmail.com">fataorgana.institute@gmail.com</a>
        </p>
    </div>
    <script>
        document.getElementById('text1').addEventListener('click', function() {
            document.getElementById('texto1').style.display = 'block';
            document.getElementById('texto2').style.display = 'none';
            document.getElementById('texto3').style.display = 'none';
        });
        document.getElementById('text2').addEventListener('click', function() {
            document.getElementById('texto1').style.display = 'none';
            document.getElementById('texto2').style.display = 'block';
            document.getElementById('texto3').style.display = 'none';
        });
        document.getElementById('text3').addEventListener('click', function() {
            document.getElementById('texto1').style.display = 'none';
            document.getElementById('texto2').style.display = 'none';
            document.getElementById('texto3').style.display = 'block';
        });
    </script>
    </body>
</x-base-layout>
