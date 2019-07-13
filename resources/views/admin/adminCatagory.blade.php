@extends('admin.admin')

@section('content')
  <a href="{{ route('admin.catagory.add') }}">Add New Catagory</a>
  <table>
    <tr>
      <th>Catagory Name</th>
      <th>Subcatagory</th>
      <th>Action</th>
    </tr>
    @foreach ($catagories as $catagory)
      <tr>
        <td>{{ $catagory->catagory }}</td>
        <td>{{ $catagory->subcatagory }}</td>
        <td><a href="#">delete</a> <a href="#">edit</a> </td>
      </tr>
    @endforeach
  </table>
@endsection
