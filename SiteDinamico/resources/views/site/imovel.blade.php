@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="row section">
            <h3 align="center">Imóvel</h3>
            <div class="divider"></div>
        </div>

        <div class="row section">
            <div class="col s12 m8">
                <div class="row">
                    <div class="slider">
                        <ul class="slides">
                            <li>
                                <img src="{{ asset('img/modelo_detalhe_1.jpg') }}" alt="Imagem">
                                <div class="caption center-align">
                                    <h3>Título da Imagem 1</h3>
                                    <h5>Descrição do Slide 1</h5>
                                </div>
                            </li>

                            <li>
                                <img src="{{ asset('img/modelo_detalhe_2.jpg') }}" alt="Imagem">
                                <div class="caption left-align">
                                    <h3>Título da Imagem 2</h3>
                                    <h5>Descrição do Slide 2</h5>
                                </div>
                            </li>

                            <li>
                                <img src="{{ asset('img/modelo_detalhe_3.jpg') }}" alt="Imagem">
                                <div class="caption right-align">
                                    <h3>Título da Imagem 3</h3>
                                    <h5>Descrição do Slide 3</h5>
                                </div>
                            </li>

                            <li>
                                <img src="{{ asset('img/modelo_detalhe_4.jpg') }}" alt="Imagem">
                                <div class="caption left-align">
                                    <h3>Título da Imagem 4</h3>
                                    <h5>Descrição do Slide 4</h5>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row" align="center">
                    <button onclick="sliderPrev()" class="btn blue">Anterior</button>
                    <button onclick="sliderNext()" class="btn blue">Próxima</button>
                </div>
            </div>

            <div class="col s12 m4">
                <h4>Título do imóvel</h4>
                <blockquote>
                    <span>Descrição breve sobre o imóvel</span>
                </blockquote>
                <p><b>Código:</b> 245</p>
                <p><b>Status:</b> Vende-se</p>
                <p><b>Tipo:</b> Alvenaria</p>
                <p><b>Endereço:</b> Centro</p>
                <p><b>Cep:</b> 18950-00</p>
                <p><b>Cidade:</b> Ipaussu-SP</p>
                <p><b>Valor:</b> R$ 200.000,00</p>
                <a class="btn deep-orange darken-1" href="{{ route('site.contato') }}">Entrar em contato</a>
            </div>
        </div>
    </div>
@endsection
