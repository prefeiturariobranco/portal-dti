@extends('templates/layout-submenu')

@section('css')@endsection
@section('js')@endsection
@section('content')
<h1 class="titulo_pagina">TI Local</h1>

<div class="departamento">
    @foreach($secretarias as $secretaria)
        <p class="nome-departamento">{{$secretaria->nome}}</p>
        @foreach($secretaria->tiLocal as $contato)
            <div class="contato">
                <p>{{$contato->nome}}</p>
                <p><i class="fa fa-phone"></i> {{$contato->telefone}}</p>
                <p><i class="fa fa-envelope"></i> {{$contato->email}}</p>
            </div>
        @endforeach
    @endforeach
</div>
@endsection
