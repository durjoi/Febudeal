<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;
use App\Saler;
use App\Catagory;
use App\Subcatagory;
use App\Sub2catagory;

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
        $sub2catagories = Sub2catagory::all();
        $subcatagories = Subcatagory::all();
        $catagories = Catagory::all();
        return view('saler.salerPendingProducts')
          ->with('products', $products)
          ->with('sub2catagories', $sub2catagories)
          ->with('subcatagories', $subcatagories)
          ->with('catagories', $catagories);


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
      $catagories = Catagory::all();
      return view('saler.salerProductCatagory')->with('catagories', $catagories);
    }
    public function showSubcatagory($id) {
      $catagory = Catagory::find($id);
      $subcatagories = DB::table('subcatagories')
        ->where('catagories_id', $id)
        ->get();
        return view('saler.salerProductSubcatagory')
          ->with('subcatagories', $subcatagories)
          ->with('catagory', $catagory);
    }
    public function showSub2catagory($id) {
        $subcatagory = Subcatagory::find($id);

        $catagory = DB::table('catagories')
          ->where('id', $subcatagory->catagories_id)
          ->get();

        $sub2catagories = DB::table('sub2catagories')
          ->where('subcatagories_id', $id)
          ->get();

        return view('saler.salerProductSub2catagory')
          ->with('catagory', $catagory)
          ->with('sub2catagories', $sub2catagories)
          ->with('subcatagory', $subcatagory);
    }

}
