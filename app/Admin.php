<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Admin extends Authenticatable
{
    use Notifiable;

    // protected $guard = 'admins';

    protected $fillable = [
        'name', 'email', 'username', 'password','email_verfied_at','role_as'
    ];

    protected $hidden = ['password'];


} 
