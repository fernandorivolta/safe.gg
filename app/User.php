<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'id';

    protected $fillable = [
        'id','name', 'email','username', 'password', 'summonerName', 'steam', 'icon','token',
    ];

    protected $hidden = [
        'password', 'token',
    ];

    protected $table = 'User';
}
