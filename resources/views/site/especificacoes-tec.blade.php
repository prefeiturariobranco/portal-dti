@extends('templates/layout-submenu')
@section('css')@endsection
@section('js')@endsection
@section('content')
    @section('titulo') Especificações Tecnicas @endsection
    <h1 class="titulo_pagina text-capitalize">Especificações Tecnicas</h1>
    <br>

    <table class="table">
        <thead>
        <tr class="text-dark">
            <th class>Arquivo</th>
            <th class="text-center" width="20%">Ações</th>
        </tr>
        </thead>
        <tbody>

       @foreach($especificacoes as $especificao)
            <tr class="text-dark">
                <td>
                    {{$especificao->nome}}
                </td>
                <td class="text-center">
                    <a href="{{$especificao->arquivo}}">
                        <button class="btn btn-primary">
                            Download
                        </button>
                    </a>
                </td>
            </tr>
            ,
        @endforeach
        </tbody>
    </table>
@endsection

