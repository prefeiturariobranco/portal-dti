@extends('templates.dashboard')
@section('titulo')Intranet :: Usuários @endsection

@push('css')
    <style>
        .pagination.page-link {
            border-top-right-radius: .2rem;
            border-bottom-right-radius: .2rem;
        }
    </style>
@endpush()


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <a class="card-body">

                    <form class="form-inline">

                    </form>
                        <a href="/painel/usuarios/cadastrar"><button class="btn btn-success" type="button" data-toggle="modal" data-target="#modalAdd">Cadastrar Usuário
                    </button></a>

                    <div class="table-rep-plugin mt-3">
                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table table-striped">
                                <thead>
                                <tr class="">
                                    <th class="">Nome</th>
                                    <th class="text-center">Login</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Opções</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($usuarios as $usuario)
                                <tr class="">
                                    <td class="">{{ $usuario->nome }}</td>
                                    <td class="text-center">{{ $usuario->login }}</td>
                                   @if ($usuario->status == 0)
                                        <td class="text-center text-success">Ativo</td>
                                        @elseif($usuario->status == 2 )
                                            <td class="text-center text-warning">Bloqueado</td>
                                        @else
                                            <td class="text-center text-danger">Excluido</td>
                                    @endif
                                    <td class="text-center">

                                        <a href="/painel/usuarios/{{ $usuario->id }}">
                                            <button class="btn-sm btn-primary">
                                                <i class="fas fa-shield-alt"></i>
                                            </button>
                                        </a>

                                        <a href="/painel/usuarios/{{ $usuario->id }}/permissoes">
                                            <button class="btn-sm btn-primary">
                                                <i class="fas fa-user-edit"></i>
                                            </button>
                                        </a>
                                        <a href="/painel/usuarios/remover/{{ $usuario->id }}">
                                            <button class="btn-sm btn-danger">
                                                <i class="fas fa-user-times"></i>
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
            </div>
        </div>
    </div> <!-- end row -->
    <!-- MODAL DELETE -->
    <div id="modalDelete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
