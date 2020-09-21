@extends('templates/layout-submenu')

@section('css')@endsection
@section('js')@endsection
@section('content')
<div class="content__inner container">

    <div class="row">
        <div class="col-lg-12">
            <div class="card">

                <div class="card-body">
                    <h4 class="card-title">{{ $tutorial->titulo }}</h4>
                    <h6 class="card-subtitle">de {{ $tutorial->auto}} postado em {{ $tutorial->created_at }}</h6>

                    <div class="mt-3">
                        <p>{{strip_tags($tutorial->conteudo)}}</p>
                    </div>

                    <div>
                        <img src="{{url("/storage/".$tutorial->imagem)}}"/>
                    </div>

                </div>
            </div>
        </div>

    </div>

</div>
@endsection
