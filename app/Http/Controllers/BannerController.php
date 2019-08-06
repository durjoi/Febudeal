<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Herobanner;
use App\Firstbanner;
use App\Secondbanner;
use App\Thirdbanner;
use App\Fourthbanner;
use App\Fifthbanner;

class BannerController extends Controller
{
    //Hero Banner
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

    //First Banner
    public function showFirstbannerUploadForm() {
      return view('admin.firstbannerForm');
    }
    public function FirstbannerEdit($id) {
      $firstbanner = Firstbanner::find($id);
      return view('admin.firstbannerEdit')->with('firstbanner', $firstbanner);
    }
    public function FirstbannerDelete($id) {
      $firstbanner = Firstbanner::find($id)->delete();
      return redirect()->back();
    }
    public function showFirstbanner() {
      $banners = Firstbanner::alL();

      return view('admin.showFirstbanner')->with('banners', $banners);
    }
    public function FirstbannerStore(Request $request) {
      $image = $request->file('image');
      $imagename=$image->getClientOriginalName();
      $image->storeAs('public/banners', $imagename);

      $img = new Firstbanner;
      $img->images = $imagename;
      $img->save();

      return redirect()->route('admin.firstbanner');
    }
    public function FirstbannerUpdate(Request $request, $id) {
      $image = $request->file('image');
      $imagename=$image->getClientOriginalName();
      $image->storeAs('public/banners', $imagename);

      $img = Firstbanner::find($id);
      $img->images = $imagename;
      $img->save();

      return redirect()->route('admin.firstbanner');
    }
    //Second Banner
    public function showSecondbannerUploadForm() {
      return view('admin.secondbannerForm');
    }
    public function SecondbannerEdit($id) {
      $firstbanner = Secondbanner::find($id);
      return view('admin.secondbannerEdit')->with('secondbanner', $secondbanner);
    }
    public function SecondbannerDelete($id) {
      $firstbanner = Secondbanner::find($id)->delete();
      return redirect()->back();
    }
    public function showSecondbanner() {
      $banners = Secondbanner::alL();

      return view('admin.showSecondbanner')->with('banners', $banners);
    }
    public function SecondbannerStore(Request $request) {
      $image = $request->file('image');
      $imagename=$image->getClientOriginalName();
      $image->storeAs('public/banners', $imagename);

      $img = new Secondbanner;
      $img->images = $imagename;
      $img->save();

      return redirect()->route('admin.secondbanner');
    }
    public function SecondbannerUpdate(Request $request, $id) {
      $image = $request->file('image');
      $imagename=$image->getClientOriginalName();
      $image->storeAs('public/banners', $imagename);

      $img = Secondbanner::find($id);
      $img->images = $imagename;
      $img->save();

      return redirect()->route('admin.secondbanner');
    }
}
