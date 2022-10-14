@extends('templates.dashboard')
@section('titulo')
    Documentos
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Cadastro de Documentos
                    </div>
                    <hr>
                    <form action="/painel/documentos/salvar" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <label>Categoria: </label>
                                <select name="documentos_categorias_id" class="form-control">
                                    <option>Selecionar categoria</option>
                                    @foreach($categorias as $categoria)
                                        <option value="{{ $categoria->id }}">
                                            {{ $categoria->nome }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="system_error text-danger"></span>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Título: </label>
                                <input type="text" class="form-control" name="titulo" placeholder="Digite o título">
                                <span class="system_error text-danger">{{$errors->first('titulo')}}</span>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Descrição: </label>
                                <textarea class="form-control" name="descricao" rows="10"
                                          placeholder="Digite a descrição"></textarea>
                                <span class="system_error text-danger">{{$errors->first('descricao')}}</span>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Valor: </label>
                                <input type="text" class="form-control" name="valor" placeholder="Digite o valor">
                                <span class="system_error text-danger">{{$errors->first('valor')}}</span>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Data de Início: </label>
                                <input type="date" class="form-control" name="data_inicio">
                                <span class="system_error text-danger">{{$errors->first('data_inicio')}}</span>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Data Fim: </label>
                                <input type="date" class="form-control" name="data_fim">
                                <span class="system_error text-danger">{{$errors->first('data_fim')}}</span>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Anexos: </label>
                                <input type="file" name="arquivo_documento[]" multiple class="form-control"
                                       accept="application/pdf">
                                <span class="system_error text-danger">{{$errors->first('arquivo_documento')}}</span>
                            </div>
                        </div>
                        <br/>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <input type="submit" class="btn btn-primary" value="Salvar">
                                <a class="btn btn-danger" href="/painel/documentos">Voltar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection

@push('js')
    <script>
        function mybtn(el) {
            let display = document.getElementById(el).style.display;
            if(display === "none")
                document.getElementById(el).style.display = 'block';
            else
                document.getElementById(el).style.display = 'none';
        }
    </script>
@endpush
