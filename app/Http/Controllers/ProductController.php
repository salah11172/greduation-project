<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productList()
    {
        $products = Product::paginate(6);
        // dd($products);

        return view('shop_page.shop', compact('products'));
    }
}
