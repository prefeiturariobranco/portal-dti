@extends('templates.dashboard')

@section('titulo')
    Documento
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4> {{ $documento->titulo }}</h4>
                </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="table table-responsive mb-0" data-pattern="priority-columns">
                                <table id="tech-companies-1" class="table table-striped table-center">
                                    <thead>
                                    <tr>
                                        <th>Descrição</th>
                                        <th>Valor</th>
                                        <th>Data de Início</th>
                                        <th>Data de Fim</th>
                                        <th>Criado por</th>
                                        <th>Categoria</th>
                                        <th>Arquivo Cadastrado</th>
                                    </tr>

                                    @if($documento->ocultar == '0')
                                        <tr>
                                            <td> {{ $documento->descricao }}</td>
                                            <td> {{ $documento->valor }}</td>
                                            <td> {{ $documento->data_inicio }}</td>
                                            <td> {{ $documento->data_fim }}</td>
                                            <td> {{ $user->nome }}</td>
                                            <td> {{ $cat_doc->nome }}</td>
                                            <td>
                                                <a href="/painel/documento/{{ $doc_ar->id }}">
                                                    <button class="btn-sm btn-primary">
                                                        <i class="fas fa-download"></i>
                                                    </button>
                                                </a>
                                            </td>
                                    @endif
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
