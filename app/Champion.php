<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Champion extends Model
{
    protected $fillable = [
        'id',
        'name',
        'lore',
        'subname',
        'passive',
        'passive_img',
        'skill_q',
        'skill_q_img',
        'skill_w',
        'skill_w_img',
        'skill_e',
        'skill_e_img',
        'skill_r',
        'skill_r_img'
    ];

    protected $table = 'champions';
}
