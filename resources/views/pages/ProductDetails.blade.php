@extends('layouts.master')

@section('content')
  <div class="product__details">

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2">
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
        </div>
        <div class="col-md-4 text-center">


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

          <a href="#">
            <button type="button" name="button" class="btn_product btn__cart">Add to Cart</button>
          </a>
          <a href="#">
            <button type="button" name="button" class="btn_product btn__buy">Buy Now</button>
          </a>
      </div>
      <div class="col-md-6">
        <div class="product__information">
          <p class="catagory_name">
          @if($catagory != null)
              {{ $catagory->catagory }}
              @if($subcatagory != null)
                > {{ $subcatagory->subcatagories }}
                @if($sub2catagory != null)
                  > {{ $sub2catagory->subcatagories2 }}
                @endif
              @endif
          @endif
          </p>
          {{-- <p>{{ $catagory->catagory }}>{{ $subcatagory->subcatagories }}>{{ $sub2catagory->subcatagories2 }}</p> --}}
          <p class="product__id">Product ID: #{{ $product->id }}</p>
          <h2 class="product__title">{{ $product->title }}</h2>

          <p class="product__price">Price: <span>{{ $product->price }} BDT</span> </p>
          {{-- @if ($product->quantity>0)
            <p class="available">Available</p>
          @else
            <p class="availabel">Out Of Stock</p>
          @endif --}}

        </div>
        <div class="saler_information">
          <h3>Saler Information</h3>
          <div class="saler__info d-flex">
            <img src="{{ url('storage/products/'.$product->image1) }}" alt="">
            <p class="saler_name">Mehedi Hassan Durjoi <br> <span>Member since Jul 2017</span> </p> 
            <p class="saler_joining"></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="product__description">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="des__header">
          <h2 class="product__destitle">Description</h2>
        </div>
      </div>
      <div class="col-md-12">
        <p class="description">{{ $product->description }}</p>
      </div>
    </div>
  </div>
</div>

@endsection
