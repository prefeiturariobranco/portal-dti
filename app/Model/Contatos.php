<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Contatos extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable, SoftDeletes;
    //
    protected $table = 'contatos';
    protected $fillable = ['departamento_id', 'cargos_id', 'nome', 'telefone', 'email'];

    public function departamentos(){
        return $this->hasOne(Departamentos::class, 'departamento_id', 'id');
    }

    public function cargos(){
        return $this->belongsTo(Cargos::class, 'cargos_id', 'id');
    }
}
