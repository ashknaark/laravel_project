<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Revolve - Personal Magazine blog Template</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Favicon-->
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">

    <!-- THEME CSS
    ================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Themify -->
    <link rel="stylesheet" href="/plugins/themify/css/themify-icons.css">
    <link rel="stylesheet" href="/plugins/slick-carousel/slick-theme.css">
    <link rel="stylesheet" href="/plugins/slick-carousel/slick.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="/plugins/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/plugins/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="/plugins/magnific-popup/magnific-popup.css">
    <!-- manin stylesheet -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/fonts.css">
</head>

<body>



<header class="header-top bg-grey justify-content-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2 header-left col-md-4 col-7">
                <ul class="list-inline header-socials-2 mb-0 text-center">
                    <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="ti-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="ti-pinterest"></i></a></li>
                    <li class="list-inline-item">
                        <div class="search_toggle mobile-search d-md-block d-lg-none"><i class="ti-search"></i></div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-8 text-center col-md-8 col-5">
                <nav class="navbar navbar-expand-lg navigation">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
                            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="ti-menu"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarContent">
                        <ul id="menu" class="menu navbar-nav mx-auto ">
                            <li class="nav-item dropdown">
                                <a class="nav-link " href="{{route("home")}}" >
                                    خانه
                                </a>
                            </li>

                            <li class="nav-item"><a href="{{route("about")}}" class="nav-link">درباره سایت</a></li>
                            <li class="nav-item"><a href="{{route("contact")}}" class="nav-link">ارتباط با ما</a></li>
                            <li class="nav-item"><a href="{{route("login")}}" class="nav-link">ورود</a></li>
                            <li class="nav-item"><a href="{{route("register")}}" class="nav-link">ثبت نام</a></li>
                            @if(auth()->user())
                                <li class="nav-item"><a href="" class="nav-link">{{auth()->user()->name}}</a></li>

                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('logout') }}"
                                     onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                      خروج
                                  </a>

                              </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    {{ csrf_field() }}
                                </form>




                            @endif




                        </ul>
                    </div>
                </nav>
            </div>

            <div class="col-lg-2">
                <div class="text-right search">
                    <div class="search_toggle d-none d-lg-block"><i class="ti-search"></i></div>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="header-logo py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <a class="navbar-brand" href="#"><img src="/images/logo.png" alt="" class="img-fluid"></a>
            </div>
        </div>
    </div>
</div>


<!--search overlay start-->
<div class="search-wrap">
    <div class="overlay">
        <form action="#" class="search-form">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-9">
                        <input type="text" class="form-control" placeholder="Search..." />
                    </div>
                    <div class="col-md-2 col-3 text-right">
                        <div class="search_toggle toggle-wrap d-inline-block">
                            <i class="ti-close"></i>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!--search overlay end-->

@yield("banner")
@yield("single")
@yield("about")
@yield("contact")



<section class="section-padding pt-4">
    <div class="container">
        <div class="row">
            @yield("left_sidebar")
           @yield("right_sidebar")
        </div>
    </div>
</section>

<section class="footer-2 section-padding gray-bg pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="widget footer-widget mb-5 mb-lg-0">
                    <h5 class="widget-title text-uppercase letter-spacing-2 mb-4">About me</h5>
                    <img src="/images/about.jpg" alt="" class="img-fluid">
                    <p class="mt-4">It is the best selling Blog & Magazine html Theme of this year on Themefisher.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="widget footer-widget mb-5 mb-lg-0">
                    <h5 class="widget-title text-uppercase letter-spacing-2 mb-4">Trending</h5>

                    <div class="media pb-3 sidebar-post-item">
                        <a href="#"><img class="mr-4" src="/images/news/thumb-1.jpg" alt=""></a>
                        <div class="media-body">
                            <span class="text-uppercase font-sm font-extra letter-spacing"> Travel</span>
                            <h4 class="mt-1"><a href="blog-single.html">Thoughtful living in los Angeles</a></h4>
                        </div>
                    </div>

                    <div class="media py-3 sidebar-post-item">
                        <a href="#"><img class="mr-4" src="/images/news/thumb-2.jpg" alt=""></a>
                        <div class="media-body">
                            <span class="text-uppercase font-sm font-extra letter-spacing"> Travel</span>
                            <h4 class="mt-1"><a href="blog-single.html">Vivamus molestie gravida turpis.</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="widget footer-widget">
                    <h5 class="widget-title text-uppercase letter-spacing-2 mb-4">Gallery</h5>

                    <div class="row no-gutters">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                            <a href="#"><img class="img-fluid" src="/images/f1.jpg" alt="" /></a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6  col-6">
                            <a href="#"><img class="img-fluid" src="/images/f2.jpg" alt="" /></a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6  col-6">
                            <a href="#"><img class="img-fluid" src="/images/f3.jpg" alt="" /></a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6  col-6">
                            <a href="#"><img class="img-fluid" src="/images/f4.jpg" alt="" /></a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6  col-6">
                            <a href="#"><img class="img-fluid" src="/images/f2.jpg" alt="" /></a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6  col-6">
                            <a href="#"><img class="img-fluid" src="/images/f3.jpg" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-btm mt-5 pt-4 border-top">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline footer-socials-2 text-center">
                        <li class="list-inline-item"><a href="#">Privacy policy</a></li>
                        <li class="list-inline-item"><a href="#">Support</a></li>
                        <li class="list-inline-item"><a href="#">About</a></li>
                        <li class="list-inline-item"><a href="#">Contact</a></li>
                        <li class="list-inline-item"><a href="#">Terms</a></li>
                        <li class="list-inline-item"><a href="#">Category</a></li>
                    </ul>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="copyright text-center ">
                        @ copyright all reserved to <a href="https://themefisher.com/">themefisher.com</a>-2019 Distribution

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- THEME JAVASCRIPT FILES
================================================== -->
<!-- initialize jQuery Library -->
<script src="/plugins/jquery/jquery.js"></script>
<!-- Bootstrap jQuery -->
<script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="/plugins/bootstrap/js/popper.min.js"></script>
<!-- Owl caeousel -->
<script src="/plugins/owl-carousel/owl.carousel.min.js"></script>
<script src="/plugins/slick-carousel/slick.min.js"></script>
<script src="/plugins/magnific-popup/magnific-popup.js"></script>
<!-- Instagram Feed Js -->
<script src="/plugins/instafeed-js/instafeed.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="/plugins/google-map/gmap.js"></script>
<!-- main js -->
<script src="/js/custom.js"></script>


</body>

</html>
