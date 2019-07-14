<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;
use App\Saler;
use App\Catagory;
use App\Subcatagory;
use App\Sub2catagory;

class PagesController extends Controller
{
    public function home()
    {

      $catagories = DB::table('catagories')
        ->get();
      $subcatagories = DB::table('subcatagories')
          ->get();
      $sub2catagories = DB::table('sub2catagories')
          ->get();
      $products = DB::table('products')
        ->where('action', 'live')
        //->join('salers', 'products.saler_id', '=', 'salers.id')
        ->get();
      return view('pages.home')
        ->with('products', $products)
        ->with('catagories', $catagories)
        ->with('subcatagories', $subcatagories)
        ->with('sub2catagories', $sub2catagories);
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
