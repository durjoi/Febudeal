@extends('saler.saler')

@section('products')
  <div class="col-md-10">
    <div class="productsheader">
      <h3>Products</h3>
      <ul>
        <li> <a href="{{ route('saler.dashboard') }}" class="active">Live</a> </li>
        <li> <a href="{{ route('saler.pending') }}" >Pending</a> </li>
        <li> <a href="#">Hold</a> </li>

      </ul>
    </div>



    {{-- @if (count($products)>0) --}}
      @foreach ($products as $product)
          <div class="productsitem">
            <div class="item-top">
              <div class="row">
                <div class="col-md-6">
                  <h4>Product ID: <span>{{ $product->id }}</span></h4>
                  <p class="orderdate">{{ $product->updated_at }}</p>
                </div>
                <div class="col-md-6 text-right">
                  <a href="{{ url($product->link) }}">
                    <button type="button" name="button">Product Details</button>
                  </a>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <img src="{{ url('storage/products/'.$product->image1) }}" alt="">
                @foreach ($catagories as $catagory)
                  @if ($catagory->id == $product->catagories_id)
                    @foreach ($subcatagories as $subcatagory)
                      @if ($subcatagory->id == $product->subcatagories_id)
                        @foreach ($sub2catagories as $sub2catagory)
                          @if ($sub2catagory->id == $product->sub2catagories_id)
                            <p class="productcatagory">
                              {{ $catagory->catagory }} >
                              {{ $subcatagory->subcatagories }} >
                              {{ $sub2catagory->subcatagories2 }}
                            </p>
                          @endif
                        @endforeach
                      @endif
                    @endforeach
                  @endif
                @endforeach
                <h4 class="productname">{{ $product->title }}</h4>
                <p class="productprice"><span>Price:</span> {{ $product->present_price }}
                  <span class="ori_price" style="">
                    {{ $product->original_price }}</span> <span class="price_off ">{{ $product->off_price }}% Off</span>
                </p>
                <p class="brand">Brand: <a href="{{ url($product->brand_url) }}">{{ $product->brand }}</a>  </p>
                {{-- <p class="productqty">Quantity: {{ $product->quantity }} Pices</p> --}}
                {{-- <p class="productqty">Catagory: {{ $product-> }}</p> --}}


              </p>
              </div>
              <div class="col-md-6">
                <ul>
                  <li> <a href="#" class="edit"><i class="far fa-edit"></i> Edit</a> </li>
                  <li> <form class="" action="{{ route('product.delete', $product->id) }}" method="post">
                    @csrf
                    <i class="fas fa-trash-alt"></i><input type="submit" name="submit" value="Delete">
                    </form>
                  </li>

                  <li> <a href="#" class="archieve"><i class="fas fa-archive"></i> Archieve</a> </li>
                </ul>
              </div>
            </div>
          </div>
      @endforeach
    {{-- @else
      <p>No Products Found</p> --}}

  {{-- @endif --}}


  </div>
@endsection
