<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Company extends Authenticatable
{
        protected $fillable = [
        'company_name', 'email', 'password', 'id_code',
    ];

    	protected $hidden=[
    	        'password', 'remember_token',
    	];
}
