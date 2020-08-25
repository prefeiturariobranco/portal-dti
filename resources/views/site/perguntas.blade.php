@extends('templates/layout-submenu')
@section('js')
<script src="/js/site/perguntas.js"></script>
@endsection
@section('content')
    <h1 class="titulo_pagina">PERGUNTAS FREQUENTES</h1>

    <div class="row">
        <div class="col-md-12">
            @foreach($perguntas as $pergunta)
            <div class="perguntas">
                <button class="btn btn-primary text-left" type="button" data-toggle="collapse"
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
            </div>
            @endforeach
        </div>
    </div>
@endsection
