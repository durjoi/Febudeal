<div class="container-fluid hero-banner">
  <div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12 col-12">
      <div class="hero-bnr">
        <button class="btn-left slider-btn"><i class="fas fa-chevron-left"></i></button>
        <div class="bnr-slider">
          @foreach ($herobanners as $herobanner)
            <img src={{ url('storage/banners/'.$herobanner->images) }} alt="slider">
          @endforeach

          {{-- <img src={{ asset('images/slider1.jpg') }} alt="slider2">
          <img src={{ asset('images/slider1.jpg') }} alt="slider3"> --}}
        </div>
        <button class="btn-right slider-btn"><i class="fas fa-chevron-right"></i></button>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid hero-banner-mobile">
  <div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12 col-12">
      <div class="mobile__hero__banner">
        <img src={{ asset('images/bannerthree.jpg') }} alt="slider3">
      </div>
    </div>
  </div>
</div>
