@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="row" style="margin-top: 10px">
            <nav>
                <div class="nav-wrapper blue">
                    <div class="col s12">
                        <a href="{{ route('admin.principal') }}" class="breadcrumb">Início</a>
                        <a href="#" class="breadcrumb">Usuários</a>
                    </div>
                </div>
            </nav>
        </div>

        <table>
            <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th class="right-align"></th>
            </tr>
            </thead>

            <tbody>
            @forelse($usuarios as $usuario)
                <tr>
                    <th>{{ $usuario->id }}</th>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td class="right-align">
                        <a href="#" class="btn orange">Editar</a>
                        <a href="#" class="btn red">Deletar</a>
                    </td>
                </tr>
            @empty
                <tr class="text-center">
                    <td colspan="4">Nenhum usuário encontrado!</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection