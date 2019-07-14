@extends('admin.admin')

@section('content')
  @if (count($subcatagories)>0)
    <ul>
      @foreach ($subcatagories as $subcatagory)
        <li><a href="{{ route('admin.sub2catagory.add', $subcatagory->id)  }}">
          {{ $subcatagory->subcatagories }}</a> </li>
      @endforeach
    </ul>
  @endif
@endsection
