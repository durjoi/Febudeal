@extends('layouts.master')

@section('content')
  @include('layouts.heroBanner')
  @include('layouts.productSliderOne')


  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 col-lg-12 col-sm-12 col-12">
        <div class="bnr">
          <button class="bnnr1-btn-left slider-btn"><i class="fas fa-chevron-left"></i></button>
          <div class="bnnr1-slider">
            <img src={{ asset('images/banner3.jpg') }} alt="slider1">
            <img src={{ asset('images/banner3.jpg') }} alt="slider2">
            <img src={{ asset('images/banner3.jpg') }} alt="slider3">
          </div>
          <button class="bnnr1-btn-right slider-btn"><i class="fas fa-chevron-right"></i></button>
        </div>
      </div>
    </div>
  </div>


  <!-- Banner Two -->
  {{-- <div class="bnnrthree">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-sm-6 col-lg-4 padding__zero">
          <div class="bnnrthree__item">
            <img src={{ asset('images/banner3.jpg') }} alt="">
          </div>
        </div>

        <div class="col-md-4 col-sm-6 col-lg-4 padding__zero">
          <div class="bnnrthree__item">
            <img src={{ asset('images/banner3.jpg') }} alt="">
          </div>
        </div>

        <div class="col-md-4 col-sm-6 col-lg-4 padding__zero">
          <div class="bnnrthree__item">
            <img src={{ asset('images/banner3.jpg') }} alt="">
          </div>
        </div>
    </div>
  </div>
  </div> --}}
  <!-- Banner Two End -->

  @include('layouts.productSliderTwo')

  <!-- Banner Three Start -->
  {{-- <div class="bnnrfour">
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-3 col-md-6 padding__zero">
            <div class="bnnrfour__item">
              <img src={{ asset('images/bannerthree.jpg') }} alt="">
            </div>
          </div>

          <div class="col-md-3 col-md-6 padding__zero">
            <div class="bnnrfour__item">
              <img src={{ asset('images/bannerthree.jpg') }} alt="">
            </div>
          </div>

          <div class="col-md-3 col-md-6 padding__zero">
            <div class="bnnrfour__item">
              <img src={{ asset('images/bannerthree.jpg') }} alt="">
            </div>
          </div>

          <div class="col-md-3 col-md-6 padding__zero">
            <div class="bnnrfour__item">
              <img src={{ asset('images/bannerthree.jpg') }} alt="">
            </div>
          </div>
      </div>
    </div>
  </div> --}}

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 col-lg-12 col-sm-12 col-12">
        <div class="bnr">
          {{-- <button class="bnnr1-btn-left slider-btn"><i class="fas fa-chevron-left"></i></button> --}}
          <div class="bnnr4-slider">
            <img src={{ asset('images/bannerthree.jpg') }} alt="slider1">
            <img src={{ asset('images/bannerthree.jpg') }} alt="slider2">
            <img src={{ asset('images/bannerthree.jpg') }} alt="slider3">
            <img src={{ asset('images/bannerthree.jpg') }} alt="slider4">
          </div>
          {{-- <button class="bnnr1-btn-right slider-btn"><i class="fas fa-chevron-right"></i></button> --}}
        </div>
      </div>
    </div>
  </div>
  <!-- Four Banner Three End -->
  <!-- Catagory Panel One Start -->
  <div class="prdcts">
    <div class="container-fluid">
      <div class="row product__title__row">
          <div class="col-md-9 col-lg-9 col-sm-9 col-9 ">
              <h2 class="prdcts__title">{{ $sections[0]->section_three }}</h2>
          </div>
          <div class="col-md-3 col-lg-3 col-sm-3 col-3 text-right">
            <a href="{{ route('product.sectionthree') }}"> <button type="button" class="prdcts__allbtn">View all</button></a>
          </div>
      </div>
      <div class="row">
        {{-- <div class="col-md-12"> --}}
          {{-- <div class="prdcts__slider"> --}}

            @php
            $i = 1
            @endphp
            @foreach ($products as $product)
              @if ($i > 6)
                @break
              @endif
              @foreach ($tos as $to)
                @if ($to->products_id == $product->id)
                  <div class="col-md-3 col-lg-2 col-sm-6 col-6 mobile__products">
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
                    </div>
                    </a>
                  </div>
                @endif
              @endforeach
              @php
              $i++
              @endphp
            @endforeach


          {{-- </div> --}}
        {{-- </div> --}}
      </div>
    </div>
  </div>
  <!-- Catagory Panel One End -->
  <!-- Product Section Four Start -->
  <div class="prdcts">
    <div class="container-fluid">
      <div class="row product__title__row">
          <div class="col-md-9 col-lg-9 col-sm-9 col-9">
              <h2 class="prdcts__title">{{ $sections[0]->section_four }}</h2>
          </div>
          <div class="col-md-3 col-lg-3 col-sm-3 col-3 text-right">
              <a href="{{ route('product.sectionfour') }}"> <button type="button" class="prdcts__allbtn">View all</button></a>
          </div>
      </div>
      <div class="row">
        {{-- <div class="col-md-12"> --}}
          {{-- <div class="prdcts__slider"> --}}

            @php
            $i = 1
            @endphp
            @foreach ($products as $product)
              @if ($i > 6)
                @break
              @endif
              @foreach ($fourthsecs as $fourthsec)
                @if ($fourthsec->products_id == $product->id)
                  <div class="col-md-3 col-lg-2 col-sm-6 col-6 mobile__products">
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
                    </div>
                    </a>
                  </div>
                @endif
              @endforeach
              @php
              $i++
              @endphp
            @endforeach


          {{-- </div> --}}
        {{-- </div> --}}
      </div>
    </div>
  </div>
  <!-- Product Section Four End -->
  <!-- Banner Three Start -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 col-lg-12 col-sm-12 col-12">
        <div class="bnr">
          {{-- <button class="bnnr1-btn-left slider-btn"><i class="fas fa-chevron-left"></i></button> --}}
          <div class="bnnr4-slider">
            <img src={{ asset('images/bannerthree.jpg') }} alt="slider1">
            <img src={{ asset('images/bannerthree.jpg') }} alt="slider2">
            <img src={{ asset('images/bannerthree.jpg') }} alt="slider3">
            <img src={{ asset('images/bannerthree.jpg') }} alt="slider4">
          </div>
          {{-- <button class="bnnr1-btn-right slider-btn"><i class="fas fa-chevron-right"></i></button> --}}
        </div>
      </div>
    </div>
  </div>
  {{-- <div class="bnnrfour">
    <div class="container-fluid">
      <div class="row">
          <div class="col-lg-3 col-md-6 padding__zero">
            <div class="bnnrfour__item">
              <img src={{ asset('images/bannerthree.jpg') }} alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-6 padding__zero">
            <div class="bnnrfour__item">
              <img src={{ asset('images/bannerthree.jpg') }} alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-6 padding__zero">
            <div class="bnnrfour__item">
              <img src={{ asset('images/bannerthree.jpg') }} alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-6 padding__zero">
            <div class="bnnrfour__item">
              <img src={{ asset('images/bannerthree.jpg') }} alt="">
            </div>
          </div>
      </div>
    </div>
  </div> --}}
  <!-- Four Banner Three End -->
  <!-- Product Section Five Start -->
  <div class="prdcts">
    <div class="container-fluid">
      <div class="row product__title__row">
          <div class="col-md-9 col-lg-9 col-sm-9 col-9">
              <h2 class="prdcts__title">{{ $sections[0]->section_five }}</h2>
          </div>
          <div class="col-md-3 col-lg-3 col-sm-3 col-3 text-right">
            <a href="{{ route('product.sectionfive') }}"> <button type="button" class="prdcts__allbtn">View all</button></a>
          </div>
      </div>
      <div class="row">
        {{-- <div class="col-md-12"> --}}
          {{-- <div class="prdcts__slider"> --}}

            @php
            $i = 1
            @endphp
            @foreach ($products as $product)
              @if ($i > 6)
                @break
              @endif
              @foreach ($fifthsecs as $fifthsec)
                @if ($fifthsec->products_id == $product->id)
                  <div class="col-md-3 col-lg-2 col-sm-6 col-6 mobile__products">
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
                    </div>
                    </a>
                  </div>
                @endif
              @endforeach
              @php
              $i++
              @endphp
            @endforeach


          {{-- </div> --}}
        </div>
      {{-- </div> --}}
    </div>
  </div>
  <!-- Product Section Five End -->
  <!-- Product Section Six Start -->
  <div class="prdcts">
    <div class="container-fluid">
      <div class="row product__title__row">
          <div class="col-md-9 col-lg-9 col-sm-9 col-9">
              <h2 class="prdcts__title"> {{ $sections[0]->section_six }} </h2>
          </div>
          <div class="col-md-3 col-lg-3 col-sm-3 col-3 text-right">
            <a href="{{ route('product.sectionsix') }}"> <button type="button" class="prdcts__allbtn">View all</button></a>
          </div>
      </div>
      <div class="row">
        {{-- <div class="col-md-12"> --}}
          {{-- <div class="prdcts__slider"> --}}

            @php
            $i = 1
            @endphp
            @foreach ($products as $product)
              @if ($i > 6)
                @break
              @endif

              @foreach ($sixthsecs as $sixthsec)
                @if ($sixthsec->products_id == $product->id)
                  <div class="col-md-3 col-lg-2 col-sm-6 col-6 mobile__products">
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
                    </div>
                    </a>
                  </div>
                @endif
              @endforeach
              @php
              $i++
              @endphp
            @endforeach


          {{-- </div> --}}
        {{-- </div> --}}
      </div>
    </div>
  </div>
  <!-- Product Section Six End -->

  <!-- Banner Two -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 col-lg-12 col-sm-12 col-12">
        <div class="bnr">
          <button class="bnnr1-btn-left slider-btn"><i class="fas fa-chevron-left"></i></button>
          <div class="bnnr1-slider">
            <img src={{ asset('images/banner3.jpg') }} alt="slider1">
            <img src={{ asset('images/banner3.jpg') }} alt="slider2">
            <img src={{ asset('images/banner3.jpg') }} alt="slider3">
          </div>
          <button class="bnnr1-btn-right slider-btn"><i class="fas fa-chevron-right"></i></button>
        </div>
      </div>
    </div>
  </div>
  {{-- <div class="bnnrthree">
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-4 padding__zero">
          <div class="bnnrthree__item">
            <img src={{ asset('images/banner3.jpg') }} alt="">
          </div>
        </div>

        <div class="col-md-4 padding__zero">
          <div class="bnnrthree__item">
            <img src={{ asset('images/banner3.jpg') }} alt="">
          </div>
        </div>

        <div class="col-md-4 padding__zero">
          <div class="bnnrthree__item">
            <img src={{ asset('images/banner3.jpg') }} alt="">
          </div>
        </div>
    </div>
  </div>
</div> --}}
  <!-- Banner Two End -->

  <!-- Product Section Seven Start -->
  <div class="prdcts">
    <div class="container-fluid">
      <div class="row product__title__row">
          <div class="col-md-9 col-lg-9 col-sm-9 col-9">
              <h2 class="prdcts__title"> {{ $sections[0]->section_seven }} </h2>
          </div>
          <div class="col-md-3 col-lg-3 col-sm-3 col-3 text-right">
            <a href="{{ route('product.sectionseven') }}"> <button type="button" class="prdcts__allbtn">View all</button></a>
          </div>
      </div>
      <div class="row">
        {{-- <div class="col-md-12"> --}}
          {{-- <div class="prdcts__slider"> --}}

            @foreach ($products as $product)
              @php $i = 1 @endphp
              @if ($i > 6)
                @break
              @endif
              @foreach ($seventhsecs as $seventhsec)
                @if ($seventhsec->products_id == $product->id)
                  <div class="col-md-3 col-lg-2 col-sm-6 col-6 mobile__products">
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
                    </div>
                    </a>
                  </div>
                @endif
              @endforeach
              @php $i++ @endphp
            @endforeach

          </div>
        {{-- </div> --}}
      {{-- </div> --}}
    </div>
  </div>
  <!-- Product Section Seven End -->



  <!-- Product Section Eight Start -->
  <div class="prdcts">
    <div class="container-fluid">
      <div class="row product__title__row">
          <div class="col-md-9 col-lg-9 col-sm-9 col-9">
              <h2 class="prdcts__title"> {{ $sections[0]->section_eight }} </h2>
          </div>
          <div class="col-md-3 col-lg-3 col-sm-3 col-3 text-right">
            <a href="{{ route('product.sectioneight') }}"> <button type="button" class="prdcts__allbtn">View all</button></a>
          </div>
      </div>
      <div class="row">
        {{-- <div class="col-md-12"> --}}
          {{-- <div class="prdcts__slider"> --}}

            @foreach ($products as $product)
              @php $i = 1 @endphp
              @if ($i > 6)
                @break
              @endif
              @foreach ($eightsecs as $eightsec)
                @if ($eightsec->products_id == $product->id)
                  <div class="col-md-3 col-lg-2 col-sm-6 col-6 mobile__products">
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
                    </div>
                    </a>
                  </div>
                @endif
              @endforeach
              @php
                $i++
              @endphp
            @endforeach

          {{-- </div> --}}
        {{-- </div> --}}
      </div>
    </div>
  </div>
  <!-- Product Section Eight End -->

  <!-- Product Section Nine Start -->
  <div class="prdcts">
    <div class="container-fluid">
      <div class="row product__title__row">
          <div class="col-md-9 col-lg-9 col-sm-9 col-9">
              <h2 class="prdcts__title"> {{ $sections[0]->section_nine }} </h2>
          </div>
          <div class="col-md-3 col-lg-3 col-sm-3 col-3 text-right">
            <a href="{{ route('product.sectionnine') }}"> <button type="button" class="prdcts__allbtn">View all</button></a>
          </div>
      </div>
      <div class="row">
        {{-- <div class="col-md-12"> --}}
          {{-- <div class="prdcts__slider"> --}}

            @foreach ($products as $product)
              @php $i = 1 @endphp
              @if ($i > 6)
                @break
              @endif
              @foreach ($ninthsecs as $ninthsec)
                @if ($ninthsec->products_id == $product->id)
                  <div class="col-md-3 col-lg-2 col-sm-6 col-6 mobile__products">
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
                    </div>
                    </a>
                  </div>
                @endif
              @endforeach
              @php
                $i++
              @endphp
            @endforeach

          {{-- </div> --}}
        {{-- </div> --}}
      </div>
    </div>
  </div>
  <!-- Product Section Nine End -->
  <!-- Product Section Ten Start -->
  <div class="prdcts">
    <div class="container-fluid">
      <div class="row product__title__row">
          <div class="col-md-9 col-lg-9 col-sm-9 col-9">
              <h2 class="prdcts__title"> {{ $sections[0]->section_ten }} </h2>
          </div>
          <div class="col-md-3 col-lg-3 col-sm-3 col-3 text-right">
            <a href="{{ route('product.sectionten') }}"> <button type="button" class="prdcts__allbtn">View all</button></a>
          </div>
      </div>
      <div class="row">
        {{-- <div class="col-md-12"> --}}
          {{-- <div class="prdcts__slider"> --}}

            @foreach ($products as $product)
              @php $i = 1 @endphp
              @if ($i > 6)
                @break
              @endif
              @foreach ($tenthsecs as $tenthsec)
                @if ($tenthsec->products_id == $product->id)
                  <div class="col-md-3 col-lg-2 col-sm-6 col-6 mobile__products">
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
                    </div>
                    </a>
                  </div>
                @endif
              @endforeach
              @php
                $i++
              @endphp
            @endforeach

          {{-- </div> --}}
        {{-- </div> --}}
      </div>
    </div>
  </div>
  <!-- Product Section Ten End -->
  <!-- Two Banner Start -->
  {{-- <div class="bnnrtwo">
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-6 col-lg-6 col-sm-6 col-6 padding__zero">
            <div class="bnnrtwo__item">
              <img src={{ asset('images/banner2.jpg') }} alt="">
            </div>
          </div>

          <div class="col-md-6 col-lg-6 col-sm-6 col-6 padding__zero">
            <div class="bnnrtwo__item">
              <img src={{ asset('images/banner2.jpg') }} alt="">
            </div>
          </div>
      </div>
    </div>
  </div> --}}
  <!-- Two Banner End -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 col-lg-12 col-sm-12 col-12">
        <div class="bnr">
          {{-- <button class="bnnr1-btn-left slider-btn"><i class="fas fa-chevron-left"></i></button> --}}
          <div class="bnnr2-slider">
            <img src={{ asset('images/bannerthree.jpg') }} alt="slider1">
            <img src={{ asset('images/bannerthree.jpg') }} alt="slider2">
          </div>
          {{-- <button class="bnnr1-btn-right slider-btn"><i class="fas fa-chevron-right"></i></button> --}}
        </div>
      </div>
    </div>
  </div>


@endsection
