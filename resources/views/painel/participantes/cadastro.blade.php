@extends('templates.dashboard')
@section('titulo')
    Participantes
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Cadastrar Participantes
                    </div>
                    <hr>
                    <form action="painel/participante/salvar" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label class="py-4 col-form-label">Digite o nome do participante:</label>
                        <input class="form-control col-4" name="nome_participante" type="text" maxlength="255" required>
                        <br>
                        <input class="btn btn-primary" type="submit" value="Salvar">
                        <a class="btn btn-danger" href="/painel/participante">Voltar</a>
                    </form>
                </div>
            </div>
@endsection


