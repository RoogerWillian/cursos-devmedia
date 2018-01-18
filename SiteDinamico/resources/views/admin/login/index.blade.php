@extends('layouts.admin')

@section('content')

    <div class="container">
        <h3>Entrar</h3>

        <form action="{{ route('admin.login') }}" method="post">
            {{ csrf_field() }}
            @include('admin.login._form')
            <button class="btn green">Entrar</button>
        </form>
    </div>

@endsection