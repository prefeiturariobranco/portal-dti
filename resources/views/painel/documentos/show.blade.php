@extends('templates.dashboard')

@section('titulo')
    Documento
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <a style="font-size: 18px; cursor: pointer" onclick="history.back()">
                <i class="fas fa-arrow-left"></i>
            </a>
            <div class="card">
                <div class="card-header text-center">
                    <h4> {{ $documento->titulo }}</h4>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="table table-responsive mb-0" data-pattern="priority-columns">
                            <table class="table table-striped table-center">
                                <tbody>
                                <tr>
                                    <th>Descrição</th>
                                    <th>Valor</th>
                                    <th>Data de Início</th>
                                    <th>Data de Fim</th>
                                </tr>
                                <tr>
                                    <td style="height: auto; width: 30px"> {{ $documento->descricao }}</td>
                                    <td> R$ {{number_format($documento->valor, 2, ",", ".")}}</td>
                                    <td> {{ $documento->data_inicio }}</td>
                                    <td> {{ $documento->data_fim }}</td>
                                </tr>
                                <tr>
                                    <th>Anexos</th>
                                    <th colspan="6" class="text-right">Opções</th>
                                </tr>
                                <tr>
                                    @foreach($doc_ar as $doc_arquivos)
                                        <td>{{ $doc_arquivos->caminho }}</td>
                                        <td colspan="5" class="text-right"><a
                                                href="/painel/documento/{{ $doc_arquivos->id }}">
                                                <button class="btn-sm btn-primary">
                                                    <i class="fas fa-external-link-alt"></i>
                                                </button>
                                            </a>
                                            <a href="/painel/arquivos/editar/{{ $doc_arquivos->id }}">
                                                <button class="btn-sm btn-primary">
                                                    <i class="fas fa-sync"></i>
                                                </button>
                                            </a>
                                            <a href="/painel/arquivos/deletar/{{ $doc_arquivos->id }}">
                                                <button class="btn-sm btn-primary">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </a>
                                        </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@endsection
