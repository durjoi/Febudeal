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
            <a href="{{ route('saler.dashboard') }}"><h2>Febudeal</h2></a> 
          </div>
          <div class="col-md-6 text-right">
            <ul>
              {{-- <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li> --}}
              <li><a href="#">{{ Auth::user()->username }}</a>
              <li> <a href="{{ route('product.catagory') }}"><i class="fas fa-plus"></i></a> </li>
              <li> <a href="#"><i class="far fa-bell"></i></a> </li>
              <li> <a href="#"><i class="far fa-comment-dots"></i></a> </li>
              <li> <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i></a> </li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
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
                <li> <a href="{{ route('product.catagory') }}"><i class="fas fa-upload"></i> Upload Products</a></li>
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
