@extends('templates/layout-principal')
@section('css')
    <link href="assets/css/novo_layout.css" rel="stylesheet">
@endsection

@section('js')
@section('title') Portal DTI @endsection
<script src="/js/site/inicio.js"></script>
@endsection

@section('content')
    <!-- Carousel Section -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
                <div class="carousel-inner" role="listbox">
                    @foreach($postagem as $key => $slider)
                        <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                            <a href="/novidade/{{$slider->id}}">
                                <img src="/storage/banner/{{$slider->imagem}}" width="100%" alt="...">
                            </a>
                        </div>
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
    <!-- End Carousel Section -->

    <main id="main">

        <!-- Serviços Section -->
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
                                                <div class="col-md-6 col-lg-3 align-items-stretch mb-lg-0" style="padding: 10px;">
                                                    <div class="icon-box">
                                                        <div class="icon">
                                                            <img style="width: 40px" src="{{$icons['caminho']}}"
                                                                 title="" alt=""/>
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
                        @if($contarTutorial <= 3)
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="card">
                                @isset($tutorial->imagem)
                                    <div class="carousel-item active">
                                        <img src="{{asset('images/'.$tutorial->imagem)}}" class="d-block w-100" alt="...">
                                    </div>
                                @endisset
                                <div class="card-body">
                                    <a href="/tutorial/{{ $tutorial->id }}">
                                        <h5 class="card-title">{{ $tutorial->titulo }}</h5>
                                    </a>
                                    <h6 class="card-subtitle">postado em {{ $tutorial->created_at }}</h6>
                                    <p class="card-text mt-3">{{ substr(strip_tags($tutorial->conteudo), 0, 200 ) }}...</p>
                                </div>
                            </div>
                        </div>
                        <?php $contarTutorial++; ?>
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
                    <h2>Nosso Portfolio</h2>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">Todos</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/meuonibus.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 1</h4>
                                <p>App</p>
                            </div>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/meuonibus.png" data-gall="portfolioGallery" class="venobox"
                                   title="App 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/alertario.jpeg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                            </div>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/alertario.jpeg" data-gall="portfolioGallery" class="venobox"
                                   title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/zonaazul.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 2</h4>
                                <p>App</p>
                            </div>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/zonaazul.png" data-gall="portfolioGallery" class="venobox"
                                   title="App 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Our Portfolio Section -->


        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <a href="{{'/perguntas'}}"><h2>PERGUNTAS FREQUENTES</h2></a>

                </div>

                <?php $contarPerguntas = 1; ?>
                @foreach($perguntas as $pergunta)
                    @if($contarPerguntas <= 5)
                <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">
                    <li>
                        <button class="btn text-left col-md-12" type="button" data-toggle="collapse"
                                data-target="#collapseExample{{$pergunta->id}}"
                                aria-expanded="true" aria-controls="collapseExample{{$pergunta->id}}">
                            <i class="fa fa-plus"></i>
                            <span class="pergunta-titulo">{{$pergunta->titulo}}</span>
                        </button>
                        <div class="collapse" id="collapseExample{{$pergunta->id}}">
                            <div class="card card-body pergunta-fundo">
                                <p>{{$pergunta->conteudo}}</p>
                            </div>
                        </div>
                    </li>
                </ul>
                        <?php $contarPerguntas++; ?>
                    @endif
                @endforeach

            </div>
        </section><!-- End F.A.Q Section -->

    </main>
@endsection
