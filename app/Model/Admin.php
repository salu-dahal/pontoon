<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{

protected $fillable=['name','email','password','admin_type','image'];
}
