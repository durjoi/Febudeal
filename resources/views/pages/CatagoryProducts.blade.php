@extends('layouts.master')

@section('content')

  <div class="catagory_sidebar">
    <div class="catagory_sidebar_img">
      <img src="{{ asset('images/banner2.jpg') }}" alt="">
    </div>
    <div class="catagory_sidebar_catagory">
      <h4>Catagory</h4>
      <ul>
        @if ($side_catagory == 1)
          @foreach ($catagories as $catagory)
            <li><a href="#"><i class="fas fa-angle-right"></i> {{ $catagory->catagory }}</a> </li>
          @endforeach
        @elseif($side_subcatagory == 1)
          @foreach ($subcatagories as $subcatagory)
            <li><a href="#"><i class="fas fa-angle-right"></i> {{ $subcatagory->subcatagories }}</a> </li>
          @endforeach
        @elseif($side_sub2catagory == 1)
          @foreach ($sub2catagories as $sub2catagory)
            <li><a href="#"><i class="fas fa-angle-right"></i> {{ $sub2catagory->subcatagories2 }}</a> </li>
          @endforeach
        @endif


      </ul>
    </div>
  </div>




  <div class="catagory_products">
    <div class="container-fluid">
      <div class="row">
        @foreach ($products as $product)
              <div class="col-md-3">
                <a href="{{ url($product->link) }}">
                <div class="prdcts__item text-center">
                  <div class="img__container">
                    <img src={{ url('storage/products/'.$product->image1) }} alt="#">
                  </div>
                  <h4>{{ $product->title }}</h4>

                  <div class="item-price d-flex">
                    <p class="item__price" style=>
                      <img style="height: 13px;width:13px;display:inline-block;" src={{ asset('images/taka.png') }} alt="">
                      {{ $product->present_price }}
                      <span class="original_price">{{ $product->original_price }}</span>
                    </p>
                    <p class="item__price item__brand">{{ $product->brand }}</p>
                  </div>
                </a>
                </div>
              </div>
        @endforeach
      </div>
    </div>
  </div>

  {{-- <div class="prdcts">
    <div class="container-fluid">
      <div class="row">


            @foreach ($products as $product)
                  <div class="col-md-2">
                    <a href="{{ url($product->link) }}">
                    <div class="prdcts__item text-center">
                      <div class="img__container">
                        <img src={{ url('storage/products/'.$product->image1) }} alt="#">
                      </div>
                      <h4>{{ $product->title }}</h4>

                      <div class="item-price d-flex">
                        <p class="item__price" style=>
                          <img style="height: 13px;width:13px;display:inline-block;" src={{ asset('images/taka.png') }} alt="">
                          {{ $product->present_price }}
                          <span class="original_price">{{ $product->original_price }}</span>
                        </p>
                        <p class="item__price item__brand">{{ $product->brand }}</p>
                      </div>
                    </a>
                    </div>
                  </div>
            @endforeach


      </div>
    </div>
  </div> --}}
@endsection
