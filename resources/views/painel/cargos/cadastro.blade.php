@extends('templates.dashboard')
@section('titulos')Cadastrar Cargos @endsection
@section('content')
    <div class="container">
        <div class="card-header">
            <h4>Cadastrar Cargos</h4>

        </div>
        <form class="row-cols-3">
            <label class="py-4 col-form-label">Digite nome do cargo:</label>
        <input class="form-control col-4" type="text" maxlength="255">
            <br>
        <input class="btn btn-outline-primary" type="submit" value="Cadastrar">
            <button class="btn btn btn-outline-danger">Voltar</button>
        </form>
    </div>
@endsection
