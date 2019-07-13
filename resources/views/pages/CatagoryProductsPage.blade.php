@extends('layouts.master')

@section('content')
  @foreach ($products as $product)
    <div class="prdcts__item text-center">
      <div class="img__container">
        <img src={{ url('storage/products/'.$product->products_image) }} alt="#">
      </div>
      <h4>{{ $product->products_name }}</h4>
      <p class="item__price">{{ $product->price }} BDT</p>
    </div>
  @endforeach
@endsection
