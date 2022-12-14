@extends('templates.dashboard')
@section('titulo')
    Imagem de Ícone
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">
                    <div class="card-title">
                        Alterar Imagem de Ícone
                    </div>
                    <hr>
                    <form action="/painel/imagens/icones/alterar" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="imagem_id" class="form-control" value="{{ $imagem->id }}">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Nome:</label>
                                <input type="text" name="nome" class="form-control" value="{{ $imagem->nome }}">
                                <span class="system_error text-danger">{{$errors->first('nome')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Imagem:</label>
                                <input type="file" name="caminho" class="form-control" accept="image/*">
                                <span class="system_error text-danger">{{$errors->first('caminho')}}</span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <input type="submit" class="btn btn-primary" value="Alterar">
                                <a class="btn btn-danger" href="/painel/imagens/icones">Voltar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
