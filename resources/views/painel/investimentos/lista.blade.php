@extends('templates.dashboard')
@section('titulo')
    Investimentos
@endsection

@push('link-css')
    <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">
    <style>
        .pagination.page-link {
            border-top-right-radius: .2rem;
            border-bottom-right-radius: .2rem;
        }
    </style>
@endpush

@push('link-js')
    <script src="{{asset('DataTables/jQuery-3.6.0/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('DataTables/datatables.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#tech-companies-1').DataTable();
        });
    </script>
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Investimentos</h4>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-success" href="/painel/investimentos/cadastro">Cadastrar</a>
                        </div>
                    </div>

                    <br>
                    <!-- menssage -->
                    @foreach($categoria as $categorias)
                        <h6>{{ $categorias->nome }}</h6>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table table-responsive-lg mb-0" data-pattern="priority-columns">
                                    <table id="tech-companies-1" class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th class="text-left">Nome</th>
                                            <th class="text-center">Valor</th>
                                            <th>Opções</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($investimentos as $investimento)
                                            <tr>
                                                <td class="text-left">{{ $investimento->nome }}</td>
                                                <td class="text-center">
                                                    R$ {{ number_format($investimento->valor, 2, ",", ".") }}</td>
                                                <td>
                                                    <a href="/painel/investimentos/editar/{{ $investimento->id }}">
                                                        <button class="btn-sm btn-primary">
                                                            <i class="fas fa-sync"></i>
                                                        </button>
                                                    </a>

                                                    <a href="/painel/investimentos/deletar/{{ $investimento->id }}">
                                                        <button class="btn-sm btn-danger">
                                                            <i class="far fa-trash-alt"></i>
                                                        </button>
                                                    </a>

                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


    <!-- MODAL ADICIONAR -->
    <div id="modalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Adicionar Investimentos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">

                    <form method="post" action="/painel/investimentos/cadastrar">
                        <div class="form-group">
                            <label>Nome do Investimento:</label>
                            <input type="text" name="nome" class="form-control"
                                   placeholder="Digite o nome do investimento">
                        </div>
                        <div class="form-group">
                            <label>Valor do Investimento:</label>
                            <input type="text" name="valor" class="form-control"
                                   placeholder="Digite o valor do investimento">
                        </div>
                        <button type="submit" class="btn btn-success waves-effect waves-light">Salvar</button>
                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Fechar
                        </button>
                    </form>
                </div>
                <!--<div class="modal-footer">
                </div>-->
            </div>
        </div>
    </div>


    <!-- MODAL EDIT -->
    <div id="modalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Editar Investimento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form method="post" action="/painel/investimentos/editar">
                        <div class="form-group">
                            <label>Nome do Investimento:</label>
                            <input type="text" name="nome" class="form-control"
                                   placeholder="Digite o nome do investimento">
                        </div>
                        <div class="form-group">
                            <label>Valor do Investimento:</label>
                            <input type="text" name="valor" class="form-control"
                                   placeholder="Digite o valor do investimento">
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Salvar Alterações
                        </button>
                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Fechar
                        </button>
                    </form>
                </div>
                <!--<div class="modal-footer">

                </div>-->
            </div>
        </div>
    </div>

    <!-- MODAL DELETE -->
    <div id="modalDelete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title mt-0" id="myModalLabel">Excluir Investimento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form method="post" action="/painel/investimentos/deletar">
                        <i class="fa fa-exclamation-triangle"></i>
                        <p>Você tem certeza que deseja excluir esse registro?</p>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Excluir</button>
                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Fechar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
