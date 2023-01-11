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
                                <li><a href="/" class="active">Home</a></li>
                                <li><a href="/category">Category</a></li>
                                <li><a href="/listing">Listing</a></li>
                                <li><a href="/contact">Contact Us</a></li>
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
                                @if (Route::is('register'))
                                    <li>
                                        <div class="main-white-button"><a href="/login">Login</a></div>
                                    </li>
                                @elseif (Route::is('login'))
                                    <li>
                                        <div class="main-white-button"><a href="/register">Register</a></div>
                                    </li>
                                @else
                                    <li><a href="/register">Register</a></li>
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

    <div class="main-banner">
        <div class="container">
            <div class="row">
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sub-footer mt-4 text-center">
                    <p>Copyright © 2021 Plot Listing Co., Ltd. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
