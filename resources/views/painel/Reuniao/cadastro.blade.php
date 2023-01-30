@extends('templates.dashboard')
@section('titulo')
    Reuniões
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">
                    <div class="card-title">
                        Cadastrar Reunião
                    </div>
                    <hr>
                    <form action="/painel/reuniao/salvar" method="POST" enctype="multipart/form-data">
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

                        <label class="py-4 col-form-label">Participantes:</label>
                        <input class="form-control col-12" name="participantes" type="text" required>

                        <label class="py-4 col-form-label">Participantes DTI:</label>
                        <select name="usuario_reuniao_id" id="usuario" class="form-control">
                            <option selected>Selecione um usuario</option>
                            @foreach($usuarios as $usuario)
                                <option value="{{ $usuario->id }}">
                                    {{ $usuario->nome }}
                                </option>
                            @endforeach
                        </select>

                        <label class="py-4 col-form-label">Unidade:</label>
                        <select name="unidade_reuniao_id" id="unidade" class="form-control">
                            <option selected>Selecione uma unidade</option>
                            @foreach($unidades as $unidade)
                                <option value="{{ $unidade->id }}">
                                    {{ $unidade->nome_unidade }}
                                </option>
                            @endforeach
                        </select>

                        <label class="py-4 col-form-label">Solicitação:</label>
                                <textarea name="solicitacao" rows="10" cols="10" class="form-control"></textarea>
                                <span class="system_error text-danger">{{$errors->first('solicitacao')}}</span>


                        <label class="py-3 col-form-label">Detalhamento:</label>
                                <textarea name="providencias" rows="10" cols="10" class="form-control"></textarea>
                                <span class="system_error text-danger">{{$errors->first('providencias')}}</span>
                        <br>
                        <input class="btn btn-primary" type="submit" value="Salvar">
                        <a class="btn btn-danger" href="/painel/reuniao">Voltar</a>
                    </form>
                </div>
            </div>
@endsection


