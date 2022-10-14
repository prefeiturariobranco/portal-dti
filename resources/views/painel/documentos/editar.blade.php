@extends('templates.dashboard')
@section('titulo')
    Documentos
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Alterar de Documentos
                    </div>
                    <hr>
                    <form action="/painel/documentos/alterar" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="documento_id" value="{{ $documento->id }}">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Categoria: {{ $documento->documentos_categorias_id }} </label>
                                <select name="documentos_categorias_id" class="form-control" autocomplete="on">
                                    @foreach($categorias as $categoria)
                                        @if($documento->documentos_categorias_id == $categoria->id)
                                            <option value="{{ $categoria->id }}"
                                                    selected>{{ $categoria->nome }}</option>
                                        @else
                                            <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                <span class="system_error text-danger"></span>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Título: </label>
                                <input type="text" class="form-control" name="titulo" value="{{ $documento->titulo }}"
                                       placeholder="Digite o título">
                                <span class="system_error text-danger">{{$errors->first('titulo')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Descrição: </label>
                                <textarea class="form-control" name="descricao" rows="10"
                                          placeholder="Digite a descrição">{{$documento->descricao}}</textarea>
                                <span class="system_error text-danger">{{$errors->first('descricao')}}</span>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Valor: </label>
                                <input type="text" class="form-control" name="valor" value="{{ $documento->valor }}"
                                       placeholder="Digite o valor">
                                <span class="system_error text-danger">{{$errors->first('valor')}}</span>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Data de Início: </label>
                                <input type="date" class="form-control" name="data_inicio"
                                       value="{{ $documento->data_inicio }}">
                                <span class="system_error text-danger">{{$errors->first('data_inicio')}}</span>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Data de Fim: </label>
                                <input type="date" class="form-control" name="data_fim"
                                       value="{{ $documento->data_fim }}">
                                <span class="system_error text-danger">{{$errors->first('data_fim')}}</span>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Anexos: </label>
                                <input type="file" name="arquivo_documento[]" multiple class="custom-file"
                                       accept="application/pdf">
                            </div>
                        </div>
                        <br>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <input type="submit" class="btn btn-primary" value="Alterar">
                                <a class="btn btn-danger" href="/painel/documentos">Voltar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
