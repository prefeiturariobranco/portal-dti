@extends('templates.dashboard')
@section('titulo')
    Planejamentos
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Alterar de Planejamento
                    </div>
                    <hr>
                    <form action="/painel/planejamentos/alterar" method="post">
                        @csrf
                        <input type="hidden" name="planejamento_id" value="{{ $planejamento->id }}">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Título: </label>
                                <input type="text" class="form-control" name="titulo"
                                       value="{{ $planejamento->titulo }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Descrição: </label>
                                <input type="text" class="form-control" name="descricao"
                                       value="{{ $planejamento->descricao }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Data de entrega: </label>
                                <input type="date" class="form-control" name="data_entrega"
                                       value="{{ $planejamento->data_entrega }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Selecione o responsável:</label>
                                <select name="nome_responsavel" class="form-control">
                                    @foreach($usuarios as $usuario)
                                        <option value="{{ $usuario->nome }}">
                                            {{ $usuario->nome }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Selecione a categoria:</label>
                                <select name="categoria_id" class="form-control">
                                    @foreach($planejamentoCats as $planejamentoCat)
                                        <option value="{{ $planejamentoCat->id }}">
                                            {{ $planejamentoCat->nome }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <input type="submit" class="btn btn-primary" value="Alterar">
                                <a class="btn btn-danger" href="/painel/planejamentos">Voltar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
