<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFollow extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'proplayer_id'
    ];
}
