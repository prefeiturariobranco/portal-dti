@extends("templates.dashboard")

@section('titulo')
    Historia DTI
@endsection

@section('js')
    <script src="/js/noticias.js"></script>

    <script>
        tinymce.init({
            selector: '#descricao',
            menubar: false,
            statusbar: false
        });
        $(function () {
            $("#datepicker").datepicker({dateFormat: 'yy'});
        });
    </script>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">

                    <div class="card-title">
                        Cadastro de História DTI
                    </div>
                    <hr>
                    <form action="/painel/acontecimentos/salvar" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <label>Título: </label>
                                <input type="text" class="form-control" name="titulo" value="{{old('titulo')}}">
                                <span class="system_error text-danger">{{$errors->first('titulo')}}</span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <strong>Descrição: </strong>
                                <div>
                                    <textarea id="descricao" name="descricao" class="form-control" rows="20"
                                              value="{{old('descricao')}}"></textarea>
                                    <span class="system_error text-danger">{{$errors->first('descricao')}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Ano Referencia: </label>
                                <select name="ano" class="form-control" autocomplete="on">
                                    <option>
                                        <?php
                                        $ano_atual = date("Y");
                                        for ($i = 2000; $i <= $ano_atual; $i++) {
                                            echo "<option value=\"$i\">$i</option>\n";
                                        }
                                        ?>
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <input type="submit" class="btn btn-primary" value="Salvar">
                                <a class="btn btn-danger" href="/painel/acontecimentos">Voltar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
