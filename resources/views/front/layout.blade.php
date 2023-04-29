<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="" />
    <meta name="author" content="" />


    <title>MPS Info Services | Home</title>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/css/bootstrap.min.css')}}">

    <!-- Owl Css -->
    <link rel="stylesheet" href="{{asset('front/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/owl.theme.default.min.css')}}">

    <!-- Doc Theme Css -->
    <link href="{{asset('front/assets/css/docs.theme.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Animate Css -->
    <link href="{{asset('front/assets/css/animate.css')}}" rel="stylesheet" type="text/css" />
    <!-- CUSTOM Css -->
    <link rel="stylesheet" href="{{asset('front/assets/css/custom_style.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/custom__responsive.css')}}">

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- <link
        href="https://web.archive.org/web/20211129202344cs_/https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700"
        rel="stylesheet"> -->
</head>

<body>
    <div class="body__container">
        <!--================== Header Start=================-->
        <header>
            <div class="header__wrap">
                <nav class="navbar navbar-upper ">
                    <div class="container">
                        <div class=" navbar-collapse" id="navbarNav">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="navbar-nav ">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"> <img src="{{asset('front/assets/images/msg.png')}}" alt=""
                                                    class="envelop_icon img-fluid"> sales@mpsinfoservices.com</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="social   ms-auto">



                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Follow:</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link social-link fb" href="#"><img src="{{asset('front/assets/images/f1.png')}}"
                                                    alt=""></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link social-link twit" href="#"><img src="{{asset('front/assets/images/t2.png')}}"
                                                    alt=""></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>

                <nav class="navbar navbar-bottom navbar-expand-lg navbar-light bg-light">
                    <div class="container">
                        <a class="navbar-brand" href="#"><img src="{{asset('front/assets/images/logo.png')}}" alt=""
                                class="main_logo img-fluid"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{url('/')}}">HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="{{url('/about-us')}}">ABOUT US</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="./services.html">SERVICES</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">PORTFOLIO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">CLIENTS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/contact-us')}}">CONTACT</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!--================== Header End=================-->
    @yield('content')
    <!--Footer start-->
        <footer class="footer_sec">
            <div itemscope itemtype="#">
                <meta itemprop="name" content="MPS Info Services" />
                <meta itemprop="url" content="#" />
            </div>
            <div class="footer_up">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="foot1">
                                <h6>QUICK LINKS</h6>

                                <div class="links">
                                    <ul>

                                        <li><a target="_blank" href="#">About
                                                Us</a></li>
                                        <li><a target="_blank" href="#">Services</a>
                                        </li>
                                        <li><a target="_blank" href="#">Privacy
                                                Policy</a></li>
                                        <li><a target="_blank" href="#">Terms
                                                &amp; Conditions</a></li>
                                        <li><a target="_blank" href="#">Contact</a>
                                        </li>
                                        <li><a target="_blank" href="#">Home</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="foot1">
                                <h6>ABOUT MPS INFO SERVICES</h6>

                                <div class="links">
                                    <p>MPS Info Services is an offshore IT solutions company. Our proficiency deception
                                        in Business Process Management solutions built on the Web Based Development
                                        platform. We also migrate and deploy large applications on the cloud platform.
                                    </p>
                                    <a class="more" href="#" target="_blank">MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="foot1">
                                <h6>ADDRESS</h6>

                                <div class="add_sec">
                                    <!--<div class="add1">-->
                                    <!--    <div class="add2"><img src="images/phn.png" alt="contact" /></div>-->
                                    <!--    <div class="add3">-->
                                    <!--        <p><a href="tel:+919874204044">+91 987 420 4044</a>-->
                                    <!--            <br><a href="tel:+919874042067">+91 987 404 2067</a></p>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <div class="add1">
                                        <div class="add2"><img src="{{asset('front/assets/images/phn.png')}}" alt="contact" /></div>
                                        <div class="add3">
                                            <p><a href="/tel:+919874204044">+91
                                                    987 420 4044</a><br><a href="/tel:+919874042067">+91
                                                    987 404 2067</a></p>
                                        </div>
                                    </div>
                                    <div class="add1">
                                        <div class="add2"><img src="{{asset('front/assets/images/loca.png')}}" alt="location" /></div>
                                        <div class="add3">
                                            <p><a target="_blank" href="#">BB
                                                    -163,Salt Lake, Sector -1
                                                    Kolkata– 700 064
                                                    West Bengal, India</a>
                                                <br>Mon-Fri 10:00 to 19:00</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="connet_sec">
                                    <h6>STAY CONNECT</h6>
                                    <ul>
                                        <li>
                                            <a target="_blank" href="#"><img src="{{asset('front/assets/images/f1.png')}}" alt="facebook" /></a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="#"><img src="{{asset('front/assets/images/t2.png')}}" alt="twitter" /></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="foot1">
                                <h6>FIND US</h6>

                                <div class="links">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7367.344131842129!2d88.40102491662661!3d22.59136528614051!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0275e1b307f0e3%3A0x840086144283557b!2sMPS%20Info%20Services%20%7C%20Web%20Design%20And%20Development%20Company!5e0!3m2!1sen!2sin!4v1671618701357!5m2!1sen!2sin"
                                        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_dwn">
                <p>Copyright 2017 <span><a href="#">MPS info
                            services</a></span>. All rights reserved.</p>
            </div>
        </footer>

        <!--Footer end-->

    </div>

    <!-- Jquery CDN -->
    <script src="{{asset('front/assets/js/jquery.min.js')}}"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{asset('front/assets/js/bootstrap.bundle.min.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('front/assets/js/main.js')}}"></script>
    <!-- owl js -->
    <script src="{{asset('front/assets/js/owl.carousel.min.js')}}"></script>
    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            margin: 40,
            loop: true,
            nav: false,
            dots: false,
            autoplay: true,

            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>
</body>

</html>