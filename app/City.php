<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class City extends Model
{
    public static function index(Request $request)
    {
      return static::where('name', 'like', '%' . $request->name . '%');
    }
}
