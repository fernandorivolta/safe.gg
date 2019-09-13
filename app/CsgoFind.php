<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CsgoFind extends Model
{
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'id',
        'user_id',
        'funcao',
        'patente',
        'steamurl',
        'disponibilidade'
    ];

    protected $table = 'csgoFind';
}
