@extends('templates.dashboard')
@section('titulo')
    Planejamentos
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">

                    <div class="card-title">
                        Cadastro de Planejamentos
                    </div>
                    <hr>
                    <form action="/painel/planejamentos/salvar" method="post" id="ajax-crud-datatable">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <label>Título: </label>
                                <input type="text" class="form-control" name="titulo">
                                <span class="system_error text-danger">{{$errors->first('titulo')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Descrição: </label>
                                <input type="text" class="form-control" name="descricao">
                                <span class="system_error text-danger">{{$errors->first('descricao')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Data de entrega: </label>
                                <input type="date" class="form-control" name="data_entrega">
                                <span class="system_error text-danger">{{$errors->first('data_entrega')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Selecione o responsável:</label>
                                <select name="nome_responsavel" class="form-control">
                                    @foreach($usuarios as $usuario)
                                        @if ($usuario->status == 0)
                                            <option value="{{ $usuario->id }}">
                                                {{ $usuario->nome }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                                <span class="system_error text-danger">{{$errors->first('nome_reponsavel')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Selecione a categoria:</label>
                                <select name="planejamento_categoria" id="planejamento_categoria" class="form-control">
                                    @foreach($planejamentoCats as $planejamentoCat)
                                        <option value="{{ $planejamentoCat->id }}">
                                            {{ $planejamentoCat->nome }}
                                        </option>
                                </select>
                                <div class="pull-right mb-2">
                                    <a class="btn-sm btn-success" onClick="add()" href="javascript:void(0)">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                </div>

                                <div class="card-body">
                                    <form action="">
                                            <label for="nome" class="col-sm-8 control-label">Nome da categoria:</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="nome"
                                                       maxlength="50" required="">
                                            </div>
                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                <input type="submit" class="btn btn-primary" value="Salvar Categoria">
                                            </div>
                                        </div>
                                    </form>
                                    @endforeach

                                </div>
                                {{--                                <a href="javascript:void(0)" onclick="add()">--}}
                                {{--                                    <i class="fas fa-plus"></i>--}}
                                {{--                                </a>--}}
                                {{--                                    <button type="button" class="btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#postModal">Salvar</button>--}}

                                <span
                                    class="system_error text-danger">{{$errors->first('planejamento_categoria')}}</span>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-4">
                                <input type="submit" class="btn btn-primary" value="Salvar">
                                <a class="btn btn-danger" href="/painel/planejamentos">Voltar</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection

@push('link-js')
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#ajax-crud-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('/painel/categorias-planejamentos') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'nome', name: 'nome'},
                ],
                order: [[0, 'desc']]
            });
        });

        function add() {
            $('#CategoriaForm').trigger("reset");
            $('#CategoriaModal').html("Adicionar");
            $('#categoria_modal').modal('show');
            $('#id').val('');
        }

        $('#CategoriaForm').submit(function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "{{ url('/painel/categorias-planejamentos/cadastro')}}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: (data) => {
                    $("#categoria_modal").modal('hide');
                    var oTable = $('#ajax-crud-datatable').dataTable();
                    oTable.fnDraw(false);
                    $("#btn-save").html('Submit');
                    $("#btn-save").attr("disabled", false);
                },
                error: function (data) {
                    console.log(data);
                }
            });
        });
    </script>
@endpush
