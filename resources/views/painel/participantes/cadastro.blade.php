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
                        Cadastrar Participante
                    </div>
                    <hr>
                    <form action="/painel/participantes/salvar" method="POST" enctype="multipart/form-data">
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

                        <label class="py-4 col-form-label">Nome do Participante:</label>
                        <input class="form-control col-4" name="nome_participante" type="text" required>

                        <label class="py-4 col-form-label">Tipo de participante:</label>
                        <select name=" " class="form-control col-4">=
                            @foreach($tipo_participantes as $tipo_participante)
                                <option value="{{$tipo_participante->id}}">{{$tipo_participante->tipo_participante}}</option>
                            @endforeach
                        </select>
                        <br>
                        <input class="btn btn-primary" type="submit" value="Salvar">
                        <a class="btn btn-danger" href="/painel/participante">Voltar</a>
                    </form>
                </div>
            </div>
@endsection


