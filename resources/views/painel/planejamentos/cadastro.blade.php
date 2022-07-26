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
                                <input type="date" class="form-control" name="data_entrega">
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
                                    @foreach($planejamentoCats as $planejamentoCat)
                                        <option value="{{ $planejamentoCat->id }}">
                                            {{ $planejamentoCat->nome }}
                                        </option>
                                    @endforeach
                                </select>
                                <a href="" class="cat_plan" id="cadastrar_categoria">
                                    <i class="fas fa-plus"></i>
                                </a>
                                <span
                                    class="system_error text-danger">{{$errors->first('planejamento_categoria')}}</span>
                            </div>
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

@push('link-js')
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            var i=1;

            $('#add_categoria').click(function(){

                i++;
                $('#inputs_adicionais').append('<div class="row" id="inputs_cad_venda'+i+'"> <div class="input-field col s8"> <input placeholder="Digite o produto" name="produto_venda" type="text" class="validate"> <label for="produto_venda">Produto</label> </div> <div class="input-field col s2"> <input placeholder="Digite a quantidade" name="quantidade_produto_venda" type="text" class="validate"> <label for="quantidade_produto_venda">Quantidade</label> </div> </div>' );
            });

            $('#cadastra_categoria').click(function(){

                $.ajax({

                    url:"/painel/categorias-planejamentos/salvar",
                    method:"POST",
                    data:$('#categoria').serialize(),

                    success:function(data){

                        alert(data);
                        $('#categoria')[0].reset();
                    }
                });
            });
        });
    </script>
@endpush
