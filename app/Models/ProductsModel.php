<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    use HasFactory;
    protected $table  = "products";
    protected $fillable = ["name","description","price","amount","image"];
    public static function lastSix()
    {
        return self::orderBy('created_at', 'desc')->take(6)->get();
    }

}
