<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'id',
    	'img',
    	'name',
    	'preview',
    	'discription'
    ];
}
