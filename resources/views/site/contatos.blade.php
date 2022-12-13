@extends('templates/layout-principal')
@push('css')
    <link href="{{ asset('assets/css/contatos.css') }}" rel="stylesheet">
@endpush

@section('js')@endsection
@section('title')
    Portal de Tecnologia
@endsection

@section('content')
    <div class="main">
        <section class="container contatos">
            <div class="row justify-content-center">
                <div class="sidenav col-md-3">
                    <nav class="nav flex-column">
                        <a class="nav-link active" href="{{'/contatos'}}">Contatos</a>
                        <a class="nav-link" href="{{'/ti-local'}}">TI Local</a>
                    </nav>
                </div>

                <div class="departamento col-md-8">
                    @foreach($departamentos as $departamento)
                        <p class="nome-departamento">{{$departamento->nome}}</p>
                        @foreach($contatos as $contato)
                            @if($contato->ocultar===0)
                                @if ($contato->departamento_id == $departamento->id)
                                    <div class="contato">
                                        <p class="nome-contato">{{$contato->nome}}</p>
                                        <p class="cargo">{{$contato->cargos->nome}}</p>
                                        @if(!is_null($contato->telefone))
                                        <p><i class="bx bx-phone"></i> {{$contato->telefone}}</p>
                                        @endif
                                        @if(!is_null($contato->email))
                                        <p><i class="bx bx-envelope"></i> {{$contato->email}}</p>
                                        @endif
                                    </div>
                                @endif
                            @endif
                        @endforeach
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection
