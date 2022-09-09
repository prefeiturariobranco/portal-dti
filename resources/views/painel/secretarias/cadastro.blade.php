@extends('templates.dashboard')
@section('titulo')
    Secretarias
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">
                    <div class="card-title">
                        Cadastrar Secretarias
                    </div>
                    <hr>
                    <form action="/painel/secretarias/salvar" method="POST" enctype="multipart/form-data">
                        @csrf
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
                        <input class="form-control col-4" name="nome" type="text" maxlength="255" required>

                        <label class="py-4 col-form-label">Digite a sigla:</label>
                        <input class="form-control col-4" name="sigla" type="text" maxlength="255" required>
                        <br>
                        <input class="btn btn-primary" type="submit" value="Cadastrar">
                        <a class="btn btn-danger" href="/painel/secretarias/">Voltar</a>
                    </form>
                </div>
            </div>
@endsection


