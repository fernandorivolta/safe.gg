<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProPlayerCS extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'roundcontribution',
        'deathperround',
        'mapsplayed',
        'kddiff',
        'team',
        'age',
        'nationality',
        'proplayername',
        'nick',
        'steamlink',
        'created_at',
        'updated_at',
    ];

    protected $table = 'proplayercs';
}
