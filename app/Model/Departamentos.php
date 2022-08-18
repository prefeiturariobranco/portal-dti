<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Audit;
use OwenIt\Auditing\Contracts\Auditable;

class Departamentos extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    //
    protected $fillable = ['id', 'nome', 'secretarias_id'];
    protected $table = 'departamentos';

    public function secretarias(){
        return $this->belongsTo(Secretarias::class, 'secretarias_id', 'id');
    }

    public function contato(){
        return $this->belongsTo(Contatos::class, 'departamento_id', 'id');
    }
}
