<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>@yield('title')</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="/images/favicon.ico">
    <link rel="stylesheet" href="/css/pacote-bibliotecas.css">
    <link rel="stylesheet" href="/css/site.css">
    @section('css')
    @endsection

</head>

<body>
<div class="wrap">
    <div class="main">
        @include('templates/cabecalho')

        @yield('content')
    </div>
</div>
@include('templates/rodape')
<script src="/js/pacote-bibliotecas.js"></script>
@section('js')
@endsection
</body>

</html>
