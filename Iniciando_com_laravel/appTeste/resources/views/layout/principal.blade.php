<html>
<head>
    <title>appTeste - @yield('titulo')</title>
</head>

<body>
<header>
    @section('navbar')
        @include('layout._includes._navbar')
        <p>Aqui vamos ter o nosso navbar</p>
    @show
    <hr>
</header>

<main>
    <div>
        @yield('conteudo')
    </div>
</main>

<footer>
    <hr>
    @section('footer')
        @include('layout._includes._footer')
    @show
</footer>
</body>
</html>