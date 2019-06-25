<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class SalerLoginController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest:saler');
    }
    public function showLoginForm()
    {
      return view('auth.saler-login');
    }
    public function login(Request $request)
    {
      // Validate the form data
      $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required|min:6'
      ]);

      // attemt to log the user in
      if(Auth::guard('saler')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
      {
        // if successful, then redirect to their intended location
        return redirect()->intended(route('saler.dashboard'));
      }
      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('email', 'remember'));

    }
}
