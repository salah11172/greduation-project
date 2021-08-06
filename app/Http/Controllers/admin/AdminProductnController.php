<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;


class AdminProductnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.product.create");
    }
    public function showtableproducts()
    {
        $data=Product::all();
        return view('admin.product.producttable',["productsdata"=>$data]);
       // return view('admin.product.producttable');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        
       $req->validate( [
            'name' => 'required|max:255',
            'details' => 'required|max:255',
            'description' => 'required',
            'image' => 'required',
            'quantity' => 'required',
            'price' => 'required',
        ]);
        $imagenew=time() . '-' . $req->name . '.' . $req->image->extension(); 
        $req->image->move(public_path("images",$imagenew));
           Product::create([
              'name'=>$req->name,
              'details'=>$req->details,
              'description'=>$req->description,
              'quantity'=>$req->quantity,
              'price'=>$req->price,
              'image'=>$imagenew,
              'categort_id'=>$req->categort_id
           ]);
        return redirect()->route("adminproductlist");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Product::find($id);
      return view("admin.product.show",['specificproduvt'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data= Product::find($id);
      return view("admin.product.edit",["productinfo"=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
         $product->update($request->all());
         return redirect()->route('adminproductlist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($productid)
    {
      Product::find($productid)->delete();
       
         return redirect()->route('adminproductlist')->with(["message"=>"product has been deleted sucessfuuly"]);
    }
    public function gotoadmin()
    {
        return view("admin.admindashbord");
    }
}
