@extends('templates.dashboard')
@section('titulo')
    Cargos
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
                    <h4 class="font-weight-bold text-dark">Cargos</h4>
                </div>
                <div class="card-body">
                    <!-- Message -->
                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-success" href="{{route('cadastro.cargos')}}">Cadastrar</a>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-sm table-responsive mb-0" data-pattern="priority-columns">
                                <table id="tech-companies-1" class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Ações</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $cargos as $cargo)
                                        <tr>
                                            <td class="text-left">{{$cargo->nome}}</td>
                                            <td>
                                                <a href="{{route('edita.cargos',$cargo->id)}}">
                                                    <button class="btn-sm btn-primary">
                                                        <i class="fas fa-pen-alt"></i>
                                                    </button>
                                                </a>
                                                @if (isset($formValidation))
                                                    <a href="{{route('deleta.cargos',$cargo->id)}}">
                                                        <button class="btn-sm btn-primary">
                                                            <i class="far fa-trash-alt"></i>
                                                        </button>
                                                    </a>
                                                @endif
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
