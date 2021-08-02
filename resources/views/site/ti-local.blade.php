@extends('templates/layout-principal')
@push('css')
    <link href="assets/css/contatos.css" rel="stylesheet">
@endpush
@section('js')@endsection
@section('content')
    <div class="main">
        <section class="container contatos">
            <div class="row justify-content-center">
                <div class="sidenav col-md-3">
                    <nav class="nav flex-column">
                        <a class="nav-link" href="{{'/contatos'}}">Contatos</a>
                        <a class="nav-link active" href="{{'/ti-local'}}">TI Local</a>
                    </nav>
                </div>

                <div class="departamento col-md-8">
                    @foreach($secretarias as $secretaria)
                        <p class="nome-departamento">{{$secretaria->nome}}</p>
                        @foreach($secretaria->tiLocal as $contato)
                            <div class="contato">
                                <p>{{$contato->nome}}</p>
                                <p><i class="bx bx-phone"></i> {{$contato->telefone}}</p>
                                <p><i class="bx bx-envelope"></i> {{$contato->email}}</p>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection
