<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>THT 18123011</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:500" rel="stylesheet" />

    <!-- Styles / Scripts -->
    <link rel="icon" type="image/png" href="{{ asset('imt.png') }}">
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif
</head>

<body id="tres" class="flex gap-5 flex-col justify-center content-center text-center items-center bg-gradient-to-r from-[#2C4981] to-[#d0d0d0]">
    @include('templet.navbar')
    @yield('content_room')
    @include('templet.footer')
</body>

</html>
