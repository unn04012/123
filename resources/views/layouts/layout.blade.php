<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title','Laravel')</title>
  </head>
  <body>
    <ul>
      <li><a href="/welcome">Welcome</a> </li>
      <li><a href="/contact">Contact</a> </li>
      <li><a href="/service">service</a> </li>
    </ul>
    @yield('content')
  </body>
</html>
