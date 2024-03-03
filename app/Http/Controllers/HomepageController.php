<?php

namespace App\Http\Controllers;

use App\Models\ProductsModel;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    //
    public function index()
    {
        $title = "Home";
        $currentHour = date("H");
        $currentTime = date("H:i:s");

        $products = ProductsModel::orderByDesc("id")->take(6)->get();

        return view("welcome",compact("title","currentTime","currentHour","products"));

    }
}
