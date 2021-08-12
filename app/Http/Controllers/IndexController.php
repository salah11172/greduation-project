<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;


class IndexController extends Controller
{

   
    public function show ()
    {
    

        $productt=Product::where("quantity",'>',1000)->get();
        $data = Category::all();

       




        return view("index", ['productss'=>$productt],['categories'=>$data]);
    }

    public function showproducts ($catid)
    {
        // dd($catid);
        // $data=Category::all();
        $product=Product::where("categort_id",$catid)->get();

       return view("index",['products'=>$product]);
   }



   
   public function latestproduct()
    {
        $latestproducts = Product::orderBy('id','desc')->take(5)->get();
        //  dd($latestproducts);
        $imgSlider = Slider::all();
        // dd($imgSlider);
        return view('index', ['latests'=>$latestproducts], ['imageSlider'=>$imgSlider]);
    }



}
