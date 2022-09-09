@extends('templates/dashboard')
@section('titulo')
    Intranet :: Novidades
@endsection

@section('js')
    <script>
        $(document).ready(function () {
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

                    <h4 class="mt-0 header-title">Novidades <i class="fa fa-align-center" aria-hidden="true"></i></h4>
                    <p class="text-muted m-b-30">Tabela de gerenciamento de novidades</p>
                    <form class="form-inline">


                    </form>
                    <button class="btn btn-success" style="margin-bottom: 1%;" type="button" data-toggle="modal" href=""
                            data-target="#modalAdd">Cadastrar Novidade
                    </button>


                    <div class="table-rep-plugin">
                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table table-striped" style="text-align: center;">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>Opções</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($postagens as $postagem)
                                    <tr>
                                        <td>{{ $postagem->id }}</td>
                                        <td style="text-transform: uppercase; ">{{ $postagem->titulo }}</td>
                                        <td>
                                            </button>
                                            <button class="btn btn-primary waves-effect waves-light" type="button"
                                                    data-toggle="modal" data-target="#modalEdit">Editar
                                            </button>
                                            <button class="btn btn-danger waves-effect waves-light" type="button"
                                                    data-toggle="modal" data-target="#modalDelete">Excluir
                                            </button>
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

@endsection
