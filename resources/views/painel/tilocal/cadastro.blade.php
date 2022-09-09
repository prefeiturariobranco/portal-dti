@extends('templates.dashboard')
@section('titulo')
    TI Local
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">
                    <div class="card-title">
                        Cadastro de Ti Local
                    </div>
                    <hr>
                    <form action="/painel/tilocal/salvar" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <label>Secretária:</label>
                                <select name="secretaria_id" class="form-control" autocomplete="on">
                                    @foreach($secretarias as $secretaria)
                                        <option value="{{ $secretaria->id }}">{{ $secretaria->nome }}</option>
                                    @endforeach
                                </select>
                                <span class="system_error text-danger">{{$errors->first('secretaria_id')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Nome:</label>
                                <input type="text" name="nome" class="form-control" placeholder="Digite o nome">
                                <span class="system_error text-danger">{{$errors->first('nome')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Telefone:</label>
                                <input type="text" name="telefone" class="form-control" placeholder="Digite o telefone"
                                       onkeydown="return mascaraTelefone(event)">
                                <span class="system_error text-danger">{{$errors->first('telefone')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Email:</label>
                                <input type="text" name="email" class="form-control" placeholder="Digite o email">
                                <span class="system_error text-danger">{{$errors->first('email')}}</span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <input type="submit" class="btn btn-primary" value="Salvar">
                                <a class="btn btn-danger" href="/painel/tilocal">Voltar</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection

