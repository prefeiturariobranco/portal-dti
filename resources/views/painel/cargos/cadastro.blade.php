@extends('templates.dashboard')
@section('titulos')Cadastrar Cargos @endsection
@section('content')
    <div class="py-4"></div>
    <div class="container">
        <div class="card-header">
            <h4>Cadastrar Cargos</h4>
        </div>
        <div class="card">
            <form class="ml-4 row-cols-3" action="" method="POST">
                <label class="py-4 col-form-label">Digite o nome do cargo:</label>
                <input class="form-control col-4" type="text" maxlength="255">
                <br>
                <input class="btn btn-outline-primary" type="submit" value="Cadastrar">
               <a class="btn btn btn-outline-danger" href="{{route('lista.cargos')}}">Voltar</a>
            </form>
        </div>
    </div>
@endsection
