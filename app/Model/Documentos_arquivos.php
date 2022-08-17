<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Documentos_arquivos extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $table = 'documentos_arquivos';
    protected $fillable = ['id', 'caminho', 'ocultar', 'documentos_id'];

    public function documentos(){
        return $this->belongsTo(Documentos::class, 'documentos_id', 'id');
    }
}
