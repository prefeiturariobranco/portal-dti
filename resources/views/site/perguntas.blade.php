@extends('templates/layout-principal')
@section('js')
    <script src="/js/site/perguntas.js"></script>
@endsection

@section('title') Portal DTI @endsection

@section('content')
    <section id="services" class="services section-bg">
        <div class="container">
            <div class="section-title">
                <h2>Perguntas Frequentes</h2>
            </div>

            <div class="row">
                <div class="col-md-12">
                    @foreach($perguntas as $pergunta)
                        <div class="perguntas ">
                            <button style="border: none; border-radius: 5px; margin-top: 20px; " class="btn text-left col-md-12 " type="button" data-toggle="collapse"
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
        </div>
    </section>

@endsection
