<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;
use App\Saler;
use App\Catagory;
use App\Subcatagory;
use App\Sub2catagory;
use App\Dotd;
use App\Yml;
use App\To;
use App\Fourthsec;

class PagesController extends Controller
{
    public function home()
    {
      $fourthsecs = Fourthsec::all();
      $tos = To::all();
      $dotds = Dotd::all();
      $ymls = Yml::all();
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
        ->with('sub2catagories', $sub2catagories)
        ->with('dotds', $dotds)
        ->with('ymls', $ymls)
        ->with('fourthsecs', $fourthsecs)
        ->with('tos', $tos);
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

    public function ProductDetails($id) {
      $catagories = DB::table('catagories')
        ->get();
      $subcatagories = DB::table('subcatagories')
          ->get();
      $sub2catagories = DB::table('sub2catagories')
          ->get();
      $product = Product::find($id);
      $catagory = Catagory::find($product->catagories_id);
      $subcatagory = Subcatagory::find($product->subcatagories_id);
      $sub2catagory = Sub2catagory::find($product->sub2catagories_id);
      return view('pages.ProductDetails')
        ->with('product', $product)
        ->with('catagory', $catagory)
        ->with('catagories', $catagories)
        ->with('subcatagories', $subcatagories)
        ->with('sub2catagories', $sub2catagories)
        ->with('subcatagory', $subcatagory)
        ->with('sub2catagory', $sub2catagory);
    }

}
