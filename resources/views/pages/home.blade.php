@extends('layouts.master')

@section('content')
  @include('layouts.heroBanner')
  @include('layouts.productSliderOne')
  <!-- Banner Two -->
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
          <div class="bnnrthree__item">
            <img src={{ asset('images/banner1.jpg') }} alt="">
          </div>
        </div>

        <div class="col-md-4">
          <div class="bnnrthree__item">
            <img src={{ asset('images/banner1.jpg') }} alt="">
          </div>
        </div>

        <div class="col-md-4">
          <div class="bnnrthree__item">
            <img src={{ asset('images/banner1.jpg') }} alt="">
          </div>
        </div>
    </div>
  </div>
  <!-- Banner Two End -->

  @include('layouts.productSliderTwo')

  <!-- Banner Three Start -->
  <div class="bnnrfour">
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-3">
            <div class="bnnrthree__item">
              <img src={{ asset('images/banner1.jpg') }} alt="">
            </div>
          </div>

          <div class="col-md-3">
            <div class="bnnrthree__item">
              <img src={{ asset('images/banner1.jpg') }} alt="">
            </div>
          </div>

          <div class="col-md-3">
            <div class="bnnrthree__item">
              <img src={{ asset('images/banner1.jpg') }} alt="">
            </div>
          </div>

          <div class="col-md-3">
            <div class="bnnrthree__item">
              <img src={{ asset('images/banner1.jpg') }} alt="">
            </div>
          </div>
      </div>
    </div>
  </div>
  <!-- Four Banner Three End -->
  <!-- Catagory Panel One Start -->
  <div class="prdcts">
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-6">
              <h2 class="prdcts__title">Top Offers</h2>
          </div>
          <div class="col-md-6 text-right">
            <a href="{{ route('product.sectionthree') }}"> <button type="button" class="prdcts__allbtn">View all</button></a>
          </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="prdcts__slider">

            @php
            $i = 1
            @endphp
            @foreach ($products as $product)
              @if ($i > 7)
                @break
              @endif
              @foreach ($tos as $to)
                @if ($to->products_id == $product->id)
                  <a href="{{ route('product.details', $product->id) }}">
                  <div class="prdcts__item text-center">
                    <div class="img__container">
                      <img src={{ url('storage/products/'.$product->image1) }} alt="#">
                    </div>
                    <h4>{{ $product->title }}</h4>
                    <p class="item__price">{{ $product->price }} BDT</p>
                  </a>
                  </div>
                @endif
              @endforeach
              @php
              $i++
              @endphp
            @endforeach


          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Catagory Panel One End -->
  <!-- Product Section Four Start -->
  <div class="prdcts">
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-6">
              <h2 class="prdcts__title">Mobile Accessories</h2>
          </div>
          <div class="col-md-6 text-right">
              <a href="{{ route('product.sectionfour') }}"> <button type="button" class="prdcts__allbtn">View all</button></a>
          </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="prdcts__slider">

            @php
            $i = 1
            @endphp
            @foreach ($products as $product)
              @if ($i > 7)
                @break
              @endif
              @foreach ($fourthsecs as $fourthsec)
                @if ($fourthsec->products_id == $product->id)
                  <a href="{{ route('product.details', $product->id) }}">
                  <div class="prdcts__item text-center">
                    <div class="img__container">
                      <img src={{ url('storage/products/'.$product->image1) }} alt="#">
                    </div>
                    <h4>{{ $product->title }}</h4>
                    <p class="item__price">{{ $product->price }} BDT</p>
                  </a>
                  </div>
                @endif
              @endforeach
              @php
              $i++
              @endphp
            @endforeach


          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Product Section Four End -->
  <!-- Product Section Five Start -->
  <div class="prdcts">
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-6">
              <h2 class="prdcts__title">Fashion Accessories</h2>
          </div>
          <div class="col-md-6 text-right">
            <a href="{{ route('product.sectionfive') }}"> <button type="button" class="prdcts__allbtn">View all</button></a>
          </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="prdcts__slider">

            @php
            $i = 1
            @endphp
            @foreach ($products as $product)
              @if ($i > 7)
                @break
              @endif
              @foreach ($fifthsecs as $fifthsec)
                @if ($fifthsec->products_id == $product->id)
                  <a href="{{ route('product.details', $product->id) }}">
                  <div class="prdcts__item text-center">
                    <div class="img__container">
                      <img src={{ url('storage/products/'.$product->image1) }} alt="#">
                    </div>
                    <h4>{{ $product->title }}</h4>
                    <p class="item__price">{{ $product->price }} BDT</p>
                  </a>
                  </div>
                @endif
              @endforeach
              @php
              $i++
              @endphp
            @endforeach


          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Product Section Five End -->
  <!-- Product Section Six Start -->
  <div class="prdcts">
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-6">
              <h2 class="prdcts__title"> Home Furnishing Offers </h2>
          </div>
          <div class="col-md-6 text-right">
            <a href="{{ route('product.sectionsix') }}"> <button type="button" class="prdcts__allbtn">View all</button></a>
          </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="prdcts__slider">

            @php
            $i = 1
            @endphp
            @foreach ($products as $product)
              @if ($i > 7)
                @break
              @endif

              @foreach ($sixthsecs as $sixthsec)
                @if ($sixthsec->products_id == $product->id)
                  <a href="{{ route('product.details', $product->id) }}">
                  <div class="prdcts__item text-center">
                    <div class="img__container">
                      <img src={{ url('storage/products/'.$product->image1) }} alt="#">
                    </div>
                    <h4>{{ $product->title }}</h4>
                    <p class="item__price">{{ $product->price }} BDT</p>
                  </a>
                  </div>
                @endif
              @endforeach
              @php
              $i++
              @endphp
            @endforeach


          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Product Section Six End -->


  <!-- Product Section Seven Start -->
  <div class="prdcts">
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-6">
              <h2 class="prdcts__title"> Home Furnishing Offers </h2>
          </div>
          <div class="col-md-6 text-right">
            <a href="{{ route('product.sectionseven') }}"> <button type="button" class="prdcts__allbtn">View all</button></a>
          </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="prdcts__slider">

            @foreach ($products as $product)
              @foreach ($seventhsecs as $seventhsec)
                @if ($seventhsec->products_id == $product->id)
                  <a href="{{ route('product.details', $product->id) }}">
                  <div class="prdcts__item text-center">
                    <div class="img__container">
                      <img src={{ url('storage/products/'.$product->image1) }} alt="#">
                    </div>
                    <h4>{{ $product->title }}</h4>
                    <p class="item__price">{{ $product->price }} BDT</p>
                  </a>
                  </div>
                @endif
              @endforeach
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Product Section Seven End -->

  <!-- Product Section Eight Start -->
  <div class="prdcts">
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-6">
              <h2 class="prdcts__title"> Home Furnishing Offers </h2>
          </div>
          <div class="col-md-6 text-right">
            <a href="{{ route('product.sectioneight') }}"> <button type="button" class="prdcts__allbtn">View all</button></a>
          </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="prdcts__slider">

            @foreach ($products as $product)
              @foreach ($eightsecs as $eightsec)
                @if ($eightsec->products_id == $product->id)
                  <a href="{{ route('product.details', $product->id) }}">
                  <div class="prdcts__item text-center">
                    <div class="img__container">
                      <img src={{ url('storage/products/'.$product->image1) }} alt="#">
                    </div>
                    <h4>{{ $product->title }}</h4>
                    <p class="item__price">{{ $product->price }} BDT</p>
                  </a>
                  </div>
                @endif
              @endforeach
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Product Section Eight End -->

  <!-- Product Section Nine Start -->
  <div class="prdcts">
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-6">
              <h2 class="prdcts__title"> Home Furnishing Offers </h2>
          </div>
          <div class="col-md-6 text-right">
            <a href="{{ route('product.sectionnine') }}"> <button type="button" class="prdcts__allbtn">View all</button></a>
          </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="prdcts__slider">

            @foreach ($products as $product)
              @foreach ($ninthsecs as $ninthsec)
                @if ($ninthsec->products_id == $product->id)
                  <a href="{{ route('product.details', $product->id) }}">
                  <div class="prdcts__item text-center">
                    <div class="img__container">
                      <img src={{ url('storage/products/'.$product->image1) }} alt="#">
                    </div>
                    <h4>{{ $product->title }}</h4>
                    <p class="item__price">{{ $product->price }} BDT</p>
                  </a>
                  </div>
                @endif
              @endforeach
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Product Section Nine End -->
  <!-- Two Banner Start -->
  <div class="bnnrfour">
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-6">
            <div class="bnnrthree__item">
              <img src={{ asset('images/banner2.jpg') }} alt="">
            </div>
          </div>

          <div class="col-md-6">
            <div class="bnnrthree__item">
              <img src={{ asset('images/banner2.jpg') }} alt="">
            </div>
          </div>
      </div>
    </div>
  </div>
  <!-- Two Banner End -->



@endsection
