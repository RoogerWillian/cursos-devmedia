@extends('layouts.app')

@section('css')
<link href="{{ asset('/css/cliente/cliente.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <ol class="breadcrumb panel-heading" style="margin-bottom: 0">
                        <li class="active">Clientes</li>
                    </ol>
                    <div class="panel-body">
                        <p>
                            <a href="{{ route('cliente.adicionar') }}" class="btn btn-primary">
                                <span>Adicionar</span>
                            </a>
                        </p>

                        <table id="tabela_clientes" class="table table-hover">
                            <thead style="background-color: #F5F8FA">
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Endereço</th>
                                <th style="text-align: right"></th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($clientes as $cliente)
                                <tr onclick="location.href='{{ route('cliente.detalhe', $cliente->id) }}'">
                                    <th scope="row">{{ $cliente->id }}</th>
                                    <td>{{ $cliente->nome . ' ' . $cliente->sobrenome }}</td>
                                    <td>{{ $cliente->email }}</td>
                                    <td>{{ $cliente->endereco }}</td>
                                    <td style="text-align: right">
                                        <a href="{{ route('cliente.editar', $cliente->id) }}"
                                           class="btn btn-xs btn-default">Editar</a>

                                        <a href="javascript:(confirm('Remover esse registro ?') ? location.href='{{route('cliente.deletar', $cliente->id)}}' : false)"
                                           class="btn btn-xs btn-danger">Remover</a>
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>

                        <div align="center">
                            {!! $clientes->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
