<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class UsuariosReuniao extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'usuarios_reuniao';
    protected $fillable = [
        'reuniao_id',
        'participante_id',
    ];

    public function reuniao()
    {
        return $this->belongsTo(Reuniao::class, 'reuniao_id', 'id');
    }

    public function participante()
    {
        return $this->belongsTo(Participante::class, 'participante_id', 'id');
    }
}
