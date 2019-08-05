<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Herobanner;

class BannerController extends Controller
{
    public function showHerobannerUploadForm() {
      return view('admin.herobannerForm');
    }
    public function HerobannerStore(Request $request) {
      $image = $request->file('image');
      $imagename=$image->getClientOriginalName();
      $image->storeAs('public/banners', $imagename);

      $img = new Herobanner;
      $img->images = $imagename;
      $img->save();

      return redirect()->route('admin.dashboard');


    }
}
