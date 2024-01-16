<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="page">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Yulia Reutova') }}</title>

    <!-- Fonts -->
{{--    <link rel="dns-prefetch" href="//fonts.bunny.net">--}}
    <link rel="icon" href="storage/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&amp;display=swap">
    <!-- Scripts -->
{{--    <script src="{{ mix('js/scrollLinks.js') }}"></script>--}}
{{--    <link href="{{ asset('app-041e359a.css') }}" rel="stylesheet">--}}
{{--    <script src="{{ asset('app-4681dad3.js') }}"></script>--}}
{{--    <script src="{{ asset('resources/js/scrollLinks.js') }}"></script>--}}
{{--    <script src="{{ asset('resources/js/scrollLinks.js') }}"></script>--}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body class="page-body">
    <div id="app">
        @yield('content')



    </div>
</body>
</html>
