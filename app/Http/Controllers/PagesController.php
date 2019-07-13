<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;
use App\Saler;

class PagesController extends Controller
{
    public function home()
    {
      // $products = DB::table('products')
      //   ->where('action', 'live')
      //   ->get();

      $products = DB::table('products')
        ->where('action', 'live')
        //->join('salers', 'products.saler_id', '=', 'salers.id')
        ->get();
      return view('pages.home')->with('products', $products);
    }

    public function about()
    {
      return view('pages.about');
    }

    public function catagory($catagory)
    {
       $products = DB::table('products')
        ->where('action', 'live')
        ->where('catagory', $catagory)
        //->join('salers', 'products.saler_id', '=', 'salers.id')
        ->get();
        return view('pages.CatagoryProductsPage')->with('products', $products);
    }

}
