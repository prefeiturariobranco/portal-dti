@extends('templates.dashboard')
@section('titulo')
    Unidades
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">
                    <div class="card-title">
                        Cadastrar Unidade
                    </div>
                    <hr>
                    <form action="/painel/unidades/salvar" method="POST" enctype="multipart/form-data">
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

                        <label class="py-4 col-form-label">Nome da Unidade:</label>
                        <input class="form-control col-4" name="nome_unidade" type="text" required>
                        <br>
                        <input class="btn btn-primary" type="submit" value="Salvar">
                        <a class="btn btn-danger" href="/painel/secretarias/">Voltar</a>
                    </form>
                </div>
            </div>
@endsection


