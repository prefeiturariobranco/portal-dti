@extends('templates.dashboard')
@section('titulo')
    Infraestrutura - Config
@endsection

@section('content')

    <!-- include messaage-->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-12">
                            <h4>Estatísticas Infraestrutura</h4>
                        </div>
                    </div>
                    <hr>

                    <div class="row mt-4">
                        <div class="col-lg-12">

                            <form action="/painel/infra/config/salvar" method="post">
                                @csrf
                                <div class="row mt-12">
                                    <div class="col-md-4">
                                        <label>Media Chamados Reparo Fibra: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="media_chamados_fibra"
                                               class="form-control form-control-sm"
                                               value="{{ $config->media_chamados_fibra }}">
                                        <span
                                            class="system_error text-danger">{{$errors->first('media_chamados_fibra')}}</span>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <label>Media Chamados Reparo Cidade Digital: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="media_chamados_cidade_digital"
                                               class="form-control form-control-sm"
                                               value="{{ $config->media_chamados_cidade_digital }}">
                                        <span
                                            class="system_error text-danger">{{$errors->first('media_chamados_cidade_digital')}}</span>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <label>Numero de Switchs: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="num_switch" class="form-control form-control-sm"
                                               value="{{ $config->num_switch }}">
                                        <span class="system_error text-danger">{{$errors->first('num_switch')}}</span>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <label>Servidores Virtuais: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="num_servidores_virtuais"
                                               class="form-control form-control-sm"
                                               value="{{ $config->num_servidores_virtuais }}">
                                        <span
                                            class="system_error text-danger">{{$errors->first('num_servidores_virtuais')}}</span>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <label>Numero de Servidores Fisicos: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="num_servidores_fisicos"
                                               class="form-control form-control-sm"
                                               value="{{ $config->num_servidores_fisicos }}">
                                        <span
                                            class="system_error text-danger">{{$errors->first('num_servidores_fisicos')}}</span>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <label>Numero Usuários Internet: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="num_usuarios_internet"
                                               class="form-control form-control-sm"
                                               value="{{ $config->num_usuarios_internet }}">
                                        <span
                                            class="system_error text-danger">{{$errors->first('num_usuarios_internet')}}</span>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <label>Numero Email corporativo: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="num_email_corp" class="form-control form-control-sm"
                                               value="{{ $config->num_email_corp }}">
                                        <span
                                            class="system_error text-danger">{{$errors->first('num_email_corp')}}</span>
                                    </div>
                                </div>
                                <hr>
                                <div class="row mt-3">
                                    <div class="col">
                                        <h4>Segurança</h4>
                                    </div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-md-4">
                                        <label>Media Ataques: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="media_ataques" class="form-control form-control-sm"
                                               value="{{ $config->media_ataques }}">
                                        <span
                                            class="system_error text-danger">{{$errors->first('media_ataques')}}</span>
                                    </div>
                                </div>

                                <hr>
                                <div class="row mt-3">
                                    <div class="col">
                                        <h4>Internet Social</h4>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-4">
                                        <label>Usuários Cadastrados: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="num_usuarios_internet_social"
                                               class="form-control form-control-sm"
                                               value="{{ $config->num_usuarios_internet_social }}">
                                        <span
                                            class="system_error text-danger">{{$errors->first('num_usuarios_internet_social')}}</span>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <label>Media Conexões diarias: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="media_internet_social_dia"
                                               class="form-control form-control-sm"
                                               value="{{ $config->media_internet_social_dia }}">
                                        <span
                                            class="system_error text-danger">{{$errors->first('media_internet_social_dia')}}</span>
                                    </div>
                                </div>

                                <hr>
                                <div class="row mt-3">
                                    <div class="col">
                                        <h4>Conexão unidades</h4>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-4">
                                        <label>Predios Conectados por Fibra: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="num_conexao_fibra"
                                               class="form-control form-control-sm"
                                               value="{{ $config->num_conexao_fibra }}">
                                        <span
                                            class="system_error text-danger">{{$errors->first('num_conexao_fibra')}}</span>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <label>Predios Conectados por Radio: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="num_conexao_radio"
                                               class="form-control form-control-sm"
                                               value="{{ $config->num_conexao_radio }}">
                                        <span
                                            class="system_error text-danger">{{$errors->first('num_conexao_radio')}}</span>
                                    </div>
                                </div>


                                <div class="row mt-5">
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-primary" value="Salvar">
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
