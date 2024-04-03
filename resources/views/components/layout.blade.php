<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- link font titoli --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Comfortaa:wght@300..700&family=Fjalla+One&family=Oswald:wght@200..700&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
        rel="stylesheet">

    {{-- font paragrafi --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Comfortaa:wght@300..700&family=Fjalla+One&family=Gruppo&family=Oswald:wght@200..700&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
        rel="stylesheet">
    {{-- link vite bootstrap --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
{{-- fine dell'head del layout --}}

<body>
    <x-navbar></x-navbar>
    <div class="body1">
        {{ $slot }}
    </div>

</body>

</html>
