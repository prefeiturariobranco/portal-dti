@extends('templates.dashboard')
@section('titulo')
    Secretaria
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">

                    <div class="card-title">
                        Editar Secretaria
                    </div>
                    <hr>
                    <form action="/painel/secretarias/alterar" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="secretaria_id" class="form-control" value="{{ $secretaria->id }}">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <label class="py-4 col-form-label">Digite o nome da secretaria:</label>
                        <input class="form-control col-4" name="nome" type="text" value="{{ $secretaria->nome }}" maxlength="255" required>

                        <label class="py-4 col-form-label">Digite a sigla:</label>
                        <input class="form-control col-4" name="sigla" type="text" value="{{ $secretaria->sigla }}" maxlength="255" required>
                        <br>
                        <input class="btn btn-primary" type="submit" value="Cadastrar">
                        <a class="btn btn-danger" href="">Voltar</a>
                    </form>
                </div>
            </div>
@endsection


