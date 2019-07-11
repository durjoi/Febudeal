<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;
use App\Saler;

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
        // $products = DB::select(
        //   'SELECT * From products
        //     WHERE action = "live"
        //     ORDER BY created_at = "desc" '
        //   );
        //
        // return view('saler.salerLiveProducts')->with('products', $products);
        $products = DB::table('products')
          ->where('saler_id', auth()->user()->id)
          ->where('action', 'live')
          ->get();
        return view('saler.salerLiveProducts')->with('products', $products);
    }
    public function Pending()
    {
        //$saler_id = auth()->user()->id;
        //$products = Product::orderBy('created_at', 'desc')->get();
        // $products = DB::select(
        //   'SELECT * From products
        //     WHERE saler_id = $saler_id AND action = "pending"
        //     ORDER BY created_at = "desc" '
        //   );
        //$products = Product::find($saler_id)->where('action','pending');

        $products = DB::table('products')
          ->where('saler_id', auth()->user()->id)
          ->where('action', 'pending')
          ->get();
        return view('saler.salerPendingProducts')->with('products', $products);


         // $saler_id = auth()->user()->id;
         // $saler = Saler::find($saler_id);
         // $products = $saler->products;
         //
         // return view('saler.salerPendingProducts')->with('products', $saler->products);


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
