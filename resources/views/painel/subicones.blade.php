@extends('templates.dashboard')
@section('title')Intranet :: Sub-ícones@endsection
@section('js')@endsection
@section('css')@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="mt-0 header-title">Sub-ícones <i class="fa fa-align-center" aria-hidden="true"></i></h4>
                    <p class="text-muted m-b-30">Tabela de gerenciamento de Sub-ícones</p>

                    <button class="btn btn-success" style="margin-bottom:  1%;" type="button" data-toggle="modal" data-target="#modalAdd">Adicionar Sub-Ícone</button>

                    <div class="alert alert-success messagemSucesso d-none" role="alert"></div>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                           style="border-collapse:     collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th class="text-center">Id</th>
                            <th class="text-center">Nome</th>
                            <th class="text-center">Caminho</th>
                            <th class="text-center">Link</th>
                            <th class="text-center">Opções</th>
                        </tr>
                        @foreach($subIcones as $subIcone)
                            <tr>
                                <th class="text-center">{{$subIcone->id}}</th>
                                <th class="text-center">{{$subIcone->nome}}</th>
                                <th class="text-center">{{$subIcone->caminho}}</th>
                                <th class="text-center">{{$subIcone->link}}</th>
                                <th class="text-center"></th>
                            </tr>
                        @endforeach
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
                    <h5 class="modal-title mt-0" id="myModalLabel">Adicionar Sub-ícone</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">

                    <form method="post" action="/painel/subicones/cadastrar">
                        <div class="form-group">
                            <label>Selecione o ícone:</label>
                            <select name="icones_id">
                                @foreach($icones as $icone)
                                    <option value="{{ $icone->id }}" selected>
                                        {{ $icone->nome }}
                                    </option>
                                @endforeach
                            </select>

                            <div class="form-group">
                                <label>Nome do Sub-ícone:</label>
                                <input type="text" name="nome" class="form-control" placeholder="Digite o nome">
                            </div>
                            <div class="form-group">
                                <label>Caminho do Sub-ícone:</label>
                                <input type="text" name="caminho" class="form-control" placeholder="Digite o caminho">
                            </div>
                            <div class="form-group">
                                <label>Link do Sub-ícone:</label>
                                <input type="text" name="link" class="form-control" placeholder="Digite o link">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success waves-effect waves-light">Salvar</button>
                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Fechar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- MODAL EDIT -->
    <div id="modalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Editar Sub-ícone</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form method="post" action="/painel/subicones/editar">
                        <div class="form-group">
                            <label>Nome do Sub-ícone:</label>
                            <input type="text" name="name" class="form-control" placeholder="Digite o nome">
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary waves-effect waves-light">Salvar Alterações</button>
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Fechar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL DELETE -->
    <div id="modalDelete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title mt-0" id="myModalLabel">Excluir Sub-ícone</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form method="post" action="/painel/subicones/deletar">
                        <i class="fa fa-exclamation-triangle"></i>
                        <p>Você tem certeza que deseja excluir esse registro?</p>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary waves-effect waves-light">Excluir</button>
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Fechar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
