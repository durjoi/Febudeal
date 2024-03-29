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
use App\Tenthsec;
use App\HomepageSectionName;
use App\Herobanner;
use App\Firstbanner;
use App\Secondbanner;
use App\Thirdbanner;
use App\Fourthbanner;
use App\Fifthbanner;


class PagesController extends Controller
{
    public function home()
    {
      $fifthbanners = Fifthbanner::all();
      $fourthbanners = Fourthbanner::all();
      $thirdbanners = Thirdbanner::all();
      $secondbanners = Secondbanner::all();
      $firstbanners = Firstbanner::all();
      $herobanners = Herobanner::all();
      $sections = HomepageSectionName::all();
      $fourthsecs = Fourthsec::all();
      $fifthsecs = Fifthsec::all();
      $sixthsecs = Sixthsec::all();
      $seventhsecs = Seventhsec::all();
      $eightsecs = Eightsec::all();
      $ninthsecs = Ninthsec::all();
      $tenthsecs = Tenthsec::all();
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
        ->with('tenthsecs', $tenthsecs)
        ->with('sections', $sections)
        ->with('herobanners', $herobanners)
        ->with('firstbanners', $firstbanners)
        ->with('secondbanners', $secondbanners)
        ->with('thirdbanners', $thirdbanners)
        ->with('fourthbanners', $fourthbanners)
        ->with('fifthbanners', $fifthbanners)
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

    public function SectionTen() {
      $catagories = DB::table('catagories')
        ->get();
      $subcatagories = DB::table('subcatagories')
          ->get();
      $sub2catagories = DB::table('sub2catagories')
          ->get();
      $products = Product::all();
      $offers = Tenthsec::all();

      return view('pages.OfferProducts')
      ->with('catagories', $catagories)
      ->with('subcatagories', $subcatagories)
      ->with('sub2catagories', $sub2catagories)
      ->with('products', $products)
      ->with('offers', $offers);

    }

    public function CatagoryProducts(Request $request, $id) {
      $catagories = DB::table('catagories')
        ->get();
      $subcatagories = DB::table('subcatagories')
          ->get();
      $sub2catagories = DB::table('sub2catagories')
          ->get();
      $catagory = Catagory::find($id);

      $side_catagory = 1;
      $side_subcatagory = 0;
      $side_sub2catagory = 0;

      if($request->ajax()) {
        $min = $request->min;
        $max = $request->max;
        $products = DB::table('products')
          ->where('catagories_id', $catagory->id)
          ->where('present_price', '>=', $min)
          ->where('present_price', '<=', $max)
          ->get();

        //dd($products);
        response()->json($products);
        return view('pages.CatagoryProductsUpdated', compact('products'));

      }

      else {
        $products = DB::table('products')
          ->where('catagories_id', $catagory->id)
          ->get();

        return view('pages.CatagoryProducts')
          ->with('products', $products)
          ->with('catagories', $catagories)
          ->with('subcatagories', $subcatagories)
          ->with('sub2catagories', $sub2catagories)
          ->with('side_catagory', $side_catagory)
          ->with('side_subcatagory', $side_subcatagory)
          ->with('side_sub2catagory', $side_sub2catagory)
          ->with('catagory', $catagory);
      }

    }
    public function SubcatagoryProducts(Request $request, $id) {
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


        $side_catagory = 0;
        $side_subcatagory = 1;
        $side_sub2catagory = 0;

        if($request->ajax()) {
          $min = $request->min;
          $max = $request->max;
          $products = DB::table('products')
              ->where('subcatagories_id', $subcatagory->id)
            ->where('present_price', '>=', $min)
            ->where('present_price', '<=', $max)
            ->get();

          //dd($products);
          response()->json($products);
          return view('pages.CatagoryProductsUpdated', compact('products'));
        }
        else {
          $products = DB::table('products')
            ->where('subcatagories_id', $subcatagory->id)
            ->get();

            return view('pages.CatagoryProducts')
              ->with('products', $products)
              ->with('catagory', $catagory)
              ->with('catagories', $catagories)
              ->with('subcatagories', $subcatagories)
              ->with('sub2catagories', $sub2catagories)
              ->with('side_catagory', $side_catagory)
              ->with('side_subcatagory', $side_subcatagory)
              ->with('side_sub2catagory', $side_sub2catagory)
              ->with('subcatagory', $subcatagory);
        }


    }

    public function Sub2catagoryProducts(Request $request, $id ) {
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


        $side_catagory = 0;
        $side_subcatagory = 0;
        $side_sub2catagory = 1;

        if($request->ajax()) {
          $min = $request->min;
          $max = $request->max;
          $products = DB::table('products')
            ->where('sub2catagories_id', $sub2catagory->id)
            ->where('present_price', '>=', $min)
            ->where('present_price', '<=', $max)
            ->get();

          //dd($products);
          response()->json($products);
          return view('pages.CatagoryProductsUpdated', compact('products'));

        }

        else {

          $products = DB::table('products')
            ->where('sub2catagories_id', $sub2catagory->id)
            ->get();
          return view('pages.CatagoryProducts')
            ->with('products', $products)
            ->with('catagory', $catagory)
            ->with('catagories', $catagories)
            ->with('subcatagories', $subcatagories)
            ->with('sub2catagories', $sub2catagories)
            ->with('side_catagory', $side_catagory)
            ->with('side_subcatagory', $side_subcatagory)
            ->with('side_sub2catagory', $side_sub2catagory)
            ->with('subcatagory', $subcatagory)
            ->with('sub2catagory', $sub2catagory);
        }


    }

    public function CatagoryAllProducts(Request $request) {

      $catagories = DB::table('catagories')
        ->get();
      $subcatagories = DB::table('subcatagories')
          ->get();
      $sub2catagories = DB::table('sub2catagories')
          ->get();

      $side_catagory = 2;
      $side_subcatagory = 0;
      $side_sub2catagory = 0;

      if($request->ajax()) {
        if(isset($request->discount)) {
          $discount = $request->discount;
          //dd(explode(',',$discount));
          $discount = explode(',',$discount);
          // dd($discount);
            $products = DB::table('products')
              ->whereIn('offer', $discount)
              ->get();
          response()->json($products);
          return view('pages.CatagoryProductsUpdated', compact('products'));
        }
        elseif(isset($request->min)) {
          // dd($request->discount);
          $min = $request->min;
          $max = $request->max;
          $products = DB::table('products')
            ->where('present_price', '>=', $min)
            ->where('present_price', '<=', $max)
            ->get();
          return view('pages.CatagoryProductsUpdated', compact('products'));
        }


      }

      else {


        $products = Product::all();
        return view('pages.CatagoryProducts')
          ->with('products', $products)
          // ->with('catagory', $catagory)
          ->with('catagories', $catagories)
          ->with('subcatagories', $subcatagories)
          ->with('sub2catagories', $sub2catagories)
          ->with('side_catagory', $side_catagory)
          ->with('side_subcatagory', $side_subcatagory)
          ->with('side_sub2catagory', $side_sub2catagory);

      }
    }


}
