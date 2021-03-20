<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;
    protected $fillable = [
        'name',
        'email',
        'password'
    ];

    protected $hidden = ['password'];
    protected $table = 'users';
    protected $guarded = ['id'];

    function userData()
    {
        return $this->hasOne(UserData::class,"user_id","id");
    }
}
