<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @isset($title)
            {{ $title }}
            @else
           Kenopsis
        @endisset

    </title>

    <!-- Fonts
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    -->
    <!-- Styles, Oublie pas si besoin d'une couleur en particulière faut installer et pas cdn -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>


{!! $slot !!}



<script>
    if ('serviceWorker' in navigator) {
        window.addEventListener('load', () => {
            navigator.serviceWorker.register('/sw.js').then(registration => {
                console.log('Service Worker registered with scope:', registration.scope);

                // Listen to messages from the service worker.
                navigator.serviceWorker.addEventListener('message', (event) => {
                    console.log('From SW:', event.data);
                    // Implement logic based on messages from the SW
                });
            }).catch(err => {
                console.error('Service Worker registration failed:', err);
            });
        });
    }
</script>



</html>
