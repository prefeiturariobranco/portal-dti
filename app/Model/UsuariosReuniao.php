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
        'usuario_id',
    ];

    public function reuniao()
    {
        return $this->belongsTo(Reuniao::class, 'reuniao_id', 'id');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuarios::class, 'usuario_id', 'id');
    }
}
