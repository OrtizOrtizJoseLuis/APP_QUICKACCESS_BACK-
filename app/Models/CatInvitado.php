<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CatInvitado extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'catInvitados';
    protected $fillable = [
        'nombre',
        'apellidoPaterno',
        'apellidoMaterno',
        'placa',
        'personasExtra',
        'informacionAdicional',
        'codigoAcceso',
        'idTransEventos'
    ];
}
