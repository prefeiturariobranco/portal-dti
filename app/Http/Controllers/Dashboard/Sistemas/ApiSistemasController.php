<?php

namespace App\Http\Controllers\Dashboard\Sistemas;

use App\Http\Controllers\Controller;
use App\Model\Sistemas_Webpublico;
use App\Model\Webpublico_Ciclos_Chamados;
use Illuminate\Http\Request;

class ApiSistemasController extends Controller
{
    //
    private function formatToChart($array){
        $result=null;

        foreach ($array as $item) {

            $result[$item['label']] = $item['value'];
        }

        $array = null;
        arsort($result);

        foreach($result as $key => $value)
        {
            $array[] = ['label'=>$key, 'value'=>$value];
        }

        return $array;
    }

    public function chamadosModulos(){
        $config = Sistemas_Webpublico::all()->last();

        $resultado[] = ['label'=>"Recursos Humanos", 'value'=>$config->ch_recursos_humanos];
        $resultado[] = ['label'=>"Administrativo", 'value'=>$config->ch_administrativo];
        $resultado[] = ['label'=>"Contabil", 'value'=>$config->ch_contabil];
        $resultado[] = ['label'=>"Transporte", 'value'=>$config->ch_transporte];
        $resultado[] = ['label'=>"Portais", 'value'=>$config->ch_portais];
        $resultado[] = ['label'=>"Previdenciario", 'value'=>$config->ch_previdenciario];
        $resultado[] = ['label'=>"Tributario", 'value'=>$config->ch_tributario];

        echo json_encode($this->formatToChart($resultado));
    }

    public function horasModulos(){
        $config = Sistemas_Webpublico::all()->last();

        $resultado[] = ['label'=>"Recursos Humanos", 'value'=>$config->hr_recursos_humanos];
        $resultado[] = ['label'=>"Administrativo", 'value'=>$config->hr_administrativo];
        $resultado[] = ['label'=>"Contabil", 'value'=>$config->hr_contabil];
        $resultado[] = ['label'=>"Transporte", 'value'=>$config->hr_transporte];
        $resultado[] = ['label'=>"Portais", 'value'=>$config->hr_portais];
        $resultado[] = ['label'=>"Previdenciario", 'value'=>$config->hr_previdenciario];
        $resultado[] = ['label'=>"Tributario", 'value'=>$config->hr_tributario];

        echo json_encode($this->formatToChart($resultado));
    }

    public function horasPorCiclo(){
        $config = Webpublico_Ciclos_Chamados::all()->last();

        $resultado[] = ['label'=>"Recursos Humanos", 'value'=>$config->ch_recursos_humanos];
        $resultado[] = ['label'=>"Administrativo", 'value'=>$config->ch_administrativo];
        $resultado[] = ['label'=>"Contabil", 'value'=>$config->ch_contabil];
        $resultado[] = ['label'=>"Transporte", 'value'=>$config->ch_transporte];
        $resultado[] = ['label'=>"Portais", 'value'=>$config->ch_geral];
        $resultado[] = ['label'=>"Previdenciario", 'value'=>$config->ch_previdenciario];
        $resultado[] = ['label'=>"Tributario", 'value'=>$config->ch_tributario];

        echo json_encode($this->formatToChart($resultado));
    }
}
