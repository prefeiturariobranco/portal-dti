@extends('templates/erro')
@push('link')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush
@section('content')
    <div class="card mo-mt-2">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-lg-4 offset-lg-1">
                    <div class="ex-page-content">
                        <h1 class="text-dark">500!</h1>
                        <h4 class="mb-4m text-dark">Acesso negado</h4>
                        <p class="mb-5">Você não tem permissão para acessar a página solicitada. Por favor, efetuar login.</p>
                        <a href="{{ route('login') }}" class="btn btn-primary mb-5 waves-effect waves-light"><i
                                class="mdi mdi-home"></i> Entrar</a>
                    </div>

                </div>
                <div class="col-lg-5 offset-lg-1">
                    <img src="{{ asset('images/error.png') }}" alt="" class="img-fluid mx-auto d-block">
                </div>
            </div>
        </div>
    </div>
@endsection
