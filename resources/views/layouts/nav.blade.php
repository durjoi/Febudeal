<div class="menubar">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <div class="menubar__logo">
          <h2><a href="{{ route('index') }}">Febudeal</a></h2>
        </div>
      </div>
      <div class="col-md-5">
          <form class="menubar__srcbox" action="#" method="#">
            <input type="text" name="search" class="srcbox__input">
            <button type="submit" name="submit-btn" class="srcbox__btn"><i class="fas fa-search"></i></button>
          </form>
      </div>
      <div class="col-md-4">
        <div class="menubar__menu">
          <ul>
            @guest
                <li class="nav-item">
                    <a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Login</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{ route('register') }}"><i class="fas fa-user"></i> Sign Up</a>
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
            <li><a href="#"><i class="fas fa-shopping-cart"></i> Cart</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
