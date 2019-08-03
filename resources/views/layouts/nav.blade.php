<div class="menubar">
  <div class="container-fluid">
    <div class="row">
      {{-- <div class="col-1 col-sm-1 col-md-1 desktop__hidden padding__zero">
        <button type="button" name="button" class="toggle__button">
          <i class="fas fa-bars"></i>
        </button>
      </div> --}}
      <div class="col-4 col-sm-4 col-md-4 col-lg-2 col-xl-2 padding__zero d-flex">
        <button type="button" name="button" class="toggle__menu desktop__hidden">
          <i class="fas fa-bars"></i>
        </button>
        <div class="menubar__logo">
          <h2><a href="{{ route('index') }}">jossofer</a></h2>
        </div>
      </div>
      <div class=" col-lg-7 col-xl-7 search_hidden">
          <form class="menubar__srcbox" action="#" method="#">
            <div class="search__wrapper">
              <input type="text" name="search" class="srcbox__input" placeholder="Search for products, brands and more">
              <button type="submit" name="submit-btn" class="srcbox__btn"><i class="fas fa-search"></i></button>
            </div>
          </form>
      </div>
      <div class="col-8 col-sm-8 col-md-8 col-lg-3 col-xl-3">
        <div class="menubar__menu">
          <ul>
            @guest
                <li class="nav-item">
                    <a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> <span>Login</span></a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{ route('register') }}"><i class="fas fa-user"></i> <span>Sign Up</span></a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
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
                </li>
            @endguest
            {{-- <li><a href="{{ route('register') }}"><i class="fas fa-user"></i> Sign Up</a></li>
            <li><a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Login</a></li>
            <li><a href="#"><i class="fas fa-shopping-cart"></i> Cart</a></li> --}}
            <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
          </ul>
        </div>
      </div>
    </div>






  </div>
</div>
<div class="mobile_section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <form class="menubar__srcbox" action="#" method="#">
          <div class="mobile_searchbox">
            <input type="text" name="search" class="srcbox__input" placeholder="Search for products, brands and more">
            <button type="submit" name="submit-btn" class="srcbox__btn"><i class="fas fa-search"></i></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="catagory__toggle">
  <div class="container-fluid">
    <div class="row menu__header">
      <div class="col-3 col-sm-3 col-md-3 ">
        <button type="button" name="button" class="toggle__menu desktop__hidden">
          <i class="fas fa-bars"></i>
        </button>
      </div>
        <div class="col-9 col-sm-9 col-md-9  text-right">
        <div class="menubar__logo">
          <h2><a href="{{ route('index') }}">jossofer</a></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-12 col-sm-12">
        @if (count($catagories)>0)
          <ul class="catagory__list">
            @foreach ($catagories as $catagory)
              <li class="catagory__list__item"><i class="fas fa-caret-down toggle__sublist"></i> {{ $catagory->catagory }}
                <ul class="subcatagory__list">
                @foreach ($subcatagories as $subcatagory)
                  @if ($subcatagory->catagories_id == $catagory->id)
                    <li class="subcatagory__list__item">{{ $subcatagory->subcatagories }} <i class="fas fa-caret-down toggle__sub2list"></i>
                      <ul class="sub2catagory__list">
                      @foreach ($sub2catagories as $sub2catagory)
                        @if ($sub2catagory->subcatagories_id == $subcatagory->id)
                          <li class="sub2catagory__list__item">{{ $subcatagory->subcatagories }} </li>
                        @endif
                      @endforeach
                    </ul>
                    </li>
                  @endif
                @endforeach
              </ul>
              </li>
            @endforeach
          </ul>
          <hr>


        @endif
      </div>
    </div>
  </div>
</div>
