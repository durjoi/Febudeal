<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catagory;

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
      return view('admin.adminCatagory')->with('catagories', $catagories);
    }
    public function addCatagory() {
      return view('admin.adminAddCatagory');
    }
    public function store(Request $request) {

      $request->validate([
          'catagory'=>'required|string',
          'subcatagory'=>'required|string',
        ]);
      $catagory = new Catagory;
      $catagory->catagory = $request->catagory;
      $catagory->subcatagory = $request->subcatagory;
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
      $catagory->save();

      return redirect()->route('admin.catagory');
    }
}
