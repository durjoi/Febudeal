@extends('layouts.master')

@section('content')

  <div class="catagory_sidebar">
    <div class="catagory_sidebar_img">
      <img src="{{ asset('images/banner2.jpg') }}" alt="">
    </div>
    <div class="catagory_filter">
      <h3 class="filter_header">Filter</h3>
      @if ($side_catagory == 1)
        <a href="{{ route('catagory.all.products') }}"> <button type="button" name="button"><i class="fas fa-times"></i> {{ $catagory->catagory }}</button></a>
      @elseif ($side_subcatagory == 1)
        <a href="{{ route('catagory.all.products') }}"><button type="button" name="button"><i class="fas fa-times"></i> {{ $subcatagory->subcatagories }}</button></a>
      @elseif ($side_sub2catagory == 1)
        <a href="{{ route('catagory.all.products') }}"><button type="button" name="button"><i class="fas fa-times"></i> {{ $sub2catagory->subcatagories2 }}</button></a>
      @endif
    </div>




    <div class="catagory_sidebar_catagory">
      <h4>Catagory</h4>
      <ul>
        @if ($side_catagory == 1 || $side_catagory == 2)


          @foreach ($catagories as $catagory)
            <li class="catagory_list_item"><i class="fas fa-angle-right"></i><a href="{{ route('catagory.products', $catagory->id) }}"> {{ $catagory->catagory }}</a>
              <ul class="subcatagory_list">
                @foreach ($subcatagories as $subcatagory)
                  @if ($subcatagory->catagories_id == $catagory->id)
                    <li class="subcatagory_list_item"><i class="fas fa-angle-right"></i><a href="{{ route('subcatagory.products', $subcatagory->id) }}"> {{ $subcatagory->subcatagories }}</a>
                      <ul class="sub2catagory_list">
                        @foreach ($sub2catagories as $sub2catagory)
                          @if ($sub2catagory->subcatagories_id == $subcatagory->id)
                            <li class="sub2catagory_list_item"><i class="fas fa-angle-right"></i><a href="{{ route('sub2catagory.products', $sub2catagory->id) }}"> {{ $sub2catagory->subcatagories2 }}</a>
                          @endif
                        @endforeach
                      </ul>
                    </li>
                  @endif
                @endforeach
              </ul>
            </li>
          @endforeach


        @elseif($side_subcatagory == 1)
          @foreach ($subcatagories as $subcatagory)
            @if ($catagory[0]->id == $subcatagory->catagories_id)
              <li class="subcatagory_list_item"><i class="fas fa-angle-right"></i><a href="{{ route('subcatagory.products', $subcatagory->id) }}"> {{ $subcatagory->subcatagories }}</a>
                <ul class="sub2catagory_list">
                  @foreach ($sub2catagories as $sub2catagory)
                    @if ($sub2catagory->subcatagories_id == $subcatagory->id)
                      <li class="sub2catagory_list_item"><i class="fas fa-angle-right"></i><a href="{{ route('sub2catagory.products', $sub2catagory->id) }}"> {{ $sub2catagory->subcatagories2 }}</a>
                    @endif
                  @endforeach
                </ul>
              </li>
            @endif
            {{-- <li><a href="#"><i class="fas fa-angle-right"></i> {{ $subcatagory->subcatagories }}</a> </li> --}}
          @endforeach
        @elseif($side_sub2catagory == 1)
          @foreach ($sub2catagories as $sub2catagory)
            @if ($subcatagory[0]->id == $sub2catagory->subcatagories_id)
              <li><i class="fas fa-angle-right"></i><a href="{{ route('sub2catagory.products', $sub2catagory->id) }}"> {{ $sub2catagory->subcatagories2 }}</a> </li>
            @endif
          @endforeach
        @endif


      </ul>
    </div>

    <div class="price_range">
      <h4>Price Range</h4>
      <div id="slider-range"></div>
        <p>
          <input type="text" id="min_amount" name="min_price" value="500" class="min_amount">
          <input type="text" id="max_amount" name="max_price" value="70000" class="max_amount">
        </p>
    </div>
    {{-- <div class="discount">
      <h4>Discount</h4>
        <input type="checkbox" name="discount_checkbox" value="1" class="discount"> <p>Up to 20%</p><br>
        <input type="checkbox" name="discount_checkbox" value="2" class="discount"> <p>21 to 40%</p><br>
        <input type="checkbox" name="discount_checkbox" value="3" class="discount"> <p>41 to 60%</p><br>
        <input type="checkbox" name="discount_checkbox" value="4" class="discount"> <p>61 to 80%</p><br>
        <input type="checkbox" name="discount_checkbox" value="5" class="discount"> <p>More than 80%</p><br>
    </div> --}}
  </div>







  <div class="catagory_products" id="updateDiv">
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

@endsection
