@extends('templates/dashboard.layout.php')
@section('titulo')
    Intranet :: Icones
@endsection

@section('js')
    <script src="/js/painel/icones.js"></script>;
@endsection
@section('css')@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="mt-0 header-title">Ícones <i class="fa fa-align-center" aria-hidden="true"></i></h4>
                    <p class="text-muted m-b-30">Tabela de gerenciamento de icones</p>

                    <button class="btn btn-success" style="margin-bottom: 1%;" type="button" data-toggle="modal"
                            data-target="#modalAdd">Adicionar Ícone
                    </button>

                    <div class="alert alert-success messagemSucesso d-none" role="alert"></div>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th class="text-center">Id</th>
                            <th class="text-center">Nome</th>
                            <th class="text-center">Link</th>
                            <th class="text-center">Opções</th>
                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <!-- MODAL ADICIONAR -->
    <div id="modalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Adicionar Ícone</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">

                    <form method="post" action="/painel/icones/cadastrar">
                        <div class="form-group">
                            <label>Selecione a categoria:<span class="text-danger">*</span></label>
                            <select name="icones_categorias_id" id="categoria" class="form-control">
                                <option selected>Selecione uma categoria</option>
                                {% for categoria in categorias %}
                                <option value="{{ categoria.id }}">
                                    {{ categoria.nome }}
                                </option>
                                {% endfor %}
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Nome do ícone:<span class="text-danger">*</span></label>
                            <input type="text" name="nome" id="icone" class="form-control" placeholder="Digite o nome">
                        </div>

                        <div class="form-group">
                            <label>Caminho do ícone:<span class="text-danger">*</span></label>
                            <input type="text" name="caminho" id="caminho" class="form-control"
                                   placeholder="Digite o caminho">
                        </div>

                        <div class="form-group">
                            <label>Link:<span class="text-danger">*</span></label>
                            <input type="text" name="link" id="link" class="form-control" placeholder="Digite o link">
                        </div>

                        <div class="form-group">
                            <label>Subtítulo:</label>
                            <input type="text" name="subtitulo" id="subtitulo" class="form-control"
                                   placeholder="Informe o Subtítulo">
                        </div>

                        <div class="form-group">
                            <label>Site Externo?<span class="text-danger">*</span></label>

                            <select name="dinamico" id="dinamico" class="form-control">
                                <option value="1" selected>Sim</option>
                                <option value="2">Não</option>

                            </select>
                        </div>
                    </form>
                    <span class="messagemController text-danger"></span>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-success waves-effect waves-light btn-salvar">Salvar</button>
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Fechar</button>

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
                    <h5 class="modal-title mt-0" id="myModalLabel">Adicionar Ícone</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">

                    <div class="form-group divCategorias">
                        <label>Selecione a categoria:<span class="text-danger">*</span></label>
                        <select name="icones_categorias_id" class="form-control" id="categoria_edit">
                            <option selected>Selecione uma categoria</option>
                            {% for categoria in categorias %}
                            <option value="{{ categoria.id }}">
                                {{ categoria.nome }}
                            </option>
                            {% endfor %}
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Nome do ícone:<span class="text-danger">*</span></label>
                        <input type="text" name="nome" class="form-control" id="icone_edit" placeholder="Digite o nome">
                    </div>

                    <div class="form-group">
                        <label>Caminho do ícone:<span class="text-danger">*</span></label>
                        <input type="text" name="caminho" class="form-control" id="caminho_edit"
                               placeholder="Digite o caminho">
                    </div>

                    <div class="form-group">
                        <label>Link:<span class="text-danger">*</span></label>
                        <input type="text" name="link" class="form-control" id="link_edit" placeholder="Digite o link">
                    </div>

                    <div class="form-group">
                        <label>Subtítulo:</label>
                        <input type="text" name="subtitulo" class="form-control" id="subtitulo_edit"
                               placeholder="Informe o Subtítulo">
                    </div>

                    <div class="form-group divDinamico">
                        <label>Site Externo?:<span class="text-danger">*</span></label>

                        <select name="dinamico" id="dinamico_edit" class="form-control">
                            <option value="1">Sim</option>
                            <option value="2">Não</option>
                        </select>
                    </div>
                    <span class="messagemController text-danger"></span>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-success waves-effect waves-light btn-editar">Salvar Alterações
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

                    <h5 class="modal-title mt-0" id="myModalLabel">Excluir Ícone</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form method="post" action="/painel/icones/deletar">
                        <i class="fa fa-exclamation-triangle"></i>
                        <p>Você tem certeza que deseja excluir esse registro?</p>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary waves-effect waves-light btn-excluir">Excluir</button>
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Fechar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
