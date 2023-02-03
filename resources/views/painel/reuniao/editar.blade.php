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
                        Alterar Reunião
                    </div>
                    <hr>
                    <form action="/painel/reuniao/alterar" method="post">
                        @csrf
                        <input type="hidden" name="reuniao_id" value="{{ $reuniao->id }}">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="py-4 col-form-label">Sistema:</label>
                                <select name="sistema_id" class="form-control">
                                    @foreach($sistemas as $sistema)
                                        <option value="{{ $sistema->id }}" {{ ($reuniao->sistema_id == $sistema->id) ? 'selected' : '' }}>
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
                                    @foreach($unidades as $unidade)
                                        <option value="{{ $unidade->id }}" {{ ( $reuniao->unidade_id == $unidade->id ) ? 'selected' : '' }}>
                                            {{ $unidade->nome_unidade }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="system_error text-danger">{{$errors->first('unidade_id')}}</span>
                            </div>
                        </div>

                        <label class="py-4 col-form-label">Solicitação:</label>
                        <textarea name="solicitacao" rows="10" cols="10"
                                  class="form-control">{{$reuniao->solicitacao}}</textarea>
                        <span class="system_error text-danger">{{$errors->first('solicitacao')}}</span>


                        <label class="py-3 col-form-label">Detalhamento:</label>
                        <textarea name="providencias" rows="10" cols="10"
                                  class="form-control">{{$reuniao->providencias}}</textarea>
                        <span class="system_error text-danger">{{$errors->first('providencias')}}</span>
                        <br>
                        <input class="btn btn-primary" type="submit" value="Alterar">
                        <a class="btn btn-danger" href="/painel/reuniao">Voltar</a>
                    </form>
                </div>
            </div>
@endsection
