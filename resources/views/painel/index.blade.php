@extends('templates/dashboard')
@section('titulo')
    Intranet :: DTI
@endsection

@push('css')
    <style>
        .chart-card-inv {

            /* border: 1px solid black; */
            min-height: 50rem;
        }
    </style>
@endpush

@section('content')
    <!--INCLUDE MESSAGES.BLADE-->
    <!-- end row -->
    <br>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card mini-stat bg-primary text-white" style="height: 80%">
                <div class="card-body">
                    <div class="mb-1">
                        <div class="float-left mr-4">
                            <i class="fas fa-globe-americas fa-3x"></i>
                        </div>
                        <h5 class="font-16 text-uppercase mt-0">Acessos Intranet</h5>
                        <h4 class="font-500">{{ $contadorPainel }} <i class="mdi mdi-arrow-up text-success ml-2"></i>
                        </h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card mini-stat bg-primary text-white" style="height: 80%">
                <div class="card-body">
                    <div class="mb-1">
                        <div class="float-left mr-4">
                            <i class="fas fa-mouse-pointer fa-3x"></i>
                        </div>
                        <h5 class="font-16 text-uppercase mt-0">Acessos Portal DTI</h5>
                        <h4 class="font-500">{{ $contadorSite }} <i class="mdi mdi-arrow-up text-success ml-2"></i></h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card mini-stat bg-primary text-white" style="height: 80%">
                <div class="card-body">
                    <div class="mb-1">
                        <div class="float-left mr-4">
                            <i class="fas fa-users fa-3x"></i>
                        </div>
                        <h5 class="font-16 text-uppercase mt-0">Usuários Portal DTI</h5>
                        <h4 class="font-500">{{ $contadorUsuarios }} <i class="mdi mdi-arrow-up text-success ml-2"></i>
                        </h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card mini-stat bg-primary text-white" style="height: 80%">
                <div class="card-body">
                    <div class="mb-1">
                        <div class="float-left mr-4">
                            <i class="fas fa-sort-amount-up-alt fa-3x"></i>
                        </div>
                        <h5 class="font-16 text-uppercase mt-0">Acessos {{date('d/m/Y')}}</h5>
                        <h4 class="font-500">{{ $contadorAcessosDia }} <i
                                class="mdi mdi-arrow-up text-success ml-2"></i></h4>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <h3 class="mt-0  mb-4">Investimentos</h3>
                    </div>
                    <div class="wid-peity mb-1">
                        <div class="row">
                            <div class="col-xs-12 col-lg-3 text-center">
                                <div>
                                    <strong>Número de Contratos</strong>
                                    <h5 class="mb-4 text-success">{{ $contadorContratos }}</h5>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-3 text-center">
                                <div>
                                    <strong>Investimento Anual RP</strong>
                                    <h5 class="mb-6 text-success">R$ {{number_format($investRP, 2, ",", ".")}}</h5>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-3 text-center">
                                <strong>Investimento Anual PMAT</strong>
                                <h5 class="mb-4 text-success">R$ {{number_format($investTotalPMAT, 2, ",", ".")}}</h5>
                            </div>
                            <div class="col-xs-12 col-lg-3 text-center">
                                <strong>Investimento Anual Total</strong>
                                <h5 class="mb-6 text-success">R$ {{number_format($investTotalAnual, 2, ",", ".")}}</h5>
                            </div>

                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>


    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body chart-card-inv">
                    <h4 class="mt-0 header-title mb-4">Investimentos - Sistemas</h4>

                    <div class="cleafix">
                        <p class="float-left"><i class="mdi mdi-calendar mr-1 text-primary"></i>Investimento Mensal</p>
                        <h5 class="font-18 text-right">R$ {{number_format($investSistema[0]->valor, 2, ",", ".")}}</h5>
                    </div>

                    <div class="mt-4">
                        <table class="table mb-0">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th class="text-right">Valor</th>
                            </tr>
                            </thead>
                            <tbody id="investimentos-sistemas-table">
                            @foreach($investSistema as $investimentos)
                                <tr>
                                    <td>{{ $investimentos->nome }}</td>
                                    <td class="text-right">R$ {{number_format($investimentos->valor, 2, ",", ".")}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-xl-4">
            <div class="card">
                <div class="card-body chart-card-inv">
                    <h4 class="mt-0 header-title mb-4">Investimentos - Infraestrutura</h4>

                    <div class="cleafix">
                        <p class="float-left"><i class="mdi mdi-calendar mr-1 text-primary"></i>Total</p>
                        <h5 class="font-18 text-right">R$ {{number_format($investInfra[0]->valor, 2, ",", ".")}}</h5>
                    </div>

                    <div class="mt-4">
                        <table id="investimentos-infra-table" class="table mb-0">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th class="text-right">Valor</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($investInfra as $investimentos)
                                <tr>
                                    <td>{{$investimentos->nome}}</td>
                                    <td class="text-right">R$ {{number_format($investimentos->valor, 2, ",", ".")}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card">
                <div class="card-body chart-card-inv">

                    <h4 class="mt-0 header-title mb-4">Investimentos - PMAT</h4>
                    <div class="cleafix">
                        <p class="float-left"><i class="mdi mdi-calendar mr-1 text-primary"></i>Total</p>
                        <h5 class="font-18 text-right">R$ {{ number_format($investMensalPMAT, 2, ",", ".")}}</h5>
                    </div>


                    {{--                    <div id="investimentos-pmat" class="ct-chart wid">--}}
                    {{--                        <div class="chartist-tooltip" style="top: 72px; left: 220px;">--}}
                    {{--                            <span class="chartist-tooltip-value">54</span>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

                    <div class="col-xl">
                        <table id="investimentos-pmat-table" class="table mb-0">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th class="text-right">Valor</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($investPMAT as $investimentos)
                                <tr>
                                    <td>{{$investimentos->nome}}</td>
                                    <td class="text-right">R$ {{number_format($investimentos->valor, 2, ",", ".")}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- end row -->



    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <h3 class="mt-0  mb-4">Webpublico</h3>
                    </div>
                    <div class="wid-peity mb-1">
                        <div class="row">
                            <div class="col-xs-12 col-lg-2 text-center">
                                <div>
                                    <strong>Usuários</strong>
                                    <h5 class="mb-4 text-success">{{$estatisticasWebPublico->num_usuarios}}</h5>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-2 text-center">
                                <div>
                                    <strong>Linhas de Código</strong>
                                    <h5 class="mb-6 text-success">{{$estatisticasWebPublico->num_linhas_codigo}}</h5>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-2 text-center">
                                <strong>Telas</strong>
                                <h5 class="mb-4 text-success">{{$estatisticasWebPublico->num_telas}}</h5>
                            </div>
                            <div class="col-xs-12 col-lg-2 text-center">
                                <strong>Tabelas</strong>
                                <h5 class="mb-6 text-success">{{$estatisticasWebPublico->num_tabelas}}</h5>
                            </div>
                            <div class="col-xs-12 col-lg-2 text-center">
                                <strong>Horas Desenvolvimento</strong>
                                <h5 class="mb-6 text-success">{{$estatisticasWebPublico->num_horas}}/sem</h5>
                            </div>
                            <div class="col-xs-12 col-lg-2 text-center">
                                <strong>Áreas de Gestão</strong>
                                <h5 class="mb-6 text-success">{{$estatisticasWebPublico->num_areas_gestao}}</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>

    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title mb-4">Sistemas - Chamados</h4>

                    <div class="cleafix">
                        <p class="float-left"><i class="mdi mdi-calendar mr-1 text-primary"></i>Total</p>
                        <h5 class="font-18 text-right" id="sistemas-chamados-total"></h5>
                    </div>

                    <div id="sistemas-chamados" class="ct-chart wid">
                        <div class="chartist-tooltip" style="top: 72px; left: 220px;">
                            <span class="chartist-tooltip-value">54</span>
                        </div>
                    </div>

                    <div class="mt-4">
                        <table id="sistemas-chamados-table" class="table mb-0">

                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title mb-4">Sistemas - Horas Utilizadas 2019</h4>

                    <div class="cleafix">
                        <p class="float-left"><i class="mdi mdi-calendar mr-1 text-primary"></i>Total</p>
                        <h5 class="font-18 text-right" id="sistemas-horas-total"></h5>
                    </div>

                    <div id="sistemas-horas" class="ct-chart wid">
                        <div class="chartist-tooltip" style="top: 72px; left: 220px;">
                            <span class="chartist-tooltip-value">54</span>
                        </div>
                    </div>

                    <div class="mt-4">
                        <table id="sistemas-horas-table" class="table mb-0">

                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title mb-4">Sistemas - Ciclo {{ date('d/m/Y') }}</h4>

                    <div class="cleafix">
                        <p class="float-left"><i class="mdi mdi-calendar mr-1 text-primary"></i>Total</p>
                        <h5 class="font-18 text-right" id="sistemas-ciclo-total"></h5>
                    </div>

                    <div id="sistemas-ciclo" class="ct-chart wid">
                        <div class="chartist-tooltip" style="top: 72px; left: 220px;">
                            <span class="chartist-tooltip-value">54</span>
                        </div>
                    </div>

                    <div class="mt-4">
                        <table id="sistemas-ciclo-table" class="table mb-0">

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <h3 class="mt-0  mb-4">Infraestrutura</h3>
                    </div>
                    <div class="wid-peity mb-1">
                        <div class="row">
                            <div class="col-xs-12 col-lg-2 text-center">
                                <div>
                                    <strong>Média Chamados Fibra</strong>
                                    <h5 class="mb-4 text-success">{{$infraConfig->media_chamados_fibra}}</h5>
                                </div>
                            </div>

                            <div class="col-xs-12 col-lg-2 text-center">
                                <div>
                                    <strong>Quantidade Switch</strong>
                                    <h5 class="mb-6 text-success">{{$infraConfig->num_switch}}</h5>
                                </div>
                            </div>

                            <div class="col-xs-12 col-lg-2 text-center">
                                <strong>Servidores Virtuais</strong>
                                <h5 class="mb-4 text-success">{{$infraConfig->num_servidores_virtuais}}</h5>
                            </div>

                            <div class="col-xs-12 col-lg-2 text-center">
                                <strong>Servidores Físicos</strong>
                                <h5 class="mb-6 text-success">{{$infraConfig->num_servidores_fisicos}}</h5>
                            </div>

                            <div class="col-xs-12 col-lg-2 text-center">
                                <strong>Usuários Internet</strong>
                                <h5 class="mb-6 text-success">{{$infraConfig->num_usuarios_internet}}</h5>
                            </div>

                            <div class="col-xs-12 col-lg-2 text-center">
                                <strong>Usuários E-mail Corporativo</strong>
                                <h5 class="mb-6 text-success">{{$infraConfig->num_email_corp}}</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div id="infra-fibra" class="col-lg-12 text-center" style="height:300px;"></div>
                        </div>

                    </div>
                    <!-- end row -->
                </div>
            </div>
            <!-- end card -->
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-sm-12 col-lg-12 text-center">
                            <div id="infra-conexoes" class="col-lg-12 text-center" style="height:200px;"></div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <table id="infra-conexoes-table" class="table mb-0">

                            </table>
                        </div>
                    </div>

                    <!-- end row -->
                </div>
            </div>
            <!-- end card -->
        </div>


    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <h3 class="mt-0  mb-1">Equipe DTI</h3>
                    </div>
                    <div class="wid-peity mb-1">
                        <div class="row">
                            <div class="col-xs-12 col-lg-3 text-center">
                                <div>
                                    <strong>Pessoas</strong>
                                    <h5 class="mb-4 text-success">{{ $contadorTotalEquipe }}</h5>
                                </div>
                            </div>

                            <div class="col-xs-12 col-lg-2 text-center">
                                <div>
                                    <strong>Cargos Comissionados</strong>
                                    <h5 class="mb-6 text-success">{{$configEquipe->num_comissionados}}</h5>
                                </div>
                            </div>

                            <div class="col-xs-12 col-lg-2 text-center">
                                <strong>Terceirizados</strong>
                                <h5 class="mb-4 text-success">{{$configEquipe->num_tercerizados}}</h5>
                            </div>

                            <div class="col-xs-12 col-lg-2 text-center">
                                <strong>Estagiários</strong>
                                <h5 class="mb-6 text-success">{{$configEquipe->num_estagiarios}}</h5>
                            </div>

                            <div class="col-xs-12 col-lg-3 text-center">
                                <strong>Servidores Efetivos</strong>
                                <h5 class="mb-6 text-success">{{$configEquipe->num_efetivos}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <h3 class="mt-0  mb-1">Equipe DTI</h3>
                    </div>
                    <div class="wid-peity mb-1">
                        <div class="row">
                            <table class="table table-bordered mb-0">

                                <thead>
                                <tr class="">
                                    <th class="text-justify font-weight-bold " width="40%">Nome</th>
                                    <th class="text-center font-weight-bold  d-none d-sm-block">Email</th>
                                    <th class="text-center font-weight-bold " width="15%">Telefone Fixo</th>
                                    <th class="text-center font-weight-bold " width="10%">Departamento</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($usuarios as $usuario)
                                    <tr>
                                        <td>{{$usuario->nome}}</td>
                                        <td class="text-center d-none d-sm-block">{{$usuario->email}}</td>
                                        <td class="text-center">{{$usuario->telefone_sala}}</td>
                                        <td class="text-center">{{$usuario->departamentos->nome}}</td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/painel/categoria.js') }}"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script>
        function writeRows(data, tableName, prefix) {

            var total = 0;

            var titleTotal = tableName + '-total';
            tableName += '-table';

            for (var index = 0; index < data.length; index++) {

                total += parseInt(data[index].value);
            }

            for (var index = 0; index < data.length; index++) {

                var table = document.getElementById(tableName);
                var row = table.insertRow(index);

                if (index > 4) {
                    row.setAttribute("hidden", true);
                }

                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);
                var cell3 = row.insertCell(2);

                var percent = (data[index].value / total) * 100;
                var qtdInvest = 0;

                if (prefix == 1) {

                    qtdInvest = formatReal(parseFloat(data[index].value));
                } else {
                    qtdInvest = parseInt(data[index].value);
                }

                cell1.innerHTML = '<span class="badge badge-primary" style="background: ' + data[index].itemStyle.color + '">' + parseFloat(percent).toFixed(2) + '%</span>';
                cell2.innerHTML = data[index].name;
                cell3.innerHTML = qtdInvest;
            }

            if (prefix == 1) {

                document.getElementById(titleTotal).innerText = formatReal(total);
            } else {
                document.getElementById(titleTotal).innerText = total;
            }

        }


        function makeChart(data, labels, name, element, desc) {

            var dom = document.getElementById(element);
            var myChart1 = echarts.init(dom);
            var app = {};
            option = null;
            option = {
                title: {
                    text: name,
                    x: 'center'
                },
                responsive: true,
                maintainAspectRatio: false,

                tooltip: {
                    trigger: 'item',
                    formatter: "{a} <br/>{b} : {c} ({d}%)"
                },
                // color: ['#02a499', '#f8b425', '#ec4561', '#38a4f8', '#3c4ccf'],
                series: [{
                    name: desc,
                    type: 'pie',
                    radius: '70%',
                    center: ['50%', '60%'],
                    data: data,
                    itemStyle: {
                        emphasis: {
                            shadowBlur: 10,
                            shadowOffsetX: 0,
                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                        },
                        normal: {
                            label: {
                                show: false
                            },
                            labelLine: {
                                show: false
                            }
                        }
                    }
                }]
            };

            if (option && typeof option === "object") {
                myChart1.setOption(option, true);
            }
        }

        function getInvestimentosSistemas() {

            axios({
                method: 'get',
                url: '/api/investimentos/1',
                responseType: 'json'
            })
                .then(function (response) {

                    var labels = response.data.map(function (e) {

                        return e.nome;
                    });

                    var data = response.data.map(function (e) {

                        return {
                            'name': e.nome,
                            'value': e.valor,
                            'itemStyle': {
                                color: e.cor
                            },
                        };
                    });

                    makeChart(data, labels, "Investimentos Sistemas", "investimentos-sistemas", "Valor");
                    writeRows(data, "investimentos-sistemas", 1);

                }).catch(function (error) {
                console.log(error);
            });
        }

        function getInvestimentosPMAT() {

            axios({
                method: 'get',
                url: '/api/investimentos/3',
                responseType: 'json'
            })
                .then(function (response) {

                    var labels = response.data.map(function (e) {

                        return e.nome;
                    });

                    var data = response.data.map(function (e) {

                        return {
                            'name': e.nome,
                            'value': e.valor,
                            'itemStyle': {
                                color: e.cor
                            },
                        };
                    });

                    makeChart(data, labels, "Investimentos PMAT ", "investimentos-pmat", "Valor");
                    writeRows(data, "investimentos-pmat", 1);

                }).catch(function (error) {
                console.log(error);
            });
        }


        function getRandomColor() {
            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }

        function getChamadosSistemas() {

            axios({
                method: 'get',
                url: '/api/sistemas/chamados/qtd',
                responseType: 'json'
            })
                .then(function (response) {

                    var labels = response.data.map(function (e) {

                        return e.label;
                    });

                    var data = response.data.map(function (e) {

                        return {
                            'name': e.label,
                            'value': e.value,
                            'itemStyle': {
                                color: getRandomColor()
                            },
                        };
                    });

                    makeChart(data, labels, "Sistemas - Chamados", "sistemas-chamados", "Chamados");
                    writeRows(data, "sistemas-chamados", 0);

                }).catch(function (error) {
                console.log(error);
            });
        }


        function getHorasSistemas() {

            axios({
                method: 'get',
                url: '/api/sistemas/chamados/horas',
                responseType: 'json'
            })
                .then(function (response) {

                    var labels = response.data.map(function (e) {

                        return e.label;
                    });

                    var data = response.data.map(function (e) {

                        return {
                            'name': e.label,
                            'value': e.value,
                            'itemStyle': {
                                color: getRandomColor()
                            },
                        };
                    });

                    makeChart(data, labels, "Sistemas - Horas", "sistemas-horas", "Chamados");
                    writeRows(data, "sistemas-horas", 0);

                }).catch(function (error) {
                console.log(error);
            });
        }

        function getHorasPorCicloSistemas() {

            axios({
                method: 'get',
                url: '/api/sistemas/chamados/ciclo',
                responseType: 'json'
            })
                .then(function (response) {

                    var labels = response.data.map(function (e) {

                        return e.label;
                    });

                    var data = response.data.map(function (e) {

                        return {
                            'name': e.label,
                            'value': e.value,
                            'itemStyle': {
                                color: getRandomColor()
                            },
                        };
                    });

                    makeChart(data, labels, "Sistemas - Ciclo " + dateCiclo(), "sistemas-ciclo", "Chamados");
                    writeRows(data, "sistemas-ciclo", 0);

                }).catch(function (error) {
                console.log(error);
            });
        }

        function makeChartFibra(labels, data) {
            var myChart = echarts.init(document.getElementById('infra-fibra'));

            var option = {
                title: {
                    text: 'Evolução Malha de Fibra'
                },
                tooltip: {},
                legend: false,
                xAxis: {
                    data: labels
                },
                yAxis: {},
                responsive: true,
                series: [{
                    name: 'Referencia',
                    type: 'bar',
                    data: data
                }]
            };

            myChart.setOption(option);
        }

        function getEvolucaoFibra() {
            axios({
                method: 'get',
                url: '/api/infra/fibra',
                responseType: 'json'
            })
                .then(function (response) {

                    var labels = response.data.map(function (e) {

                        return e.ano;
                    });


                    var data = response.data.map(function (e) {

                        return {
                            'name': e.titulo,
                            'value': e.quilometragem,
                            'itemStyle': {
                                color: e.cor
                            }
                        };
                    });

                    makeChartFibra(labels, data);


                }).catch(function (error) {
                console.log(error);
            });
        }

        function getInvestimentosInfra() {

            axios({
                method: 'get',
                url: '/api/investimentos/5',
                responseType: 'json'
            })
                .then(function (response) {

                    var labels = response.data.map(function (e) {

                        return e.nome;
                    });

                    var data = response.data.map(function (e) {

                        return {
                            'name': e.nome,
                            'value': e.valor,
                            'itemStyle': {
                                color: e.cor
                            },
                        };
                    });

                    makeChart(data, labels, "Investimentos Infraestrutura", "investimentos-infra", "Valor");
                    writeRows(data, "investimentos-infra", 1);

                }).catch(function (error) {
                console.log(error);
            });
        }

        function formatReal(currency) {

            return currency.toLocaleString('pt-BR', {
                style: 'currency',
                currency: 'BRL'
            });
        }

        function dateCiclo() {
            var today = new Date();
            var dd = String(today.getDate()).padStart(2, '0');
            var mm = String(today.getMonth() + 1).padStart(2, '0');
            var yyyy = today.getFullYear();

            return dd + '/' + mm + '/' + yyyy;
        }

        function getConexoesUnidades() {

            axios({
                method: 'get',
                url: '/api/infra/conexao/unidades',
                responseType: 'json'
            })
                .then(function (response) {

                    var labels = response.data.map(function (e) {

                        return e.label;
                    });

                    var data = response.data.map(function (e) {

                        return {
                            'name': e.label,
                            'value': e.value,
                            'itemStyle': {
                                color: e.cor
                            },
                        };
                    });

                    console.log(response.data);

                    makeChart(data, labels, "Conexão Unidades", "infra-conexoes", "Valor");
                    writeRows(data, "infra-conexoes", 0);

                }).catch(function (error) {
                console.log(error);
            });
        }

        getEvolucaoFibra();
        getInvestimentosSistemas();
        getInvestimentosPMAT();
        getInvestimentosInfra();
        getChamadosSistemas();
        getHorasSistemas();
        getHorasPorCicloSistemas();
        getConexoesUnidades();
    </script>
@endsection
