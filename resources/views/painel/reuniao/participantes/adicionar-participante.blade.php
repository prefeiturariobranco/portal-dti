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
                        Adicionar Participante
                    </div>
                    <hr>
                    <form action="/painel/participante/salvar/{{$reuniao->id}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="reuniao_id" value="{{$reuniao->id}}">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="py-4 col-form-label">Participante:</label>
                                <select name="participante_id" class="form-control" autocomplete="on">
                                    <option selected>Selecione participante</option>
                                    @foreach($participantes as $participante)
                                        <option value="{{ $participante->id }}">
                                            {{ $participante->nome_participante }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('reuniao_id')
                                <span class="system_error text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <input class="btn btn-primary" type="submit" value="Salvar">
                        <a class="btn btn-danger" href="/painel/reuniao">Voltar</a>
                    </form>
                </div>
            </div>
@endsection


