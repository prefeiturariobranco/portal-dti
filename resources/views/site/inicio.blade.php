@extends('templates/layout-principal')

@section('title')
    Portal DTI
@endsection

@push('css')
    <link href="public/css/icons.css">
@endpush


@section('content')
    <!-- Carousel Section -->
{{--    <section id="hero">--}}
{{--        <div class="hero-container" style="cursor: pointer">--}}
{{--                <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">--}}

{{--                    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>--}}
{{--                    <div class="carousel-inner" role="listbox">--}}
{{--                        @foreach($postagem as $key => $slider)--}}
{{--                            <div class="carousel-item {{$key == 0 ? 'active' : '' }}">--}}
{{--                                <a href="/novidade/{{$slider->id}}">--}}
{{--                                    <img src="/storage/banner/{{$slider->imagem}}" width="100%" alt="...">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}

{{--                        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">--}}
{{--                            <span class="carousel-control-prev-icon icofont-thin-double-left" aria-hidden="true"></span>--}}
{{--                            <span class="sr-only">Previous</span>--}}
{{--                        </a>--}}

{{--                        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">--}}
{{--                            <span class="carousel-control-next-icon icofont-thin-double-right"--}}
{{--                                  aria-hidden="true"></span>--}}
{{--                            <span class="sr-only">Next</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- End Carousel Section -->

    <main id="main">

        <!-- Serviços Section -->
        <section id="services" class="services section-bg">
            <div class="container">
                <?php $contarCategoria = 1; ?>
                @foreach($categorias as $cat)
                    @if($cat['nomeCategoria']['nomeCategoria'] == 'Serviços')
{{--                        <div class="section-title">--}}
{{--                            <h2>{{$cat['nomeCategoria']['nomeCategoria']}}</h2>--}}
{{--                        </div>--}}
                        <div class="row" style="margin-bottom: 30px ">
                            @foreach($cat['icone'] as $icons)
                                <div class="col-md-6 col-lg-3 align-items-stretch mb-lg-0"
                                     style="padding: 10px; cursor: pointer"
                                     @if($icons['dinamico'] == 2) onclick="window.open('{{$icons['link']}}', '_blank')"
                                     @else onclick="window.location.assign('{{$icons['link']}}')" @endif>
                                    <div class="icon-box">
                                        <div class="icon">
                                            <img style="width: 40px" src="{{$icons['caminho']}}" title="" alt=""/>
                                        </div>
                                        <h4 class="title">{{$icons['nome']}}</h4>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                    <?php $contarCategoria++; ?>
                @endforeach

            </div>
        </section>
        <!-- End Serviços Section -->

        <!-- Tutoriais Section -->
        <section class="more-services section-bg">
            <div class="container">
                <div class="section-title">
                    <a href="{{'/tutoriais'}}"><h2>Tutoriais</h2></a>
                </div>
                <div class="row">
                    <?php $contarTutorial = 1; ?>
                    @foreach($tutoriais as $tutorial )
                        @if($tutorial->ocultar == 0)

                            @if($contarTutorial <= 3)
                                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                                    <div class="card">
                                        @isset($tutorial->imagem)
                                            <div class="carousel-item active">
                                                <img src="{{asset('images/'.$tutorial->imagem)}}" class="d-block w-100"
                                                     alt="...">
                                            </div>
                                        @endisset
                                        <div class="card-body">
                                            <a href="/tutorial/{{ $tutorial->id }}">
                                                <h5 class="card-title">{{ $tutorial->titulo }}</h5>
                                            </a>
                                            <h6 class="card-subtitle">postado em {{ $tutorial->created_at }}</h6>
                                            <p class="card-text mt-3">{{ substr(strip_tags($tutorial->conteudo), 0, 200 ) }}
                                                ...</p>
                                        </div>
                                    </div>
                                </div>
                                <?php $contarTutorial++; ?>
                            @endif
                        @endif
                    @endforeach
                    <div class="container-fluid" style="text-align: center">
                        <a href="{{'/tutoriais'}}" title="" class="btn ">Mostrar Mais</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End More Services Section -->

        <!-- ======= Our Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Nosso Portfólio</h2>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <a href="aplicativos/">
                                <li data-filter="*" class="filter-active">Todos</li>
                            </a>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">

                    @foreach($aplicativos as $aplicativo)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap ml-5 col-8">
                                @isset($aplicativo->imagem)
                                    <img src="{{asset('storage/'.str_replace('public/', '', $aplicativo->imagem))}}"
                                         class="img-fluid " alt="">
                                    <div class="portfolio-info">
                                        <h4>{{$aplicativo->titulo}}</h4>
                                    </div>
                                    <div class="portfolio-links">
                                        <a href="{{asset('storage/'.str_replace('public/', '', $aplicativo->imagem))}}"
                                           data-gall="portfolioGallery"
                                           class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                                        <a href="{{$aplicativo->url}}" title="Mais Detalhes">
                                            <i class="bx bx-link"></i></a>
                                    </div>
                                @endisset
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- End Our Portfolio Section -->


        <!-- ======= Perguntas Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <a href="{{'/perguntas'}}"><h2>PERGUNTAS FREQUENTES</h2></a>
                </div>

                <?php $contarPerguntas = 1; ?>
                @foreach($perguntas as $pergunta)
                    <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">
                        <li class="row">
                            <div class="col col-12">
                                <button class="btn text-left questionCollapse w-100" type="button"
                                        data-toggle="collapse"
                                        data-target="#collapseExample{{$pergunta->id}}"
                                        aria-expanded="true" aria-controls="collapseExample{{$pergunta->id}}">
                                    <div class="row">
                                        <div class="col col-10">
                                            <span class="pergunta-titulo">{{$pergunta->titulo}}</span>
                                        </div>
                                        <div class="col col-2 text-right">
                                            <i class="fa fa-plus"></i>
                                        </div>
                                    </div>

                                </button>
                            </div>
                            <div class="col col-12">
                                <div class="collapse" id="collapseExample{{$pergunta->id}}">
                                    <div class="card card-body pergunta-fundo">
                                        <p>{{$pergunta->conteudo}}</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                @endforeach
            </div>
        </section>
        <!-- End Perguntas Section -->

    </main>
@endsection

@push('script')
    <script src="/js/site/inicio.js"></script>
    <script src="{{asset('js/site/perguntas.js')}}"></script>
@endpush
