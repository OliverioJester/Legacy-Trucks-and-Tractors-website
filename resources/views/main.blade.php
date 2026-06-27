<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="@yield('meta_description', 'Your trusted dealer of heavy and light trucks, tractors, and power equipment, delivering dependable performance where it matters most.')">
        <link rel="icon" type="image/png" href="/images/Logo.png" />
        <link rel="preload" as="image" href="/images/Background_hero.jpg">
        <link rel="preload" as="image" href="/images/Background-About-Page.jpg">
        <title>
                @yield('title', 'The Legacy Trucks and Tractors')
        </title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </head>

    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/glide.min.js"></script>
    <body class="">
        @yield('body')
    </body>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- reCAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>    
</html>
