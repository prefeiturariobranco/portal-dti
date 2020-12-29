@extends('templates/layout-submenu')
@section('css')@endsection
@section('js')@endsection

@section('content')
    <div class="content__inner container">

        <div class="row">
            <div class="co-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{$novidade->titulo}}</h4>
                        <h6 class="card-subtitle">de {{$novidade->autor}} postado em {{$novidade->created_at}}</h6>

                        <div class="mt-3">
                            <p>{{strip_tags($novidade->conteudo)}}</p>
                        </div>
                        @if(!is_null($novidade->url_documento))
                            <a href="/storage/pdf/{{$novidade->url_documento}}" target="_blank" style="color: blue">Clique aqui para baixar o anexo.</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
