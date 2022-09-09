@extends('templates.dashboard')
@section('titutlo')
    Intranet :: DTI
@endsection

@section('js')@endsection
@section('css')@endsection

@section('content')

    <div class="page-title-box">
        <div class="row">

            <h4>Meu Perfil</h4>
        </div>

    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <!-- <div>
                        <h3 class="mt-0  mb-4">Minha Conta</h3>
                    </div> -->
                    <div class="wid-peity mb-1">
                        <div class="row">
                            <div class="col-xs-12 col-lg-4">
                                <div>
                                    <strong>Nome: </strong>
                                    <h5 class="mb-4 text-success">{{ $usuario->nome }}</h5>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-lg-4">
                                <div>
                                    <strong>Login: </strong>
                                    <h5 class="mb-4 text-success">{{ $usuario->login }}</h5>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-lg-4">
                                <div>
                                    <strong>E-mail: </strong>
                                    <h5 class="mb-4 text-success">{{ $usuario->email }}</h5>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-lg-4">
                                <div>
                                    <strong>Local de Trabalho: </strong>
                                    <h5 class="mb-4 text-success">{{$usuario->departamentos->nome}}
                                        - {{$usuario->departamentos->secretarias->sigla}}</h5>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-lg-4">
                                <div>
                                    <strong>Função: </strong>
                                    <h5 class="mb-4 text-success">{{ $usuario->cargos->nome }}</h5>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-lg-4">
                                <div>
                                    <strong>Telefone: </strong>
                                    <h5 class="mb-4 text-success">{{ $usuario->telefone_sala }}</h5>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>


        </div>
    </div>
@endsection
