@extends('templates.dashboard')
@section('titulo')Ícones @endsection

@section('css')
<style>
    .pagination.page-link {
        border-top-right-radius: .2rem;
        border-bottom-right-radius: .2rem;
    }
</style>
@section('css')

@section('js')
<script>
    $(document).ready(function () {
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
                <h4>Ícones</h4>
            </div>
            <div class="card-body">

                <!-- INCLUDE MENSAGE -->

                <div class="row">
                    <div class="col-md-12">
                        <a class="btn btn-success" href="/painel/icones/cadastro">Cadastrar</a>
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
                                    <th>Opções</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($icones as $icone)
                                    <tr>
                                        <td class="text-left">{{ $icone->nome }}</td>
                                        <td>
                                            <a href="/painel/icones/editar/{{ $icone->id }}">
                                                <button class="btn-sm btn-primary">
                                                    <i class="fas fa-sync"></i>
                                                </button>
                                            </a>
                                            <a href="/painel/icones/deletar/{{ $icone->id }}">
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
