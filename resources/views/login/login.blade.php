@extends('templates.layout-principal')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
@endpush
@section('title')
    Portal de Tecnologia
@endsection
@section('js')@endsection
@section('content')
    <div class="caixa-textura" style="margin-top: 50px; margin-bottom: 50px;">
        <div class="dti-container-login">
            <div class="row" style="align-items: center;">
                <div class="col-md-6 dti-separador">
                    <p style="line-height: 100%; margin-left: 0px">BEM-VINDO A <br> NOSSA INTRANET!</p>
                    <cite>Essa área é exclusiva para os <br> setores e departamento de Tecnologia.</cite>
                </div>
                <div class="col-md-6 dti-login">
                    <form target="_self" action="/login/verificar" method="post">
                        @csrf
                        <div class="wrap-input100 validate-input m-b-10" data-validate="Username is required">
                            <input class="input100" type="text" name="usuario" placeholder="Usuário" required>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
							    <i class="fa fa-user-alt"></i>
						    </span>
                        </div>

                        <div class="wrap-input100 validate-input m-b-10" data-validate="Password is required">
                            <input class="input100" type="password" name="senha" placeholder="Senha" required>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
							    <i class="fa fa-lock"></i>
						    </span>
                        </div>
                        <div style="text-align-last: center;">
                            <p class="text-danger">{{$erro_msg}}<!--AQUI FICARIA O ERRO--></p>
                        </div>
                        <input type="submit" class="btn btn-primary btn-md btn-block" value="Entrar">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
