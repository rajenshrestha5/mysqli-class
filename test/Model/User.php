<?php

namespace Model;

use App\Database\Model;

class User extends Model
{
    public $table = 'tbl_user';

    public $attributes = ['name', 'username', 'password'];

    //protected $timestamps = false;

}
