@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="row section">
            <h3 align="center">Sobre</h3>
            <div class="divider"></div>
        </div>

        <div class="row section">
            <div class="col s12 m6">
                <img src="{{ asset('img/modelo_img_home.jpg') }}" class="responsive-img">
            </div>

            <div class="col s12 m6">
                <h4>A Empresa</h4>
                <blockquote>
                    <span>Descrição breve sobre a empresa</span>
                </blockquote>
                <p>Texto sobre a empresa</p>
            </div>
        </div>
    </div>
@endsection
