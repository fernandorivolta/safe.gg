<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'id',
        'game',
        'img',
        'tag',
        'category'
    ];

    protected $table = 'games';
}
