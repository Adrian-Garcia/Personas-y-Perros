<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public static function incomplete($query){
    	return $querry->where ('completed', 0);
    }
}
