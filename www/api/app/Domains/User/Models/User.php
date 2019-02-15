<?php

namespace Domains\User\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'api_token_valid_till'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];


}
