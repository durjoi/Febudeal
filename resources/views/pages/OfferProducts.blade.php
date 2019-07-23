@extends('layouts.master')

@section('content')
  <div class="prdcts">
    <div class="container-fluid">
      <div class="row">


            @foreach ($products as $product)
              @foreach ($offers as $offer)
                @if ($offer->products_id == $product->id)
                  <div class="col-md-2">
                    <a href="{{ route('product.details', $product->id) }}">
                    <div class="prdcts__item text-center">
                      <div class="img__container">
                        <img src={{ url('storage/products/'.$product->image1) }} alt="#">
                      </div>
                      <h4>{{ $product->title }}</h4>
                      <p class="item__price">{{ $product->price }} BDT</p>
                    </a>
                    </div>
                  </div>

                @endif
              @endforeach
            @endforeach


      </div>
    </div>
  </div>

@endsection
