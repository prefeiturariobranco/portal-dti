@extends('templates.dashboard')
@section('titulo')
    Cargos
@endsection
@section('content')
    {{--    @dd($cargos->id)--}}
    <div class="py-4"></div>
    <div class="container">
        <div class="card-header">
            <h4 class="font-weight-bold text-dark">Editar Cargo</h4>
        </div>
        <div class="card">
            <br>
            <h6 class="ml-4 font-weight-bold">Nome Atual:</h6>
            <p class="ml-4 text-info">{{$cargos->nome}}</p>
            <form class="ml-4 row-cols-3" action="{{route('editsave.cargos')}}" method="POST"
                  enctype="multipart/form-data">
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
                <label class="py-4 col-form-label">Digite o nome do novo cargo:</label>
                <input class="form-control col-4" name="nome" type="text" maxlength="255" required>

                <input type="text" name="id" value="{{$cargos->id}}" hidden>
                <br>
                <input class="btn btn-primary" type="submit" value="Alterar">
                <a class="btn btn-danger" href="{{route('lista.cargos')}}">Voltar</a>
            </form>
        </div>
    </div>
@endsection
