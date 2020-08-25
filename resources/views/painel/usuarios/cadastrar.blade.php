@extends('templates.dashboard')
@section('titulo')Cadastrar Usuário @endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Cadastro de Usuário
                </div>
                <hr>
                <form action="/painel/usuarios/salvar" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <label>Nome: </label>
                            <input type="text" class="form-control" name="nome" value="{{old('nome')}}">
                            <span class="system_error text-danger">{{$errors->first('nome')}}</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <label>Email: </label>
                            <input type="email" class="form-control" name="email" value="{{old('email')}}">
                            <span class="system_error text-danger">{{$errors->first('email')}}</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <label>Departamento:</label>
                            <select name="departamento_id" class="form-control">
                                @foreach($departamentos as $departamento)
                                    <option value="{{ $departamento->id }}">{{ $departamento->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <label>Cargo:</label>
                            <select name="cargo_id" class="form-control">
                                @foreach($cargos as $cargo)
                                    <option value="{{ $cargo->id }}">{{ $cargo->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <label>Login: </label>
                            <input type="text" class="form-control" name="login" value="{{old('login')}}">
                            <span class="system_error text-danger">{{$errors->first('login')}}</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <label>Senha: </label>
                            <input type="password" class="form-control" name="senha" value="{{old('senha')}}">
                            <span class="system_error text-danger">{{$errors->first('senha')}}</span>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-4">
                            <input type="submit" class="btn btn-primary" value="Salvar">
                            <a class="btn btn-danger" href="/painel/usuarios/listar">Voltar</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection
