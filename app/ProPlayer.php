<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProPlayer extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'nick',
        'team',
        'region',
        'position',
        'photo',
        'nationality',
        'name',
        'account_id',
    ];

    protected $table = 'ProPlayer';
}
