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
                        Alterar Unidade
                    </div>
                    <hr>
                    <form action="/painel/unidades/alterar" method="post">
                        @csrf
                        <input type="hidden" name="unidade_id" value="{{$unidade->id}}">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="py-4 col-form-label">Unidades:</label>
                                <input type="text" name="nome_unidade" class="form-control"
                                       value="{{ $unidade -> nome_unidade }}">
                                <span class="system_error text-danger">{{$errors->first('nome_unidade')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Status:</label>
                                <select name="ocultar" class="form-control">
                                    <option value="0">Ativar</option>
                                    <option value="1">Inativar</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <input class="btn btn-primary" type="submit" value="Alterar">
                                <a class="btn btn-danger" href="/painel/unidades">Voltar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection


