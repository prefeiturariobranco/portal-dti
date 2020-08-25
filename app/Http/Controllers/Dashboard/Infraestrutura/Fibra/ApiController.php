<?php

namespace App\Http\Controllers\Dashboard\Infraestrutura\Fibra;

use App\Http\Controllers\Controller;
use App\Model\Infra_config;
use App\Model\Infra_historico_fibra;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    public function evolucaoMalhaFibra(){
        echo json_encode(Infra_historico_fibra::where('ocultar', 0)->orderBy('ano', 'ASC')->get());
    }

    public function tipoConexaoUnidades(){
        $config = Infra_config::all()->last();
        $resultado[] = ['label'=> "Conexão por Fibra", 'value' => $config->num_conexao_fibra, 'cor'=> "red"];
        $resultado[] = ['label'=> "Conexão por Radio", 'value' => $config->num_conexao_radio, 'cor' => "blue"];

        echo json_encode($resultado);
    }
}
