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
    public function storeCatagory(Request $request) {

      $request->validate([
          'catagory'=>'required|string',
        ]);
      $catagory = new Catagory;
      $catagory->catagory = $request->catagory;
      $catagory->save();

      return redirect()->route('admin.catagory');
    }

    public function delete($id) {
        $catagory = Catagory::find($id);
        $catagory->delete();
        return redirect()->route('admin.catagory');
    }

    public function edit($id) {
      $catagory = Catagory::find($id);
      return view('admin.adminCatagoryEdit')->with('catagory', $catagory);
    }

    public function upadate(Request $request, $id) {
      $request->validate([
          'catagory'=>'required|string',
          'subcatagory'=>'required|string',
        ]);
      $catagory = Catagory::find($id);
      $catagory->catagory = $request->catagory;
      $catagory->subcatagory = $request->subcatagory;
      $catagory->sub_subcatagory = $request->sub_subcatagory;
      $catagory->save();

      return redirect()->route('admin.catagory');
    }
}
