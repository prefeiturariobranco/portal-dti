<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contadores_site extends Model
{
    //
    protected $fillable = ['id', 'data_criacao', 'ip'];
    protected $table = 'contadores_sites';

    public function registrar()
    {
        $this->ip = $_SERVER['REMOTE_ADDR'];
        $this->data_criacao = date('Y-m-d H:i:s');
        $this->save();
    }
}
