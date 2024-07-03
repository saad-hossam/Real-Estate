<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Property | Home</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/front/img/favicon.ico')}}" type="image/x-icon">

    <!-- Font awesome -->
    <link href="{{asset('assets/front/css/font-awesome.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('assets/front/css/bootstrap.css')}}" rel="stylesheet">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/slick.css')}}">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/nouislider.css')}}">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="{{asset('assets/front/css/jquery.fancybox.css')}}" type="text/css" media="screen" />
    <!-- Theme color -->
    <link id="switcher" href="{{asset('assets/front/css/theme-color/default-theme.css')}}" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="{{asset('assets/front/css/style.css')}}" rel="stylesheet">


    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body class="aa-price-range">
  <!-- Pre Loader -->
  {{-- <div id="aa-preloader-area">
    <div class="pulse"></div>
  </div> --}}
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start top-header section -->
@include('front.includes.top-header')
  <!-- End top-header section -->

  <!-- Start main header section -->
  @include('front.includes.main-header')
  <!-- End main header section -->

  <!-- Start slider  -->
 @include('front.includes.slider')
  <!-- End slider  -->

  <!-- Advance Search -->
@include('front.includes.search')
  <!-- / Advance Search -->

  <!-- About us -->
 @include('front.includes.about')
  <!-- / About us -->

  <!-- content start -->
  @yield('content')
  <!-- / content end -->


  <!-- Footer -->
 @include('front.includes.footer')
  <!-- / Footer -->

  @include('front.includes.scripts')
  </body>
</html>
