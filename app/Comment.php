<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'id',
        'comment',
        'user_id',
        'post_id'
    ];

    protected $table = 'comments';
}
