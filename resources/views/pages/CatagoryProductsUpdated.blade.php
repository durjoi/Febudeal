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
