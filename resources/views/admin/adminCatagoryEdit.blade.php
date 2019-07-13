@extends('admin.admin')

@section('content')
  <form class="catagoryUpdate" action="{{ route('admin.catagory.update', $catagory->id) }}" method="post">
    @csrf
    <label for="catagory">Catagory Name</label>
    <input type="text" id="catagory" name="catagory" value="{{ $catagory->catagory }}">
    <label for="subcatagory"></label>
    <input type="text" id="subcatagory" name="subcatagory" value="{{ $catagory->subcatagory }}">
    <input type="submit" name="submit" value="submit">
  </form>
@endsection
