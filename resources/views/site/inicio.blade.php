@extends('templates/layout-principal')
@section('css')
    <link href="assets/css/novo_layout.css" rel="stylesheet">
@endsection

@section('js')
@section('title') Portal DTI @endsection
<script src="/js/site/inicio.js"></script>
@endsection

@section('content')
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
                <div class="carousel-inner" role="listbox">
                    @foreach($postagem as $key => $slider)
                        <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                            <a href="/novidade/{{$slider->id}}">
                                <img src="/storage/banner/{{$slider->imagem}}" class="d-block w-100" height="209px"
                                     alt="...">
                            </a>
                        </div>
                        {{--<div class="carousel-item active {{$key == 0 ? 'active' : '' }}">--}}
                        {{--     <div class="carousel-background">--}}
                        {{--          <img src="/storage/banner/{{$slider->imagem}}">--}}
                        {{--     </div>--}}
                        {{--<div class="carousel-container">--}}
                        {{--     <div class="carousel-content">--}}
                        {{--          <a  href="/novidade/{{$slider->id}}"  class="btn-get-started animate__animated animate__fadeInUp scrollto">--}}
                        {{--                                  Get Started</a>--}}
                        {{--     </div>--}}
                        {{-- </div>--}}
                    @endforeach

                    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon icofont-thin-double-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon icofont-thin-double-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="container pt-5">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($postagem as $key => $slider)
                    <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                        <a href="/novidade/{{$slider->id}}"><img src="/storage/banner/{{$slider->imagem}}"
                                                                 class="d-block w-100" height="209px" alt="..."></a>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true">     </span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <main id="main">
        <section id="services" class="services section-bg">
            <div class="container">
                <?php $contarCategoria = 1; ?>
                @foreach($categorias as $cat)
                    @if($cat['nomeCategoria']['nomeCategoria'] == 'Serviços')
                        <div class="section-title">
                            <h2>{{$cat['nomeCategoria']['nomeCategoria']}}</h2>
                        </div>
                        <div class="row" style="margin-bottom: 30px">
                            @foreach($cat['icone'] as $icons)
                                @if($icons['dinamico'] == 1)
                                    <a href="{{$icons['link']}}">
                                        @else
                                            <a href="{{$icons['link']}}" target="_blank">
                                                @endif
                                                <div class="col-md-6 col-lg-3 align-items-stretch mb-5 mb-lg-0" style="padding: 10px;">
                                                    <div class="icon-box">
                                                        <div class="icon">
                                                            <img style="width: 40px" src="{{$icons['caminho']}}" title="" alt=""/>
                                                        </div>
                                                        <h4 class="title"><a href="{{$icons['link']}}">{{$icons['nome']}}</a></h4>
                                                    </div>
                                                </div>
                                            </a>
                                    </a>
                            @endforeach
                        </div>
                    @endif
                    <?php $contarCategoria++; ?>
                @endforeach

            </div>
        </section>

    </main>
@endsection
