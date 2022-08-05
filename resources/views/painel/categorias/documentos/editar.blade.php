@extends('templates.dashboard')
@section('titulo')
    Categorias Documentos
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="card-title">
                        Editar Categoria de Documentos
                    </div>
                    <hr>
                    <form action="/painel/categorias-documentos/alterar" method="post">
                        @csrf
                        @method('POST')
                        <input type="hidden" name="documento_id" value="{{ $categoria->id }}">

                        <div class="row">
                            <div class="col-md-4">
                                <label for="nome" class="col-sm-8 control-label">Nome da categoria:</label>
                                <input type="text" class="form-control" name="nome"
                                       maxlength="50" value="{{ $categoria->nome }}" required="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <input type="submit" class="btn btn-primary" value="Alterar">
                                <a class="btn btn-danger" href="/painel/categorias-documentos">Voltar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
