<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Product;
use App\Saler;
use App\Catagory;
use App\Subcatagory;
use App\Sub2catagory;
use App\Offer;
use DB;

class ProductsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:saler');
    }


    public function index()
    {

    }


    public function showProductUploadForm($id) {
      // if($id == 0) {
      //   return $id;
      // }
      // $catagory = Catagory::find($id);
      // return $catagory;
      $sub2catagory = Sub2catagory::find($id);
      // return $sub2catagory;
      $subcatagory = DB::table('subcatagories')
        ->where('id', $sub2catagory->subcatagories_id)
        ->get();
      $catagory = DB::table('catagories')
        ->where('id', $subcatagory[0]->catagories_id)
        ->get();

      return view('saler.salerProductUploadForm')
        ->with('catagory', $catagory)
        ->with('subcatagory', $subcatagory)
        ->with('sub2catagory', $sub2catagory);
    }

    public function StoreProduct(request $request, $id ) {
      $saler = \Auth::user();

      $sub2catagory = Sub2catagory::find($id);
      $subcatagory = Subcatagory::find($sub2catagory->subcatagories_id);
      $catagory = Catagory::find($subcatagory->catagories_id);

      $image1 = $request->file('image1');
      $image1name=$image1->getClientOriginalName();
      $image1->storeAs('public/products', $image1name);

      // $image2 = $request->file('image2');
      // $image2name=$image2->getClientOriginalName();
      // $image2->storeAs('public/products', $image2name);
      //
      // $image3 = $request->file('image3');
      // $image3name=$image3->getClientOriginalName();
      // $image3->storeAs('public/products', $image3name);
      //
      // $image4 = $request->file('image4');
      // $image4name=$image4->getClientOriginalName();
      // $image4->storeAs('public/products', $image4name);

      $x = $request->original_price;
      $y = $request->present_price;
      $offer_price = (($x-$y)*100)/$x;



      $product = new Product;
      $product->saler_id = $saler->id;
      $product->title = $request->title;
      $product->description = $request->description;
      $product->brand = $request->brand;
      $product->link = $request->link;
      $product->original_price = $request->original_price;
      $product->present_price = $request->present_price;
      $product->sub2catagories_id = $id;
      $product->subcatagories_id = $subcatagory->id;
      $product->catagories_id = $catagory->id;
      $product ->off_price = $offer_price;
      $product ->brand_url = $request->brand_url;
      // $product->sizesymbol=implode(",",$request->size);
      $product->image1 = $image1name;

      if($offer_price >= 0 && $offer_price <= 20) {
        $product->offer = 1;
      }
      elseif($offer_price >= 21 && $offer_price <= 40) {
        $product->offer = 2;
      }
      elseif($offer_price >= 41 && $offer_price <= 60) {
        $product->offer = 3;
      }
      elseif($offer_price >= 61 && $offer_price <= 80) {
        $product->offer = 4;
        $product->save();
      }
      else {
        $product->offer = 5;
      }
      // $product->image2 = $image2name;
      // $product->image3 = $image3name;
      // $product->image4 = $image4name;
      $product->action = "pending";
      $product->save();

      // $offer = DB::table('products')->orderBy('updated_at', 'desc')->first();
      // if($offer_price >= 0 && $offer_price <= 20) {
      //   $offer->offer = 1;
      //   $offer->save();
      // }
      // elseif($offer_price >= 21 && $offer_price <= 40) {
      //   $offer->offer = 2;
      //   $offer->save();
      // }
      // elseif($offer_price >= 41 && $offer_price <= 60) {
      //   $offer->offer = 3;
      //   $offer->save();
      // }
      // elseif($offer_price >= 61 && $offer_price <= 80) {
      //   $offer->offer = 4;
      //   $offer->save();
      // }
      // else {
      //   $offer->offer = 5;
      //   $offer->save();
      // }

      return redirect()->route('saler.dashboard');
    }

    public function StoreProduct2(request $request, $id ) {
      $saler = \Auth::user();

      $catagory = Catagory::find($id);

      $image1 = $request->file('image1');
      $image1name=$image1->getClientOriginalName();
      $image1->storeAs('public/products', $image1name);

      // $image2 = $request->file('image2');
      // $image2name=$image2->getClientOriginalName();
      // $image2->storeAs('public/products', $image2name);
      //
      // $image3 = $request->file('image3');
      // $image3name=$image3->getClientOriginalName();
      // $image3->storeAs('public/products', $image3name);
      //
      // $image4 = $request->file('image4');
      // $image4name=$image4->getClientOriginalName();
      // $image4->storeAs('public/products', $image4name);

      $x = $request->original_price;
      $y = $request->present_price;
      $offer_price = (($x-$y)*100)/$x;


      $product = new Product;
      $product->saler_id = $saler->id;
      $product->title = $request->title;
      $product->description = $request->description;
      $product->original_price = $request->original_price;
      $product->present_price = $request->present_price;
      $product->brand = $request->brand;
      $product->link = $request->link;
      $product ->off_price = $offer_price;
      $product->catagories_id = $catagory->id;
      // $product->sizesymbol=implode(",",$request->size);
      $product->image1 = $image1name;
      $product ->brand_url = $request->brand_url;

      if($offer_price >= 0 && $offer_price <= 20) {
        $product->offer = 1;
      }
      elseif($offer_price >= 21 && $offer_price <= 40) {
        $product->offer = 2;
      }
      elseif($offer_price >= 41 && $offer_price <= 60) {
        $product->offer = 3;
      }
      elseif($offer_price >= 61 && $offer_price <= 80) {
        $product->offer = 4;
        $product->save();
      }
      else {
        $product->offer = 5;
      }
      // $product->image2 = $image2name;
      // $product->image3 = $image3name;
      // $product->image4 = $image4name;
      $product->action = "pending";
      $product->save();

      // $offer = DB::table('products')->orderBy('updated_at', 'desc')->first();
      // if($offer_price >= 0 && $offer_price <= 20) {
      //   $offer->offer = 1;
      //   $offer->save();
      // }
      // elseif($offer_price >= 21 && $offer_price <= 40) {
      //   $offer->offer = 2;
      //   $offer->save();
      // }
      // elseif($offer_price >= 41 && $offer_price <= 60) {
      //   $offer->offer = 3;
      //   $offer->save();
      // }
      // elseif($offer_price >= 61 && $offer_price <= 80) {
      //   $offer->offer = 4;
      //   $offer->save();
      // }
      // else {
      //   $offer->offer = 5;
      //   $offer->save();
      // }

      return redirect()->route('saler.dashboard');
    }


    public function StoreProduct3(request $request, $id ) {
      $saler = \Auth::user();

      $subcatagory = Subcatagory::find($id);
      $catagory = Catagory::find($subcatagory->catagories_id);

      $image1 = $request->file('image1');
      $image1name=$image1->getClientOriginalName();
      $image1->storeAs('public/products', $image1name);

      // $image2 = $request->file('image2');
      // $image2name=$image2->getClientOriginalName();
      // $image2->storeAs('public/products', $image2name);
      //
      // $image3 = $request->file('image3');
      // $image3name=$image3->getClientOriginalName();
      // $image3->storeAs('public/products', $image3name);
      //
      // $image4 = $request->file('image4');
      // $image4name=$image4->getClientOriginalName();
      // $image4->storeAs('public/products', $image4name);

      $x = $request->original_price;
      $y = $request->present_price;
      $offer_price = (($x-$y)*100)/$x;

      $product = new Product;
      $product->saler_id = $saler->id;
      $product->title = $request->title;
      $product->description = $request->description;
      $product->original_price = $request->original_price;
      $product->present_price = $request->present_price;
      $product->subcatagories_id = $id;
      $product->catagories_id = $catagory->id;
      $product->brand = $request->brand;
      $product ->off_price = $offer_price;
      $product->link = $request->link;
      if($offer_price >= 0 && $offer_price <= 20) {
        $product->offer = 1;
      }
      elseif($offer_price >= 21 && $offer_price <= 40) {
        $product->offer = 2;
      }
      elseif($offer_price >= 41 && $offer_price <= 60) {
        $product->offer = 3;
      }
      elseif($offer_price >= 61 && $offer_price <= 80) {
        $product->offer = 4;
        $product->save();
      }
      else {
        $product->offer = 5;
      }
      // $product->sizesymbol=implode(",",$request->size);
      $product->image1 = $image1name;
      $product ->brand_url = $request->brand_url;
      // $product->image2 = $image2name;
      // $product->image3 = $image3name;
      // $product->image4 = $image4name;
      $product->action = "pending";
      $product->save();

      // $offer = DB::table('products')->orderBy('updated_at', 'desc')->first();
      // if($offer_price >= 0 && $offer_price <= 20) {
      //   $offer->offer = 1;
      //   $offer->save();
      // }
      // elseif($offer_price >= 21 && $offer_price <= 40) {
      //   $offer->offer = 2;
      //   $offer->save();
      // }
      // elseif($offer_price >= 41 && $offer_price <= 60) {
      //   $offer->offer = 3;
      //   $offer->save();
      // }
      // elseif($offer_price >= 61 && $offer_price <= 80) {
      //   $offer->offer = 4;
      //   $offer->save();
      // }
      // else {
      //   $offer->offer = 5;
      //   $offer->save();
      // }

      return redirect()->route('saler.dashboard');
    }

    public function DeleteProduct($id) {
      $product = Product::find($id);
      $product->delete();

      return redirect()->route('saler.dashboard');
    }
}
