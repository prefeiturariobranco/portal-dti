@extends('templates.dashboard')
@section('titulo')Investimentos @endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-body">

                <div class="card-title">
                    Cadastro de Investimentos
                </div>
                <hr>
                <form action="/painel/investimentos/salvar" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <label>Nome: </label>
                            <input type="text" class="form-control" name="nome">
                            <span class="system_error text-danger">{{$errors->first('nome')}}</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <label>Valor: </label>
                            <input type="text" class="form-control valor" name="valor">
                            <span class="system_error text-danger">{{$errors->first('valor')}}</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <label>Categoria: </label>
                            <select name="categoria" class="custom-select">
                                <option>Selecionar</option>
                                @foreach($categorias as $categoria)
                                    <option value="{{ $categoria->id }}">
                                        {{ $categoria->nome }}
                                    </option>
                                @endforeach
                            </select>
                            <span class="system_error text-danger">{{$errors->first('categoria')}}</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <label>Cor: </label>
                            <input class="form-control" type="color" name="cor" value="#02a499">
                            <span class="system_error text-danger">{{$errors->first('cor')}}</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <input type="submit" class="btn btn-primary" value="Salvar">
                            <a class="btn btn-danger" href="/painel/investimentos/">Voltar</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection
