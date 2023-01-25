<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ public_path('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Registro de Reunião</title>
</head>
<body>
<div class="text-center">
    <img src="{{public_path()}}/images/logos/prefeitura.png" class="img-fluid" width="80px">
</div>
<div class="mt-4 text-center">
    <h6>Departamento de Tecnologia da Informação<br>
        Gerência de Sistemas e Gestão da Informação</h6>
    <hr>
    <h6>Registro de Reunião</h6>
</div>
<div class="row">
    <div class="col-12">
        <div class="border p-2">
            IDENTIFICAÇÃO
        </div>
    </div>
    <div class="col-md-6">
        Unidade:
        {{$reuniao->unidade->nome_unidade}}
    </div>

    <div class="table" data-pattern="priority-columns">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th colspan="2">IDENTIFICAÇÃO</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Unidade:
                    {{$reuniao->unidade->nome_unidade}}
                </td>
                <td>Data - Hora: <br>
                    {{$reuniao->created_at->format('d/m/Y - H:H')}}
                </td>
            </tr>
            <tr>
                <td>Sistema:
                    {{$reuniao->sistema->nome_sistema}}
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Participantes DTI:</h6>
                    @foreach($usuarios as $usuario)
                        {{$usuario->usuario->nome}}<br>
                    @endforeach
                </td>
                <td>
                    <h6>Participantes:</h6>
                    {{$reuniao->participantes}}
                </td>
            </tr>
            <tr>
                <th colspan="2">SOLICITAÇÃO</th>
            </tr>
            <td>Descrição do Problema:
                {{$reuniao->solicitacao}}
            </td>
            <tr>
                <th colspan="2">DETALHAMENTO</th>
            </tr>
            <tr>
                <td>Providências:
                    {{$reuniao->providencias}}
                    </td>
                </tr>
                <tr>
                    <th colspan="2">ASSINATURAS:</th>
                </tr>
                <td>Participantes DTI</td>
                <td>Participantes do Usuário</td>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
