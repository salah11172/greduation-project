<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopCnotrller extends Controller
{
    public function productlist()
    {
        Product::all();
        return view();
    }
    public function categorylist()
    {
        category::all();
        return view();
    }
}
