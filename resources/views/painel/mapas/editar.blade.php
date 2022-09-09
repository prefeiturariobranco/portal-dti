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
                        Alterar Mapa
                    </div>
                    <form action="{{ route('alt.maps') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <input type="hidden" name="mapa_id" class="form-control" value="{{ $mapa->id }}">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Latitude:</label>
                                <input type="text" name="lat" class="form-control" value="{{ $mapa->lat }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4" id="longtitudeArea">
                                <label>Longitude:</label>
                                <input type="text" name="lng" id="longitude" class="form-control"
                                       value="{{ $mapa->lng }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Título:</label>
                                <input type="text" name="titulo" class="form-control" value="{{ $mapa->titulo }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Descrição:</label>
                                <input type="texte" name="descricao" class="form-control"
                                       value="{{ $mapa->descricao }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Categoria: {{ $mapa->mapas_categorias_id }} </label>
                                <select name="mapas_categorias_id" class="form-control" autocomplete="on">
                                    @foreach($categorias as $categoria)
                                        <option value="{{ $categoria->id }}" selected>{{ $categoria->nome }}</option>
                                    @endforeach
                                </select>
                                <span class="system_error text-danger"></span>
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
