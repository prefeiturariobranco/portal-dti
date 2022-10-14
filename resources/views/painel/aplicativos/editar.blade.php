@extends('templates.dashboard')
@section('titulo')
    Aplicativos
@endsection

@section('js')

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
                        Alterar Aplicativo
                    </div>
                    <hr>
                    <form action="{{route('aplicativo.update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="aplicativo_id" class="form-control" value="{{ $aplicativos->id }}">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Título:</label>
                                <input type="text" name="titulo" class="form-control" value="{{ $aplicativos->titulo }}"
                                       placeholder="Digite o título">
                                <span class="system_error text-danger">{{$errors->first('titulo')}}</span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <strong>Caminho do Aplicativo: </strong>
                                <div>
                                    <textarea id="url" name="url"
                                              class="form-control">{{ $aplicativos->url }}</textarea>
                                    <span class="system_error text-danger">{{$errors->first('url')}}</span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label>Imagem:</label>
                                <input type="file" name="imagem" class="form-control" placeholder="Digite o título"
                                       accept="image/*">
                                <span class="system_error text-danger">{{$errors->first('imagem')}}</span>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-4">
                                <input type="submit" class="btn btn-primary" value="Alterar">
                                <a class="btn btn-danger" href="/painel/aplicativos">Voltar</a>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection
