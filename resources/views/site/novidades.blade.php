@extends('templates/layout-principal')
@section('css')@endsection
@section('js')@endsection

@section('content')
    <section id="services" class="services section-bg">
        <div class="container">
            @if (empty($postagens[0]))
                <p class="card-text mt-3">Nenhum Resultado Encontrado Busque Novamente</p>
            @endif

            @foreach($postagens as $postagem)
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="/novidade/{{$postagem->id}}">
                                    <h4 class="card-title">{{$postagem->titulo}}</h4>
                                </a>
                                <h6 class="card-subtitle">postado em {{$postagem->created_at}}</h6>

                                <p class="card-text mt-3">{{substr(strip_tags($postagem->conteudo), 0, 200 )}} ...</p>

                                <a href="/novidade/{{$postagem->id}}" title="" class="btn ">Mostrar Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
