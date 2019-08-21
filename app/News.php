<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $primaryKey = 'id';

    protected  $fillable = [
        'id', 
        'link',
        'img',
        'tag',
        'title',
        'body',
        'author',
        'date'
    ];

    protected $table = 'news';
}
