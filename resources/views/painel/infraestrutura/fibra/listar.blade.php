@extends('templates.dashboard')
@section('titulo')
    Malha de Fibra
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
                                <table id="tech-companies-1" class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Título</th>
                                        <th>Tamanho</th>
                                        <th>Ano</th>
                                        <th>Opções</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($registros as $registro)
                                        <tr>
                                            <td class="text-left">{{ $registro->titulo }}</td>
                                            <td class="text-left">{{ $registro->quilometragem }} KM</td>
                                            <td>{{ $registro->ano }}</td>
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
