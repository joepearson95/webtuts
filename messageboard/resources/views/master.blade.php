<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Coffee Aroma - @yield('title')</title>
      <meta content="We Are Coffee Fanatics Established in 2005, Coffee Aroma offers barista-championship standard coffee in Lincoln. Hosting the widest selection of single origin coffee, we offer only the highest quality products and our award-winning experience is demonstrated through the staff that we train. Contributing as a valued member of the world coffee community, we are proud to have worked with some of the most knowledgable people in the industry. We hope you can see and taste the reason why we have been voted one of the top 10 coffee shops in the UK, by The Guardian newspaper. Come and visit us to find a coffee that best suits you, we love to share good coffee." name="descriptison">
      <meta content="coffee, lincoln, aroma, uk, responsive, cafe" name="keywords">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <!-- Favicons -->
      <link href="#" rel="icon">
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">
      <!-- Vendor CSS Files -->
      <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{ asset('vendor/icofont/icofont.min.css')}}" rel="stylesheet">
      <link href="{{ asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
      <link href="{{ asset('vendor/animate.css/animate.min.css')}}" rel="stylesheet">
      <link href="{{ asset('vendor/venobox/venobox.css')}}" rel="stylesheet">
      <!-- Template Main CSS File -->
      <link href="{{ asset('css/style.css')}}" rel="stylesheet">

      <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
      <!-- =======================================================
         * Template Name: Delicious - v2.1.0
         * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
         * Author: BootstrapMade.com
         * License: https://bootstrapmade.com/license/
         ======================================================== -->
   </head>
   <body>
      <!-- ======= Top Bar ======= -->
      <section id="topbar" class="d-none d-lg-flex align-items-center fixed-top topbar-transparent">
         <div class="container text-right">
            <i class="icofont-phone"></i> +44 (0)1522 569 892
            <i class="icofont-twitter"></i> @coffee_aroma
         </div>
      </section>
      <!-- ======= Header ======= -->
      <header id="header" class="fixed-top d-flex align-items-center header-transparent">
         <div class="container d-flex align-items-center">
            <div class="logo mr-auto">
               <h1 class="text-light"><a href="/"><span>Coffee Aroma</span></a></h1>
               <!-- Uncomment below if you prefer to use an image logo -->
               <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>
            <nav class="nav-menu d-none d-lg-block">
               <ul class="text-center">
                  <li class="active"><a href="/">Home</a></li>
                  <li><a href="#about">About</a></li>
                  <li><a href="#menu">Menu</a></li>
                  <li><a href="#events">Events</a></li>
                  <li><a href="#check-table">Check Tables</a></li>
                  <li><a href="#gallery">Gallery</a></li>
                  <li><a href="#contact">Contact</a></li>
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <i class="icofont-shopping-cart"></i><span class="caret"></span></a>
                     <ul class="dropdown-menu dropdown-cart" role="menu">
                        <form id="postForm" name="postForm">
                           <div id="items-in-cart">
                           @if(session()->has('sessionBasket'))
                              @foreach(Session::get('sessionBasket') as $basketItem) 
                                 @foreach($basketItem as $item)
                                    <li id="item-{{ $item[0] }}">
                                       <span class="item">
                                       <span class="item-left">
                                             <span class="item-info">
                                             <span id="item-name">{{ $item[1] }}</span>
                                             <span id="item-price">{{ $item[2] }}</span>
                                             </span>
                                       </span>
                                       <span class="item-right">
                                          <button class="btn btn-danger" onclick="removeItem(this)"><i class="icofont-ui-remove"></i></button>
                                       </span>
                                       </span>
                                    </li>
                                 <hr/> 
                                 @endforeach
                              @endforeach
                           @endif
                           </div>
                           <div id="cart-buttons">
                              <li style="margin-top: 5px;">
                                 <a class="btn btn-success btn-block" href="/checkout" style="color:white;">Checkout</a>
                              </li>
                           </div>
                        </form>
                     </ul>
                  </li> 
                  @guest
                     <li class="check-table"><a href="/account">Account</a></li>
                  @else
                     <li class="check-table"><a href="/account">{{ Auth::user()->name }}</a></li>
                     <li>
                        <a class="check-table" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                           {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           @csrf
                        </form>
                     </li>
                  @endguest
               </ul>
            </nav>
            <!-- .nav-menu -->
         </div>
      </header>
      <!-- End Header -->
        @yield('hero')
      <main id="main">
        @yield('content')
      </main>
      <!-- End #main -->
      <!-- ======= Footer ======= -->
      <footer id="footer">
         <div class="container">
            <h3>Coffee Aroma</h3>
            <p>We are coffee fanatics.</p>
            <div class="social-links">
               <a href="#" class="https://twitter.com/coffee_aroma?lang=en"><i class="bx bxl-twitter"></i></a>
               <a href="#" class="https://www.facebook.com/CoffeeAroma/"><i class="bx bxl-facebook"></i></a>
            </div>
            <div class="copyright">
               &copy; Copyright <strong><span>Coffee Aroma</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
               <!-- created by the below. Removed simply for example -->
               <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
            </div>
         </div>
      </footer>
      <!-- End Footer -->
      <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
      <!-- Vendor JS Files -->
      <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
      <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
      <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
      <script src="{{ asset('vendor/jquery-sticky/jquery.sticky.js') }}"></script>
      <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
      <script src="{{ asset('vendor/venobox/venobox.min.js') }}"></script>
      <!-- Template Main JS File -->
      <script src="{{ asset('js/main.js') }}"></script>
   </body>
</html>