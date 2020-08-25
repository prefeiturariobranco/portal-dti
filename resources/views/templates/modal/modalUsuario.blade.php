<!-- MODAL ADICIONAR -->
<div id="modalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Cadastrar Usuário</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form method="post" action="/painel/usuarios/cadastrar">

                    <div class="col-md-12">

                        <div class="row mt-3">
                            <div class="col-md-1">
                                <label class="mt-2">Nome:</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="nome" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-1">
                                <label class="mt-2">Login:</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="login" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-1">
                                <label class="mt-2">Senha:</label>
                            </div>
                            <div class="col-md-6">
                                <input type="password" name="senha" class="form-control">
                            </div>
                        </div>
                    </div>


            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary waves-effect waves-light">Salvar</button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Fechar</button>
                </form>
            </div>
        </div>
    </div>
</div>
