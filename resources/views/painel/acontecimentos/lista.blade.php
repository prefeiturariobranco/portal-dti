@extends('templates.dashboard')

@section('titulo')
    Acontecimentos
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
                    <h4>História DTI</h4>
                </div>
                <div class="card-body">

                    <!-- menssage -->

                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-success" href="/painel/acontecimentos/cadastro">Cadastrar</a>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-sm table-responsive mb-0" data-pattern="priority-columns">
                                <table id="tech-companies-1" class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Ano</th>
                                        <th class="text-center">Opções</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($acontecimentos as $acontecimento)
                                        <tr>
                                            <td>{{ $acontecimento->ano }}</td>
                                            <td class="text-center">
                                                <a href="/painel/acontecimentos/editar/{{ $acontecimento->id }}">
                                                    <button class="btn-sm btn-primary">
                                                        <i class="fas fa-sync"></i>
                                                    </button>
                                                </a>
                                                <a href="/painel/acontecimentos/deletar/{{ $acontecimento->id }}">
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
