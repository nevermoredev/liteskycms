<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

		protected $fillable = [
		'id',
    	'favicon',
    	'title',
    	'map',
    	'workphone',
    	'mobilephone',
    	'address',
    	'email'
    ];
}
