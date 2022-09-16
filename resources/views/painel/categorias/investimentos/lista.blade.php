@extends('templates.dashboard')

@section('titulo')
    Categorias Investimentos
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
                    <h4>Categorias</h4>
                </div>
                <div class="card-body">

                    <!-- message -->

                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-success" href="/painel/categorias-investimentos/cadastro">Cadastrar</a>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table table-responsive mb-0" data-pattern="priority-columns">
                                <table id="tech-companies-1" class="table table-striped"
                                       style="text-align: left;">
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
                                                <a href="/painel/categorias-investimentos/editar/{{ $categoria->id }}">
                                                    <button class="btn-sm btn-primary"><i class="fas fa-sync"></i>
                                                    </button>
                                                </a>

                                                {{--                                                <a href="/painel/categorias-investimentos/deletar/{{ $categoria->id }}">--}}
                                                {{--                                                    <button class="btn-sm btn-primary">--}}
                                                {{--                                                        <i class="far fa-trash-alt"></i>--}}
                                                {{--                                                    </button>--}}
                                                {{--                                                </a>--}}
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

