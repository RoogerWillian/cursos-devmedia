@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <ol class="breadcrumb panel-heading" style="margin-bottom: 0">
                        <li>
                            <a href="{{ route('cliente.index') }}">
                                <span>Clientes</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('cliente.detalhe', $cliente->id) }}">Detalhe</a>
                        </li>

                        <li class="active">Novo telefone</li>
                    </ol>
                    <div class="panel-body">
                        <form action="{{ route('telefone.salvar', $cliente->id) }}" method="post">
                            {{ csrf_field() }}
                            <p><b>Cliente: </b> {{ $cliente->nome }}</p>

                            <div class="row">
                                <div class="form-group col-sm-6 {{ $errors->has('titulo') ? 'has-error' : '' }}">
                                    <label class="control-label" for="titulo">Título</label>
                                    <input type="text" id="titulo" class="form-control" name="titulo"
                                           placeholder="Descrição do telefone" value="{{ old('titulo') }}">
                                    @if($errors->has('titulo'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('titulo') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-sm-6 {{ $errors->has('telefone') ? 'has-error' : '' }}">
                                    <label class="control-label" for="numero">Número</label>
                                    <input type="text" id="numero" class="form-control" name="telefone"
                                           placeholder="Número do telefone" value="{{ old('telefone') }}">
                                    @if($errors->has('telefone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('telefone') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <button class="btn btn-primary">Adicionar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
