@extends('templates.dashboard')
@section('titulo')
    Arquivos
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Alterar Arquivo
                    </div>
                    <hr>
                    <form action="/painel/arquivos/alterar" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="anexo_id" value="{{ $doc_ar->id }}">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Arquivo: </label>
                                <input type="file" name="caminho" class="custom-file"
                                       accept="application/pdf">
                            </div>
                        </div>
                        <br>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <input type="submit" class="btn btn-primary" value="Alterar">
                                <a class="btn btn-danger" onclick="history.back()">Voltar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
