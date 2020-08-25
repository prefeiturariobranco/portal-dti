@extends('templates.dashboard')
@section('titulo')Equipe DTI @endsection

@section('css')
<style>
    .pagination.page-link {
        border-top-right-radius: .2rem;
        border-bottom-right-radius: .2rem;
    }
</style>
@endsection

@section('js')

@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-body">


                <div class="row">
                    <div class="col-xs-12 col-lg-12">
                        <h1>Equipe DTI 2019</h1>
                    </div>
                </div>


                <div class="row mt-4">

                    <table class="table table-borderless mb-0">

                        <thead>
                        <tr class="bg-primary">
                            <th class="text-justify font-weight-bold text-light" width="40%">Nome</th>
                            <th class="text-center font-weight-bold text-light d-none d-sm-block">Email</th>
                            <th class="text-center font-weight-bold text-light" width="15%">Telefone Fixo</th>
                            <th class="text-center font-weight-bold text-light" width="15%">Telefone Pessoal</th>
                            <th class="text-center font-weight-bold text-light" width="10%">Departamento</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->nome }}</td>
                                <td class="text-center d-none d-sm-block">{{ $usuario->email }}</td>
                                <td class="text-center">{{ $usuario->telefone_sala }}</td>
                                <td class="text-center">{{ $usuario->telefone_pessoal }}</td>
                                <td class="text-center">{{ $usuario->departamentos->nome }}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>


            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection
