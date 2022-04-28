@extends('templates/layout-principal')
@section('css')@endsection
@section('js')@endsection
@section('title') Portal DTI @endsection

@section('content')
    <section id="services" class="services section-bg">
        <div class="container" >

        <div class="row" style="place-content: center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{$novidade->titulo}}</h4>
                        <h6 class="card-subtitle">de {{$novidade->autor}} postado em {{$novidade->created_at}}</h6>

                        <div class="mt-3">
                            <p>{{strip_tags($novidade->conteudo)}}</p>
                        </div>
                        <div class="row justify-content-center">
                            @if(!is_null($novidade->url_documento))
                                <a href="/storage/pdf/{{$novidade->url_documento}}" class="btn" >Baixar o anexo</a>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    </section>
@endsection
