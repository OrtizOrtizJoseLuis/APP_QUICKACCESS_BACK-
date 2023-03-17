<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 

class TransInmueble extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'transInmuebles';
    protected $fillable = [
        'numeroContrato',
        'calleAvenida',
        'numeroExterior',
        'numeroInterior',
        'codigoPostal',
        'pais',
        'nombreInmueble',
        'observaciones',
        'idCatUsuarios',
        'idCatColonias',
        'idCatMunicipios',
        'idCatEstados',
    ];
}
