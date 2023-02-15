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
                        Editar cadastro de participante
                    </div>
                    <hr>
                    <form action="/painel/participante/alterar" method="post">
                        @csrf
                        <input type="hidden" name="participante_id" value="{{$participante->id}}">
                        <label class="py-4 col-form-label">Nome do sistema:</label>
                        <input type="text" name="nome_participante" class="form-control col-4" value="{{ $participante -> nome_participante}}">
                        <span class="system_error text-danger">{{$errors->first('nome_participante')}}</span>

                        <label class="py-4 col-form-label">Tipo de participante:</label>
                        <select name="tipo_participante_option" class="form-control col-4">
                            @foreach($tipo_participantes as $tipo_participante)
                                <option value="{{$tipo_participante->id}}">{{$tipo_participante->tipo_participante}}</option>
                            @endforeach
                        </select>
                        <br>
                            <input class="btn btn-primary" type="submit" value="Alterar">
                            <a class="btn btn-danger" href="/painel/participante">Voltar</a>
                    </form>
                </div>
            </div>
@endsection


