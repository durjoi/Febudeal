@extends('admin.admin')

@section('content')
  <form class="addCatagory" action="{{ route('admin.subcatagory.add', $id) }}" method="post">
    @csrf
    <label for="subcatagory">Sub Catagory Name</label>
    <input type="text" id="subcatagory" name="subcatagory" value="">
    {{-- <input type="text" id="catagory_id" name="catagory_id" value="{{ $id }}"> --}}
    <input type="submit" name="submit" value="submit">
  </form>
@endsection
