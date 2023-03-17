<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CatPerfil extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'catPerfiles';
    protected $fillable = [
        'nombre'
    ];
}
