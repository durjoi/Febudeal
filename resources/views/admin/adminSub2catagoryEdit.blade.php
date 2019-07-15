@extends('admin.admin')

@section('content')
  <form class="catagoryUpdate" action="{{ route('admin.sub2catagory.update', $sub2catagory->id) }}" method="post">
    @csrf
    <label for="sub2catagory">Sub Subcatagory Name</label>
    <input type="text" id="sub2catagory" name="sub2catagory" value="{{ $sub2catagory->subcatagories2 }}">
    <input type="submit" name="submit" value="submit">
  </form>
@endsection
