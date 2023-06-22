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
                        Alterar Sistema
                    </div>
                    <hr>
                    <form action="/painel/sistemasip/alterar" method="post">
                        @csrf
                        <input type="hidden" name="sistema_id" value="{{$sistemaip->id}}">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Nome do sistema:</label>
                                <input type="text" name="nome" class="form-control" value="{{ $sistemaip -> nome }}">
                                <span class="system_error text-danger">{{$errors->first('nome')}}</span>
                            </div>
                            <div class="col-md-4">
                                <label>Ip:</label>
                                <input type="text" name="ip" class="form-control"
                                       value="{{ $sistemaip -> ip }}">
                                <span class="system_error text-danger">{{$errors->first('ip')}}</span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <input class="btn btn-primary" type="submit" value="Alterar">
                                <a class="btn btn-danger" href="/painel/sistemasip">Voltar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection


