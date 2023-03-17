<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CatMenuHijo extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'catMenuHijos'; 
    protected $fillable = [
        'nombre',
        'icono',
        'estatus',
        'idCatMenuPadre',
        'idCatMenuPadre',
        'idCatPerfil'
    ];
}
