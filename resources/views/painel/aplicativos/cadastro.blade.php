@extends('templates.dashboard')

@section('titulo')Aplicativos @endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">

                    <div class="card-title">
                        Cadastro de Aplicativos
                    </div>
                    <hr>
                    <form action="/painel/aplicativos/salvar" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <label>Título:</label>
                                <input type="text" name="titulo" class="form-control" placeholder="Digite o título">
                                <span class="system_error text-danger">{{$errors->first('titulo')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Caminho do Aplicativo:</label>
                                <input type="text" name="url" id="caminho" class="form-control" placeholder="Digite o caminho">
                                <span class="system_error text-danger">{{$errors->first('url')}}</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label>Imagem:</label>
                                <input type="file" name="imagem" class="form-control" >
                                <span class="system_error text-danger">{{$errors->first('imagem')}}</span>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-4">
                                <input type="submit" class="btn btn-primary" value="Salvar">
                                <a class="btn btn-danger" href="/painel/aplicativos">Voltar</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
