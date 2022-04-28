@extends('templates.dashboard')
@section('titulo')Sistemas - Webpublico @endsection
@section('content')

<!-- MESSAGE -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-md-12">
                        <h4>Estatísticas Webpúblico</h4>
                    </div>
                </div>
                <hr>

                <div class="row mt-4">
                    <div class="col-lg-12">

                        <form action="/painel/sistemas/webpublico/salvar" method="post">
                        @csrf
                            <div class="row mt-12">
                                <div class="col-md-3">
                                    <label>Número de usuários: </label>
                                </div>
                                <div class="col-md-3">
                                    <input type="number" name="num_usuarios" class="form-control form-control-sm" value="{{ $config->num_usuarios }}">
                                    <span class="system_error text-danger">{{$errors->first('num_usuarios')}}</span>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label>Número de Linhas de Código: </label>
                                </div>
                                <div class="col-md-3">
                                    <input type="number" name="num_linhas_codigo" class="form-control form-control-sm" value="{{ $config->num_linhas_codigo }}">
                                    <span class="system_error text-danger">{{$errors->first('num_linhas_codigo')}}</span>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label>Módulos do Sistema: </label>
                                </div>
                                <div class="col-md-3">
                                    <input type="number" name="num_modulos" class="form-control form-control-sm" value="{{ $config->num_modulos }}">
                                    <span class="system_error text-danger">{{$errors->first('num_modulos')}}</span>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label>Número de Telas do Sistema: </label>
                                </div>
                                <div class="col-md-3">
                                    <input type="number" name="num_telas" class="form-control form-control-sm" value="{{ $config->num_telas }}">
                                    <span class="system_error text-danger">{{$errors->first('num_telas')}}</span>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label>Tabelas Banco de Dados: </label>
                                </div>
                                <div class="col-md-3">
                                    <input type="number" name="num_tabelas" class="form-control form-control-sm" value="{{ $config->num_tabelas }}">
                                    <span class="system_error text-danger">{{$errors->first('num_tabelas')}}</span>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label>Número de Horas: </label>
                                </div>
                                <div class="col-md-3">
                                    <input type="number" name="num_horas" class="form-control form-control-sm" value="{{ $config->num_horas }}">
                                    <span class="system_error text-danger">{{$errors->first('num_horas')}}</span>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label>Número Areas Atuação: </label>
                                </div>
                                <div class="col-md-3">
                                    <input type="number" name="num_areas_gestao" class="form-control form-control-sm" value="{{ $config->num_areas_gestao }}">
                                    <span class="system_error text-danger">{{$errors->first('num_areas_gestao')}}</span>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label>Chamados Recursos Humanos: </label>
                                </div>
                                <div class="col-md-2">
                                    <input type="number" name="ch_recursos_humanos" class="form-control form-control-sm" value="{{ $config->ch_recursos_humanos }}">
                                    <span class="system_error text-danger">{{$errors->first('ch_recursos_humanos')}}</span>
                                </div>
                                <div class="col-md-1">
                                    <span>Horas: </span>
                                </div>
                                <div class="col-md-2">
                                    <input type="number" name="hr_recursos_humanos" class="form-control form-control-sm" value="{{ $config->hr_recursos_humanos }}">
                                    <span class="system_error text-danger">{{$errors->first('hr_recursos_humanos')}}</span>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label>Chamados Administrativo: </label>
                                </div>
                                <div class="col-md-2">
                                    <input type="number" name="ch_administrativo" class="form-control form-control-sm" value="{{ $config->ch_administrativo }}">
                                    <span class="system_error text-danger">{{$errors->first('ch_administrativo')}}</span>
                                </div>
                                <div class="col-md-1">
                                    <span>Horas: </span>
                                </div>
                                <div class="col-md-2">
                                    <input type="number" name="hr_administrativo" class="form-control form-control-sm" value="{{ $config->hr_administrativo }}">
                                    <span class="system_error text-danger">{{$errors->first('hr_administrativo')}}</span>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label>Chamados Contábil: </label>
                                </div>
                                <div class="col-md-2">
                                    <input type="number" name="ch_contabil" class="form-control form-control-sm" value="{{ $config->ch_contabil }}">
                                    <span class="system_error text-danger">{{$errors->first('ch_contabil')}}</span>
                                </div>
                                <div class="col-md-1">
                                    <span>Horas: </span>
                                </div>
                                <div class="col-md-2">
                                    <input type="number" name="hr_contabil" class="form-control form-control-sm" value="{{ $config->hr_contabil }}">
                                    <span class="system_error text-danger">{{$errors->first('hr_contabil')}}</span>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label>Chamados Trânsito/Transporte: </label>
                                </div>
                                <div class="col-md-2">
                                    <input type="number" name="ch_transporte" class="form-control form-control-sm" value="{{ $config->ch_transporte }}">
                                    <span class="system_error text-danger">{{$errors->first('ch_transporte')}}</span>
                                </div>
                                <div class="col-md-1">
                                    <span>Horas: </span>
                                </div>
                                <div class="col-md-2">
                                    <input type="number" name="hr_transporte" class="form-control form-control-sm" value="{{ $config->hr_transporte }}">
                                    <span class="system_error text-danger">{{$errors->first('hr_transporte')}}</span>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label>Chamados Portais: </label>
                                </div>
                                <div class="col-md-2">
                                    <input type="number" name="ch_portais" class="form-control form-control-sm" value="{{ $config->ch_portais }}">
                                    <span class="system_error text-danger">{{$errors->first('ch_portais')}}</span>
                                </div>
                                <div class="col-md-1">
                                    <span>Horas: </span>
                                </div>
                                <div class="col-md-2">
                                    <input type="number" name="hr_portais" class="form-control form-control-sm" value="{{ $config->hr_portais }}">
                                    <span class="system_error text-danger">{{$errors->first('hr_portais')}}</span>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label>Chamados Previdência: </label>
                                </div>
                                <div class="col-md-2">
                                    <input type="number" name="ch_previdenciario" class="form-control form-control-sm" value="{{ $config->ch_previdenciario }}">
                                    <span class="system_error text-danger">{{$errors->first('ch_previdenciario')}}</span>
                                </div>
                                <div class="col-md-1">
                                    <span>Horas: </span>
                                </div>
                                <div class="col-md-2">
                                    <input type="number" name="hr_previdenciario" class="form-control form-control-sm" value="{{ $config->hr_previdenciario }}">
                                    <span class="system_error text-danger">{{$errors->first('hr_previdenciario')}}</span>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label>Chamados Tributário: </label>
                                </div>
                                <div class="col-md-2">
                                    <input type="number" name="ch_tributario" class="form-control form-control-sm" value="{{ $config->ch_tributario }}">
                                    <span class="system_error text-danger">{{$errors->first('ch_tributario')}}</span>
                                </div>
                                <div class="col-md-1">
                                    <span>Horas: </span>
                                </div>
                                <div class="col-md-2">
                                    <input type="number" name="hr_tributario" class="form-control form-control-sm" value="{{ $config->hr_tributario }}">
                                    <span class="system_error text-danger">{{$errors->first('hr_tributario')}}</span>
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
