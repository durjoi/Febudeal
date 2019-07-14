<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catagory;
use App\Subcatagory;
use App\Sub2catagory;

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
    public function addCatagory() {
      return view('admin.adminAddCatagory');
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

    public function editCatagory($id) {
      $catagory = Catagory::find($id);
      return view('admin.adminCatagoryEdit')->with('catagory', $catagory);
    }

    public function upadateCatagory(Request $request, $id) {
      $request->validate([
          'catagory'=>'required|string',
        ]);
      $catagory = Catagory::find($id);
      $catagory->catagory = $request->catagory;
      $catagory->save();

      return redirect()->route('admin.catagory');
    }

    public function showCatagoryForSubcatagory() {
      $catagories = Catagory::all();
      return view('admin.adminAddSubcatagoryCatagory')->with('catagories', $catagories);
    }
}
