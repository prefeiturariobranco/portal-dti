@extends('templates.dashboard')
@section('titulo')Cargos @endsection
@section('content')
    <div class="py-4"></div>
    <div class="container">
        <div class="card-header">
            <h4 class="font-weight-bold text-dark">Cadastrar Cargos</h4>
        </div>
        <div class="card">
            <form class="ml-4 row-cols-3" action="{{route('save.cargos')}}" method="POST" enctype="multipart/form-data">
                @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <label class="py-4 col-form-label">Digite o nome do cargo:</label>
                <input class="form-control col-4" name="nome" type="text" maxlength="255" required>
                <br>
                <input class="btn btn-outline-primary" type="submit" value="Cadastrar">
               <a class="btn btn-outline-danger" href="{{route('lista.cargos')}}">Voltar</a>
            </form>
        </div>
    </div>
@endsection


