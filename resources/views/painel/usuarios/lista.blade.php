@extends('templates.dashboard')
@section('titulo')
    Intranet :: Usuários
@endsection

@push('link-css')
    <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">
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
                    <h4>Usuários</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-success" href="/painel/usuarios/cadastrar">Cadastrar Usuário</a>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-12">
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
                                                @if ($usuario->ocultar == 0)
                                                    <td class="text-center text-success">Ativo</td>
                                                @elseif($usuario->ocultar == 1 )
                                                    <td class="text-center text-warning">Bloqueado</td>
                                                @endif
                                                <td class="text-center">
                                                    <a href="/painel/usuarios/{{ $usuario->id }}" title="Editar">
                                                        <button class="btn-sm btn-primary">
                                                            <i class="fas fa-shield-alt"></i>
                                                        </button>
                                                    </a>
                                                    <a href="/painel/usuarios/remover/{{ $usuario->id }}"
                                                       title="Excluir">
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
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Excluir
                                    </button>
                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">
                                        Fechar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
        @push('js')
            <script>
                $(document).ready(function () {

                    $('#tech-companies-1').DataTable({
                        language: {
                            url: '/json/Portuguese-Brasil.json'
                        }
                    });
                });
            </script>
    @endpush
