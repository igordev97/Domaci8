<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[\App\Http\Controllers\HomepageController::class,"index"]);

Route::get('/shop',[\App\Http\Controllers\ShopController::class,"index"]);


Route::get('/about', function () {
    $title = "About us";
    return view('about',["title"=>$title]);
});
Route::get('/contact',[\App\Http\Controllers\ContactController::class,"index"]);

Route::get("/admin/allproducts",[\App\Http\Controllers\ProductController::class,"getAllProducts"]);
Route::post("/send-question",[\App\Http\Controllers\ContactController::class,"sendData"]);


Route::get("/admin/add-product",[\App\Http\Controllers\ProductController::class,"index"]);
Route::post("/admin/save-product",[\App\Http\Controllers\ProductController::class,"saveProductToDatabase"])->name("save-product");

Route::get("/admin/delete-product/{product}",[\App\Http\Controllers\ProductController::class,"deleteProduct"])->name("delete-product");
Route::get("/admin/all-contacts",[\App\Http\Controllers\ContactController::class,"getAllContacts"]);
Route::get("/admin/delete-contact/{contact}",[\App\Http\Controllers\ContactController::class,"deleteContact"]);


//Edit product
Route::get("/admin/product/{id}",[\App\Http\Controllers\ProductController::class,"singleProduct"])->name("single-product");
Route::post("/admin/product/edit/{id}",[\App\Http\Controllers\ProductController::class,"editProduct"])->name("editProduct");


//Edut contact
Route::get("/admin/contact/{id}",[\App\Http\Controllers\ContactController::class,"singleContact"])->name("single-contact");
Route::post("/admin/contact/edit/{id}",[\App\Http\Controllers\ContactController::class,"editContact"])->name("edit-contact");
