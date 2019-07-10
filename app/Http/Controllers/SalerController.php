<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;

class SalerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:saler');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Index()
    {
        //$products = Product::orderBy('created_at', 'desc')->get();
        $products = DB::select(
          'SELECT * From products
            WHERE action = "live"
            ORDER BY created_at = "desc" '
          );

        return view('saler.salerLiveProducts')->with('products', $products);
    }
    public function Pending()
    {
        //$products = Product::orderBy('created_at', 'desc')->get();
        $products = DB::select(
          'SELECT * From products
            WHERE action = "pending"
            ORDER BY created_at = "desc" '
          );
        return view('saler.salerPendingProducts')->with('products', $products);
    }
    public function show($id)
    {
      $product = Product::find($id);
      return view('saler.salerProduct')->with('product', $product);
    }

    public function showCatagory()
    {
      return view('saler.salerProductCatagory');
    }
}
