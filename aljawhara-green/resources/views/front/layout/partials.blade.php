<!DOCTYPE html >
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Aljawhara green</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('front/img/bg-img/bg.png')}}">
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{asset('front/style.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap-rtl.css')}}">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="{{asset('front/img/bg-img/bg.png')}}" alt="">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- ***** Navbar Area ***** -->
        <div class="alazea-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="alazeaNav">

                        <!-- Nav Brand -->
                        <a href="index.html" class="nav-brand"><img src="{{asset('front/img/bg-img/bg.png')}}" width="110px" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Navbar Start -->
                            <div class="classynav">
                                <ul> <li><a href="{{route('index')}}">الرئيسية</a></li>
                                    <li><a href="{{route('aboutus')}}">من نحن</a></li>
                                    <li><a href="{{route('services')}}">خدماتنا</a></li>
                                    <li><a href="{{route('contactus')}}">تواصل معنا</a></li>
                                </ul>



                            </div>
                            <!-- Navbar End -->
                        </div>
                    </nav>

                    <!-- Search Form -->
                    <div class="search-form">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
                            <button type="submit" class="d-none"></button>
                        </form>
                        <!-- Close Icon -->
                        <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- ##### Header Area End ##### -->









    @yield('content')





    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area bg-img" style="background-image: url(front/img/bg-img/3.jpg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-footer-widget">
                            <div class="footer-logo mb-30">
                                <a href="#"><img src="{{asset('font/img/bg-img/bg.png')}}" width="80px" alt=""></a>
                            </div>
                            <p>
                                نسعى في مؤسستنا لتوفير جميع الخدمات الزراعية ذات الجودة العالية بأسعار تنافسية لعملائنا, حيث نملك في مؤسستنا أفضل المهندسين والعمالة المدربة في الخدمات الزراعية من أجل مواكبة التطور الزراعي وتوفير أفضل الخدمات الزراعي
                            </p>
                            <div class="social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>الصفحات </h5>
                            </div>
                            <nav class="widget-nav">
                                <ul> <li><a href="{{route('index')}}">الرئيسية</a></li>
                                    <li><a href="{{route('aboutus')}}">من نحن</a></li>
                                    <li><a href="{{route('services')}}">خدماتنا</a></li>
                                    <li><a href="{{route('contactus')}}">تواصل معنا</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>



                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>بيانات التواصل</h5>
                            </div>

                            <div class="contact-information">
                                <p><span>Address:</span> 505 Silk Rd, New York</p>
                                <p><span>Phone:</span> +1 234 122 122</p>
                                <p><span>Email:</span> info.deercreative@gmail.com</p>
                                <p><span>Open hours:</span> Mon - Sun: 8 AM to 9 PM</p>
                                <p><span>Happy hours:</span> Sat: 2 PM to 4 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="border-line"></div>
                    </div>
                    <!-- Copywrite Text -->
                    <div class="copywrite-text m-auto">
                        <p>&copy;
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    <!-- Footer Nav -->

                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{asset('front/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('front/js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('front/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('front/js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('front/js/active.js')}}"></script>
</body>

</html>