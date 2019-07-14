@extends('admin.admin')

@section('content')
  <form class="addSub2catagory" action="{{ route('admin.sub2catagory.add', $id) }}" method="post">
    @csrf
    <label for="sub2catagory">Sub Catagory Name</label>
    <input type="text" id="sub2catagory" name="sub2catagory" value="">
    {{-- <input type="text" id="catagory_id" name="catagory_id" value="{{ $id }}"> --}}
    <input type="submit" name="submit" value="submit">
  </form>
@endsection
