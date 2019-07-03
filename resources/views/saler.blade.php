<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Saler Dashboard</title>
    @include('pertials.styles')
  </head>
  <body >
    <header class="slrheader">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <h2>Febudeal</h2>
          </div>
          <div class="col-md-6 text-right">
            <ul>
              <li> <a href="#"><i class="far fa-bell"></i></a> </li>
              <li> <a href="#"><i class="far fa-comment-dots"></i></a> </li>
              <li> <a href="#"><i class="fas fa-sign-out-alt"></i></a> </li>
            </ul>
          </div>
        </div>
      </div>
    </header>

    <div class="slrbody">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2">
            <aside class="slrsidebar">
              <h3>My Account</h3>
              <ul>
                <li> <a href="#"><i class="far fa-list-alt"></i> Products</a> </li>
                <li> <a href="#"><i class="fas fa-list-ul"></i> Active Orders</a> </li>
                <li> <a href="#"><i class="far fa-user"></i> My Profile</a></li>
                <li> <a href="#"><i class="fas fa-file-upload"></i> Post Ads</a></li>
              </ul>
            </aside>
          </div>
          <div class="col-md-10">
            <div class="productsheader">
              <h3>Products</h3>
              <ul>
                <li> <a href="#">Pending</a> </li>
                <li> <a href="#">Live</a> </li>
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
        </div>
      </div>




    </div>
  @include('pertials.scripts')
  </body>
</html>
