<?php

namespace Model;

use App\Database\Model;

class News extends Model
{
    public $table = 'tbl_news';

    public $attributes =['title','content'];

}