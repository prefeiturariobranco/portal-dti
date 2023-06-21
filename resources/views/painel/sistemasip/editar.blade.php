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
                        Alterar Sistema IP
                    </div>
                    <hr>
                    <form action="/painel" method="post">
                        @csrf
                        <input type="hidden" name="sistema_id" value="{{$sistemaip->id}}">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Nome do sistema:</label>
                                <input type="text" name="nome_sistema" class="form-control"
                                       value="{{ $sistemaip -> nome_sistemaip }}">
                                <span class="system_error text-danger">{{$errors->first('nome_sistemaip')}}</span>
                            </div>
                            <div class="col-md-4">
                                <label>Ip:</label>
                                <input type="text" name="nome_sistema" class="form-control"
                                       value="{{ $sistemaip -> ip_sistemaip }}">
                                <span class="system_error text-danger">{{$errors->first('ip_sistemaip')}}</span>
                            </div>
                        </div>
{{--                        <div class="row">--}}
{{--                            <div class="col-md-4">--}}
{{--                                <label>Status:</label>--}}
{{--                                <select name="ocultar" class="form-control">--}}
{{--                                    <option value="0">Ativar</option>--}}
{{--                                    <option value="1">Inativar</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <input class="btn btn-primary" type="submit" value="Alterar">
                                <a class="btn btn-danger" href="/painel/sistemas">Voltar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection


