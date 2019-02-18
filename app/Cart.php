<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'product_user';

    protected $fillable = [
    	'user_id',
    	'product_id',
    	'add_value',
    ];

    public function products(){
        return $this->belongsTo('App\Product');
    }

    public function users(){
        return $this->belongsTo('App\User');
    }
}
