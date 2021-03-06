@extends('templates/erro');
@section('content')
<div class="card mo-mt-2">
    <div class="card-body">
        <div class="row align-items-center">
            <div class="col-lg-4 offset-lg-1">
                <div class="ex-page-content">
                    <h1 class="text-dark">404!</h1>
                    <h4 class="mb-4">Pagina Não Encontrada</h4>
                    <p class="mb-5">O endereço informado não encontra-se disponivel no momento.</p>
                    <a class="btn btn-primary mb-5 waves-effect waves-light" href="/"><i class="mdi mdi-home"></i> Voltar ao Inicio</a>
                </div>

            </div>
            <div class="col-lg-5 offset-lg-1">
                <img src="/images/error.png" alt="" class="img-fluid mx-auto d-block">
            </div>
        </div>
    </div>
</div>
@endsection
