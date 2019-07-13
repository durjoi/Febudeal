@extends('admin.admin')

@section('content')
  <form class="addCatagory" action="{{ route('admin.catagory.add') }}" method="post">
    @csrf
    <label for="catagory">Catagory Name</label>
    <input type="text" id="catagory" name="catagory" value="">
    <label for="subcatagory"></label>
    <input type="text" id="subcatagory" name="subcatagory" value="">
    <input type="submit" name="submit" value="submit">
  </form>
@endsection
