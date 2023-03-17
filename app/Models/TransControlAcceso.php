<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransControlAcceso extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'transControlAccesos';
    protected $fillable = [
        'fechaHora',
        'observaciones',
        'idCatUsuarios',
        'idInmuebles',
        'idCatTipoControlAccesos',
        'idCatInvitados',
        'idCatTipoDeAccesos'
    ];
}
