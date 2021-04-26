<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    public static function getAll(){
        return static::take(10)->get();
    }
    public static function getSearched($param = 'id', $value = 1){
        return static::where($param, $value)->get();
    }
}
