@extends('templates/layout-submenu')

@section('css')@endsection
@section('js')@endsection
@section('content')
<h1 class="titulo_pagina text-capitalize">{{$titulo}}</h1>

<br>

<div class="boxers">
    @foreach($subIcones as $subIcone)
        <a href="{{$subIcone['link']}}" title="">
            <img src="{{$subIcone['caminho']}}" title="" alt=""/>
            <span class="bx">{{$subIcone['nome']}}</span>
        </a>

    @endforeach
</div>

@endsection
