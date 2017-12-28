<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/fontawesome.min.css') }}" rel="stylesheet">

    @yield('css')
</head>
<body>
<div id="app">
    @include('layouts._includes._nav')

    @if(Session::has('flash_message'))
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div align="center" class="alert {{ Session::get('flash_message')['class'] }}">
                        {{ Session::get('flash_message')['msg'] }}
                    </div>
                </div>
            </div>
        </div>
    @endif

    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
