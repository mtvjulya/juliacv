<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="page">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'YuliaReutova') }}</title>
    <meta name="description" content="Hello there, I am Yulia Reutova, English-Chinese-Russian speaking, Front-end developer, Full-stack developer, Web-developer.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:title" content="Yulia Reutova">
    <meta name="og:description" content="Hello there, I am Yulia Reutova, English-Chinese-Russian speaking, Front-end developer, Full-stack developer, Web-developer.">
    <meta name="author" content="Yulia Reutova | Web-developer &amp; Front-end developer">

    <link rel="icon" type="image/x-icon" href="storage/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="storage/favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="storage/icon180x180.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&amp;display=swap">
    <!-- Scripts -->

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body class="page-body">
    <div id="app">
        @yield('content')



    </div>
</body>
</html>
