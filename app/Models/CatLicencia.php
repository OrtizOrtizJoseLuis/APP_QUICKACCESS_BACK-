<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CatLicencia extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'catLicencias';
    protected $fillable = [
        'fechaPago',
        'vigencia',
        'penalizacion',
        'idCatUsuarios'
    ];
}
