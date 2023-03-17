<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransEvento extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'transEventos';
    protected $fillable = [
        'nombre',
        'observaciones',
        'fecha/hora/inicio',
        'fecha/hora/fin',
        'estatus',
        'idCatTipoEvento',
        'idCatUsuarios',
    ];
}
