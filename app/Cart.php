<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    protected $table = 'Cart';

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function sepatoes(){
        return $this->belongsTo(Sepatu::class);
    }
    public function transactions(){
        return $this->belongsTo(Cart::class);
    }
}
