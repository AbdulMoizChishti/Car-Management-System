<?php
require_once "config.php";

if (isset($_REQUEST["submit"])) {

    $Make = $_REQUEST["Make"];
    $Model = $_REQUEST["Model"];
    $IDcar = $_REQUEST["IDcar"];
    $Price = $_REQUEST["Price"];



    $ins = "INSERT INTO car (Make, Model,IDcar,Price) VALUES ('$Make','$Model','$IDcar','$Price')";
    $query1 = mysqli_query($connection, $ins);

    if ($query1) {
        echo "Records Inserted";
    }
}
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="HVAC Template">
    <meta name="keywords" content="HVAC, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">


</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__widget">

            <a href="./Login.php" class="primary-btn">Admin Login</a>
        </div>
        <div class="offcanvas__logo">
            <a href="./index.php"><img src="img/logo.png" alt=""></a>
        </div>
        <nav class="offcanvas__menu mobile-menu">
            <ul>
                <li class="active"><a href="./index.php">Home</a></li>

                <li><a href="./about.php">About</a></li>
                <li><a href="./contact.php">Contact</a></li>
                <li><a href="./Login.php">Admin Login</a></li>

            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <ul class="offcanvas__widget__add">
            <li><i class="fa fa-clock-o"></i> Week day: 08:00 am to 8:00 pm</li>
            <li><i class="fa fa-envelope-o"></i> bilal@gmail.com</li>
        </ul>
        <div class="offcanvas__phone__num">
            <i class="fa fa-phone"></i>
            <span> +92 343 2523439</span>
        </div>
        <div class="offcanvas__social">
            <a href="https://www.facebook.com/" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.twitter.com/" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.google.com/" class="google"><i class="fa fa-google"></i></a>
                            <a href="https://www.skype.com/" class="skype"><i class="fa fa-skype"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul class="header__top__widget">
                            <li><i class="fa fa-clock-o"></i> Week day: 08:00 am to 18:00 pm</li>
                            <li><i class="fa fa-envelope-o"></i> bilal@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="header__top__right">
                            <div class="header__top__phone">
                                <i class="fa fa-phone"></i>
                                <span>+92 343 2523439</span>
                            </div>
                            <div class="header__top__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav">
                        <nav class="header__menu">
                            <ul>
                                <li class="active"><a href="./index.php">Home</a></li>

                                <li><a href="./about.php">About</a></li>
                                <li><a href="./contact.php">Find Car</a></li>
                                <!-- <li><a href="./Login.php">Admin Login</a></li> -->
                            </ul>
                        </nav>
                        <div class="header__nav__widget">
                            <a href="./login.php" class="primary-btn">Admin Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="canvas__open">
            <span class="fa fa-bars"></span>
        </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb End -->
    <div class="breadcrumb-option set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Contact Us</h2>
                        <div class="breadcrumb__links">
                            <a href="./index.php"><i class="fa fa-home"></i> Home</a>
                            <span>Contact Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Begin -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__text">
                        <div class="section-title">
                            <h2>Find Your Dream Car</h2>
                            <p>Let us help u find your dream car.</p>
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="contact__form">
                            <form action="contact.php" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Brand" id="make" name="Make">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Model" id="model" name="Model">
                                    </div>
                                </div>

                                <input type="text" placeholder="ID" id="id" name="IDcar">
                                <input type="text" placeholder="Price" id="price" name="Price">
                                <!-- <textarea placeholder="Your Question"></textarea> -->
                                <button type="submit" class="site-btn" value="submit" name="submit">Submit Now</button>
                                <!-- <a  class="site-btn" href= "http://localhost/phpmyadmin/index.php?route=/sql&server=1&db=cms&table=car&pos=0">admin</a>
                             -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Contact Section End -->

    <!-- Contact Address Begin -->
    <div class="contact-address">
        <div class="container">
            <div class="contact__address__text">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="contact__address__item">
                            <h4>California Showroom</h4>
                            <p>625 Gloria Union, California, United Stated bilal@gmail.com</p>
                            <span> +92 343 2523439</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="contact__address__item">
                            <h4>New York Showroom</h4>
                            <p>8235 South Ave. Jamestown, NewYork bilal@gmail.com</p>
                            <span> +92 343 2523439</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="contact__address__item">
                            <h4>Florida Showroom</h4>
                            <p>497 Beaver Ridge St. Daytona Beach, Florida bilal@gmail.com</p>
                            <span> +92 343 2523439</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Address End -->

    <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="footer__contact">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__contact__title">
                            <h2>Contact Us Now!</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__contact__option">
                            <div class="option__item"><i class="fa fa-phone"></i> +92 343 2523439</div>
                            <div class="option__item email"><i class="fa fa-envelope-o"></i> bilal@gmail.com</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <p>Any questions? Let us know in store at 625 Gloria Union, California, United Stated or call us
                            on +92 343 2523439</p>
                        <div class="footer__social">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="google"><i class="fa fa-google"></i></a>
                            <a href="#" class="skype"><i class="fa fa-skype"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3">
                    <div class="footer__widget">
                        <h5>Infomation</h5>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Purchase</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Payemnt</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Shipping</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Return</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <div class="footer__widget">
                        <h5>Infomation</h5>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Hatchback</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Sedan</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> SUV</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Crossover</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer__brand">
                        <h5>Top Brand</h5>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Abarth</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Acura</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Alfa Romeo</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Audi</a></li>
                        </ul>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i> BMW</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Chevrolet</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Ferrari</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Honda</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>