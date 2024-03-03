<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function index(){
        $title = "ShopCart";
        return view("shop",compact("title"));
    }
}
