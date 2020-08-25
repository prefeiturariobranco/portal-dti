@extends('templates/dashboard')
@section('titulo')Intranet :: Infraestrutura@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#tech-companies-1').DataTable({
                language: {
                    url: '/json/Portuguese-Brasil.json'
                }
            });
        });
    </script>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="mt-0 header-title">Infraestrutura <i class="fa fa-align-center" aria-hidden="true"></i></h4>
                    <p class="text-muted m-b-30">Tabela de gerenciamento de Infraestrutura</p>
                    <form class="form-inline">


                    </form>
                    <button class="btn btn-success" style="margin-bottom: 1%;" type="button" data-toggle="modal" data-target="#modalAdd">Adicionar Infraestrutura
                    </button>


                    <div class="table-rep-plugin">
                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table table-striped" style="text-align: center;">
                                <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Valor</th>
                                    <th>Opções</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for infraestrutura in infraestruturas %}
                                <tr>
                                    <td style="text-transform: uppercase; ">{{ infraestrutura.nome }}</td>
                                    <td style="text-transform: uppercase; ">{{ infraestrutura.valor }}</td>
                                    <td>
                                        </button>
                                        <button class="btn btn-primary waves-effect waves-light" type="button" data-toggle="modal" data-target="#modalEdit">Editar
                                        </button>
                                        <button class="btn btn-danger waves-effect waves-light" type="button" data-toggle="modal" data-target="#modalDelete">Excluir
                                        </button>
                                    </td>
                                </tr>
                                {% endfor %}
                                </tbody>
                            </table>

                        </div>

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
                    <h5 class="modal-title mt-0" id="myModalLabel">Adicionar infraestrutura</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">

                    <form method="post" action="/painel/infraestruturas/cadastrar">
                        <div class="form-group">
                            <label>Nome da infraestrutura:</label>
                            <input type="text" name="nome" class="form-control" placeholder="Digite o nome da infraestrutura">
                        </div>
                        <div class="form-group">
                            <label>Valor do infraestrutura:</label>
                            <input type="text" name="valor" class="form-control" placeholder="Digite o valor da infraestrutura">
                        </div>
                        <button type="submit" class="btn btn-success waves-effect waves-light">Salvar</button>
                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Fechar</button>
                    </form>
                </div>
                <!--<div class="modal-footer">
                </div>-->
            </div>
        </div>
    </div>


    <!-- MODAL EDIT -->
    <div id="modalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Editar infraestrutura</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form method="post" action="/painel/infraestruturas/editar">
                        <div class="form-group">
                            <label>Nome da infraestrutura:</label>
                            <input type="text" name="nome" class="form-control" placeholder="Digite o nome do investimento">
                        </div>
                        <div class="form-group">
                            <label>Valor da infraestrutura:</label>
                            <input type="text" name="valor" class="form-control" placeholder="Digite o valor do investimento">
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Salvar Alterações</button>
                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Fechar</button>
                    </form>
                </div>
                <!--<div class="modal-footer">

                </div>-->
            </div>
        </div>
    </div>

    <!-- MODAL DELETE -->
    <div id="modalDelete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title mt-0" id="myModalLabel">Excluir infraestrutura</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form method="post" action="/painel/infraestruturas/deletar">
                        <i class="fa fa-exclamation-triangle"></i>
                        <p>Você tem certeza que deseja excluir esse registro?</p>


                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Excluir</button>
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Fechar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
