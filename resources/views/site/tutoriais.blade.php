@extends('templates/layout-principal')

@section('css')@endsection

@section('content')

    <section id="services" class="services section-bg">
        <div class="container">
            <div class="section-title">
                <h2>Tutoriais</h2>
            </div>
            @foreach($tutoriais as $tutorial)

                <div class="row" style="place-content: center">
                    <div class="col-lg-10" style="margin-bottom: 20px">
                        <div class="card">
                            <div class="card-body">
                                <a href="/tutorial/{{ $tutorial->id }}">
                                    <h4 class="card-title">{{ $tutorial->titulo }}</h4>
                                </a>
                                <h6 class="card-subtitle">postado em {{ $tutorial->created_at }}</h6>
                                <p class="card-text mt-3">{{ substr(strip_tags($tutorial->conteudo), 0, 200 ) }} ...</p>
                                <a href="/tutorial/{{ $tutorial->id }}" title="" class="btn">Mostrar Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

</div>

@endsection
