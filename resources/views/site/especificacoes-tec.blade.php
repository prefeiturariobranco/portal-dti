@extends('templates/layout-principal')
@section('css')@endsection
@section('js')@endsection
@section('title') Portal DTI @endsection
@section('content')

<section id="services" class="services section-bg">
    <div class="container">
        <h2 class="section-title">Especificações Tecnicas</h2>

        <table class="table" >
            <thead>
            <tr class="text-dark">
                <th class>Arquivo</th>
                <th class="text-center" width="20%">Ações</th>
            </tr>
            </thead>
            <tbody>

            @foreach($especificacoes as $especificao)
                <tr class="">
                    <td>
                        {{$especificao->nome}}
                    </td>
                    <td class="text-center">
                        <a href="{{$especificao->arquivo}}">
                            <button class="btn">
                                Download
                            </button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection

