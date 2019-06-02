<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFollowUser extends Model
{
    //
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'user_id',
        'user_id_followed'
    ];

    protected $table = 'UserFollowUser';
}
