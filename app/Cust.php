<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Cust extends Authenticatable
{
    //
    protected $table = 'data_cust';
    protected $fillable =['username','email','password'];

}
