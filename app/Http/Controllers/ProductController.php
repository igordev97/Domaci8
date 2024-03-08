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
            "name" => "required|string|min:5|unique:products",
            "description" => "required|string|min:5",
            "price" => "required|integer",
            "amount" => "required|integer",
            "fileToUpload" => "required",

        ]);
        $imageName = time() . '.' . $request->fileToUpload->extension();

        $request->fileToUpload->move(public_path('images'), $imageName);
        ProductsModel::create([
            "name" => $request->get("name"),
            "description" => $request->get("description"),
            "price" => $request->get("price"),
            "amount" => $request->get("amount"),
            "image" => $imageName,
        ]);

        return redirect("/");

    }

    public function deleteProduct($product){
        $singleProduct = ProductsModel::where(["id"=>$product])->first();
        $singleProduct->delete();
        return redirect("/admin/allproducts");
    }
    public function singleProduct($id){
        $singleProduct = ProductsModel::where(["id"=>$id])->first();
        $title = "Edit Product";
        return view("editproduct",compact("singleProduct","title"));
    }
    public function editProduct(Request $request,$id)
    {
            $singleProduct = ProductsModel::where(["id"=>$id])->first();

//
        $singleProduct->name = $request->get("name");
        $singleProduct->description = $request->get("description");
        $singleProduct->price = $request->get("price");
        $singleProduct->amount = $request->get("amount");
        $singleProduct->save();
        return redirect("/admin/allproducts");

    }


}
