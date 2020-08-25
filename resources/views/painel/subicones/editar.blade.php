@extends('templates.dashboard')
@section('titulo') Subicones @endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">

                    <div class="card-title">
                        Alterar de Subicones
                    </div>
                    <hr>
                    <form action="/painel/subicones/alterar" method="post">
                        @csrf
                        <input type="hidden" name="subicone_id" value="{{ $subIcone->id }}">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Selecione o ícone:</label>
                                <select name="icones_id" class="form-control">
                                    @foreach($icones as $icone)
                                        <option value="{{ $icone->id }}">
                                            {{ $icone->nome }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="system_error text-danger">{{$errors->first('icones_id')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Nome do Sub-ícone:</label>
                                <input type="text" name="nome" class="form-control" value="{{ $subIcone->nome }}" placeholder="Digite o nome">
                                <span class="system_error text-danger">{{$errors->first('nome')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Caminho do Sub-ícone:</label>
                                <input type="text" name="caminho" class="form-control" value="{{ $subIcone->caminho }}" placeholder="Digite o caminho">
                                <span class="system_error text-danger">{{$errors->first('caminho')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Link do Sub-ícone:</label>
                                <input type="text" name="link" class="form-control" value="{{ $subIcone->link }}" placeholder="Digite o link">
                                <span class="system_error text-danger">{{$errors->first('link')}}</span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <input type="submit" class="btn btn-primary" value="Alterar">
                                <a class="btn btn-danger" href="/painel/subicones">Voltar</a>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
