<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Mapas extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    //
    protected $table = 'mapas';
    protected $fillable = ['id', 'lat', 'lng', 'titulo', 'descricao', 'ocultar', 'mapas_categorias_id'];

    public function mapasCategorias(){
        return $this->belongsTo(Mapas_Categorias::class, 'mapas_categorias_id', 'id');
    }

}
