<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Equipe_config extends Model
{
    //
    protected $table = 'equipe_configs';
    protected $fillable = ['id', 'num_comissionados', 'num_tercerizados', 'num_estagiarios', 'num_efetivos'];
}
