@extends('saler.saler')

@section('products')
  <div class="col-md-10">
    <div class="productsheader">
      <h3>Products</h3>
      <ul>
        <li> <a href="{{ route('saler.dashboard') }}">Live</a> </li>
        <li> <a href="{{ route('saler.pending') }}" class="active">Pending</a> </li>
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
                  <a href="/saler/product/{{ $product->id }}">
                    <button type="button" name="button">Product Details</button>
                  </a>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <img src="{{ url('storage/products/'.$product->image1) }}" alt="">
                <h4 class="productname">{{ $product->title }}</h4>
                <p class="productprice"><span>Product Price:</span> {{ $product->price }}</p>
                <p class="productqty">Quantity: {{ $product->quantity }} Pices</p>
                {{-- <p class="productqty">Catagory: {{ $product-> }}</p> --}}
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

              </p>
              </div>
              <div class="col-md-6">
                <ul>
                  <li> <a href="#" class="edit"><i class="far fa-edit"></i> Edit</a> </li>
                  <li> <a href="#" class="delete"><i class="fas fa-trash-alt"></i> Delete</a> </li>
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
