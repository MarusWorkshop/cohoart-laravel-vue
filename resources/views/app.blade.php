<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-trueH">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    @inertiaHead

    <script>
        // We listen to the resize event
        window.addEventListener('resize', () => {
            // We execute the same script as before
            let vh = window.innerHeight * 0.01;
            document.documentElement.style.setProperty('--vh', `${vh * 100}px`);
        });
    </script>
</head>
<body class="antialiased overflow-x-clip h-trueH">
    @inertia
</body>
</html>
