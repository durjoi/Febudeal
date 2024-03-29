<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Febudeal</title>

    @include('pertials.styles')


</head>
<body>
  <nav class="product__up__nav">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <a href="{{ route('saler.dashboard') }}"><i class="fas fa-arrow-left"></i></a>
          <h1>Febudeal</h1>
        </div>
      </div>
    </div>
  </nav>
  <div class="product__up__wrapper">
    <div class="wrapper__header">
      <h2>Post Your Ad</h2>
    </div>
    <div class="catagory__wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>Select Catagory <i class="fas fa-arrow-right"></i></h2>
            <ul>
              @foreach ($catagories as $catagory)
                <li><a href="{{ route('product.subcatagory', $catagory->id) }}">{{ $catagory->catagory }}</a> </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>

  @include('pertials.scripts')
</body>
</html>
