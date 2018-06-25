
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    @include('dependencies.style')
  </head>

  <body>

    @include('layouts.header')
    <div class="container">
      @yield('content')
    </div>

    @include('layouts.footer')


    @include('dependencies.scripts')
  </body>
</html>
