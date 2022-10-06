@extends('templates.dashboard')
@section('titulo')
    Mapas
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
                    <h4>Mapas</h4>
                </div>


                <div class="card-body">

                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-success" href="{{ route('maps') }}">Cadastrar</a>
                        </div>
                    </div>

                    <br>
                    <!-- menssage -->

                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table table-responsive-lg mb-0" data-pattern="priority-columns">
                                <table id="tech-companies-1" class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th class="text-left">Título</th>
                                        <th>Opções</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($mapas as $mapa)
                                        <tr>
                                            <td class="text-left">{{ $mapa->titulo }}</td>
                                            <td>
                                                <a href="{{ route('editar.maps', $mapa->id) }}">
                                                    <button class="btn-sm btn-primary">
                                                        <i class="fas fa-sync"></i>
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
