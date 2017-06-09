<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public static function current()
    {
    	return static::where('is_current', true)->get();
    }
}
