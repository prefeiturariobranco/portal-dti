@extends('templates.dashboard')
@section('titulo')
    Sistemas
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
                    <h4 class="font-weight-bold text-dark">Sistemas</h4>
                </div>
                <div class="card-body">
                    <!-- Message -->
                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-success" href="/painel/sistemas/cadastro">Cadastrar</a>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-sm table-responsive mb-0" data-pattern="priority-columns">
                                <table id="tech-companies-1" class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Data</th>
{{--                                        <th>Nome da unidade</th>--}}
                                        <th>Ações</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach( $Sistemas as $Sistema)
                                            <tr>
                                                <td class="text-left">{{$Sistema->nome_sistema}}</td>
{{--                                                <td class="text-left">{{$Unidade->}}--}}
                                                <td>
                                                    <a href="/painel/sistemas/editar/{{$Sistema->id}}">
                                                        <button class="btn-sm btn-primary">
                                                            <i class="fas fa-pen-alt"></i>
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
