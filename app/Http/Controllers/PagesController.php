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
use App\Fifthsec;
use App\Sixthsec;
use App\Seventhsec;
use App\Eightsec;
use App\Ninthsec;


class PagesController extends Controller
{
    public function home()
    {
      $fourthsecs = Fourthsec::all();
      $fifthsecs = Fifthsec::all();
      $sixthsecs = Sixthsec::all();
      $seventhsecs = Seventhsec::all();
      $eightsecs = Eightsec::all();
      $ninthsecs = Ninthsec::all();
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
        ->with('fifthsecs', $fifthsecs)
        ->with('sixthsecs', $sixthsecs)
        ->with('seventhsecs', $seventhsecs)
        ->with('eightsecs', $eightsecs)
        ->with('ninthsecs', $ninthsecs)
        ->with('tos', $tos);
    }

    public function about()
    {
      return view('pages.about');
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

    public function SectionOne() {
      $catagories = DB::table('catagories')
        ->get();
      $subcatagories = DB::table('subcatagories')
          ->get();
      $sub2catagories = DB::table('sub2catagories')
          ->get();
      $products = Product::all();
      $offers = Dotd::all();

      return view('pages.OfferProducts')
      ->with('catagories', $catagories)
      ->with('subcatagories', $subcatagories)
      ->with('sub2catagories', $sub2catagories)
      ->with('products', $products)
      ->with('offers', $offers);

    }
    public function SectionTwo() {
      $catagories = DB::table('catagories')
        ->get();
      $subcatagories = DB::table('subcatagories')
          ->get();
      $sub2catagories = DB::table('sub2catagories')
          ->get();
      $products = Product::all();
      $offers = Yml::all();

      return view('pages.OfferProducts')
      ->with('catagories', $catagories)
      ->with('subcatagories', $subcatagories)
      ->with('sub2catagories', $sub2catagories)
      ->with('products', $products)
      ->with('offers', $offers);

    }
    public function SectionThree() {
      $catagories = DB::table('catagories')
        ->get();
      $subcatagories = DB::table('subcatagories')
          ->get();
      $sub2catagories = DB::table('sub2catagories')
          ->get();
      $products = Product::all();
      $offers = To::all();

      return view('pages.OfferProducts')
      ->with('catagories', $catagories)
      ->with('subcatagories', $subcatagories)
      ->with('sub2catagories', $sub2catagories)
      ->with('products', $products)
      ->with('offers', $offers);

    }
    public function SectionFour() {
      $catagories = DB::table('catagories')
        ->get();
      $subcatagories = DB::table('subcatagories')
          ->get();
      $sub2catagories = DB::table('sub2catagories')
          ->get();
      $products = Product::all();
      $offers = Fourthsec::all();

      return view('pages.OfferProducts')
      ->with('catagories', $catagories)
      ->with('subcatagories', $subcatagories)
      ->with('sub2catagories', $sub2catagories)
      ->with('products', $products)
      ->with('offers', $offers);

    }
    public function SectionFive() {
      $catagories = DB::table('catagories')
        ->get();
      $subcatagories = DB::table('subcatagories')
          ->get();
      $sub2catagories = DB::table('sub2catagories')
          ->get();
      $products = Product::all();
      $offers = Fifthsec::all();

      return view('pages.OfferProducts')
      ->with('catagories', $catagories)
      ->with('subcatagories', $subcatagories)
      ->with('sub2catagories', $sub2catagories)
      ->with('products', $products)
      ->with('offers', $offers);

    }
    public function SectionSix() {
      $catagories = DB::table('catagories')
        ->get();
      $subcatagories = DB::table('subcatagories')
          ->get();
      $sub2catagories = DB::table('sub2catagories')
          ->get();
      $products = Product::all();
      $offers = Sixthsec::all();

      return view('pages.OfferProducts')
      ->with('catagories', $catagories)
      ->with('subcatagories', $subcatagories)
      ->with('sub2catagories', $sub2catagories)
      ->with('products', $products)
      ->with('offers', $offers);

    }
    public function SectionSeven() {
      $catagories = DB::table('catagories')
        ->get();
      $subcatagories = DB::table('subcatagories')
          ->get();
      $sub2catagories = DB::table('sub2catagories')
          ->get();
      $products = Product::all();
      $offers = Seventhsec::all();

      return view('pages.OfferProducts')
      ->with('catagories', $catagories)
      ->with('subcatagories', $subcatagories)
      ->with('sub2catagories', $sub2catagories)
      ->with('products', $products)
      ->with('offers', $offers);

    }

    public function SectionEight() {
      $catagories = DB::table('catagories')
        ->get();
      $subcatagories = DB::table('subcatagories')
          ->get();
      $sub2catagories = DB::table('sub2catagories')
          ->get();
      $products = Product::all();
      $offers = Eightsec::all();

      return view('pages.OfferProducts')
      ->with('catagories', $catagories)
      ->with('subcatagories', $subcatagories)
      ->with('sub2catagories', $sub2catagories)
      ->with('products', $products)
      ->with('offers', $offers);

    }
    public function SectionNine() {
      $catagories = DB::table('catagories')
        ->get();
      $subcatagories = DB::table('subcatagories')
          ->get();
      $sub2catagories = DB::table('sub2catagories')
          ->get();
      $products = Product::all();
      $offers = Ninthsec::all();

      return view('pages.OfferProducts')
      ->with('catagories', $catagories)
      ->with('subcatagories', $subcatagories)
      ->with('sub2catagories', $sub2catagories)
      ->with('products', $products)
      ->with('offers', $offers);

    }

    public function CatagoryProducts($id) {
      $catagories = DB::table('catagories')
        ->get();
      $subcatagories = DB::table('subcatagories')
          ->get();
      $sub2catagories = DB::table('sub2catagories')
          ->get();
      $catagory = Catagory::find($id);
      $products = DB::table('products')
        ->where('catagories_id', $catagory->id)
        ->get();

      return view('pages.CatagoryProducts')
        ->with('products', $products)
        ->with('catagories', $catagories)
        ->with('subcatagories', $subcatagories)
        ->with('sub2catagories', $sub2catagories)
        ->with('catagory', $catagory);
    }
    public function SubcatagoryProducts($id) {
      $catagories = DB::table('catagories')
        ->get();
      $subcatagories = DB::table('subcatagories')
          ->get();
      $sub2catagories = DB::table('sub2catagories')
          ->get();
      $subcatagory = Subcatagory::find($id);
      $catagory = DB::table('catagories')
        ->where('id', $subcatagory->catagories_id)
        ->get();
      $products = DB::table('products')
        ->where('subcatagories_id', $subcatagory->id)
        ->get();

      return view('pages.CatagoryProducts')
        ->with('products', $products)
        ->with('catagory', $catagory)
        ->with('catagories', $catagories)
        ->with('subcatagories', $subcatagories)
        ->with('sub2catagories', $sub2catagories)
        ->with('subcatagory', $subcatagory);
    }

    public function Sub2catagoryProducts($id) {
      $catagories = DB::table('catagories')
        ->get();
      $subcatagories = DB::table('subcatagories')
          ->get();
      $sub2catagories = DB::table('sub2catagories')
          ->get();
      $sub2catagory = Sub2catagory::find($id);
      $subcatagory = DB::table('subcatagories')
        ->where('id', $sub2catagory->subcatagories_id)
        ->get();
      $catagory = DB::table('catagories')
          ->where('id', $subcatagory[0]->catagories_id)
          ->get();
      $products = DB::table('products')
        ->where('sub2catagories_id', $sub2catagory->id)
        ->get();

      return view('pages.CatagoryProducts')
        ->with('products', $products)
        ->with('catagory', $catagory)
        ->with('catagories', $catagories)
        ->with('subcatagories', $subcatagories)
        ->with('sub2catagories', $sub2catagories)
        ->with('subcatagory', $subcatagory)
        ->with('sub2catagory', $sub2catagory);
    }

}
