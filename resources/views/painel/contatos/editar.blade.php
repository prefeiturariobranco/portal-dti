@extends('templates.dashboard')
@section('titulo')
    Contatos
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">

                    <div class="card-title">
                        Alterar de Contatos
                    </div>
                    <hr>
                    <form action="/painel/contatos/alterar" method="post">
                        @csrf
                        <input type="hidden" name="contato_id" value="{{$contato->id }}">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Departamento:</label>
                                <select name="departamento_id" id="departamento" class="form-control" autocomplete="on">
                                    @foreach($departamentos as $departamento)
                                        @if($contato->departamento_id===$departamento->id)
                                            <option selected
                                                    value="{{ $departamento->id }}">{{ $departamento->nome }}</option>
                                        @else
                                            <option value="{{ $departamento->id }}">{{ $departamento->nome }}</option>
                                        @endif

                                    @endforeach
                                </select>
                                <span class="system_error text-danger">{{$errors->first('departamento_id')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Cargo:</label>
                                <select name="cargo_id" class="form-control">
                                    @foreach($cargos as $cargo)
                                        @if($contato->cargos_id===$cargo->id)
                                            <option selected value="{{ $cargo->id }}">{{ $cargo->nome }}</option>
                                        @else
                                        @endif
                                    @endforeach
                                </select>
                                <span class="system_error text-danger">{{$errors->first('cargo_id')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Nome:</label>
                                <input type="text" name="nome" class="form-control" value="{{ $contato->nome }}"
                                       placeholder="Digite o nome do contato">
                                <span class="system_error text-danger">{{$errors->first('nome')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Email:</label>
                                <input type="email" name="email" class="form-control" value="{{ $contato->email }}"
                                       placeholder="Digite o nome do contato">
                                <span class="system_error text-danger">{{$errors->first('email')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Telefone:</label>
                                <input type="text" name="telefone" class="form-control" value="{{ $contato->telefone }}"
                                       placeholder="Digite o telefone do contato"
                                       onkeydown="return mascaraTelefone(event)">
                                <span class="system_error text-danger">{{$errors->first('telefone')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Status:</label>
                                <select name="ocultar" class="form-control">
                                        <option value="0">Ativar</option>
                                        <option value="1">Inativar</option>
                                </select>
                            </div>
                        </div>
                        <span class="system_error text-danger">{{$errors->first('cargo_id')}}</span>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <input type="submit" class="btn btn-primary" value="Alterar">
                                <a class="btn btn-danger" href="/painel/contatos">Voltar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection
