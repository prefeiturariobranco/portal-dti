@extends('templates.dashboard')
@section('titulo')
    Malha de Fibra
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
                    <h4>Malha de Fibra</h4>
                </div>
                <div class="card-body">
                    <!--MENSAGEM -->
                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-success" href="/painel/infra/fibra/cadastrar">Cadastrar</a>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-sm table-responsive mb-0" data-pattern="priority-columns">
                                <table id="tech-companies-1" class="table table-striped" style="text-align: center;">
                                    <thead>
                                    <tr>
                                        <th>Tamanho</th>
                                        <th>Ano</th>
                                        <th>Opções</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($registros as $registro)
                                        <tr>
                                            <td class="text-center">{{ $registro->quilometragem }} KM</td>
                                            <td class="text-center">{{ $registro->ano }}</td>
                                            <td>
                                                <a href="/painel/infra/fibra/alterar/{{ $registro->id }}">
                                                    <button class="btn-sm btn-primary">
                                                        <i class="fas fa-sync"></i>
                                                    </button>
                                                </a>
                                                <a href="/painel/infra/fibra/remover/{{ $registro->id }}">
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
