<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\HomepageSectionName;

class HomepageSectionNameController extends Controller
{
    public function EditFormShow() {
      $sections = HomepageSectionName::all();

      return view('admin.adminSectionNameEdit')
        ->with('sections', $sections);
    }

    public function UpdateName(Request $request, $id) {
      $name = HomepageSectionName::find($id);
      $name->section_one = $request->section_one;
      $name->section_two = $request->section_two;
      $name->section_three = $request->section_three;
      $name->section_four = $request->section_four;
      $name->section_five = $request->section_five;
      $name->section_six = $request->section_six;
      $name->section_seven = $request->section_seven;
      $name->section_eight = $request->section_eight;
      $name->section_nine = $request->section_nine;
      $name->section_ten = $request->section_ten;
      $name->save();

      return redirect()->route('admin.dashboard');
    }
}
