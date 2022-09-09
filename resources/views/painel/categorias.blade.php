@extends('templates/dashboard.layout.php')
@section('titulo')
    Intranet :: Categorias
@endsection

@section('js')
    <script src="/js/painel/categoria.js"></script>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="mt-0 header-title">Categorias <i class="fa fa-align-center" aria-hidden="true"></i></h4>
                    <p class="text-muted m-b-30">Tabela de gerenciamento de categorias</p>
                    <div class="alert alert-success messagemSucesso d-none" role="alert"></div>

                    <button class="btn btn-success" style="margin-bottom: 1%;" type="button" data-toggle="modal"
                            data-target="#modalAdd">Adicionar Categoria
                    </button>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th class="text-center">Id</th>
                            <th class="text-center">Nome</th>
                            <th class="text-center">Opções</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    </div>
    </div>
    </div> <!-- end col -->
    </div> <!-- end row -->


    <!-- MODAL ADICIONAR -->
    <div id="modalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Adicionar Categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">

                    <form method="post" action="/painel/categorias/cadastrar">
                        <div class="form-group">
                            <label>Nome da categoria:</label>
                            <input type="text" name="categoria" id="categoria" class="form-control"
                                   placeholder="Digite o nome">
                            <span class="messagemController text-danger"></span>
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success waves-effect waves-light btn-salvar">Salvar</button>
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Fechar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- MODAL EDIT -->
    <div id="modalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Editar Categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form method="post" action="/painel/categorias/editar">
                        <div class="form-group">
                            <label>Nome da categoria:</label>
                            <input type="text" name="nome" id="categoriaEditar" class="form-control nomeEditar"
                                   placeholder="Digite o nome">
                            <span class="messagemController text-danger"></span>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success waves-effect waves-light btn-editar">Salvar
                        Alterações
                    </button>
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Fechar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL DELETE -->
    <div id="modalDelete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title mt-0" id="myModalLabel">Excluir Categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form method="post" action="/painel/categorias/deletar">
                        <i class="fa fa-exclamation-triangle"></i>
                        <p>Você tem certeza que deseja excluir esse registro?</p>
                        <span class="messagemController text-danger"></span>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success waves-effect waves-light btn-excluir">Excluir</button>
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Fechar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL ALERT -->
    <div class="modal fade modal-alert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Mensagem do Sistema</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <i class="fa fa-exclamation-triangle"></i>
                    <p class="textoModal"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info waves-effect waves-light" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
@endsection
