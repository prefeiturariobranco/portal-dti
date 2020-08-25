@extends('templates/layout-submenu')

@section('css')@endsection

@section('content')

<div class="content__inner container">
    @foreach($tutoriais as $tutorial)
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <a href="/tutorial/{{ $tutorial->id }}">
                            <h4 class="card-title">{{ $tutorial->titulo }}</h4>
                        </a>
                        <h6 class="card-subtitle">postado em {{ $tutorial->created_at }}</h6>
                        <p class="card-text mt-3">{{ substr(strip_tags($tutorial->conteudo), 0, 200 ) }} ...</p>
                        <a href="/tutorial/{{ $tutorial->id }}" title="" class="btn btn-primary">Mostrar Mais</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</div>

@endsection
