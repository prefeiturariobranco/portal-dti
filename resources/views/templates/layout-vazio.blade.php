<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>{{$title}}</title>
    <meta content="Admin Dashboard" name="description"/>
    <meta content="Themesbrand" name="author"/>
    <link rel="shortcut icon" href="/assets/images/favicon.ico">
    <link rel="stylesheet" href="/css/pacote-bibliotecas.css">
    <link rel="stylesheet" href="/css/style.css">
    @include('css.html')
    @yield('css')
</head>
<body>
@yield('content')
<script src="/js/pacote-bibliotecas.js"></script>
@yield('js')
</body>
</html>
