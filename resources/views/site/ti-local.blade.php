@extends('templates/layout-principal')
@push('css')
    <link href="{{ asset('assets/css/contatos.css') }}" rel="stylesheet">
@endpush
@section('js')@endsection
@section('title')
    Portal DTI
@endsection

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
                        @foreach($secretaria->tiLocal as $contato)
                            @if($contato->ocultar == 0)
                                <p class="nome-departamento">{{$secretaria->nome}}</p>
                                <div class="contato">
                                    <p>{{$contato->nome}}</p>
                                    @if(!is_null($contato->telefone))
                                    <p><i class="bx bx-phone"></i> {{$contato->telefone}}</p>
                                    @endif
                                    @if(!is_null($contato->email))
                                    <p><i class="bx bx-envelope"></i> {{$contato->email}}</p>
                                    @endif
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection
