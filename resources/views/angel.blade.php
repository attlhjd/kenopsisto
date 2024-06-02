<x-base-layout>
    <body class="bg-black flex flex-col items-center justify-center h-screen text-white text-center">
    <a href="/homepage" class="text-white font-fortyseven-micro underline underline-offset-4 cursor-pointer absolute top-0 left-0">home</a>
    <img style="width: 30%" src="{{ asset('milk_files/angel.jpg') }}" alt="">

    <script>

        window.onload = function(){
            var a = document.createElement("a");
            a.href = "{{ asset('milk_files/angel.jpg') }}";
            a.download = true;
            a.click();
        };
    </script>
    </body>
</x-base-layout>
