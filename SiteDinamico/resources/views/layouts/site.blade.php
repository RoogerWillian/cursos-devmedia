<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('lib/materialize/dist/css/materialize.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body id="app">
<header>
    @include('layouts._site._nav')
</header>

<main>
    @yield('content')
</main>

@include('layouts._site._footer')
<!-- Scripts -->
<script src="{{asset('lib/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('lib/materialize/dist/js/materialize.min.js')}}"></script>
<script src="{{asset('js/init.js')}}"></script>
</body>
</html>