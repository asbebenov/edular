<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Внутренний сайт ГКБ №34</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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
    <script src="{{ asset('js/jquery-3.6.0.min.js')}}" type="text/javascript" ></script>
    <script src="{{ asset('js/app.js')}}" type="text/javascript" ></script>
    <script src="{{ asset('js/main.js')}}" type="text/javascript" ></script>

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
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="/" class="logo me-auto"><img src="asset{{'img/logo.png'}}" alt=""></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="#hero">Новости</a></li>
          <li><a class="nav-link scrollto" href="page/mis">МИС НСО</a></li>
          <li><a class="nav-link scrollto" href="#services">МИС ФХД</a></li>
          <li><a class="nav-link scrollto" href="#departments">Приказы/Инструкции</a></li>
          <li><a class="nav-link scrollto" href="#doctors">Телемедицина</a></li>
          <li><a class="nav-link scrollto" href="#contact">Регистратура</a></li>
          <li><a class="nav-link scrollto" href="#contact">Бланки</a></li>
          <li><a class="nav-link scrollto" href="#contact">Видео</a></li>
          <li><a class="nav-link scrollto" href="#contact">Кадры</a></li>
          <li><a class="nav-link scrollto" href="#contact">О сайте</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->
  <div class="container">
      @yield('content')
  </div>
</body>

</html>
