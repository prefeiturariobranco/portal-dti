@extends('templates.dashboard')
@section('titulo')
    Sistemas
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Cadastrar Sistemas
                    </div>
                    <hr>
                    <form action="/painel/sistemas/salvar" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <label>Nome do Sistema:</label>
                                <input class="form-control" name="nome_sistema" type="text" required>
                                <span class="system_error text-danger">{{$errors->first('nome_sistema')}}</span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <input class="btn btn-primary" type="submit" value="Salvar">
                                <a class="btn btn-danger" href="/painel/sistemas">Voltar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection


