<x-base-layout>
<body class="" style="background-image: url({{asset('wiki/almostwikipedia.jpg')}}); background-size: contain;background-repeat: no-repeat;height: 100vh;background-position: center">
<a href="/homepage" class="text-black font-fortyseven-micro underline underline-offset-4 cursor-pointer absolute top-0 left-0">home</a>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        setTimeout(function(){
            window.location.href = '{{route('portail')}}';
        }, 4000);
    });
</script>

</body>
    </x-base-layout>
