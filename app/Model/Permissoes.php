<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Permissoes extends Model
{
    //
    protected $table = 'permissoes';
    protected $fillable = ['id', 'nome', 'ocultar'];
}
