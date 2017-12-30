@extends('shared.base')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><h3>Lista de Produtos</h3></div>
        <form method="GET" action="{{route('produtos.index', 'buscar' )}}">
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Digite o nome do produto" name="buscar"
                               autofocus style="border-radius: 0" value="{{ \Illuminate\Support\Facades\Input::get('buscar') }}">
                        <span class="input-group-btn">
                        <button class="btn btn-primary" style="border-radius: 0" type="submit">Pesquisar</button>
                    </span>
                    </div>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Descrição</th>
                        <th>Preço</th>
                        <th>Cor</th>
                        <th>Peso</th>
                        <th>Marca</th>
                        <th class="text-right">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($produtos as $produto)
                        <tr>
                            <td>{{$produto->descricao}}</td>
                            <td>{{number_format($produto->preco, 2, ',', '.')}}</td>
                            <td>{{$produto->cor}}</td>
                            <td>{{$produto->peso}}</td>
                            <td>{{$produto->marca->nome}}</td>
                            <td class="text-right">
                                <a href="{{route('produtos.edit', $produto->id)}}"><i
                                            class="glyphicon glyphicon-pencil"></i></a>
                                <a href="{{route('produtos.remove', $produto->id)}}"><i
                                            class="glyphicon glyphicon-trash"></i></a>
                                <a href="{{route('produtos.show', $produto->id)}}"><i
                                            class="glyphicon glyphicon-zoom-in"></i></a>
                            </td>
                        </tr>
                    @empty
                        <tr class="text-center">
                            <td colspan="6">Nenhum produto encontrado</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div align="center" class="row">
            {{ $produtos->links() }}
        </div>
    </div>
    <a href="{{route('produtos.create')}}">
        <button class="btn btn-primary">Adicionar</button>
    </a>
@endsection