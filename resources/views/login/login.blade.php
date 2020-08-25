@extends("templates/layout-principal")

@section('css')
<link rel="stylesheet" href="/css/login.css">
@endsection

@section('js')@endsection
@section('content')
    <div class="caixa-textura">
        <div class="dti-container-login">
            <div class="row" style="align-items: center;">
                <div class="col-md-6 dti-separador">
                    <p style="line-height: 100%;">BEM-VINDO A <br> NOSSA INTRANET!</p>
                    <cite>Essa área é exclusiva para os <br> setores e departamento de Tecnologia.</cite>
                </div>
                <div class="col-md-6 dti-login">
                    <form action="/login/verificar" method="post">
                        @csrf
                        <div class="wrap-input100 validate-input m-b-10" data-validate="Username is required">
                            <input class="input100" type="text" name="usuario" placeholder="Usuário">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
							    <i class="fa fa-user-alt"></i>
						    </span>
                        </div>

                        <div class="wrap-input100 validate-input m-b-10" data-validate="Password is required">
                            <input class="input100" type="password" name="senha" placeholder="Senha">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
							    <i class="fa fa-lock"></i>
						    </span>
                        </div>
                        <div>
                            <strong class="text-danger">{{$erro_msg}}<!--AQUI FICARIA O ERRO--></strong>
                        </div>

                        <div>
                            <input type="submit" class="btn btn-primary btn-md btn-block" value="Entrar">
                        </div>

                        <br>
                        <div class="nao_tenho_acesso">
                            <a class="naotenhoacesso" title="Não tenho acesso?" href="#"> Não tenho acesso, e agora?</a>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
