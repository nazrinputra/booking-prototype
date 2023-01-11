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

    <title>Booking Room Website </title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-plot-listing.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js" defer></script>
    <script src="assets/js/bootstrap.bundle.min.js" defer></script>
    <script src="assets/js/owl-carousel.js" defer></script>
    <script src="assets/js/animation.js" defer></script>
    <script src="assets/js/imagesloaded.js" defer></script>
    <script src="assets/js/custom.js" defer></script>

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
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="main-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top-text header-text">
                        <h6>Over 36,500+ Active Listings</h6>
                        <h2>Find Nearby Places &amp; Things</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <form id="search-form" name="gs" method="submit" role="search" action="#">
                        <div class="row">
                            <div class="col-lg-4 align-self-center">
                                <fieldset>
                                    <label>Date</label>
                                    <input placeholder="Date" type="date" id="example" class="form-control">
                                </fieldset>
                            </div>
                            <div class="col-lg-4 align-self-center">
                                <fieldset>
                                    <select name="price" class="form-select" aria-label="Default select example"
                                        id="chooseCategory" onchange="this.form.click()">
                                        <option value="People" selected>People</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-4">
                                <fieldset>
                                    <button class="main-button"><i class="fa fa-search"></i> Search Now</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="about">
                        <div class="logo">
                            <img src="assets/images/black-logo.png" alt="Plot Listing">
                        </div>
                        <p>If you consider that <a rel="nofollow" href="https://templatemo.com/tm-564-plot-listing"
                                target="_parent">Plot Listing template</a> is useful for your website, please <a
                                rel="nofollow" href="https://www.paypal.me/templatemo" target="_blank">support us</a>
                            a little via PayPal.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="helpful-links">
                        <h4>Helpful Links</h4>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <ul>
                                    <li><a href="#">Categories</a></li>
                                    <li><a href="#">Reviews</a></li>
                                    <li><a href="#">Listing</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Awards</a></li>
                                    <li><a href="#">Useful Sites</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
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
                        <p>Copyright © 2021 Plot Listing Co., Ltd. All Rights Reserved.
                            <br>
                            Design: <a rel="nofollow" href="https://templatemo.com"
                                title="CSS Templates">TemplateMo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
