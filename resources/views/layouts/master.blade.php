<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Febudeal</title>

    @include('pertials.styles')


  </head>
  <body>
    @include('layouts.nav')

    @yield('content')


  @include('pertials.scripts')
  </body>
</html>
