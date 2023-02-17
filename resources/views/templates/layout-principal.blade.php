<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Portal de Tecnologia</title>
    <!-- Favicons -->
    <link rel="icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon"/>


    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ URL::asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/venobox/venobox.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <!-- Template Main CSS File -->
    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/login.css') }}" rel="stylesheet">

    @stack('css')
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
<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
<!-- Vendor JS Files -->
<script src="/assets/jquery/jquery.min.js"></script>
<script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/jquery.easing/jquery.easing.min.js"></script>
<script src="/assets/php-email-form/validate.js"></script>
<script src="/assets/jquery-sticky/jquery.sticky.js"></script>
<script src="/assets/waypoints/jquery.waypoints.min.js"></script>
<script src="/assets/counterup/counterup.min.js"></script>
<script src="/assets/isotope-layout/isotope.pkgd.min.js"></script>
<script src="/assets/owl.carousel/owl.carousel.min.js"></script>
<script src="/assets/venobox/venobox.min.js"></script>
<script src="https://kit.fontawesome.com/2f020faf6d.js" crossorigin="anonymous"></script>
@stack('script')
<!-- Template Main JS File -->
<script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>
