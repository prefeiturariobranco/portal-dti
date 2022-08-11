<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable as AuditableTrait;
use OwenIt\Auditing\Contracts\Auditable;

class Cargos extends Model implements Auditable
{
    use AuditableTrait;
    //
    protected $fillable = ['id', 'nome'];
    protected $table = 'cargos';

    public function contatos(){
        return $this->hasMany(Departamentos::class, 'cargos_id', 'id');
    }
}
