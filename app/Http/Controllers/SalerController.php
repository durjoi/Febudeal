<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:saler');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Index()
    {
        return view('saler.salerLiveProducts');
    }
    public function Pending()
    {
        return view('saler.salerPendingProducts');
    }
}
