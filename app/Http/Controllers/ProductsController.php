<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function showUploadForm($catagory)
    {
      return view('saler.salerUploadProduct')->with('catagory', $catagory);
    }

    public function Store(request $request) {
      $request->validate([
        'products_name' => 'required|string',
        'info' => 'required|string',
        'quantity' => 'required|integer',
        'price' => 'required|integer',
      ]);

      if($request -> hasFile('image')) {
        $imagename=$request->image->getClientOriginalName();
        $request->image->storeAs('public/products', $imagename);

        $product = new Product;
        $product->products_name = $request->products_name;
        $product->info = $request->info;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->catagory = $request->catagory;
        $product->products_image = $imagename;
        $product->action = "pending";
        $product->save();

      }


      return redirect()->route('saler.dashboard');
    }

    public function index()
    {

    }
}
