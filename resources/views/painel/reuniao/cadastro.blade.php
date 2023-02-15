@extends('templates.dashboard')
@section('titulo')
    Reuniões
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Cadastro de Reunião
                    </div>
                    <hr>
                    <form action="/painel/reuniao/salvar" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <label class="py-4 col-form-label">Sistema:</label>
                                <select name="sistema_id" class="form-control">
                                    <option selected>Selecione uma unidade</option>
                                    @foreach($sistemas as $sistema)
                                        <option value="{{ $sistema->id }}">
                                            {{ $sistema->nome_sistema }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="system_error text-danger">{{$errors->first('sistema_id')}}</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label class="py-4 col-form-label">Unidade:</label>
                                <select name="unidade_id" class="form-control">
                                    <option selected>Selecione uma unidade</option>
                                    @foreach($unidades as $unidade)
                                        <option value="{{ $unidade->id }}">
                                            {{ $unidade->nome_unidade }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="system_error text-danger">{{$errors->first('unidade_id')}}</span>
                            </div>
                        </div>

                        <label class="py-4 col-form-label">Solicitação:</label>
                        <textarea name="solicitacao" rows="10" cols="10" class="form-control"></textarea>
                        <span class="system_error text-danger">{{$errors->first('solicitacao')}}</span>

                        <label class="py-3 col-form-label">Detalhamento:</label>
                        <textarea name="providencias" rows="10" cols="10" class="form-control"></textarea>
                        <span class="system_error text-danger">{{$errors->first('providencias')}}</span>
                        <br>
                        <input class="btn btn-primary" type="submit" value="Salvar">
                        <a class="btn btn-danger" href="/painel/reuniao">Voltar</a>
                    </form>
                </div>
            </div>
@endsection


