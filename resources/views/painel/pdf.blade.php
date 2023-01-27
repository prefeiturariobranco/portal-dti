<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ public_path('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ public_path('css/pdf.css') }}" rel="stylesheet">
    <title>Registro de Reunião</title>
</head>
<body>
<div class="text-center">
    <img src="{{public_path()}}/images/logos/prefeitura.png" class="img-fluid" width="80px">
</div>
<div class="mt-2 text-center">
    <h6>Departamento de Tecnologia da Informação<br>
        Gerência de Sistemas e Gestão da Informação</h6>
    <h6>Registro de Reunião</h6>
</div>
<div class="row">
    <div class="card m-3">
        <div class="card-body">
            <h6>IDENTIFICAÇÃO</h6>
            <hr>
            <div class="row font border-bottom">
                <div class="column">
                    <p>Unidade: {{$reuniao->unidade->nome_unidade}}</p>
                </div>
                <div class="column">
                    <p>Data: {{$reuniao->created_at->format('d/m/Y')}}</p>
                </div>
            </div>
            <div class="row font border-bottom">
                <div class="column">
                    <p>Sistema: {{$reuniao->sistema->nome_sistema}}</p>
                </div>
            </div>
            <div class="row font border-bottom">
                <div class="column border-right">
                    <h6>Participantes DTI/Fornecedor:</h6>
                    @foreach($usuarios as $usuario)
                        @if($usuario->participante->tipo->tipo_participante == 'DTI/Fornecedor')
                            {{$usuario->participante->nome_participante}}<br>
                        @endif
                    @endforeach
                </div>
                <div class="column">
                    <h6>Participantes do Usuário:</h6>
                    @foreach($usuarios as $usuario)
                        @if($usuario->participante->tipo->tipo_participante == 'Usuário')
                            <p>{{$usuario->participante->nome_participante}}</p><br>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="row font border-bottom">
                <h6 class="m-2 ml-2">SOLICITAÇÃO</h6>
                <hr>
                <div class="columns">
                    {{$reuniao->solicitacao}}
                </div>
            </div>
            <div class="row font border-bottom">
                <h6 class="m-2 ml-2">DETALHAMENTO/ PENDÊNCIAS</h6>
                <hr>
                <div class="columns">
                    {{$reuniao->providencias}}
                </div>
            </div>
            <div class="row font">
                <h6 class="m-2 ml-2">ASSINATURAS</h6>
                <hr>
                <div class="column-ass border-right">
                    <p>Participantes DTI/Fornecedor</p>
                </div>
                <div class="column-ass">
                    <p>Participantes do Usuário</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
