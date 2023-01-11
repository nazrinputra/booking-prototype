<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Booking System</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-plot-listing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}" defer></script>
    <script src="{{ asset('assets/js/animation.js') }}" defer></script>
    <script src="{{ asset('assets/js/imagesloaded.js') }}" defer></script>
    <script src="{{ asset('assets/js/custom.js') }}" defer></script>
</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                        </a>
                        <!-- ***** Logo End ***** -->
                        @auth
                            <!-- ***** Menu Start ***** -->
                            <ul class="nav">
                                <li><a href="/" class="{{ Route::is('welcome') ? 'active' : '' }}">Home</a></li>
                                <li><a href="/category" class="{{ Route::is('category') ? 'active' : '' }}">Category</a>
                                </li>
                                <li><a href="/listing" class="{{ Route::is('listing') ? 'active' : '' }}">Listing</a></li>
                                <li><a href="/contact" class="{{ Route::is('contact') ? 'active' : '' }}">Contact Us</a>
                                </li>
                                <li>
                                    <div class="main-white-button"><a href="/login">Login</a></div>
                                </li>
                            </ul>
                            <a class='menu-trigger'>
                                <span>Menu</span>
                            </a>
                            <!-- ***** Menu End ***** -->
                        @else
                            <!-- ***** Menu Start ***** -->
                            <ul class="nav">
                                @if (Route::is('login'))
                                    <li>
                                        <div class="main-white-button"><a href="/register">Register</a></div>
                                    </li>
                                @else
                                    <li>
                                        <div class="main-white-button"><a href="/login">Login</a></div>
                                    </li>
                                @endif
                            </ul>
                            <a class='menu-trigger'>
                                <span>Menu</span>
                            </a>
                            <!-- ***** Menu End ***** -->
                        @endauth
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    @yield('content')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about">
                        <div class="logo">
                            <img src="{{ asset('assets/images/black-logo.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-us">
                        <h4>Contact Us</h4>
                        <p>27th Street of New Town, Digital Villa</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="#">010-020-0340</a>
                            </div>
                            <div class="col-lg-6">
                                <a href="#">090-080-0760</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="sub-footer">
                        <p>Copyright © {{ date('Y') }} Laravel. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
