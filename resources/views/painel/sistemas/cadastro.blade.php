@extends('templates.dashboard')
@section('titulo')
    Sistemas
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">
                    <div class="card-title">
                        Cadastrar Sistemas
                    </div>
                    <hr>
                    <form action="/painel/sistemas/salvar" method="POST" enctype="multipart/form-data">
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

                        <label class="py-4 col-form-label">Nome do Sistema:</label>
                        <input class="form-control col-4" name="nome_sistema" type="text" required>
                        <br>

                        <input class="btn btn-primary" type="submit" value="Salvar">
                        <a class="btn btn-danger" href="/painel/sistemas">Voltar</a>
                    </form>
                </div>
            </div>
@endsection


