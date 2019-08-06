

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Febudeal Admin</title>

    @include('pertials.styles')


  </head>
  <body>
    <div class="navbar__banner">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-6 text-left">
            <a href="{{ route('admin.dashboard') }}"><i class="fas fa-arrow-left"></i></a>
          </div>
          <div class="col-lg-6 col-md-6 text-right">
            <a href="{{ route('admin.herobannerUploadForm') }}" class="navbar__banner_btn">Upload New</a>
          </div>
        </div>
      </div>
    </div>

    <div class="banner">
      <div class="containr-fluid">
        @if (count($banners)>0)
          @php
            $i = 1;
          @endphp
          @foreach ($banners as $banner)
            <div class="row">
              <div class="col-md-12 col-lg-12">
                <div class="bannr__position text-center">
                  <p>Banner: {{ $i }}</p>
                  <a href="{{ route('admin.herobanner.edit',$banner->id)  }}">Edit</a>
                  <a href="#"><form class="" action="{{ route('admin.herobanner.delete', $banner->id) }}" method="post">
                    @csrf
                    <input type="submit" name="submit" value="Delete">
                    </form></a>
                </div>
                <img src={{ url('storage/banners/'.$banner->images) }} alt="#">
                <hr>
              </div>
            </div>
            @php
              $i++;
            @endphp
          @endforeach
        @else
          <p>No banner is found</p>
        @endif
        <div class="row">
          <div class="col-md-12 col-lg-12">

          </div>
        </div>
      </div>
    </div>

  @include('pertials.scripts')
  </body>
</html>
