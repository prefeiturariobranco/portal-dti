@extends('templates.dashboard')

@section('titulo')Categorias @endsection


@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-body">

                <div class="card-title">
                    Cadastro de Categorias
                </div>
                <hr>
                <form action="/painel/categorias/salvar" method="post">
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
                            <input type="submit" class="btn btn-primary" value="Salvar">
                            <a class="btn btn-danger" href="/painel/categorias">Voltar</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection
