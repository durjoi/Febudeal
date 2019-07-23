<div class="prdcts">
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <h2 class="prdcts__title">Deals of the Day</h2>
        </div>
        <div class="col-md-6 text-right">
          <a href="{{ route('product.sectiontwo') }}"> <button type="button" class="prdcts__allbtn">View all</button></a>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="prdcts__slider" id="slider2">

          @foreach ($products as $product)
            @foreach ($ymls as $yml)
              @if ($yml->products_id == $product->id)
                <a href="{{ route('product.details', $product->id) }}">
                <div class="prdcts__item text-center">
                  <div class="img__container">
                    <img src={{ url('storage/products/'.$product->image1) }} alt="#">
                  </div>
                  <h4>{{ $product->title }}</h4>
                  <p class="item__price">{{ $product->price }} BDT</p>
                </div>
                </a>
              @endif
            @endforeach
          @endforeach



        </div>
        <button class="prdctbtn-left prdctslider-btn slider2-btn-left"><i class="fas fa-chevron-left"></i></button>
        <button class="prdctbtn-right prdctslider-btn slider2-btn-right"><i class="fas fa-chevron-right"></i></button>
      </div>
    </div>
  </div>
</div>
