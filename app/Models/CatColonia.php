<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CatColonia extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'catColonias';
    protected $fillable = [
        'nombre',
        'codigoPostal',
        'idCatMunicipio'
    ];
}
