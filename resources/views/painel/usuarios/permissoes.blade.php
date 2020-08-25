@extends('templates.dashboard')
@section('titulo') Portal DTI - Permissões @endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4>Permissões: <span class="text-primary">{{ $usuario->nome }}</span></h4>

                    <form action="/painel/usuarios/permissoes/salvar" method="post">
                        @csrf
                        <input type="hidden" name="usuario_id" value="{{ $usuario->id }}">

                        <div class="row">
                            <div class="col-md-12">

                                <table class="table">
                                    <thead class="thead-light">
                                    <tr class="col-md-12">
                                        <th class="col-md-8">Permissão</th>
                                        <th class="col-md-4">Nível</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($permissoes as $permissao)
                                        <tr class="col-md-12">
                                            <td class="text-left col-md-8">{{ $permissao->nome }}</td>
                                            <td class="text-right col-md-4">
                                                <select class="custom-select col-md-12" name="permissoes[{{$permissao->id}}]">
                                                    <option value="0">Sem Permissão</option>
                                                    <option value="1">Nível 1</option>
                                                    <option value="2">Nível 2</option>
                                                    <option value="3">Nível 3</option>
                                                    <option value="4">Nível 4</option>
                                                </select>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="row mt-3 d-flex justify-content-center">
                            <div class="mr-3">
                                <input type="submit" class="btn btn-success" value="Salvar">
                            </div>
                            <div>
                                <input type="reset" class="btn btn-danger" value="Revogar Permissões">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div> <!-- end row -->
@endsection
