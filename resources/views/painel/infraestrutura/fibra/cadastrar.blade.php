@extends('templates.dashboard')
@section('titulo')Malha de Fibra @endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-body">

                <div class="card-title">
                    Cadastrar Malha de Fibra
                </div>
                <hr>
                <form action="/painel/infra/fibra/salvar" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <label>Titulo: </label>
                            <input type="text" class="form-control" name="titulo">
                            <span class="system_error text-danger">{{$errors->first('titulo')}}</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <label>Quantidade(KM): </label>
                            <input type="text" class="form-control" name="quilometragem">
                            <span class="system_error text-danger">{{$errors->first('quilometragem')}}</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <label>Ano: </label>
                            <input type="text" class="form-control" name="ano" value="{{date('Y')}}">
                            <span class="system_error text-danger">{{$errors->first('ano')}}</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <label>Cor: </label>
                            <input class="form-control" type="color" name="cor">
                            <span class="system_error text-danger">{{$errors->first('cor')}}</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <input type="submit" class="btn btn-primary" value="Cadastrar">
                            <a class="btn btn-danger" href="/painel/infra/fibra/listar">Voltar</a>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection
