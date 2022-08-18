@extends('templates.dashboard')
@section('titulo') Planejamento DTI @endsection

@section('css')

@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">


                    <div class="row">
                        <div class="col-xs-12 col-lg-12">
                            <h1>Planejamento 2019</h1>
                            <span>DIRETORIA DE TECNOLOGIA DA INFORMAÇÃO/SEGATI</span>
                        </div>
                    </div>


                    <div class="row mt-4">

                        <table class="table table-borderless mb-0">

                            <thead>
                            <tr class="bg-primary">
                                <th class="text-justify font-weight-bold text-light" width="50%">Meta</th>
                                <th class="text-center font-weight-bold text-light d-none d-sm-block">Data de Entrega</th>
                                <th class="text-center font-weight-bold text-light">Responsavel</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($planejamentos as $planejamento)
                                <tr>
                                    <td>{{ $planejamento->descricao }}</td>
                                    <td class="text-center d-none d-sm-block" >{{ $planejamento->data_entrega }}</td>
                                    <td class="text-center">
                                        <span>{{ $planejamento->responsavel }}</span>
                                        <small class="text-primary d-block d-sm-none">{{ $planejamento->data_entrega }}</small>
                                    </td>
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
