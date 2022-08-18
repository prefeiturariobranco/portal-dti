@extends('templates.dashboard')
@section('titulo')
    Planejamentos
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">

                    <div class="card-title">
                        Cadastro de Planejamentos
                    </div>
                    <hr>
                    <form action="/painel/planejamentos/salvar" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <label>Título: </label>
                                <input type="text" class="form-control" name="titulo">
                                <span class="system_error text-danger">{{$errors->first('titulo')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Descrição: </label>
                                <input type="text" class="form-control" name="descricao">
                                <span class="system_error text-danger">{{$errors->first('descricao')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Data de entrega: </label>
                                <input type="date" class="form-control" name="data_entrega" max="2022-12-31">
                                <span class="system_error text-danger">{{$errors->first('data_entrega')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Selecione o responsável:</label>
                                <select name="nome_responsavel" class="form-control">
                                    @foreach($usuarios as $usuario)
                                        @if ($usuario->status == 0)
                                            <option value="{{ $usuario->id }}">
                                                {{ $usuario->nome }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                                <span class="system_error text-danger">{{$errors->first('nome_reponsavel')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Selecione a categoria:</label>
                                <select name="planejamento_categoria" id="planejamento_categoria" class="form-control">
                                    <option>Selecione</option>
                                @foreach($planejamentoCats as $planejamentoCat)
                                        <option value="{{ $planejamentoCat->id }}">
                                            {{ $planejamentoCat->nome }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>
                            <span
                                class="system_error text-danger">{{$errors->first('planejamento_categoria')}}</span>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-4">
                                <input type="submit" class="btn btn-primary" value="Salvar">
                                <a class="btn btn-danger" href="/painel/planejamentos">Voltar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection

