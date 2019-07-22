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
              <li><a href="{{ route('admin.dotd') }}">DOTD</a> </li>
              <li><a href="{{ route('admin.yml') }}">YML</a> </li>
            </ul>
          </div>
          @yield('content')
        </div>
      </div>
    </div>


  @include('pertials.scripts')
  </body>
</html>
