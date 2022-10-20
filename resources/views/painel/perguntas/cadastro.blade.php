@extends('templates.dashboard')
@section('titulo')
    Perguntas
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Cadastro de Perguntas
                    </div>
                    <hr>
                    <form action="/painel/perguntas/salvar" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <label>Título:</label>
                                <input type="text" name="titulo" class="form-control">
                                <span class="system_error text-danger">{{$errors->first('titulo')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Conteúdo:</label>
                                <textarea name="conteudo" rows="10" cols="10" class="form-control"></textarea>
                                <span class="system_error text-danger">{{$errors->first('conteudo')}}</span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <input type="submit" class="btn btn-primary" value="Salvar">
                                <a class="btn btn-danger" href="/painel/perguntas">Voltar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
