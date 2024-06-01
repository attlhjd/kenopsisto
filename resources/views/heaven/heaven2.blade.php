<x-base-layout>

    <body class="antialiased bg-black text-white font-neuebit text-lg flex items-center justify-center min-h-screen">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            overflow: hidden;
            background: black;
        }
        .image {
            position: absolute;
            width: 50px;
            height: 50px;
            transition: transform 0.3s ease-out;
        }
        a {
            color: red;
        }
    </style>
    <a href="/homepage" class="text-white font-fortyseven-micro underline underline-offset-4 cursor-pointer absolute top-0 left-0">home</a>

    <a style="left:1500px;top:100px;position:absolute" href="{{route('heaven4')}}">it's already here</a>
    <a style="left:300px; position:absolute" href="{{route('heaven3')}}">can't you see ?</a>
    <script>
        // Create and append images randomly positioned
        for (let i = 0; i < 2000; i++) {
            const img = document.createElement('img');
            img.src = '{{ asset("heaven_files/curseur.png") }}';
            img.className = 'image';
            img.style.left = `${Math.random() * window.innerWidth}px`;
            img.style.top = `${Math.random() * window.innerHeight}px`;
            document.body.appendChild(img);
        }

        document.addEventListener('mousemove', (e) => {
            const cursorRadius = 130; // Radius of the circle around the cursor
            document.querySelectorAll('.image').forEach(img => {
                const dx = e.clientX - (img.offsetLeft + img.width / 2);
                const dy = e.clientY - (img.offsetTop + img.height / 2);
                const distance = Math.sqrt(dx * dx + dy * dy);
                if (distance < cursorRadius) {
                    const angle = Math.atan2(dy, dx);
                    const forceX = Math.cos(angle) * (cursorRadius - distance);
                    const forceY = Math.sin(angle) * (cursorRadius - distance);
                    img.style.transform = `translate(${-forceX}px, ${-forceY}px)`;
                } else {
                    img.style.transform = ''; // Reset transform if outside the radius
                }
            });
        });
    </script>
    </body>
</x-base-layout>
