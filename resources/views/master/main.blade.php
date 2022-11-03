<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Soft Skills Analysis</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{!! asset('css/app.css') !!}" media="all" rel="stylesheet" type="text/css" />
    @yield('styles')
    <link href="{!! asset('css/style.css') !!}" media="all" rel="stylesheet" type="text/css" />
    @yield('styles')
    <!-- Styles -->

</head>

<body>

<!-- Header -->
@component('master.header')
@endcomponent
<!-- .Header -->


<!-- .content -->
<main>
    @yield('content')

</main>
<!-- .content -->


@component('master.footer')
@endcomponent

<!-- Scripts -->

<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>
@yield('scripts')

</body>

</html>
