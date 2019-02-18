<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductUser extends Model
{
    protected $table = 'product_user';

    protected $fillable = [
    	'user_id',
    	'product_id',
    	'add_value',
    ];
}
