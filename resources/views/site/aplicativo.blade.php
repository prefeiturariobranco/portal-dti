@extends('templates.layout-principal')
@section('css')@endsection
@section('js')@endsection
@section('title')
    Portal DTI
@endsection

@section('content')
    <section id="services" class="services section-bg">
        <div class="container">
            <div class="section-title">
                <h2>Aplicativo</h2>
            </div>

                <div class="card">
                    <div class="card-body text-center">
                            <a href="{{$aplicativo->url}}" title="Mostrar mais">
                                <h4 class="link-app">{{$aplicativo->titulo}}</h4></a>
                        <div class="img-app">
                            <a href="{{asset('storage/'.str_replace('public/', '', $aplicativo->imagem))}}"
                                   data-gall="portfolioGallery"
                                   class="venobox" title="{{ $aplicativo->titulo }}">
                                    <img src="{{asset('storage/'.str_replace('public/', '', $aplicativo->imagem))}}"
                                         class="img-fluid text-lg-center" width="600px" alt=""
                                         title="{{ $aplicativo->titulo }}">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
