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
        <td>
          <form class="inline-form" action="{{ route('admin.catagory.delete', $catagory->id) }}" method="post">
          {{ csrf_field() }}
          <input type="submit" value="Delete" class="">
        </form>
        <a href="/admin/catagory/edit/{{ $catagory->id }}"><button type="button" name="button"> edit</button></a> </td>
      </tr>
    @endforeach
  </table>
@endsection
