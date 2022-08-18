<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Planejamentos_Categorias extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    //
    protected $table = 'planejamentos_categorias';
    protected $fillable = ['id', 'nome', 'ocultar'];

    public function planejamentos()
    {
        return $this->hasMany(Planejamentos::class, 'planejamentos_categorias_id', 'id');
    }

}
