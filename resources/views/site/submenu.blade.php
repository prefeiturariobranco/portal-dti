@extends('templates/layout-principal')

@section('css')
    <link href="assets/css/style.css" rel="stylesheet">
@endsection

@section('js')@endsection

@section('content')

    <section id="services" class="services section-bg">
        <div class="container">
            <div class="row">
            @foreach($subIcones as $subIcone)
                    <div class="col-md-6 col-lg-3 align-items-stretch mb-lg-0" style="padding: 10px;">
                        <div class="icon-box">
                            <div class="icon">
                                <img style="width: 40px" src="{{$subIcone['caminho']}}" title="" alt=""/>
                            </div>
                            <h4 class="title"><a href="{{$subIcone['link']}}">{{$subIcone['nome']}}</a></h4></div>
                    </div>
            @endforeach
            </div>
        </div>
    </section>
@endsection
