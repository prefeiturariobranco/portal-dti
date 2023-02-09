<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_participante',
        'tipo_participante_id'
    ];

    public function tipo(){
        return $this->belongsTo(Tipo_participante::class, 'tipo_participante_id', 'id');
    }
    public function usuarios(){
        return $this->hasMany(UsuariosReuniao::class, 'participante_id', 'id');
    }
}
