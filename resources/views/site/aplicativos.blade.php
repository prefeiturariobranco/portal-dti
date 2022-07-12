
@extends('templates.layout-principal')
@section('css')@endsection
@section('js')@endsection
@section('title') Portal DTI @endsection

@section('content')
    <section id="services" class="services section-bg">
        <div class="container" >
            <div class="section-title">
                <h2>Aplicativos</h2>
            </div>
            @if (empty($aplicativos[0]))
                <div>
                    <img src="{{ asset('/assets/images/notfound.png') }}" width="50%">
                    <p class="card-text mt-3">Nenhum Resultado Encontrado Busque Novamente</p>
                    @endif
                    @foreach($aplicativos as $aplicativo)
                        <div class="portfolio-info mt-3" style="text-align: center">
                            <a href="{{$aplicativo->url}}">
                            <h4>{{$aplicativo->titulo}}</h4>
                        <img src="{{asset('storage/'.str_replace('public/', '', $aplicativo->imagem))}}"
                             class="img-fluid text-lg-center" width="50%" alt="">
                        </a>
                </div>
                @endforeach
                </div>
@endsection
