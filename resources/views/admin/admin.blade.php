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
              <li><a href="{{ route('admin.herobanner') }}">Hero Banner</a> </li>
              <li><a href="{{ route('admin.catagory') }}">Catagory</a> </li>
              <li><a href="{{ route('admin.product.show') }}">Product</a> </li>
              <li><a href="{{ route('admin.dotd') }}">{{ $sections[0]->section_one }}</a> </li>
              <li><a href="{{ route('admin.yml') }}">{{ $sections[0]->section_two }}</a> </li>
              <li><a href="{{ route('admin.to') }}">{{ $sections[0]->section_three }}</a> </li>
              <li><a href="{{ route('admin.fourthsec') }}">{{ $sections[0]->section_four }}</a> </li>
              <li><a href="{{ route('admin.fifthsec') }}">{{ $sections[0]->section_five }}</a> </li>
              <li><a href="{{ route('admin.sixthsec') }}">{{ $sections[0]->section_six }}</a> </li>
              <li><a href="{{ route('admin.seventhsec') }}">{{ $sections[0]->section_seven }}</a> </li>
              <li><a href="{{ route('admin.eightsec') }}">{{ $sections[0]->section_eight }}</a> </li>
              <li><a href="{{ route('admin.ninthsec') }}">{{ $sections[0]->section_nine }}</a> </li>
              <li><a href="{{ route('admin.tenthsec') }}">{{ $sections[0]->section_ten }}</a> </li>
              <li><a href="{{ route('admin.section.name.edit') }}">Edit Home Page Section Name</a> </li>
            </ul>
          </div>
          @yield('content')
        </div>
      </div>
    </div>


  @include('pertials.scripts')
  </body>
</html>
