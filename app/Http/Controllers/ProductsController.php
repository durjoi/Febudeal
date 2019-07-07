<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function showUploadForm()
    {
      return view('saler.salerUploadProduct');
    }

    public function Store(request $request) {
      $request->validate([
        'products_name' => 'required|string',
        'info' => 'required|string',
        'quantity' => 'required|integer',
        'price' => 'required|integer',
      ]);
      $product = new Product;
      $product->products_name = $request->products_name;
      $product->info = $request->info;
      $product->quantity = $request->quantity;
      $product->price = $request->price;
      $product->catagory = $request->catagory;
      $product->products_image = $request->image;
      $product->action = "pending";
      $product->save();

      return redirect()->route('saler.dashboard');
    }
}
