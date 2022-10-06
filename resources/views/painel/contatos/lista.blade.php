@extends('templates.dashboard')

@section('titulo')
    Contatos
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
                    <h4>Contatos</h4>
                </div>
                <div class="card-body">

                    <!-- Message -->

                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-success" href="/painel/contatos/cadastro">Cadastrar</a>
{{--                            @if(request()->has($contatos->ocultar = 0))--}}
{{--                                <a class='btn btn-danger' href="/painel/contatos/inativos">Inativos</a>--}}
{{--                            @else--}}
{{--                                <a class="btn btn-info" href="/painel/contatos">Ativos</a>--}}
{{--                            @endif--}}
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
                                        <th class="text-center">Opções</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($contatos as $contato)
                                        <tr>
                                            <td class="text-left">{{ $contato->nome }}</td>
                                            <td>
                                                <a href="/painel/contatos/editar/{{ $contato->id }}">
                                                    <button class="btn-sm btn-primary">
                                                        <i class="fas fa-sync"></i>
                                                    </button>
                                                </a>

                                                <a href="/painel/contatos/deletar/{{ $contato->id }}">
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
