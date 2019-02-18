<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    public function users(){
        return $this->belongsToMany('App\User');
    }

    public function cart(){
        return $this->hasMany('App\Cart');
    }
}
