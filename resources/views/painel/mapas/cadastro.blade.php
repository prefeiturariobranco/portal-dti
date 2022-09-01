@extends('templates.dashboard')

@section('titulo')
    Mapas
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Cadastro do Mapa
                    </div>
                    <form action="{{ route('cad.maps') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col-md-4">
                                <label>Latitude:</label>
                                <input type="text" name="lat" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4" id="longtitudeArea">
                                <label>Longitude:</label>
                                <input type="text" name="lng" id="longitude" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Título:</label>
                                <input type="text" name="titulo" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Descrição:</label>
                                <input type="texte" name="descricao" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Selecionar categoria:</label>

                                <select name="mapas_categorias_id" class="form-control" autocomplete="on">
                                    <option>Selecione</option>
                                    @foreach($categorias as $categoria)
                                        <option value="{{ $categoria->id }}">
                                            {{ $categoria->nome }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <input type="submit" class="btn btn-primary" value="Salvar">
                                <a class="btn btn-danger" href="{{ route('list.maps') }}">Voltar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
