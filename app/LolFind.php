<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LolFind extends Model
{
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'id',
        'user_id',
        'posicao',
        'elo',
        'sumonnername',
        'disponibilidade'
    ];

    protected $table = 'lolFind';
}
