<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    protected $table = 'user_data';
    protected $guarded = ['id'];
    public $timestamps = false;

    function user()
    {
        return $this->belongsTo(User::class,"user_id","id");
    }
}
