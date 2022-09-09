@extends('templates.dashboard')
@section('titulo')
    Notícias
@endsection

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
                        Alterar de Notícias
                    </div>
                    <hr>
                    <form action="/painel/tutoriais/alterar" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="tutorial_id" value="{{ $tutorial->id }}">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Título:</label>
                                <input type="text" name="titulo" class="form-control" value="{{ $tutorial->titulo }}"
                                       placeholder="Digite o título">
                                <span class="system_error text-danger">{{$errors->first('titulo')}}</span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <strong>Conteúdo: </strong>
                                <div>
                                    <textarea id="noticias-conteudo" name="conteudo" class="form-control"
                                              rows="5">{{ $tutorial->conteudo }}</textarea>
                                    <span class="system_error text-danger">{{$errors->first('conteudo')}}</span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label>Imagem 1:</label>
                                <input type="file" name="imagem" class="form-control" accept="image/*">
                                <span class="system_error text-danger">{{$errors->first('imagem')}}</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label>Imagem 2:</label>
                                <input type="file" name="imagem1" class="form-control" accept="image/*">
                                <span class="system_error text-danger">{{$errors->first('imagem1')}}</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label>Imagem 3:</label>
                                <input type="file" name="imagem2" class="form-control" accept="image/*">
                                <span class="system_error text-danger">{{$errors->first('imagem2')}}</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label>Imagem 4:</label>
                                <input type="file" name="imagem3" class="form-control" accept="image/*">
                                <span class="system_error text-danger">{{$errors->first('imagem3')}}</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label>Imagem 5:</label>
                                <input type="file" name="imagem4" class="form-control" accept="image/*">
                                <span class="system_error text-danger">{{$errors->first('imagem4')}}</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label>Imagem 6:</label>
                                <input type="file" name="imagem5" class="form-control" accept="image/*">
                                <span class="system_error text-danger">{{$errors->first('imagem5')}}</span>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <label>Video:</label>
                                <input type="file" name="video" class="form-control" accept="video/*">
                                <span class="system_error text-danger">{{$errors->first('video')}}</span>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-4">
                                <input type="submit" class="btn btn-primary" value="Alterar">
                                <a class="btn btn-danger" href="/painel/tutoriais">Voltar</a>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection
