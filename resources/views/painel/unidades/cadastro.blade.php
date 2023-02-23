@extends('templates.dashboard')
@section('titulo')
    Unidades
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">
                    <div class="card-title">
                        Cadastrar Unidade
                    </div>
                    <hr>
                    <form action="/painel/unidades/salvar" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <label>Nome da Unidade:</label>
                                <input class="form-control" name="nome_unidade" type="text">
                                <span class="system_error text-danger">{{$errors->first('nome_unidade')}}</span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <input class="btn btn-primary" type="submit" value="Salvar">
                                <a class="btn btn-danger" href="/painel/unidades">Voltar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection


