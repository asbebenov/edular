<html>
  <head>
    <title>App Name - @yield('title')</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    @section('sidebar')
      Это главная боковая панель.
    @show

    <div class="container">
      @yield('content')
    </div>
  </body>
</html>