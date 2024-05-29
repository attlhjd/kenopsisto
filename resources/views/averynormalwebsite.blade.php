<x-base-layout>
    <body class="antialiased bg-white text-black ">
    <style>
        footer {
            margin: 50px;
            padding: 0;
        }
        p, a {
            color: #000;
            font-family: "Times New Roman";
            font-size: 32px;
            font-style: italic;
            font-weight: 400;
            line-height: normal;
        }
        .vl {
            border-left: 1px solid black;
            height: 600px;
        }
    </style>
    <main class="flex flex-col w-full min-h-screen">
        <footer class="relative m-16">
            <div style="top: 30px; left:-35px;width:406px; height: 91px;box-shadow: 10px 5px 5px black;" class="absolute bg-white border border-black border-2 shadow-xl">
                <img class="mt-6" src="{{ asset('averynormalwebsite_images/Fichier 2LOGO.png') }}" style="width: 214px;height: 54px;margin: 20px;" alt="logo">
            </div>
            <img class="" src="{{ asset('averynormalwebsite_images/bannière.png') }}" style="width: 1715px;height: 149px;flex-shrink: 0;" alt="banner">
        </footer>
        <div class="w-full grid grid-cols-3 relative">
            <div class="">
                <nav class="p-4 flex justify-around">
                    <ul style="list-style-type: circle;">
                        <li class="mt-4"><a href="{{route('informations')}}" class="link">Informations</a></li>
                        <li class="mt-4"><a href="#" class="link">About us</a></li>
                        <li class="mt-4"><a href="#" class="link">Products</a></li>
                    </ul>
                </nav>

            </div>
            <div class="vl absolute" style="left:500px; top: 20px;"></div>
            <div class="col-span-2 text-left">
                <div class=" p-4" >
                    <p>Welcome to our website.</p>
                    <p>We're trying our best to offer the best experience.</p>
                </div>
                <img class="" src="{{ asset('averynormalwebsite_images/smiling.jpg') }}" style="width: 1040px;height: 503px;flex-shrink: 0;" alt="smiling people">
                <p class="" style="font-size:16px;">“Ha ha what a fun meeting”</p>
            </div>
        </div>
    </main>
    </body>
</x-base-layout>
