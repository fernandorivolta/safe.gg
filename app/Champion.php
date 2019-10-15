<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Champion extends Model
{
    protected $fillable = [
        'id',
        'name'
    ];

    protected $table = 'champions';
}
