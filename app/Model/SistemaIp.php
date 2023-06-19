<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SistemaIp extends Model
{
    use HasFactory;
    protected $table = 'sistema_ips';
    protected $fillable = [
        'ip', 'nome'
    ];
}
