@extends('templates.dashboard')
@section('titulo') Linha do Tempo @endsection

@section('css')
<link rel="stylesheet" href="/css/timeline.css">
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-body">

                <div class="row">
                    <div class="col-xs-12 col-lg-12 mx-auto text-center">
                        <h1>LINHA DO TEMPO</h1>
                        <span>DIRETORIA DE TECNOLOGIA DA INFORMAÇÃO/SEGATI</span>
                    </div>
                </div>


                <div class="row mt-3">
                    <div class="col-xs-12 col-lg-6 offset-lg-3">

                        <ul class="timeline">

                            @foreach($acontecimentos as $acontecimento)
                                <li>
                                    <h3>{{ $acontecimento->ano }}</h3>
                                    <p class="text-justify">{{ $acontecimento->descricao}}</p>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>



            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection
