@extends('templates.dashboard')
@section('titulo')
    Documentos
@endsection

@push('css')
    <style>
        .pagination.page-link {
            border-top-right-radius: .2rem;
            border-bottom-right-radius: .2rem;
        }
    </style>
@endpush

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
                                <table id="tech-companies-1" class="table table-striped" style="text-align: left;">
                                    <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th style="text-align: center">Opções</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($documentos as $documento)
                                        <tr>
                                            <td class="text-left">{{ $documento->titulo }}</td>
                                            <td style="text-align: center">
                                                <a href="/painel/documentos/abrir/{{ $documento->id }}">
                                                    <button class="btn-sm btn-primary">
                                                        <i class="fas fa-external-link-alt"></i>
                                                    </button>
                                                </a>
                                                <a href="/painel/documentos/editar/{{ $documento->id }}">
                                                    <button class="btn-sm btn-primary">
                                                        <i class="fas fa-sync"></i>
                                                    </button>
                                                </a>
                                                <a href="/painel/documentos/deletar/{{ $documento->id }}">
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
