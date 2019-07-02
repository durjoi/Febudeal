<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Saler Dashboard</title>
    @include('pertials.styles')
  </head>
  <body>
    <header class="slrdashboard">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 text-right">
            <ul>
              <li> <a href="#"><i class="far fa-bell"></i></a> </li>
              <li> <a href="#"><i class="far fa-comment-dots"></i></a> </li>
              <li> <a href="#"><i class="fas fa-sign-out-alt"></i></a> </li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <div class="lftsidebar">
      <div class="lftsidebar__top">
        <h2>Febudeal</h2>
        <h3 class="sidebar__slrname">Mehedi Hassan Durjoi</h3>
        <p class="sidebar__slremail">m.h.durjoi@gmail.com</p>
        <img class="userimg" src="{{ asset('images/img_avatar.png') }}" alt="">

      </div>
      <div class="leftsidebar__body">
        <ul>
          <li> <a href="#">Dashboard</a> </li>
          <li> <a href="#">Products</a> </li>
          <li> <a href="#">Active Orders</a> </li>
          <li> <a href="#">Profile Update</a></li>
          <li> <a href="#">Post Ads</a></li>
        </ul>
      </div>

      </div>

    </div>


  @include('pertials.scripts')
  </body>
</html>
