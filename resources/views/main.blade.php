<!DOCTYPE html>
<html>
<head>
@include('partials._head')
</head>
  <body>
  @include('partials._nav')

    <div class="container">
    @yield('content')
    @yield('partials._footer')
    
  </div>

 @include('partials._javascripts')

    </body>
    </html>
