<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $primaryKey = 'id';

    protected  $fillable = [
        'id', 
        'post',
        'user_id'
    ];

    protected $table = 'posts';
}
