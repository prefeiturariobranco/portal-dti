@extends('templates/layout-principal')
@section('css')@endsection

@section('js')
@section('title') Portal DTI @endsection
<script src="/js/site/inicio.js"></script>
@endsection

@section('content')
    <div class="textura">
        <div class="">
            <!--caixa-textura-->
            <div class="container">

                <div class="row">
                    <!-- TELA GRANDE -->
                    <?php $contarCategoria = 1; ?>
                    @foreach($categorias as $cat)
                        @if($contarCategoria == 1)
                            <div class="d-none d-xl-block col-xl-6" style="padding: 2%;">
                                <p style="margin-bottom: -1em; font-weight: bold; color: #727376;"> O QUE</p>
                                @endif
                                @if($contarCategoria != 1)
                                    <div class="d-none d-xl-block col-xl-3" style="padding: 2%;">
                                        @endif
                                        <p class="dti-separador-livre"
                                           style="font-size: 200%; text-transform: uppercase; color: #727376;">{{$cat['nomeCategoria']['nomeCategoria']}}</p>
                                        <div class="boxers">
                                            @foreach($cat['icone'] as $icons)
                                                @if($icons['dinamico'] == 1)
                                                    <a href="{{$icons['link']}}">
                                                        @else
                                                            <a href="{{$icons['link']}}" target="_blank">
                                                                @endif
                                                                <img src="{{$icons['caminho']}}" title="" alt=""/>
                                                                <span class="bx">{{$icons['nome']}}</span>
                                                            </a>
                                                    </a>
                                                    @endforeach
                                        </div>
                                    </div>
                                <?php $contarCategoria++; ?>
                                @endforeach

                                <!-- TELA MEDIA -->

                                    <div class="d-none d-lg-block d-md-block d-sm-block d-xl-none" style="padding: 2%;">
                                        <p style="margin-bottom: -1em; font-weight: bold; color: #727376;"> O QUE</p>
                                        <p class="dti-separador-livre" style="font-size: 200%; text-transform: uppercase;
                        color: #727376;">Eu Preciso ?
                                        </p>
                                        <div class="boxers">
                                            @foreach($categorias as $cat)
                                                @foreach($cat['icone'] as $icons)
                                                    @if($icons['dinamico'] == 1)
                                                        <a href="{{$icons['link']}}">
                                                            @else
                                                                <a href="{{$icons['link']}}" target="_blank">
                                                                    @endif
                                                                    <img src="{{$icons['caminho']}}" title="" alt=""/>
                                                                    <span class="bx">{{$icons['nome']}}</span>
                                                                </a>
                                                        @endforeach
                                                        @endforeach
                                        </div>
                                    </div>
                                    <!--  TELA PEQUENA -->

                                    <div class="d-block d-sm-none col-12" style="padding: 2%;">
                                        <p style="margin-bottom: -1em; font-weight: bold; color: #727376;"> O QUE</p>
                                        <p class="dti-separador-livre" style="font-size: 200%; text-transform: uppercase;
                        color: #727376;">Eu Preciso</p>
                                        <div class="dti-lista-nav">
                                            @foreach($categorias as $cat)
                                                @foreach($cat['icone'] as $icons)
                                                    @if($icons['dinamico'] == 1)
                                                        <a href="/submenu/{{$icons['id']}}">
                                                            @endif
                                                            @if($icons['dinamico'] == 3)
                                                                <a href="{{$icons['link']}}">
                                                                    @endif
                                                                    @if($icons['dinamico'] == 2)
                                                                        <a href="{{$icons['link']}}">
                                                                            @endif
                                                                            <img src="{{$icons['caminho']}}" title=""
                                                                                 style="width: 10%;"/> {{$icons['nome']}}
                                                                        </a>
                                                        @endforeach
                                                        @endforeach
                                        </div>
                                    </div>
                            </div>
                </div>
            </div>
        </div>
            <div class="container pt-5">

                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($postagem as $key => $slider)
                            <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                <a href="/novidade/{{$slider->id}}"><img src="/storage/banner/{{$slider->imagem}}" class="d-block w-100" height="209px" alt="..."></a>
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#myCarousel" role="button"  data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true">     </span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
    </div>
@endsection
