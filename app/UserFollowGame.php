<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFollowGame extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'user_id',
        'game_id'
    ];

    protected $table = 'userfollowgames';
}
