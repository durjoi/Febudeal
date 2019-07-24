<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Febudeal Admin</title>

    @include('pertials.styles')


  </head>
  <body>

    @include('admin.adminNav')

    <div class="admin-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2">
            <ul>
              <li><a href="{{ route('admin.catagory') }}">Catagory</a> </li>
              <li><a href="{{ route('admin.product.show') }}">Product</a> </li>
              <li><a href="{{ route('admin.dotd') }}">Deals of the Day</a> </li>
              <li><a href="{{ route('admin.yml') }}">You May Like</a> </li>
              <li><a href="{{ route('admin.to') }}">Top Offers </a> </li>
              <li><a href="{{ route('admin.fourthsec') }}">Section Four Products </a> </li>
              <li><a href="{{ route('admin.fifthsec') }}">Section Five Products </a> </li>
              <li><a href="{{ route('admin.sixthsec') }}">Section Six Products </a> </li>
              <li><a href="{{ route('admin.seventhsec') }}">Section Seven Products </a> </li>
              <li><a href="{{ route('admin.eightsec') }}">Section Eight Products </a> </li>
            </ul>
          </div>
          @yield('content')
        </div>
      </div>
    </div>


  @include('pertials.scripts')
  </body>
</html>
