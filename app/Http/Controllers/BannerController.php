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
      $secondbanner = Secondbanner::find($id);
      return view('admin.secondbannerEdit')->with('secondbanner', $secondbanner);
    }
    public function SecondbannerDelete($id) {
      $secondbanner = Secondbanner::find($id)->delete();
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
    //Third Banner
    public function showThirdbannerUploadForm() {
      return view('admin.thirdbannerForm');
    }
    public function ThirdbannerEdit($id) {
      $thirdbanner = Thirdbanner::find($id);
      return view('admin.thirdbannerEdit')->with('thirdbanner', $thirdbanner);
    }
    public function ThirdbannerDelete($id) {
      $thirdbanner = Thirdbanner::find($id)->delete();
      return redirect()->back();
    }
    public function showThirdbanner() {
      $banners = Thirdbanner::alL();

      return view('admin.showThirdbanner')->with('banners', $banners);
    }
    public function ThirdbannerStore(Request $request) {
      $image = $request->file('image');
      $imagename=$image->getClientOriginalName();
      $image->storeAs('public/banners', $imagename);

      $img = new Thirdbanner;
      $img->images = $imagename;
      $img->save();

      return redirect()->route('admin.thirdbanner');
    }
    public function ThirdbannerUpdate(Request $request, $id) {
      $image = $request->file('image');
      $imagename=$image->getClientOriginalName();
      $image->storeAs('public/banners', $imagename);

      $img = Thirdbanner::find($id);
      $img->images = $imagename;
      $img->save();

      return redirect()->route('admin.thirdbanner');
    }
    //Fourth Banner
    public function showFourthbannerUploadForm() {
      return view('admin.fourthbannerForm');
    }
    public function FourthbannerEdit($id) {
      $fourthbanner = Fourthbanner::find($id);
      return view('admin.fourthbannerEdit')->with('fourthbanner', $fourthbanner);
    }
    public function FourthbannerDelete($id) {
      $fourthbanner = Fourthbanner::find($id)->delete();
      return redirect()->back();
    }
    public function showFourthbanner() {
      $banners = Fourthbanner::alL();

      return view('admin.showFourthbanner')->with('banners', $banners);
    }
    public function FourthbannerStore(Request $request) {
      $image = $request->file('image');
      $imagename=$image->getClientOriginalName();
      $image->storeAs('public/banners', $imagename);

      $img = new Fourthbanner;
      $img->images = $imagename;
      $img->save();

      return redirect()->route('admin.fourthbanner');
    }
    public function FourthbannerUpdate(Request $request, $id) {
      $image = $request->file('image');
      $imagename=$image->getClientOriginalName();
      $image->storeAs('public/banners', $imagename);

      $img = Fourthbanner::find($id);
      $img->images = $imagename;
      $img->save();

      return redirect()->route('admin.fourthbanner');
    }
    //Fifth Banner
    public function showFifthbannerUploadForm() {
      return view('admin.fifthbannerForm');
    }
    public function FifthbannerEdit($id) {
      $fifthbanner = Fifthbanner::find($id);
      return view('admin.fifthbannerEdit')->with('fifthbanner', $fifthbanner);
    }
    public function FifthbannerDelete($id) {
      $fifthbanner = Fifthbanner::find($id)->delete();
      return redirect()->back();
    }
    public function showFifthbanner() {
      $banners = Fifthbanner::alL();

      return view('admin.showFifthbanner')->with('banners', $banners);
    }
    public function FifthbannerStore(Request $request) {
      $image = $request->file('image');
      $imagename=$image->getClientOriginalName();
      $image->storeAs('public/banners', $imagename);

      $img = new Fifthbanner;
      $img->images = $imagename;
      $img->save();

      return redirect()->route('admin.fifthbanner');
    }
    public function FifthbannerUpdate(Request $request, $id) {
      $image = $request->file('image');
      $imagename=$image->getClientOriginalName();
      $image->storeAs('public/banners', $imagename);

      $img = Fifthbanner::find($id);
      $img->images = $imagename;
      $img->save();

      return redirect()->route('admin.fifthbanner');
    }
}
