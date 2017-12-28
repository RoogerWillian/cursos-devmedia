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
                        <li class="active">{{ count($errors->all()) > 0 ? old('nome') : $cliente->nome }}</li>
                    </ol>
                    <div class="panel-body">
                        <form action="{{ route('cliente.atualizar', $cliente->id) }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="put">
                            <div class="row">
                                <div class="form-group col-sm-8 {{ $errors->has('nome') ? 'has-error' : '' }}">
                                    <label for="nome">Nome</label>
                                    <input type="text" id="nome" class="form-control" name="nome"
                                           placeholder="Nome do cliente"
                                           value="{{ $errors->has('nome') || count($errors->all()) > 0 ? old('nome') : $cliente->nome }}">
                                    @if ($errors->has('nome'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('nome') }}
                                            </strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-sm-4 {{ $errors->has('email') ? 'has-error' : '' }}">
                                    <label class="control-label" for="nome">E-mail</label>
                                    <input type="text" id="email" class="form-control" name="email"
                                           placeholder="E-mail do cliente"
                                           value="{{ $errors->has('email') || count($errors->all()) > 0 ? old('email') : $cliente->email }}">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('email') }}
                                            </strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-sm-12 {{ $errors->has('endereco') ? 'has-error' : '' }}">
                                    <label class="control-label" for="endereco">Endereço</label>
                                    <input type="text" id="nome" class="form-control" name="endereco"
                                           placeholder="Endereço do cliente"
                                           value="{{ $errors->has('endereco') || count($errors->all()) > 0 ? old('endereco') : $cliente->endereco }}">
                                    @if ($errors->has('endereco'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('endereco') }}
                                            </strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <button class="btn btn-primary">Gravar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
