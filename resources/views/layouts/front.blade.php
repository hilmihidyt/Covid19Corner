<!doctype html>
<html lang="en">
<head>
  <title>{{ $general->title }}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    

  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/font/flaticon.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon-covid/font/flaticon.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/aos.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">

  <!-- Favicons -->
  <link href="{{asset('storage/' . $general->favicon)}}" rel="icon">
  @yield('styles')
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    
    <header class="site-navbar light js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
            <div class="mb-0 site-logo">
              @if (!empty($general->logo))     
              <a href="/" class="mb-0">
                <img src="{{ asset('storage/'.$general->logo) }}" alt="" class="img-fluid">
              </a>
              @else
              <a href="/" class="mb-0">{{ $general->name }}<span class="text-primary">.</span> </a>
              @endif
            </div>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li {{ request()->is('/') ? 'class=active' : '' }}><a href="/" class="nav-link">Home</a></li>
                <li {{ request()->is('blog') ? 'class=active' : '' }} ><a href="{{ route('blog') }}" class="nav-link">Blog</a></li>
                <li {{ request()->is('hubungi-kami') ? 'class=active' : '' }} ><a href="{{ route('contact') }}" class="nav-link">Hubungi Kami</a></li>
              </ul>
            </nav>
          </div>
          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3 text-black"></span></a></div>
        </div>
      </div>
    </header>

    @yield('content')

    <div class="site-footer">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p class="copyright"><small>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small></p>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

  </div> <!-- .site-wrap -->

  <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('assets/js/aos.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
  <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>

  @stack('scripts')
</body>
</html>