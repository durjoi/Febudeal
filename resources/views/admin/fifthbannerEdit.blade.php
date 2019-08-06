

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
          <div class="col-lg-2 col-md-2 text-left">
            <a href="{{ route('admin.fifthbanner') }}"><i class="fas fa-arrow-left"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="biuf">
      <form class="biuf__form" action="{{ route('admin.fifthbanner.update', $fifthbanner->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="image">Image: </label><br>
        <input type="file" name="image"  required>
        @error('image')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="submit" name="submit" value="Upload">
      </form>
    </div>

  @include('pertials.scripts')
  </body>
</html>
