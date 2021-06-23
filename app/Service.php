<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
        protected $fillable = [
        'id',
    	'img',
    	'name',
    	'preview',
    	'discription'
    ];
}
