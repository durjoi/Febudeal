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
      // $request->validate([
      //       'name' => 'required|string',
      //       'email' => 'required|string',
      //       'password' => 'required|string',
      //     ]);
      // $saler = new Saler;
      // $saler->name = $request->name;
      // $saler->email = $request->email;
      // $saler->password = Hash::make($request->password);
      // $saler->save();

      return redirect()->route('admin.catagory');
    }
}
