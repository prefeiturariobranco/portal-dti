@extends('templates.dashboard')
@section('titulo')
    Malha de Fibra
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Alterar de Malha de Fibra {{ $registro->ano }}
                    </div>
                    <hr>
                    <form action="/painel/infra/fibra/editar" method="post">
                        @csrf
                        <input type="hidden" name="registro_id" value="{{ $registro->id }}">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Título: </label>
                                <input type="text" class="form-control" name="titulo" value="{{ $registro->titulo }}">
                                <span class="system_error text-danger">{{$errors->first('titulo')}}</span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <label>Quantidade(KM): </label>
                                <input type="text" class="form-control" name="quilometragem"
                                       value="{{ $registro->quilometragem }}">
                                <span class="system_error text-danger">{{$errors->first('quilometragem')}}</span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <label>Ano: </label>
                                <select name="ano" class="form-control" autocomplete="on">
                                    <option>{{ $registro->ano }}</option>
                                    <option>
                                        <?php
                                        $ano_atual = date("Y");
                                        for ($i = 2000; $i <= $ano_atual; $i++) {
                                            echo "<option value=\"$i\">$i</option>\n";
                                        }
                                        ?>
                                    </option>
                                </select>
                                <span class="system_error text-danger">{{$errors->first('ano')}}</span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <label>Cor: </label>
                                <input class="form-control" type="color" name="cor" value="{{ $registro->cor }}">
                                <span class="system_error text-danger">{{$errors->first('cor')}}</span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <input type="submit" class="btn btn-primary" value="Alterar">
                                <a class="btn btn-danger" href="/painel/infra/fibra/listar">Voltar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
