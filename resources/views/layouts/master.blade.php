<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Febudeal</title>

    @include('pertials.styles')


  </head>
  <body>
    @include('layouts.nav')
    @include('layouts.catagoryNav')

    @yield('content')

    @include('layouts.footer')
  @include('pertials.scripts')
  </body>
</html>
