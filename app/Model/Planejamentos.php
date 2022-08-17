<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Planejamentos extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    //
    protected $table = 'planejamentos';
    protected $fillable = ['id', 'titulo', 'descricao', 'data_entrega', 'ocultar', 'planejamentos_categorias_id', 'criado_por', 'responsavel'];

    public function planejamentosCategorias(){
        return $this->belongsTo(Planejamentos_Categorias::class, 'planejamentos_categorias_id', 'id');
    }
}
