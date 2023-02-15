<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Reuniao extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $table = 'reuniao';
    protected $fillable = [
        'participantes',
        'solicitacao',
        'providencias',
        'sistema_id',
        'unidade_id'
    ];

    public function sistema()
    {
        return $this->belongsTo(Sistemas::class, 'sistema_id', 'id');
    }

    public function unidade()
    {
        return $this->belongsTo(Unidades::class, 'unidade_id', 'id');
    }

    public function participantes(){
        return $this->hasMany(Participante::class, 'reuniao_id', 'id');
    }
}
