@extends('templates.dashboard')
@section('titulo')
    Participante
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">
                    <div class="card-title">
                        Editar Participante
                    </div>
                    <hr>
                    <form action="/painel/participante/alterar" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="participante_id" class="form-control" value="{{ $Participantes->id }}">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <label class="py-4 col-form-label">Digite o nome do participante:</label>
                        <input class="form-control col-4" name="nome_participante" type="text" value="{{ $Participantes->nome_participante }}"
                               maxlength="255" required>
                        <br>
                        <input class="btn btn-primary" type="submit" value="Alterar">
                        <a class="btn btn-danger" href="painel/participante">Voltar</a>
                    </form>
                </div>
            </div>
@endsection


