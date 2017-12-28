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
                        <li class="active">Adicionar</li>
                    </ol>
                    <div class="panel-body">
                        <form action="{{ route('cliente.salvar') }}" method="post">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="form-group col-sm-7 {{ $errors->has('nome') ? 'has-error' : '' }}">
                                    <label class="control-label" for="nome">Nome</label>
                                    <input type="text" id="nome" class="form-control" name="nome"
                                           placeholder="Nome do cliente" autofocus value="{{ old('nome') }}">
                                    @if($errors->has('nome'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nome') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-sm-5 {{ $errors->has('email') ? 'has-error' : '' }}">
                                    <label class="control-label" for="nome">E-mail</label>
                                    <input type="text" id="email" class="form-control" name="email"
                                           placeholder="E-mail do cliente" value="{{ old('email') }}">
                                    @if($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-sm-12 {{ $errors->has('endereco') ? 'has-error' : '' }}">
                                    <label class="control-label" for="endereco">Endereço</label>
                                    <input type="text" id="nome" class="form-control" name="endereco"
                                           placeholder="Endereço do cliente" value="{{ old('endereco') }}">
                                    @if($errors->has('endereco'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('endereco') }}</strong>
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
