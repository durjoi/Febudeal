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
          <a href="{{ route('product.catagory') }}"><i class="fas fa-arrow-left"></i></a>
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
            <h2>Select Sub Catagory <i class="fas fa-arrow-right"></i></h2>
            <p class="catagory_path">{{ $catagory->catagory }}</p>
            <ul>
              @foreach ($subcatagories as $subcatagory)
                <li><a href="{{ route('product.sub2catagory', $subcatagory->id) }}">{{ $subcatagory->subcatagories }}</a> </li>
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
