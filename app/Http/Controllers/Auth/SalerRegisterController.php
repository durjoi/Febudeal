<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Saler;
use Illuminate\Support\Facades\Hash;

class SalerRegisterController extends Controller
{
  public function __construct()
  {
    $this->middleware('guest:saler');
  }
  public function showRegisterForm()
  {
    return view('auth.saler-register');
  }

  public function store(Request $request)
  {
        // $request->validate([
        //   'username' => 'required|string',
        //   'email' => 'required|string',
        //   'password' => 'required|string',
        // ]);
        $saler = new Saler;
        $saler->username = $request->name;
        $saler->email = $request->email;
        $saler->password = Hash::make($request->password);
        $saler->save();

        return redirect()->route('saler.login');
  }
}
