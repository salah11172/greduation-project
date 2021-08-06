<?php

use App\Http\Controllers\admin\AdminCategortycontroller;
use App\Http\Controllers\admin\AdminProductnController;
use App\Http\Controllers\cart\CartController;
use App\Http\Controllers\shop\ShopCnotrller;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
  //  return view('layout.layout');
//});

Route::get("/create",[AdminProductnController::class,"create"])->name("productcreate");
Route::get("/delete/{productid}",[AdminProductnController::class,"destroy"])->name("admindeleteproduct");
//Route::get("/index",[AdminProductnController::class,"index"])->name("productlist");
Route::post("/store",[AdminProductnController::class,"store"])->name("productstore");
Route::get("/adminshow",[AdminProductnController::class,"showtableproducts"])->name("adminproductlist");
Route::get("/gotoadmindashboard",[AdminProductnController::class,"gotoadmin"])->name("gotoadmin");
Route::get("/edit/{productid}",[AdminProductnController::class,"edit"])->name("editproduct");
Route::post("/update/{productid}",[AdminProductnController::class,"update"])->name("updateproduct");






//crud opertion for the categoryies
Route::get("/categorypageforadmin",[AdminCategortycontroller::class,"categoryshow"])->name("go_category_for_admin");
Route::get("/createcategory",[AdminCategortycontroller::class,"create"])->name("categorycreate");
Route::post("/storecategory",[AdminCategortycontroller::class,"store"])->name("categorystore");
Route::get("categotory /delete/{categoryid}",[AdminCategortycontroller::class,"destroy"])->name("admindeletecategory");
Route::get("categotory /edit/{categoryid}",[AdminCategortycontroller::class,"edit"])->name("admineditcategry");
Route::post("categotory /update/{categoryid}",[AdminCategortycontroller::class,"update"])->name("adminupdatecategory");

/////shop routes 


Route::get("shopcategorylist",[ShopCnotrller::class,"categorylist"])->name("shopproduct");
Route::get("categoryproducts/{categoryid}",[ShopCnotrller::class,"getcategoryproduct"])->name("categoryprodcuts");
ROUTE::post("serachcategory",[ShopCnotrller::class,"serach"])->name("searchproducts");
ROUTE::get("productdetails/{productid}",[ShopCnotrller::class,"showproduct"])->name("productdetails");



////cart

Route::get("cartshow",[CartController::class,"index"])->name("cartpageshow");














