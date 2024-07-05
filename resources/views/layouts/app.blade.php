<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$title}}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Markazi+Text:wght@400..700&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&family=Markazi+Text:wght@400..700&display=swap"
        rel="stylesheet">

    <!-- Icon -->
    <link rel="icon" type="image/png" href="{{asset('images/minlogo.png')}}">

    <!-- Style sheet -->
    <link rel="styleSheet" href={{asset('css/app.css')}} type="text/css" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100" 
        x-data="{
        maintenance: false, 
        toggleMaintenance() { this.maintenance = ! this.maintenance }}">
        <header>
            @include('layouts.partials.header')
        </header>
        <main>
            {{ $slot }}
        </main>
        <footer>
            @include('layouts.partials.footer')
        </footer>
    </div>
</body>

</html>