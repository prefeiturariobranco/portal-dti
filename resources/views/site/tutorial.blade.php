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

                    @if($tutorial->imagem!=NULL)
                        <div>
                            <img src="{{asset('/storage/'.$tutorial->imagem)}}"/>
                        </div>
                    @endif

                    @if($tutorial->video!=NULL)
                        <div>
                            <video width="100%" controls>
                            <source src="{{asset('/storage/'.$tutorial->video)}}" type="video/mp4"/>
                        </div>
                    @endif

                </div>
            </div>
        </div>

    </div>

</div>
@endsection
