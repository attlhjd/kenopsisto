<x-base-layout>

    <body class="bg-black place-items-center h-screen items-center justify-center grid grid-cols-1">
    <a href="/homepage" class="text-white font-fortyseven-micro underline underline-offset-4 cursor-pointer absolute top-0 left-0">home</a>
        <div>
                <img class="flex" src="{{asset('benot/porte.png')}}" width="212" height="409" alt="titre">
        </div>
        <div>
            <select name="" id="chemin" class="font-fortyseven-micro">
                <option selected disabled value="" class="font-fortyseven-micro">select a location</option>
                <option value="heaven" class="font-fortyseven-micro">heaven</option>
                <option value="hell" class="font-fortyseven-micro">hell</option>
            </select>
        </div>
        <script>
            const select = document.querySelector('#chemin');
            select.addEventListener('change', function() {
                if (this.value === 'heaven') {
                    window.location.href = 'https://www.youtube.com/watch?v=dQw4w9WgXcQ';
                } else if (this.value === 'hell') {
                    window.location.href = '/playdead';
                }
            });
        </script>
    </body>


</x-base-layout>
