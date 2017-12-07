<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{
    public static function g()
    {
      return static::where('id', '>', 1)->get();
    }
}
