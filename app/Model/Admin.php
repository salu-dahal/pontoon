<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Admin extends Model
{
 protected $guard = 'admin';
protected $fillable=['username','email','password'];

}
