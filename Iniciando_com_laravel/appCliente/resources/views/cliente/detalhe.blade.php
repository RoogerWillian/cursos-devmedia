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
                        <li class="active">Detalhe</li>
                    </ol>
                    <div class="panel-body">
                        <p><b>Cliente: </b>{{ $cliente->nome }}</p>
                        <p><b>E-mail: </b>{{ $cliente->email }}</p>
                        <p><b>Endereço: </b>{{ $cliente->endereco }}</p>

                        <hr>
                        <p>
                            <a href="{{ route('telefone.adicionar', $cliente->id) }}" class="btn btn-primary">
                                <span>Adicionar telefone</span>
                            </a>
                        </p>

                        <table class="table table-hover">
                            <thead style="background-color: #F5F8FA">
                            <tr>
                                <th>#</th>
                                <th>Título</th>
                                <th>Número</th>
                                <th style="text-align: right"></th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($cliente->telefones as $telefone)
                                <tr>
                                    <th scope="row">{{ $telefone->id }}</th>
                                    <td>{{ $telefone->titulo }}</td>
                                    <td>{{ $telefone->telefone }}</td>

                                    <td style="text-align: right">
                                        <a href="{{ route('telefone.editar', $telefone->id) }}"
                                           class="btn btn-xs btn-default">Editar</a>

                                        <a href="javascript:(confirm('Remover esse registro ?') ? location.href='{{route('telefone.deletar', $telefone->id)}}' : false)"
                                           class="btn btn-xs btn-danger">Remover</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
