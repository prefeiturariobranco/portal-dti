@extends('templates.dashboard')
@section('titulo')
    Reuniões
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
                    <h4>Participantes da Reunião do Sistema {{ $reuniao->sistema->nome_sistema }}</h4>
                </div>
                <div class="card-body">
                    <!-- Message -->
                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-danger" href="/painel/reuniao">Voltar</a>
                            <a class="btn btn-success" href="/painel/participante/{{$reuniao->id}}">Adicionar Participante</a>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-sm table-responsive mb-0" data-pattern="priority-columns">
                                <table id="tech-companies-1" class="table table-striped" style="text-align: center;">
                                    <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Participante</th>
                                        <th class="text-center">Opções</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($usuarios as $usuario)
                                        <tr>
                                            <td class="text-left">{{$usuario->participante->nome_participante}}</td>
                                            <td class="text-left">{{$usuario->participante->tipo->tipo_participante}}</td>
                                            <td>
                                                <a href="/painel/participantes/reuniao/deletar/{{$usuario->id}}">
                                                    <button class="btn-sm btn-danger" title="Remover participante">
                                                        <i class="fas fa-user-times"></i>
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
