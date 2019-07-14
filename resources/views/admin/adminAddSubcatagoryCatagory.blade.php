@extends('admin.admin')

@section('content')
  @if (count($catagories)>0)
    <ul>
      @foreach ($catagories as $catagory)
        <li><a href="{{ route('admin.subcatagory.add', $catagory->id)  }}">{{ $catagory->catagory }}</a> </li>
      @endforeach
    </ul>
  @endif
@endsection
