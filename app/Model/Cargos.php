<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cargos extends Model
{
    //
    protected $fillable = ['id', 'nome'];
    protected $table = 'cargos';

    public function contatos(){
        return $this->hasMany(Departamentos::class, 'cargos_id', 'id');
    }
}
