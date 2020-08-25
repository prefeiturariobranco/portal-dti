@extends('templates.dashboard')
@section('titulo')Documentos @endsection

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
            <div class="card-header">
                <h4>Documentos</h4>
            </div>
            <div class="card-body">

                <!-- menssage -->

                <div class="row">
                    <div class="col-md-12">
                        <a class="btn btn-success" href="/painel/documentos/cadastro">Cadastrar</a>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-sm table-responsive mb-0" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table table-striped" style="text-align: center;">
                                <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Opções</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($documentos as $documento)
                                    <tr>
                                        <td class="text-left">{{ $documento->titulo }}</td>
                                        <td>
                                            <a class="btn-sm btn-primary"
                                               href="/painel/documentos/editar/{{ $documento->id }}">
                                                <i class="fas fa-sync"></i>
                                            </a>
                                            <a class="btn-sm btn-primary"
                                               href="/painel/documentos/deletar/{{ $documento->id }}">
                                                <i class="far fa-trash-alt"></i>
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
