@extends('templates.dashboard')

@section('titulo') Acontecimentos @endsection


@section('js')

<script src="/js/noticias.js"></script>

<script>
    tinymce.init({
        selector: '#descricao',
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
                    Alterar de História DTI
                </div>
                <hr>
                <form action="/painel/acontecimentos/alterar" method="post">
                    @csrf
                    <input type="hidden" name="acontecimento_id" value="{{ $acontecimento->id }}">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Título: </label>
                            <input type="text" class="form-control" name="titulo" value="{{ $acontecimento->titulo }}">
                            <span class="system_error text-danger">{{$errors->first('titulo')}}</span>
                        </div>
                    </div>


                    <div class="row mt-3">
                        <div class="col-md-12">
                            <strong>Descrição: </strong>
                            <div>
                                <textarea id="descricao" name="descricao" class="form-control" rows="20">{{ $acontecimento->descricao }}</textarea>
                                <span class="system_error text-danger">{{$errors->first('descricao')}}</span>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <label>Ano Referencia: </label>
                            <input type="number" class="form-control" name="ano" value="{{ $acontecimento->ano }}">
                            <span class="system_error text-danger">{{$errors->first('ano')}}</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <input type="submit" class="btn btn-primary" value="Alterar">
                            <a class="btn btn-danger" href="/painel/acontecimentos">Voltar</a>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection
