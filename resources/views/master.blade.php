<!DOCTYPE html>
<html lang="en">
<head>
 @include('partials._head')
 @yield('style')
</head>
<body>
  @include('partials._nav')

<div class="container-fluid text-center">
  <div class="row content">
    @yield('content')
  </div>
</div>

<footer class="container-fluid">
  @include('partials._footer')
</footer>
@yield('script')
</body>
</html>
