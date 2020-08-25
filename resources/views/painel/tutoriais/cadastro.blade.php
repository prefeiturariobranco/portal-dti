@extends('templates.dashboard')
@section('titulo')Notícias @endsection

@section('js')
<script src="/js/noticias.js"></script>

<script>
    tinymce.init({
        selector: '#noticias-conteudo',
        menubar: false,
        statusbar: false
    });
</script>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-body">

                <div class="card-title">
                    Cadastro de Notícias
                </div>
                <hr>
                <form action="/painel/tutoriais/salvar" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <label>Título:</label>
                            <input type="text" name="titulo" class="form-control" placeholder="Digite o título">
                            <span class="system_error text-danger">{{$errors->first('titulo')}}</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <strong>Conteúdo: </strong>
                            <div>
                                <textarea id="noticias-conteudo" name="conteudo" class="form-control" rows="20"></textarea>
                                <span class="system_error text-danger">{{$errors->first('conteudo')}}</span>
                            </div>
                        </div>
                    </div>


                    <div class="row mt-3">
                        <div class="col-md-4">
                            <input type="submit" class="btn btn-primary" value="Salvar">
                            <a class="btn btn-danger" href="/painel/tutoriais">Voltar</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection
