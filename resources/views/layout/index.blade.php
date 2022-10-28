<!DOCTYPE html>
<html lang="en">
<head>    
  @include('layout.head')
</head>
<body>
  
@include('layout.header')
  <section>
  
@include('layout.sidebar')
@yield('content')
</section>
@include('layout.footer')
</body>
</html>
