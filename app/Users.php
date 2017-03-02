<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    

   protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
