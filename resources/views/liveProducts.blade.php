<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Saler Dashboard</title>
    @include('pertials.styles')
  </head>
  <body style="background-color: #fff !important">

    <header class="slrdashboard__nav">
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

    <div class="slrproducts__top">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p class="slrproducts__heading">Products</p>
          </div>
          <div class="col-md-6 text-right">
            <div class="slrproducts__menu">
              <ul>
                <li> <a href="#">Live</a> </li>
                <li> <a href="#">Pending</a> </li>
                <li> <a href="#">Upload New</a> </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>


    <div class="slr__sectionheading">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h3>Your Live Products</h3>
            <div class="underline"></div>
            <div class="box"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="slrliveproducts">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Name</th>
                  <th scope="col">Upload Date</th>
                  <th scope="col">Price</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                  <td>@fat</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry the Bird</td>
                  <td>@twitter</td>
                  <td>@twitter</td>
                  <td>@twitter</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>


    <div class="slr__sectionheading">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h3>Your Pending Products</h3>
            <div class="underline"></div>
            <div class="box"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="slrliveproducts">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Name</th>
                  <th scope="col">Upload Date</th>
                  <th scope="col">Price</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                  <td>@fat</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry the Bird</td>
                  <td>@twitter</td>
                  <td>@twitter</td>
                  <td>@twitter</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>






  @include('pertials.scripts')
  </body>
</html>
