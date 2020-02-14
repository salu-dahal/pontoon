<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name',  'email', 'email_verified_at',
        'password'];
}
}
