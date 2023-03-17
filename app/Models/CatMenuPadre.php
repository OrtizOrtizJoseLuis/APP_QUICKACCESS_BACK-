<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CatMenuPadre extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'catMenuPadres';
    protected $fillable = [
        'nombre',
        'icono',
        'estatus',
        'idCatPerfil'
    ];
}
