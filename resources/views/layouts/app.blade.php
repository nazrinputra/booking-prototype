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
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}" defer></script>
    <script src="{{ asset('assets/js/animation.js') }}" defer></script>
    <script src="{{ asset('assets/js/imagesloaded.js') }}" defer></script>
    <script src="{{ asset('assets/js/custom.js') }}" defer></script>
    <script src="{{ asset('assets/js/index.global.min.js') }}" defer></script>
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
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            @auth
                                <li><a href="/home" class="{{ Route::is('home') ? 'active' : '' }}">Home</a></li>
                            @endauth
                            <li><a href="/categories"
                                    class="{{ Route::is('categories') ? 'active' : '' }}">Categories</a>
                            </li>
                            <li><a href="/rooms" class="{{ Route::is('rooms') ? 'active' : '' }}">Rooms</a></li>
                            <li><a href="/bookings" class="{{ Route::is('bookings') ? 'active' : '' }}">Bookings</a>
                            </li>
                            @guest
                                @if (Route::is('login'))
                                    <li>
                                        <div class="main-white-button"><a href="/register">REGISTER</a></div>
                                    </li>
                                @else
                                    <li>
                                        <div class="main-white-button"><a href="/login">LOGIN</a></div>
                                    </li>
                                @endif
                            @else
                                <li>
                                    <div class="main-white-button">
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            LOGOUT
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
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
                    <div class="about text-center">
                        <div class="logo">
                            <img src="{{ asset('assets/images/black-logo.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-us">
                        <div class="text-center">
                            <h4>Contact Us</h4>
                            <p>Selangor, Malaysia</p>
                            <div>
                                <a href="#">012-345 6789</a>
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
