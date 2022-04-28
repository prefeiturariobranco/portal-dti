@extends('templates/layout-principal')

@section('css')@endsection
@section('js')@endsection
@section('title') Portal DTI @endsection

@section('content')
    <section id="services" class="services section-bg">
        <div class="container">
            <div class="row" style="place-content: center">
                <div class="col-lg-10">
                    <div class="card">

                        <div class="card-body">
                            <h4 class="card-title">{{ $tutorial->titulo }}</h4>
                            <h6 class="card-subtitle">de {{ $tutorial->auto}} postado
                                em {{ $tutorial->created_at }}</h6>

                            <div class="mt-3">
                                <p>{{strip_tags($tutorial->conteudo)}}</p>
                            </div>

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    @isset($tutorial->imagem)
                                        <div class="carousel-item active">
                                            <img src="{{asset('images/'.$tutorial->imagem)}}" class="d-block w-100"
                                                 alt="...">
                                        </div>
                                    @endisset
                                    @isset($tutorial->imagem1)
                                        <div class="carousel-item">
                                            <img src="{{asset('images/'.$tutorial->imagem1)}}" class="d-block w-100"
                                                 alt="...">
                                        </div>
                                    @endisset
                                    @isset($tutorial->imagem2)
                                        <div class="carousel-item">
                                            <img src="{{asset('images/'.$tutorial->imagem2)}}" class="d-block w-100"
                                                 alt="...">
                                        </div>
                                    @endisset
                                    @isset($tutorial->imagem3)
                                        <div class="carousel-item">
                                            <img src="{{asset('images/'.$tutorial->imagem3)}}" class="d-block w-100"
                                                 alt="...">
                                        </div>
                                    @endisset
                                    @isset($tutorial->imagem4)
                                        <div class="carousel-item">
                                            <img src="{{asset('images/'.$tutorial->imagem4)}}" class="d-block w-100"
                                                 alt="...">
                                        </div>
                                    @endisset
                                    @isset($tutorial->imagem5)
                                        <div class="carousel-item">
                                            <img src="{{asset('images/'.$tutorial->imagem5)}}" class="d-block w-100"
                                                 alt="...">
                                        </div>
                                    @endisset
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                   data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                   data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            @if($tutorial->video!=NULL)
                                <div>
                                    <video width="100%" controls style="margin-top: 50px">
                                        <source src="{{asset('/videos/'.$tutorial->video)}}" type="video/mp4"/>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
