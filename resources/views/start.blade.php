
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Внутренний сайт ГКБ №34</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Favicons -->
  <link href="asset{{'img/favicon.png'}}" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> Отдел компьютерного обеспечения Тел. 354-60-24 вн. 333
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <section id="main">
  <header id="header" class="fixed-top">

      <div class="container d-flex align-items-center">

          <a href="/login" class="logo me-auto"><img src="{{ url('storage/img/heart.png') }}" alt="" /></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->
    <div class="row">
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="{{url('page/news')}}">Новости</a></li>
          <li><a class="nav-link scrollto" href="{{url('page/mis')}}">МИС НСО</a></li>
          <li><a class="nav-link scrollto" href="{{url('page/eln')}}">ЭЛН</a></li>
            <li><a class="nav-link scrollto" href="{{url('page/poly')}}">Поликлиника</a></li>
          <li><a class="nav-link scrollto" href="{{url('page/prikaz')}}">Приказы/Инструкции</a></li>
            <li><a class="nav-link scrollto" href="{{url('page/blank')}}">Бланки</a></li>
            <li><a class="nav-link scrollto" href="{{url('page/video')}}">Видео</a></li>
          <li><a class="nav-link scrollto" href="{{url('page/telemed')}}">Телемедицина</a></li>
          <li><a class="nav-link scrollto" href="{{url('kadr/?id=ok')}}">Кадры</a></li>
          <li><a class="nav-link scrollto" href="{{url('about')}}">О сайте</a></li>
        </ul>
      </nav><!-- .navbar -->
    </div>
    @if(\Illuminate\Support\Facades\Auth::check())
    <div class="row ml-5">
        <div class="dropdown">
            <a class="btn btn-danger btn-sm border-danger" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                IT zone
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="/pc">Список ПК</a></li>
                <li><a class="dropdown-item" href="/move">Журнал перемещений</a></li>
                <li><a class="dropdown-item" href="#">Админка сайта</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="javascript:void 0" onclick="$('#logout-form').submit();">Выход</a></li>
            </ul>
        </div>
    </div>
    @endif
    </div>
  </header>

  </section>

  <section id="cta">

 <div align="center"  class=@yield('divtype')>

        @yield('content')

 </div>

  </section>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
  </form>
  <script src="{{ asset('js/jquery-3.6.0.min.js')}}" type="text/javascript" ></script>
  <script src="{{ asset('js/app.js')}}" type="text/javascript" ></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="{{ asset('js/main.js')}}" type="text/javascript" ></script>
  <script src="{{ asset('js/myengine.js')}}" type="text/javascript" ></script>
  <script src="{{ asset('js/findpc.js')}}" type="text/javascript" ></script>
</body>

</html>
