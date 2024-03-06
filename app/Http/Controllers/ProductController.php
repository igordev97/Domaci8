<?php

namespace App\Http\Controllers;

use App\Models\ProductsModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function index()
    {
        $title = "Add product";
        return view("add-product", compact("title"));
    }

    public function getAllProducts()
    {
        $allProducts = ProductsModel::all();
        $title = "All products";
        return view("allProducts", compact("title", "allProducts"));
    }

    public function saveProductToDatabase(Request $request)
    {
        $validation = $request->validate([
            "name" => "required|string|min:5",
            "description" => "required|string|min:5",
            "price" => "required|integer",
            "amount" => "required|integer",
            "fileToUpload" => "required",

        ]);
        $imageName = time() . '.' . $request->fileToUpload->extension();

        $request->fileToUpload->move(public_path('images'), $imageName);
        ProductsModel::create([
            "name" => $request->name,
            "description" => $request->description,
            "price" => $request->price,
            "amount" => $request->amount,
            "image" => $imageName
        ]);

        return redirect("/");

    }

    public function deleteProduct($product){
        $singleProduct = ProductsModel::where(["id"=>$product])->first();
        $singleProduct->delete();
        return redirect("/admin/allproducts");
    }



}
