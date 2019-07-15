@extends('admin.admin')

@section('content')
  <form class="catagoryUpdate" action="{{ route('admin.subcatagory.update', $subcatagory->id) }}" method="post">
    @csrf
    <label for="subcatagory">Subcatagory Name</label>
    <input type="text" id="subcatagory" name="subcatagory" value="{{ $subcatagory->subcatagory }}">
    <input type="submit" name="submit" value="submit">
  </form>
@endsection
