@extends('templates.dashboard')

@section('titulo')Categorias @endsection
@section('css')
<style>
    .pagination.page-link {
        border-top-right-radius: .2rem;
        border-bottom-right-radius: .2rem;
    }
</style>

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

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Categorias</h4>
            </div>
            <div class="card-body">

                <!-- message -->

                <div class="row">
                    <div class="col-md-12">
                        <a class="btn btn-success" href="/painel/categorias/cadastro">Cadastrar</a>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table table-responsive mb-0" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table table-striped" style="text-align: center;">
                                <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Opções</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categorias as $categoria)
                                    <tr>
                                        <td class="text-left">{{ $categoria->nome }}</td>
                                        <td>
                                            <a href="/painel/categorias/editar/{{ $categoria->id }}">
                                                <button class="btn-sm btn-primary"><i class="fas fa-sync"></i></button>
                                            </a>

                                            <a href="/painel/categorias/deletar/{{ $categoria->id }}">
                                                <button class="btn-sm btn-primary">
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

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection
