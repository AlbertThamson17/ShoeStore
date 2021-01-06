<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sepatu extends Model
{
    //
    protected $table = 'sepatu';
    protected $fillable =['name','description','price','image'];

    public function transactions(){
        return $this->hasOne(Cart::class);
    }
}
