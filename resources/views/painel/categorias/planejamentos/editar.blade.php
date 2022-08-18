@extends('templates.dashboard')
@section('titulo')
    Categorias Planejamentos
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="card-title">
                        Editar Categoria Planejamentos
                    </div>
                    <hr>
                    <form action="/painel/categorias-planejamentos/alterar" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="planejamento_id" value="{{ $categoria->id }}">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="nome" class="col-sm-8 control-label">Nome da categoria:</label>
                                <input type="text" class="form-control" name="nome" value="{{ $categoria->nome }}"
                                       maxlength="50" required="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <input type="submit" class="btn btn-primary" value="salvar">
                                <a class="btn btn-danger" href="/painel/categorias-planejamentos">Voltar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
