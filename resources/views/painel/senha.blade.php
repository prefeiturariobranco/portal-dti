@extends('templates.dashboard')
@section('titulo')
    Alterar Minha Senha
@endsection
@section('js')@endsection
@section('css')@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Alterar Minha Senha</h4>
                    </div>
                    <hr>
                    <form method="post" action="/painel/senha/alterar">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <label>Senha Antiga:</label>
                                <input type="password" name="antiga" class="form-control"
                                       placeholder="Digite sua senha"/>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <label>Nova Senha:</label>
                                <input type="password" name="nova" class="form-control"
                                       placeholder="Digite sua nova senha"/>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <label>Nova Senha:</label>
                                <input type="password" name="confirma" class="form-control"
                                       placeholder="Confirme sua nova senha"/>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <input type="submit" class="form-control btn btn-primary" value="Alterar Senha"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection
