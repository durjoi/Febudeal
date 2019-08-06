<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Herobanner;

class BannerController extends Controller
{

    public function showHerobannerUploadForm() {
      return view('admin.herobannerForm');
    }
    public function HerobannerEdit($id) {
      $herobanner = Herobanner::find($id);
      return view('admin.herobannerEdit')->with('herobanner', $herobanner);
    }
    public function HerobannerDelete($id) {
      $herobanner = Herobanner::find($id)->delete();
      return redirect()->back();
    }
    public function showHerobanner() {
      $banners = Herobanner::alL();

      return view('admin.showHerobanner')->with('banners', $banners);
    }
    public function HerobannerStore(Request $request) {
      $image = $request->file('image');
      $imagename=$image->getClientOriginalName();
      $image->storeAs('public/banners', $imagename);

      $img = new Herobanner;
      $img->images = $imagename;
      $img->save();

      return redirect()->route('admin.herobanner');


    }
    public function HerobannerUpdate(Request $request, $id) {
      $image = $request->file('image');
      $imagename=$image->getClientOriginalName();
      $image->storeAs('public/banners', $imagename);

      $img = Herobanner::find($id);
      $img->images = $imagename;
      $img->save();

      return redirect()->route('admin.herobanner');


    }
}
