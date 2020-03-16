<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserMenu extends Model
{
    protected $table = 'user_menu';
    protected $primarykey = "id";
    public $timestamps = false;
}
