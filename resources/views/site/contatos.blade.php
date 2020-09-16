@extends('templates/layout-submenu')
@section('css')@endsection
@section('js')@endsection
@section('content')
    <h1 class="titulo_pagina">Contatos DTI</h1>

    <div class="departamento">
        @foreach($departamentos as $departamento)
            <p class="nome-departamento">{{$departamento->nome}}</p>
            @foreach($contatos as $contato)
                @if($contato->ocultar===0)
                    @if ($contato->departamento_id == $departamento->id)
                        <div class="contato">
                            <p>{{$contato->nome}}</p>
                            <p class="cargo">{{$contato->cargos->nome}}</p>
                            <p><i class="fa fa-phone"></i> {{$contato->telefone}}</p>
                            <p><i class="fa fa-envelope"></i> {{$contato->email}}</p>
                    </div>
                    @endif
                @endif
            @endforeach
        @endforeach

    </div>
@endsection
