@extends('saler.saler')

@section('products')
  <div class="col-md-10">
    <div class="productsheader">
      <h3>Products</h3>
      <ul>
        <li> <a href="{{ route('saler.dashboard') }}" class="active">Live</a> </li>
        <li> <a href="{{ route('saler.pending') }}">Pending</a> </li>
        <li> <a href="">Hold</a> </li>

      </ul>
    </div>

      <div class="">
        <h1>{{ $product->title }}</h1>
      </div>



  </div>
@endsection
