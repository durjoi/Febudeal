@extends('saler')

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



    <div class="productsitem">
      <div class="item-top">
        <div class="row">
          <div class="col-md-6">
            <h4>Product ID: <span>14566855</span></h4>
            <p class="orderdate">Order Placed on Tue, 15 May 2018</p>
          </div>
          <div class="col-md-6 text-right">
            <button type="button" name="button">Product Details</button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('images/prdct1.jpg') }}" alt="">
          <h4 class="productname">Samsund J7 Max</h4>
          <p class="productprice"><span>Product Price:</span> 20,000 BDT</p>
          <p class="productqty">Quantity: 2 Pices</p>
          <p class="productqty">Catagory: Smart Phone</p>
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

    <div class="productsitem">
      <div class="item-top">
        <div class="row">
          <div class="col-md-6">
            <h4>Product ID: <span>14566855</span></h4>
            <p class="orderdate">Order Placed on Tue, 15 May 2018</p>
          </div>
          <div class="col-md-6 text-right">
            <button type="button" name="button">Product Details</button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('images/prdct1.jpg') }}" alt="">
          <h4 class="productname">Samsund J7 Max</h4>
          <p class="productprice"><span>Product Price:</span> 20,000 BDT</p>
          <p class="productqty">Quantity: 2 Pices</p>
          <p class="productqty">Catagory: Smart Phone</p>
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

    <div class="productsitem">
      <div class="item-top">
        <div class="row">
          <div class="col-md-6">
            <h4>Product ID: <span>14566855</span></h4>
            <p class="orderdate">Order Placed on Tue, 15 May 2018</p>
          </div>
          <div class="col-md-6 text-right">
            <button type="button" name="button">Product Details</button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('images/prdct1.jpg') }}" alt="">
          <h4 class="productname">Samsund J7 Max</h4>
          <p class="productprice"><span>Product Price:</span> 20,000 BDT</p>
          <p class="productqty">Quantity: 2 Pices</p>
          <p class="productqty">Catagory: Smart Phone</p>
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

    <div class="productsitem">
      <div class="item-top">
        <div class="row">
          <div class="col-md-6">
            <h4>Product ID: <span>14566855</span></h4>
            <p class="orderdate">Order Placed on Tue, 15 May 2018</p>
          </div>
          <div class="col-md-6 text-right">
            <button type="button" name="button">Product Details</button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('images/prdct1.jpg') }}" alt="">
          <h4 class="productname">Samsund J7 Max</h4>
          <p class="productprice"><span>Product Price:</span> 20,000 BDT</p>
          <p class="productqty">Quantity: 2 Pices</p>
          <p class="productqty">Catagory: Smart Phone</p>
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

    <div class="productsitem">
      <div class="item-top">
        <div class="row">
          <div class="col-md-6">
            <h4>Product ID: <span>14566855</span></h4>
            <p class="orderdate">Order Placed on Tue, 15 May 2018</p>
          </div>
          <div class="col-md-6 text-right">
            <button type="button" name="button">Product Details</button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('images/prdct1.jpg') }}" alt="">
          <h4 class="productname">Samsund J7 Max</h4>
          <p class="productprice"><span>Product Price:</span> 20,000 BDT</p>
          <p class="productqty">Quantity: 2 Pices</p>
          <p class="productqty">Catagory: Smart Phone</p>
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


  </div>
@endsection
