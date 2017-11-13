<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    //
    public function Select(){
        return $this->hasMany('App\Http\Foodlist');
    }
}
