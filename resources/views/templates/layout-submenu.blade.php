<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title> @yield('titulo') </title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="stylesheet" href="/css/pacote-bibliotecas.css">
    <link rel="shortcut icon" href="/images/favicon.ico">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/submenu.css">
    <link rel="stylesheet" href="/css/site.css">
    @yield('css')
</head>

<body>
@include('templates/cabecalho')
<div class="textura">
    <div class="caixa-textura">
        <div class="container submenu_pagina">
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <div class="conjunto_menus">
                        <p style="margin-bottom: -1em; font-weight: bold; color: #727376;"> O QUE</p>
                        @foreach($categorias as $cat)
                        <div class="menu1 mt-4">
                            <h2 class="site-l-menu-subtitulo">{{$cat->nome}}</h2>
                            <div class="menulinks">
                                @foreach($icones as $icon)
                                    @if($icon->icones_categorias_id == $cat->id)
                                        <a href="{{$icon->link}}">{{$icon->nome}}</a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-8 col-xs-12">
                    <!-- content -->
                    @yield('content')

                </div>
            </div>
        </div>
    </div>
</div>

@include('templates/rodape')
<script src="/js/pacote-bibliotecas.js"></script>
@yield('js')
</body>
</html>
