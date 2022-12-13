@extends('templates.dashboard')
@section('titulo')
    Imagens de Ícones
@endsection

@push('link-css')
    <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">
@endpush

@push('link-js')
    <script src="{{asset('DataTables/jQuery-3.6.0/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('DataTables/datatables.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#tech-companies-2').DataTable();
        });
    </script>
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header pt-0">
                    <h4>Imagens de Ícones</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-success" href="/painel/imagens/icones/cadastro">Cadastrar</a>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-sm table-responsive mb-0" data-pattern="priority-columns">
                                <table id="tech-companies-2" class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Caminho</th>
                                        <th>Opções</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($imagens as $imagem)
                                        <tr>
                                            <td class="text-left">{{ $imagem->nome }}</td>
                                            <td class="text-left">{{ $imagem->caminho }}</td>
                                            <td>
                                                <a href="/painel/imagens/icones/editar/{{ $imagem->id }}">
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
        </div>
    </div>
@endsection

