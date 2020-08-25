<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ti_Local extends Model
{
    //
    protected $table = 'ti_local';
    protected $fillable = ['id', 'secretaria_id', 'nome', 'telefone', 'email', 'ocultar'];

    public function secretarias(){
        return $this->belongsTo(Secretarias::class, 'secretaria_id', 'id');
    }
}
