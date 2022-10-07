@extends('templates.dashboard')
@section('titulo')
    Intranet :: Planejamentos
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
                    <h4>Planejamentos</h4>
                </div>
                <div class="card-body">

                    <!-- Menssage -->

                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-success" href="/painel/planejamentos/cadastro">Cadastrar</a>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-sm table-responsive mb-0" data-pattern="priority-columns">
                                <table id="tech-companies-1" class="table table-striped" style="text-align: center;">
                                    <thead>
                                    <tr>
                                        <th>Título</th>
                                        <th class="text-center">Opções</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($planejamentos as $planejamento)
                                        <tr>
                                            <td class="text-left">{{ $planejamento->titulo }}</td>
                                            <td>
                                                <a href="/painel/planejamentos/editar/{{ $planejamento->id }}">
                                                    <button class="btn-sm btn-primary">
                                                        <i class="fas fa-sync"></i>
                                                    </button>
                                                </a>
                                                <a href="/painel/planejamentos/deletar/{{ $planejamento->id }}">
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
