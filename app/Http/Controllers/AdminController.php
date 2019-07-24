<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catagory;
use App\Subcatagory;
use App\Sub2catagory;
use DB;
use App\Product;
use App\Saler;
use App\Dotd;
use App\Yml;
use App\To;
use App\Fourthsec;
use App\Fifthsec;
use App\Sixthsec;
use App\Seventhsec;
use App\Eightsec;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function showDashboard() {
      return view('admin.admin');
    }


    public function showCatagory() {
      $catagories = Catagory::all();
      $subcatagories = Subcatagory::all();
      $sub2catagories = Sub2catagory::all();

      return view('admin.adminCatagory')
        ->with('catagories', $catagories)
        ->with('subcatagories', $subcatagories)
        ->with('sub2catagories', $sub2catagories);
    }

    // Catagory =========================================================

    public function addCatagory() {
      return view('admin.adminAddCatagory');
    }

    public function storeCatagory(Request $request) {

      $request->validate([
          'catagory'=>'required|string',
        ]);
      $catagory = new Catagory;
      $catagory->catagory = $request->catagory;
      $catagory->save();

      return redirect()->route('admin.catagory');
    }

    public function deleteCatagory($id) {
        $catagory = Catagory::find($id);
        $catagory->delete();
        return redirect()->route('admin.catagory');
    }


    // Sub Catagory =======================================================

    public function showCatagoryForSubcatagory() {
      $catagories = Catagory::all();
      return view('admin.adminAddSubcatagoryCatagory')->with('catagories', $catagories);
    }
    public function addSubcatagory($id) {
      return view('admin.adminAddSubcatagory')->with('id', $id);
    }
    public function storeSubcatagory(Request $request, $id) {
      // $request->validate([
      //     'subcatagories'=>'required|string',
      //     'catagories_id'=>'required|string',
      //   ]);
      $subcatagory = new Subcatagory;
      $subcatagory->subcatagories = $request->subcatagory;
      $subcatagory->catagories_id = $id;

      $subcatagory->save();

      // $catagory = Catagory::find($id);
      // $catagory->subcatagories()->create(['catagories'=> $request->subcatagories]);

      return redirect()->route('admin.catagory');
    }

    public function deleteSubcatagory($id) {
        $subcatagory = Subcatagory::find($id);
        $subcatagory->delete();
        return redirect()->route('admin.catagory');
    }

    //Sub 2 Catagory ========================================================

    public function showCatagoryForSub2catagory() {
      $catagories = Catagory::all();
      return view('admin.adminAddSub2catagoryCatagory')->with('catagories', $catagories);
    }
    public function showSubcatagoryForSub2catagory($id) {
      // return $subcatagories = Subcatagory::all()->where('catagoies_id', $id)->get();

      $subcatagories = DB::table('subcatagories')
        ->where('catagories_id', $id)
        //->join('salers', 'products.saler_id', '=', 'salers.id')
        ->get();
      return view('admin.adminAddSub2catagorySubcatagory')->with('subcatagories', $subcatagories);
    }

    public function addSub2catagory($id) {
      return view('admin.adminAddSub2catagory')->with('id', $id);
    }
    public function storeSub2catagory(Request $request, $id) {
      // $request->validate([
      //     'subcatagories'=>'required|string',
      //     'catagories_id'=>'required|string',
      //   ]);
      $sub2catagory = new Sub2catagory;
      $sub2catagory->subcatagories2 = $request->sub2catagory;
      $sub2catagory->subcatagories_id = $id;

      $sub2catagory->save();

      return redirect()->route('admin.catagory');
    }
    public function deleteSub2catagory($id) {
        $sub2catagory = Sub2catagory::find($id);
        $sub2catagory->delete();
        return redirect()->route('admin.catagory');
    }




    public function editCatagory($id) {
      $catagory = Catagory::find($id);
      return view('admin.adminCatagoryEdit')->with('catagory', $catagory);
    }
    public function editSubcatagory($id) {
      $subcatagory = Subcatagory::find($id);
      return view('admin.adminSubcatagoryEdit')->with('subcatagory', $subcatagory);
    }
    public function editSub2catagory($id) {
      $sub2catagory = Sub2catagory::find($id);
      return view('admin.adminSub2catagoryEdit')->with('sub2catagory', $sub2catagory);
    }


    public function upadateCatagory(Request $request, $id) {
      // $request->validate([
      //     'catagory'=>'required|string',
      //   ]);
      $catagory = Catagory::find($id);
      $catagory->catagory = $request->catagory;
      $catagory->save();

      return redirect()->route('admin.catagory');
    }
    public function upadateSubcatagory(Request $request, $id) {
      // $request->validate([
      //     'subcatagories'=>'required|string',
      //   ]);
      $subcatagory = Subcatagory::find($id);
      $subcatagory->subcatagories = $request->subcatagory;
      $subcatagory->save();

      return redirect()->route('admin.catagory');
    }
    public function upadateSub2catagory(Request $request, $id) {
      // $request->validate([
      //     'subcatagories2'=>'required|string',
      //   ]);
      $sub2catagory = Sub2catagory::find($id);
      $sub2catagory->subcatagories2 = $request->sub2catagory;
      $sub2catagory->save();

      return redirect()->route('admin.catagory');
    }


    public function ProductShow() {
      $products = Product::all();
      $salers = Saler::all();
      return view('admin.adminShowProducts')
        ->with('products', $products)
        ->with('salers', $salers);
    }

    public function ProductMakeLive($id) {
      $product = Product::find($id);
      $product->action = 'live';
      $product->save();

      return back();
    }

    public function IndividualProductShow($id)
    {
      $product = Product::find($id);
      $catagory = Catagory::find($product->catagories_id);
      $subcatagory = Subcatagory::find($product->subcatagories_id);
      $sub2catagory = Sub2catagory::find($product->sub2catagories_id);
      return view('admin.adminProduct')
        ->with('product', $product)
        ->with('catagory', $catagory)
        ->with('subcatagory', $subcatagory)
        ->with('sub2catagory', $sub2catagory);

    }

    public function DotdShow() {
      $dotds = Dotd::all();
      $products = Product::all();
      return view('admin.adminDotd')
        ->with('products', $products)
        ->with('dotds', $dotds);
    }

    public function DotdAdd($id) {
      $dotd = new Dotd;
      $dotd->products_id = $id;
      $dotd->save();

      return redirect()->back();
    }

    public function DotdDelete($id) {
      $dotd = DB::table('dotds')
        ->where('products_id', $id)
        ->delete();

      return redirect()->route('admin.dotd');
    }

    public function DotdShowCatagory() {
      $catagories = Catagory::all();

      return view('admin.adminDotdCatagory')
       ->with('catagories', $catagories);
    }

    public function DotdShowProduct($id) {
      $products = DB::table('products')
        ->where('catagories_id', $id)
        ->where('action', 'live')
        ->get();
      $dotds = Dotd::all();

      return view('admin.adminDotdAdd')
        ->with('products', $products)
        ->with('dotds', $dotds);
    }


    //You May Like Section
    public function YmlShow() {
      $ymls = Yml::all();
      $products = Product::all();
      return view('admin.adminYml')
        ->with('products', $products)
        ->with('ymls', $ymls);
    }

    public function YmlAdd($id) {
      $yml = new Yml;
      $yml->products_id = $id;
      $yml->save();

      return redirect()->back();
    }

    public function YmlDelete($id) {
      $yml = DB::table('ymls')
        ->where('products_id', $id)
        ->delete();

      return redirect()->route('admin.yml');
    }

    public function YmlShowCatagory() {
      $catagories = Catagory::all();

      return view('admin.adminYmlCatagory')
       ->with('catagories', $catagories);
    }

    public function YmlShowProduct($id) {
      $products = DB::table('products')
        ->where('catagories_id', $id)
        ->where('action', 'live')
        ->get();
      $ymls = Yml::all();

      return view('admin.adminYmlAdd')
        ->with('products', $products)
        ->with('ymls', $ymls);
    }

    //Top Offers
    public function ToShow() {
      $tos = To::all();
      $products = Product::all();
      return view('admin.adminTo')
        ->with('products', $products)
        ->with('tos', $tos);
    }

    public function ToAdd($id) {
      $to = new To;
      $to->products_id = $id;
      $to->save();

      return redirect()->back();
    }

    public function ToDelete($id) {
      $to = DB::table('tos')
        ->where('products_id', $id)
        ->delete();

      return redirect()->route('admin.to');
    }

    public function ToShowCatagory() {
      $catagories = Catagory::all();

      return view('admin.adminToCatagory')
       ->with('catagories', $catagories);
    }

    public function ToShowProduct($id) {
      $products = DB::table('products')
        ->where('catagories_id', $id)
        ->where('action', 'live')
        ->get();
      $tos = To::all();

      return view('admin.adminToAdd')
        ->with('products', $products)
        ->with('tos', $tos);
    }

    //Fouthsection
    public function FourthsecShow() {
      $fourthsecs = Fourthsec::all();
      $products = Product::all();
      return view('admin.adminFourthsec')
        ->with('products', $products)
        ->with('fourthsecs', $fourthsecs);
    }

    public function FourthsecAdd($id) {
      $fourthsec = new Fourthsec;
      $fourthsec->products_id = $id;
      $fourthsec->save();

      return redirect()->back();
    }

    public function FourthsecDelete($id) {
      $fourthsec = DB::table('fourthsecs')
        ->where('products_id', $id)
        ->delete();

      return redirect()->route('admin.fourthsec');
    }

    public function FourthsecShowCatagory() {
      $catagories = Catagory::all();

      return view('admin.adminFourthsecCatagory')
       ->with('catagories', $catagories);
    }

    public function FourthsecShowProduct($id) {
      $products = DB::table('products')
        ->where('catagories_id', $id)
        ->where('action', 'live')
        ->get();
      $fourthsecs = Fourthsec::all();

      return view('admin.adminFourthsecAdd')
        ->with('products', $products)
        ->with('fourthsecs', $fourthsecs);
    }


    //Fifthsection
    public function FifthsecShow() {
      $fifthsecs = Fifthsec::all();
      $products = Product::all();
      return view('admin.adminFifthsec')
        ->with('products', $products)
        ->with('fifthsecs', $fifthsecs);
    }

    public function FifthsecAdd($id) {
      $fifthsec = new Fifthsec;
      $fifthsec->products_id = $id;
      $fifthsec->save();

      return redirect()->back();
    }

    public function FifthsecDelete($id) {
      $fifthsec = DB::table('fifthsecs')
        ->where('products_id', $id)
        ->delete();

      return redirect()->route('admin.fifthsec');
    }

    public function FifthsecShowCatagory() {
      $catagories = Catagory::all();

      return view('admin.adminFifthsecCatagory')
       ->with('catagories', $catagories);
    }

    public function FifthsecShowProduct($id) {
      $products = DB::table('products')
        ->where('catagories_id', $id)
        ->where('action', 'live')
        ->get();
      $fifthsecs = Fifthsec::all();

      return view('admin.adminFifthsecAdd')
        ->with('products', $products)
        ->with('fifthsecs', $fifthsecs);
    }


    //Sixthsection
    public function SixthsecShow() {
      $sixthsecs = Sixthsec::all();
      $products = Product::all();
      return view('admin.adminSixthsec')
        ->with('products', $products)
        ->with('sixthsecs', $sixthsecs);
    }

    public function SixthsecAdd($id) {
      $sixthsec = new Sixthsec;
      $sixthsec->products_id = $id;
      $sixthsec->save();

      return redirect()->back();
    }

    public function SixthsecDelete($id) {
      $sixthsec = DB::table('sixthsecs')
        ->where('products_id', $id)
        ->delete();

      return redirect()->route('admin.sixthsec');
    }

    public function SixthsecShowCatagory() {
      $catagories = Catagory::all();

      return view('admin.adminSixthsecCatagory')
       ->with('catagories', $catagories);
    }

    public function SixthsecShowProduct($id) {
      $products = DB::table('products')
        ->where('catagories_id', $id)
        ->where('action', 'live')
        ->get();
      $sixthsecs = Sixthsec::all();

      return view('admin.adminSixthsecAdd')
        ->with('products', $products)
        ->with('sixthsecs', $sixthsecs);
    }

    //Seventh section
    public function SeventhsecShow() {
      $seventhsecs = Seventhsec::all();
      $products = Product::all();
      return view('admin.adminSeventhsec')
        ->with('products', $products)
        ->with('seventhsecs', $seventhsecs);
    }

    public function SeventhsecAdd($id) {
      $seventhsec = new Seventhsec;
      $seventhsec->products_id = $id;
      $seventhsec->save();

      return redirect()->back();
    }

    public function SeventhsecDelete($id) {
      $seventhsec = DB::table('seventhsecs')
        ->where('products_id', $id)
        ->delete();

      return redirect()->route('admin.seventhsec');
    }

    public function SeventhsecShowCatagory() {
      $catagories = Catagory::all();

      return view('admin.adminSeventhsecCatagory')
       ->with('catagories', $catagories);
    }

    public function SeventhsecShowProduct($id) {
      $products = DB::table('products')
        ->where('catagories_id', $id)
        ->where('action', 'live')
        ->get();
      $seventhsecs = Seventhsec::all();

      return view('admin.adminSeventhsecAdd')
        ->with('products', $products)
        ->with('seventhsecs', $seventhsecs);
    }

    //Eight section
    public function EightsecShow() {
      $eightsecs = Eightsec::all();
      $products = Product::all();
      return view('admin.adminEightsec')
        ->with('products', $products)
        ->with('eightsecs', $eightsecs);
    }

    public function EightsecAdd($id) {
      $eightsec = new Eightsec;
      $eightsec->products_id = $id;
      $eightsec->save();

      return redirect()->back();
    }

    public function EightsecDelete($id) {
      $eightsec = DB::table('eightsecs')
        ->where('products_id', $id)
        ->delete();

      return redirect()->route('admin.eightsec');
    }

    public function EightsecShowCatagory() {
      $catagories = Catagory::all();

      return view('admin.adminEightsecCatagory')
       ->with('catagories', $catagories);
    }

    public function EightsecShowProduct($id) {
      $products = DB::table('products')
        ->where('catagories_id', $id)
        ->where('action', 'live')
        ->get();
      $eightsecs = Eightsec::all();

      return view('admin.adminEightsecAdd')
        ->with('products', $products)
        ->with('eightsecs', $eightsecs);
    }





}
