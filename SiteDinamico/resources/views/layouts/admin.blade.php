<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('lib/materialize/dist/css/materialize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body id="app">

@include('layouts._admin._nav')
<main>

    @if(Session::has('mensagem'))
        <div class="container">
            <div class="row">
                <div class="card {{ Session::get('mensagem')['class'] }}">
                    <div class="card-content" align="center">{{ Session::get('mensagem')['msg'] }}</div>
                </div>
            </div>
        </div>
    @endif

    @yield('content')
</main>

@include('layouts._admin._footer')

<!-- Scripts -->
<script src="{{ asset('lib/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('lib/materialize/dist/js/materialize.min.js') }}"></script>
<script src="{{ asset('js/init.js') }}"></script>
</body>
</html>
