<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

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
        $products = Product::all();
        return view('saler.salerLiveProducts')->with('products', $products);
    }
    public function Pending()
    {
        $products = Product::all();
        return view('saler.salerPendingProducts')->with('products', $products);
    }
}
