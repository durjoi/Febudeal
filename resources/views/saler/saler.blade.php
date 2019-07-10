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
              <li> <a href="{{ route('product.upload') }}"><i class="fas fa-plus"></i></a> </li>
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
                <li> <a href="{{ route('saler.dashboard') }}"><i class="far fa-list-alt"></i> My Products</a> </li>
                <li> <a href="{{ route('product.upload') }}"><i class="fas fa-upload"></i> Upload Products</a></li>
                <li> <a href="#"><i class="fas fa-list-ul"></i> Active Orders</a> </li>
                <li> <a href="#"><i class="far fa-user"></i> My Profile</a></li>
                <li> <a href="#"><i class="fas fa-file-upload"></i> Post Ads</a></li>
              </ul>
            </aside>
          </div>
          @yield('products')
        </div>
      </div>




    </div>
  @include('pertials.scripts')
  </body>
</html>
