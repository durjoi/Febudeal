<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;
use App\Saler;

class PagesController extends Controller
{
    public function index()
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
}
