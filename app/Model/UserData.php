<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class UserData extends Authenticatable
{
    public $table = "user_data";
    protected $primarykey = "id";
    protected $fillable = [
		'email', 'password', 'name', 'api_token', 'isAdmin',
	];
}
