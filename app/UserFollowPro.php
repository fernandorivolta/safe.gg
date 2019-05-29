<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFollowPro extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'user_id',
        'proplayer_id'
    ];

    protected $table = 'UserFollowPro';
}
