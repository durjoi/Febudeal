@extends('layouts.master')

@section('content')
  @include('layouts.heroBanner')
  @include('layouts.productSliderOne')
  <!-- Three banner Start -->
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
  <!-- Three Banner End -->

  @include('layouts.productSliderTwo')

  <!-- Four Banner Start -->
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
  <!-- Four Banner End -->
  <!-- Catagory Panel One Start -->
  <div class="prdcts">
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-6">
              <h2 class="prdcts__title">Deals of the Day</h2>
          </div>
          <div class="col-md-6 text-right">
            <button type="button" class="prdcts__allbtn">View all</button>
          </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="prdcts__slider">

            <div class="prdcts__item text-center">
              <div class="img__container">
                <img src={{ asset('images/prdct1.jpg') }} alt="#">
              </div>
              <h4>Products Header</h4>
              <p class="item__price">25,000 BDT</p>
              <p class="item__saler">Mehedi Hassan Durjoi</p>
            </div>

            <div class="prdcts__item text-center">
              <div class="img__container">
                <img src={{ asset('images/prdct1.jpg') }} alt="#">
              </div>
              <h4>Products Header</h4>
              <p class="item__price">25,000 BDT</p>
              <p class="item__saler">Mehedi Hassan Durjoi</p>
            </div>

            <div class="prdcts__item text-center">
              <div class="img__container">
                <img src={{ asset('images/prdct1.jpg') }} alt="#">
              </div>
              <h4>Products Header</h4>
              <p class="item__price">25,000 BDT</p>
              <p class="item__saler">Mehedi Hassan Durjoi</p>
            </div>

            <div class="prdcts__item text-center">
              <div class="img__container">
                <img src={{ asset('images/prdct1.jpg') }} alt="#">
              </div>
              <h4>Products Header</h4>
              <p class="item__price">25,000 BDT</p>
              <p class="item__saler">Mehedi Hassan Durjoi</p>
            </div>

            <div class="prdcts__item text-center">
              <div class="img__container">
                <img src={{ asset('images/prdct1.jpg') }} alt="#">
              </div>
              <h4>Products Header</h4>
              <p class="item__price">25,000 BDT</p>
              <p class="item__saler">Mehedi Hassan Durjoi</p>
            </div>

            <div class="prdcts__item text-center">
              <div class="img__container">
                <img src={{ asset('images/prdct1.jpg') }} alt="#">
              </div>
              <h4>Products Header</h4>
              <p class="item__price">25,000 BDT</p>
              <p class="item__saler">Mehedi Hassan Durjoi</p>
            </div>

            <div class="prdcts__item text-center">
              <div class="img__container">
                <img src={{ asset('images/prdct1.jpg') }} alt="#">
              </div>
              <h4>Products Header</h4>
              <p class="item__price">25,000 BDT</p>
              <p class="item__saler">Mehedi Hassan Durjoi</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Catagory Panel One End -->
  <!-- Catagory Panel One Start -->
  <div class="prdcts">
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-6">
              <h2 class="prdcts__title">Deals of the Day</h2>
          </div>
          <div class="col-md-6 text-right">
            <button type="button" class="prdcts__allbtn">View all</button>
          </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="prdcts__slider">

            <div class="prdcts__item text-center">
              <div class="img__container">
                <img src={{ asset('images/prdct1.jpg') }} alt="#">
              </div>
              <h4>Products Header</h4>
              <p class="item__price">25,000 BDT</p>
              <p class="item__saler">Mehedi Hassan Durjoi</p>
            </div>

            <div class="prdcts__item text-center">
              <div class="img__container">
                <img src={{ asset('images/prdct1.jpg') }} alt="#">
              </div>
              <h4>Products Header</h4>
              <p class="item__price">25,000 BDT</p>
              <p class="item__saler">Mehedi Hassan Durjoi</p>
            </div>

            <div class="prdcts__item text-center">
              <div class="img__container">
                <img src={{ asset('images/prdct1.jpg') }} alt="#">
              </div>
              <h4>Products Header</h4>
              <p class="item__price">25,000 BDT</p>
              <p class="item__saler">Mehedi Hassan Durjoi</p>
            </div>

            <div class="prdcts__item text-center">
              <div class="img__container">
                <img src={{ asset('images/prdct1.jpg') }} alt="#">
              </div>
              <h4>Products Header</h4>
              <p class="item__price">25,000 BDT</p>
              <p class="item__saler">Mehedi Hassan Durjoi</p>
            </div>

            <div class="prdcts__item text-center">
              <div class="img__container">
                <img src={{ asset('images/prdct1.jpg') }} alt="#">
              </div>
              <h4>Products Header</h4>
              <p class="item__price">25,000 BDT</p>
              <p class="item__saler">Mehedi Hassan Durjoi</p>
            </div>

            <div class="prdcts__item text-center">
              <div class="img__container">
                <img src={{ asset('images/prdct1.jpg') }} alt="#">
              </div>
              <h4>Products Header</h4>
              <p class="item__price">25,000 BDT</p>
              <p class="item__saler">Mehedi Hassan Durjoi</p>
            </div>

            <div class="prdcts__item text-center">
              <div class="img__container">
                <img src={{ asset('images/prdct1.jpg') }} alt="#">
              </div>
              <h4>Products Header</h4>
              <p class="item__price">25,000 BDT</p>
              <p class="item__saler">Mehedi Hassan Durjoi</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Catagory Panel One End -->
  <!-- Four Banner Start -->
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
  <!-- Four Banner End -->
  <!-- Catagory Panel One Start -->
  <div class="prdcts">
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-6">
              <h2 class="prdcts__title">Deals of the Day</h2>
          </div>
          <div class="col-md-6 text-right">
            <button type="button" class="prdcts__allbtn">View all</button>
          </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="prdcts__slider">

            <div class="prdcts__item text-center">
              <div class="img__container">
                <img src={{ asset('images/prdct1.jpg') }} alt="#">
              </div>
              <h4>Products Header</h4>
              <p class="item__price">25,000 BDT</p>
              <p class="item__saler">Mehedi Hassan Durjoi</p>
            </div>

            <div class="prdcts__item text-center">
              <div class="img__container">
                <img src={{ asset('images/prdct1.jpg') }} alt="#">
              </div>
              <h4>Products Header</h4>
              <p class="item__price">25,000 BDT</p>
              <p class="item__saler">Mehedi Hassan Durjoi</p>
            </div>

            <div class="prdcts__item text-center">
              <div class="img__container">
                <img src={{ asset('images/prdct1.jpg') }} alt="#">
              </div>
              <h4>Products Header</h4>
              <p class="item__price">25,000 BDT</p>
              <p class="item__saler">Mehedi Hassan Durjoi</p>
            </div>

            <div class="prdcts__item text-center">
              <div class="img__container">
                <img src={{ asset('images/prdct1.jpg') }} alt="#">
              </div>
              <h4>Products Header</h4>
              <p class="item__price">25,000 BDT</p>
              <p class="item__saler">Mehedi Hassan Durjoi</p>
            </div>

            <div class="prdcts__item text-center">
              <div class="img__container">
                <img src={{ asset('images/prdct1.jpg') }} alt="#">
              </div>
              <h4>Products Header</h4>
              <p class="item__price">25,000 BDT</p>
              <p class="item__saler">Mehedi Hassan Durjoi</p>
            </div>

            <div class="prdcts__item text-center">
              <div class="img__container">
                <img src={{ asset('images/prdct1.jpg') }} alt="#">
              </div>
              <h4>Products Header</h4>
              <p class="item__price">25,000 BDT</p>
              <p class="item__saler">Mehedi Hassan Durjoi</p>
            </div>

            <div class="prdcts__item text-center">
              <div class="img__container">
                <img src={{ asset('images/prdct1.jpg') }} alt="#">
              </div>
              <h4>Products Header</h4>
              <p class="item__price">25,000 BDT</p>
              <p class="item__saler">Mehedi Hassan Durjoi</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Catagory Panel One End -->
  <!-- Catagory Panel One Start -->
  <div class="prdcts">
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-6">
              <h2 class="prdcts__title">Deals of the Day</h2>
          </div>
          <div class="col-md-6 text-right">
            <button type="button" class="prdcts__allbtn">View all</button>
          </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="prdcts__slider">

            <div class="prdcts__item text-center">
              <div class="img__container">
                <img src={{ asset('images/prdct1.jpg') }} alt="#">
              </div>
              <h4>Products Header</h4>
              <p class="item__price">25,000 BDT</p>
              <p class="item__saler">Mehedi Hassan Durjoi</p>
            </div>

            <div class="prdcts__item text-center">
              <div class="img__container">
                <img src={{ asset('images/prdct1.jpg') }} alt="#">
              </div>
              <h4>Products Header</h4>
              <p class="item__price">25,000 BDT</p>
              <p class="item__saler">Mehedi Hassan Durjoi</p>
            </div>

            <div class="prdcts__item text-center">
              <div class="img__container">
                <img src={{ asset('images/prdct1.jpg') }} alt="#">
              </div>
              <h4>Products Header</h4>
              <p class="item__price">25,000 BDT</p>
              <p class="item__saler">Mehedi Hassan Durjoi</p>
            </div>

            <div class="prdcts__item text-center">
              <div class="img__container">
                <img src={{ asset('images/prdct1.jpg') }} alt="#">
              </div>
              <h4>Products Header</h4>
              <p class="item__price">25,000 BDT</p>
              <p class="item__saler">Mehedi Hassan Durjoi</p>
            </div>

            <div class="prdcts__item text-center">
              <div class="img__container">
                <img src={{ asset('images/prdct1.jpg') }} alt="#">
              </div>
              <h4>Products Header</h4>
              <p class="item__price">25,000 BDT</p>
              <p class="item__saler">Mehedi Hassan Durjoi</p>
            </div>

            <div class="prdcts__item text-center">
              <div class="img__container">
                <img src={{ asset('images/prdct1.jpg') }} alt="#">
              </div>
              <h4>Products Header</h4>
              <p class="item__price">25,000 BDT</p>
              <p class="item__saler">Mehedi Hassan Durjoi</p>
            </div>

            <div class="prdcts__item text-center">
              <div class="img__container">
                <img src={{ asset('images/prdct1.jpg') }} alt="#">
              </div>
              <h4>Products Header</h4>
              <p class="item__price">25,000 BDT</p>
              <p class="item__saler">Mehedi Hassan Durjoi</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Catagory Panel One End -->
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
  @include('layouts.footer')


@endsection
