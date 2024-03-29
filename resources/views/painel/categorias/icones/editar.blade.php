@extends('templates.dashboard')
@section('titulo')
    Categorias
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">

                    <div class="card-title">
                        Alterar de Categoria
                    </div>
                    <hr>
                    <form action="/painel/categorias-icones/alterar" method="post">
                        @csrf
                        <input type="hidden" name="categoria_id" value="{{ $categoria->id }}">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Nome: </label>
                                <input type="text" class="form-control" name="nome" value="{{ $categoria->nome }}">
                                <span class="system_error text-danger">{{$errors->first('nome')}}</span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <input type="submit" class="btn btn-primary" value="Alterar">
                                <a class="btn btn-danger" href="/painel/categorias-icones">Voltar</a>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
