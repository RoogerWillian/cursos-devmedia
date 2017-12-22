@extends('layout.principal')

@section('titulo', 'Home')
@section('navbar')
    @parent
    <p>Nova navbar</p>
@endsection

@section('conteudo')
    <p>Aqui é o conteúdo da Home</p>

    @if(2 === 1)
        É igual
    @elseif(2 > 1)
        É maior
    @endif
    <br>
    @for($i = 0; $i < 3; $i++)
        Contando com o nosso for {{ $i }} <br>
    @endfor

    @foreach($usuarios as $usuario)
        <p>nome : {{ $usuario['nome'] }}</p>
    @endforeach

    @forelse($livros as $livro)
        {{ $livro['nome'] }}
    @empty
        <p>Sem registros</p>
    @endforelse

    <?php $i = 0; ?>
    @while($i <= 4)
        <p>Esse é o while {{ $i++ }}</p>
    @endwhile

@endsection