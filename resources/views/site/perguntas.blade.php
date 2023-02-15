@extends('templates/layout-principal')


@section('content')
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Perguntas Frequentes</h2>
            </div>

            <div class="row">
                <div class="col-md-12">
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
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script src="{{asset('js/site/inicio.js')}}}"></script>
    <script src="{{asset('js/site/perguntas.js')}}"></script>
@endpush
