<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Product;
use App\Saler;

class ProductsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:saler');
    }
    public function showUploadForm($catagory)
    {
      return view('saler.salerUploadProduct')->with('catagory', $catagory);
    }

    public function Store(request $request) {
      $saler = \Auth::user();
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
        $product->saler_id = $saler->id;
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
