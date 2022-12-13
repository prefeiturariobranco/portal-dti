@extends('templates.dashboard')
@section('titulo')
    Ícones
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">
                    <div class="card-title">
                        Cadastro de Ícones
                    </div>
                    <hr>
                    <form action="/painel/icones/salvar" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <label>Selecione a categoria:</label>
                                <select name="icones_categorias_id" id="categoria" class="form-control"
                                        autocomplete="on">
                                    <option selected>Selecione uma categoria</option>
                                    @foreach($categorias as $categoria)
                                        <option value="{{ $categoria->id }}">
                                            {{ $categoria->nome }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="system_error text-danger">{{$errors->first('icones_categorias_id')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Ícone:</label>
                                <select name="caminho" class="form-control">
                                    @foreach($icone as $icones)
                                        <option value="{{$icones->caminho}}">{{$icones->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
{{--                            <div class="col-1 pl-0" style="padding-top: 2.3rem">--}}
{{--                                <button class="plus" onclick="">--}}
{{--                                <i class="fas fa-plus"></i>--}}
{{--                                </button>--}}
{{--                            </div>--}}
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Link:</label>
                                <input type="text" name="link" id="link" class="form-control"
                                       placeholder="Digite o link">
                                <span class="system_error text-danger">{{$errors->first('link')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Nome:</label>
                                <input type="text" name="nome" id="nome" class="form-control"
                                       placeholder="Informe o nome">
                                <span class="system_error text-danger">{{$errors->first('nome')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Subtítulo:</label>
                                <input type="text" name="subtitulo" id="subtitulo" class="form-control"
                                       placeholder="Informe o Subtítulo">
                                <span class="system_error text-danger">{{$errors->first('subtitulo')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Site Externo?</label>
                                <select name="dinamico" id="dinamico" class="form-control">
                                    <option value="1" selected>Sim</option>
                                    <option value="2">Não</option>
                                </select>
                                <span class="system_error text-danger">{{$errors->first('dinamico')}}</span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <input type="submit" class="btn btn-primary" value="Salvar">
                                <a class="btn btn-danger" href="/painel/icones">Voltar</a>
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
        function form() {
            var x = document.getElementById('div');
            if (x.style.display === 'none') {
                x.style.display = 'block';
            } else {
                x.style.display = 'none';
            }
        }
    </script>
@endpush
