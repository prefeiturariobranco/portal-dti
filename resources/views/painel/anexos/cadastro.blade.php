@extends('templates.dashboard')
@section('titulo')
    Anexos
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Cadastro de Anexos
                    </div>
                    <hr>
                    <form action="/painel/arquivos/salvar" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <label>Documento: </label>
                                <select name="documentos_id" class="form-control">
                                    <option>Selecionar Documento</option>
                                    @foreach($documentos as $documento)
                                        <option value="{{ $documento->id }}">
                                            {{ $documento->titulo }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="system_error text-danger"></span>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Arquivos: </label>
                                <input type="file" name="caminho" multiple class="form-control"
                                       accept="application/pdf">
                                <span class="system_error text-danger">{{$errors->first('caminho')}}</span>
                            </div>
                        </div>
                        <br/>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <input type="submit" class="btn btn-primary" value="Salvar">
                                <a class="btn btn-danger" href="/painel/documentos">Voltar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
