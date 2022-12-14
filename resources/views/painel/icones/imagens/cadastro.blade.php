@extends('templates.dashboard')
@section('titulo')
    Imagens de Ícones
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">
                    <div class="card-title">
                        Cadastro de Imagens de Ícones
                    </div>
                    <hr>
                    <form action="/painel/imagens/icones/salvar" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <label>Nome:</label>
                                <input type="text" name="nome" class="form-control" placeholder="Informe o nome">
                                <span class="system_error text-danger">{{$errors->first('nome')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Imagem:</label>
                                <input type="file" name="caminho" class="form-control">
                                <span class="system_error text-danger">{{$errors->first('caminho')}}</span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <input type="submit" class="btn btn-primary" value="Salvar">
                                <a href="/painel/imagens/icones" class="btn btn-danger">Voltar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
