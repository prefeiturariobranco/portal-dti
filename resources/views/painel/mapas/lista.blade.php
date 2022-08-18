@extends('templates.dashboard')
@section('titulo')Mapas @endsection

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
        $(document).ready(function() {
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
                                <table id="tech-companies-1" class="table table-striped" style="text-align: center;">
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