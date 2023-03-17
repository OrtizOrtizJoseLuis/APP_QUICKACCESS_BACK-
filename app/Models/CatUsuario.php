<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CatUsuario extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'catUsuarios';
    protected $fillable = [
        'nombre',
        'apellidoPaterno',
        'apellidoMaterno',
        'edad',
        'usuario',
        'correo',
        'password',
        'telefono',
        'estatus',
        'idPerfil',
    ]; 

}
