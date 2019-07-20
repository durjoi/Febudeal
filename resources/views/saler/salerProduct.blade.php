@extends('saler.saler')

@section('products')
  <div class="col-md-6 d-flex">
    <div class="nav-container">
      <div class="slider-nav">
        <div>
          <img src="{{ url('storage/products/'.$product->image1) }}" alt="">
        </div>
        <div>
          <img src="{{ url('storage/products/'.$product->image2) }}" alt="">
        </div>
        <div>
          <img src="{{ url('storage/products/'.$product->image3) }}" alt="">
        </div>
        <div>
          <img src="{{ url('storage/products/'.$product->image4) }}" alt="">
        </div>
      </div>
    </div>
      <div class="main-container">
        <div class="slider-main">
          <div>
            <img src="{{ url('storage/products/'.$product->image1) }}" alt="">
          </div>
          <div>
            <img src="{{ url('storage/products/'.$product->image2) }}" alt="">
          </div>
          <div>
            <img src="{{ url('storage/products/'.$product->image3) }}" alt="">
          </div>
          <div>
            <img src="{{ url('storage/products/'.$product->image4) }}" alt="">
          </div>
        </div>
      </div>




  </div>
  <div class="col-md-4">
    <div class="product__information">
      <p>{{ $catagory->catagory }}>{{ $subcatagory->subcatagories }}>{{ $sub2catagory->subcatagories2 }}</p>
      <h2>{{ $product->title }}</h2>
      <p>Price: {{ $product->price }} BDT</p>
      <p>Quantity: {{ $product->quantity }}</p>
      <h2>Description:</h2>
      <p>{{ $product->description }}</p>
      <p><form class="" action="{{ route('product.delete', $product->id) }}" method="post">
        @csrf
        <i class="fas fa-trash-alt"></i><input type="submit" name="submit" value="Delete">
        </form></p>
    </div>
  </div>
@endsection
