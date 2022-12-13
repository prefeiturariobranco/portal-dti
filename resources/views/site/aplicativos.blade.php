@extends('templates/layout-principal')
@section('css')@endsection
@section('js')@endsection
@section('title')
    Portal de Tecnologia
@endsection

@section('content')
    <section id="services" class="services section-bg">
        <div class="container">
            <div class="section-title">
                <h2>Aplicativos</h2>
            </div>
            @if (empty($aplicativos[0]))
                <p class="card-text mt-3">Nenhum Resultado Encontrado Busque Novamente</p>
            @endif

            @foreach($aplicativos as $aplicativo)
                <div class="row" style="margin-bottom: 20px; place-content: center">
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-body">
                                <a href="{{ route('site.app', $aplicativo->id) }}">
                                    <h4 class="card-title">{{$aplicativo->titulo}}</h4>
                                </a>
                                <h6 class="card-subtitle">postado em {{$aplicativo->created_at}}</h6>

                                <a href="{{ route('site.app', $aplicativo->id) }}" title="" class="btn ">Mostrar
                                    Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
