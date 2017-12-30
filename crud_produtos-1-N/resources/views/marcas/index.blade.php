@extends('shared.base')
@section('content')
    <div class="panel panel-default">    
        <div class="panel-heading"><h3>Lista de Marcas</h3></div>
        <form method="GET" action="{{route('marcas.index', 'buscar' )}}">
        <div class="row">
            <div class="col-md-12">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Digite o nome da marca" name="buscar"
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
                            <th>Nome</th>
                            <th>Produtos</th>
                            <th class="text-right">Ações</th>
                        </tr>
                    </thead>            
                    <tbody>            
                        @forelse($marcas as $marca)
                            <tr>
                                <td>{{$marca->nome}}</td>
                                <td><a href="{{route('marcas.produtos', $marca->id)}}">Listar Produtos</a></td>
                                <td class="text-right">
                                    <a href="{{route('marcas.edit', $marca->id)}}"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="{{route('marcas.remove', $marca->id)}}"><i class="glyphicon glyphicon-trash"></i></a>
                                    <a href="{{route('marcas.show', $marca->id)}}"><i class="glyphicon glyphicon-zoom-in"></i></a>
                                </td>                                
                            </tr>
                            @empty
                                <tr class="text-center">
                                    <td colspan="3">Nenhuma marca encontrada!</td>
                                </tr>
                        @endforelse
                    </tbody>
                </table> 
            </div> 
        </div>
        <div align="center" class="row">
        	{{ $marcas->links() }}
	    </div>
    </div>
    <a href="{{route('marcas.create')}}"><button class="btn btn-primary">Adicionar</button></a>
@endsection