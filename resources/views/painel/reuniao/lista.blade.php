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
                    <h4>Reuniões</h4>
                </div>
                <div class="card-body">
                    <!-- Message -->
                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-success" href="/painel/reuniao/cadastro">Cadastrar</a>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-sm table-responsive mb-0" data-pattern="priority-columns">
                                <table id="tech-companies-1" class="table table-striped" style="text-align: center;">
                                    <thead>
                                    <tr>
                                        <th>Sistema</th>
                                        <th>Data da Reunião</th>
                                        <th class="text-center">Opções</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($reunioes as $reuniao)
                                        <tr>
                                            <td class="text-left">{{$reuniao->sistema->nome_sistema}}</td>
                                            <td class="text-left">{{$reuniao->created_at->format('d/m/Y')}}</td>
                                            <td>
                                                <a href="/painel/reuniao/editar/{{$reuniao->id}}">
                                                    <button class="btn-sm btn-primary" title="Editar reunião">
                                                        <i class="fas fa-pen-alt"></i>
                                                    </button>
                                                </a>
                                                <a href="/painel/participante/{{$reuniao->id}}">
                                                    <button class="btn-sm btn-primary" title="Adicionar participante">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </a>
                                                <a href="/painel/participantes/reuniao/{{$reuniao->id}}">
                                                    <button class="btn-sm btn-primary" title="Todos os participantes">
                                                        <i class="fas fa-user"></i>
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

@push('js')
    <script>
        {{--$('#add').click(function () {--}}

        {{--    Swal.fire({--}}
        {{--        title: 'Tem certeza ?',--}}
        {{--        icon: 'warning',--}}
        {{--        showCancelButton: true,--}}
        {{--        confirmButtonColor: '#3085d6',--}}
        {{--        cancelButtonColor: '#d33',--}}
        {{--        confirmButtonText: 'Sim, ' + $(this).text()--}}
        {{--    }).then((result) => {--}}

        {{--        if (result.isConfirmed) {--}}
        {{--            $.ajax(--}}
        {{--                {--}}
        {{--                    url: "",--}}
        {{--                    method: "post",--}}
        {{--                    data: {--}}
        {{--                        _token: "{{csrf_token()}}",--}}
        {{--                        _method: 'post',--}}
        {{--                    },--}}
        {{--                    success: function (result) {--}}
        {{--                        Swal.fire({--}}
        {{--                            icon: 'success',--}}
        {{--                            title: 'Alteração realizada com sucesso.',--}}
        {{--                            showConfirmButton: false,--}}
        {{--                            timer: 1000--}}
        {{--                        }).then((result) => {--}}
        {{--                            window.location.reload()--}}
        {{--                        })--}}
        {{--                    },--}}
        {{--                    error: function () {--}}
        {{--                        Swal.fire({--}}
        {{--                            icon: 'error',--}}
        {{--                            title: 'Oops...',--}}
        {{--                            text: 'Não foi possível realizar a altereção.',--}}
        {{--                        })--}}
        {{--                    }--}}
        {{--                }--}}
        {{--            );--}}
        {{--        }--}}
        {{--    })--}}
        {{--})--}}
    </script>
@endpush
