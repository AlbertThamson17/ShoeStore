<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $table = 'transactions';
    protected $fillable = ['name','description','image','price','qty'];
    public function tran(){
        return $this->hasOne(Cart::class);
    }
}
