@section('title')



{{$title}}



@endsection



@extends('front.layout')



@section('content')



<section class="home__banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('front/assets/images/banner1.jpg')}}" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('front/assets/images/banner2.jpg')}}" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('front/assets/images/banner3.jpg')}}" class="d-block w-100 img-fluid" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<!--================== home__banner End=================-->

<!-- ===================Wlc Sec Start===================== -->
<section class="welcom_sec">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="welcm_inn">
                    <h1>Welcome To MPS Info Services</h1>
                    <div class="row">
                        <div class="col-sm-6">
                            <div data-wow-delay="0.5" class="wel_lt span3 wow bounceInLeft"
                                style="visibility: visible; animation-name: bounceInLeft;">
                                <img src="images/s1.png" alt="software applications development" /></div>
                        </div>
                        <div class="col-sm-6">
                            <div data-wow-delay="0.5" class="wel_rt span3 wow bounceInRight"
                                style="visibility: visible; animation-name: bounceInRight;">
                                <p>MPS Info Services is one of the best <b>web design and development
                                        company</b> in India. We focused on the highest level of customer
                                    satisfaction.</p>
                                <p>The company works with national and international clients to bring using our
                                    proven cost-effective mature quality approach. And the development
                                    methodology.</p>
                                <p>Continuously we keep our customer one step ahead in the global market. We are
                                    a team of professionals, ready to help with your website and mobile app.</p>
                                <p> We are experts in <b>Web Design, Graphic Design, Web Development, Mobile
                                        Apps, Internet Marketing, SEO, Digital Marketing.</b></p>
                                <p>We help you establish your product and expose it to the world. Think of us as
                                    your one stop shop for improving your business in Internet Market at MPS
                                    Info Services, we make it happen!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ===================Wlc Sec End===================== -->

<!-- ===================service_sec Start====================== -->
<section class="service_sec" style="background:url(images/servoce_bg.jpg) no-repeat center center;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="service_inner">
                    <h2>Our Services That All You Need</h2>
                    <p data-wow-iteration="5" data-wow-duration="0.15s" class="span3 wow pulse"
                        style="visibility: visible; animation-duration: 0.15s; animation-iteration-count: 5; animation-name: pulse;">
                        We practice alternate methods for building client relationships, which will help you to
                        transform into lasting partnerships with us. With time changing constantly, new trends
                        in the global market are developing so it is very important to keep the current market
                        up to date in the current market. Applying the latest digital marketing trends using
                        today's current technology, it is best that we create it more attractively.</p>
                    <p>We are a responsive website developer and our best services are Web Design, Graphic
                        Design, Web Development, Mobile Apps, Internet Marketing, SEO, and Digital Marketing.We
                        make our clients happy because we served the best value for money to our valuable
                        clients.</p>
                    <div class="row">
                        <div class="col-sm-6 col-lg-3 col-xl-3 col-md-6 col-12">
                            <div data-wow-delay="0.5" class="service1 span3 wow bounceInLeft"
                                style="visibility: visible; animation-delay: 1s; animation-name: bounceInLeft;">
                                <img src="images/s2.png" alt="admin" />
                                <h5>Web Design &amp; Development Services</h5>
                                <p>Powerful Web Design and Development for a new or existing website can provide
                                    you visibility, credibility and value.</p> <a target="_blank" href="#">Read
                                    More</a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 col-xl-3 col-md-6 col-12">
                            <div data-wow-delay="0.5" class="service1 span3 wow bounceInDown center"
                                style="visibility: visible; animation-delay: 1s; animation-name: bounceInDown;">
                                <img src="images/s3.png" alt="admin group" />
                                <h5>PHP &amp; Open Source Development Services</h5>
                                <p>Open source doesn't just mean access to the source code. The distribution
                                    terms of open-source software must comply with some</p> <a target="_blank"
                                    href="#">Read More</a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 col-xl-3 col-md-6 col-12">
                            <div data-wow-delay="0.5" class="service1 span3 wow bounceInUp center"
                                style="visibility: visible; animation-delay: 1s; animation-name: bounceInUp;">
                                <img src="images/s4.png" alt="editor" />
                                <h5>Software Application Development Services</h5>
                                <p>We are specialized to make custom software developments, Application
                                    Maintenance and Migrations with most of the latest</p> <a target="_blank"
                                    href="#">Read
                                    More</a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 col-xl-3 col-md-6 col-12">
                            <div data-wow-delay="0.5" class="service1 span3 wow bounceInRight"
                                style="visibility: visible; animation-delay: 1s; animation-name: bounceInRight;">
                                <img src="images/s5.png" alt="achievement" />
                                <h5>Mobile Application Development Services</h5>
                                <p>Now People can use mobile devices, mobile phones, smart phones and PDAs
                                    anywhere and at anytime.</p> <a target="_blank" href="#">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================service_sec End====================== -->
<!-- ==================client_sec start================ -->

<section class="client_sec">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="client_inner">
                    <h3>What Clients Say</h3>
                    <p>We've worked with many great brands. Close partnerships with really cool clients let us
                        do world-class work. See those of our happy clients have expressed their opinion about
                        our company in their own mode.
                    </p>
                    <div id="demos">
                        <div class="row">
                            <div class="large-12 columns">
                                <div class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="clnt1"> <img src="images/c2.png" alt="" /></div>
                                    </div>
                                    <div class="item">
                                        <div class="clnt1"> <img src="images/c3.png" alt="" /></div>
                                    </div>
                                    <div class="item">
                                        <div class="clnt1"> <img src="images/c4.png" alt="" /></div>
                                    </div>
                                    <div class="item">
                                        <div class="clnt1"> <img src="images/c5.png" alt="" /></div>
                                    </div>
                                    <div class="item">
                                        <div class="clnt1"> <img src="images/c6.png" alt="" /></div>
                                    </div>
                                    <div class="item">
                                        <div class="clnt1"> <img src="images/3d.png" alt="" /></div>
                                    </div>
                                    <div class="item">
                                        <div class="clnt1"> <img src="images/bish.png" alt="" /></div>
                                    </div>
                                    <div class="item">
                                        <div class="clnt1"> <img src="images/hama.png" alt="" /></div>
                                    </div>
                                    <div class="item">
                                        <div class="clnt1"> <img src="images/drem.png" alt="" /></div>
                                    </div>
                                    <div class="item">
                                        <div class="clnt1"> <img src="images/cob.png" alt="" /></div>
                                    </div>
                                    <div class="item">
                                        <div class="clnt1"> <img src="images/cln.png" alt="" /></div>
                                    </div>
                                    <div class="item">
                                        <div class="clnt1"> <img src="images/herdsy.jpg" alt="" /></div>
                                    </div>
                                    <div class="item">
                                        <div class="clnt1"> <img src="images/c22.png" alt="" /></div>
                                    </div>
                                    <div class="item">
                                        <div class="clnt1"> <img src="images/c23.png" alt="" /></div>
                                    </div>
                                    <div class="item">
                                        <div class="clnt1"> <img src="images/smile.png" alt="" /></div>
                                    </div>
                                    <div class="item">
                                        <div class="clnt1"> <img src="images/c26.png" alt="" /></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==================client_sec End================ -->
<!-- ==================================== -->
<section class="testimonial_sec">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="testimonial_inner span3 wow bounceInLeft"
                    style="visibility: visible; animation-name: bounceInLeft;">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0"
                                class="active"></li>
                            <li data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="carousel-item active"> <img src="images/testimonial.png"
                                    alt="web design and development">
                                <div class="carousel-caption  d-md-block">
                                    <h3>Testimonials</h3>
                                    <p>The BEST company with the best people to complete your website to your
                                        complete satisfaction. Very pleasant and on time besides knowing what
                                        the client needs and performing the tasks to make a great website.</p>
                                    <h6>Dave Mark -Director of LionSoup</h6>
                                </div>
                            </div>

                            <div class="carousel-item"> <img src="images/testimonial.png"
                                    alt="web design and development">
                                <div class="carousel-caption  d-md-block">
                                    <h3>Testimonials</h3>
                                    <p>The BEST company with the best people to complete your website to your
                                        complete satisfaction. Very pleasant and on time besides knowing what
                                        the client needs and performing the tasks to make a great website.</p>
                                    <h6>Dave Mark -Director of LionSoup</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="hm_contact span3 wow bounceInRight"
                    style="visibility: visible; animation-name: bounceInRight;">
                    <h5>Contact Us</h5>
                    <form id="contact_form" method="POST">
                        <div class="hm_contact1">
                            <label>Name</label>
                            <input type="text" name="name" id="name" placeholder="Enter Your Full Name" />
                        </div>
                        <div class="hm_contact1">
                            <label>Email</label>
                            <input type="email" name="email" id="email" placeholder="Enter Your Email" />
                        </div>
                        <div class="hm_contact1">
                            <label>Ph.No</label>
                            <input type="tel" class="numbersOnly" name="phone" id="phone"
                                placeholder="Enter Your Phone Number" maxlength="10" /> <span
                                id="errmsg"></span></div>
                        <div class="hm_contact1">
                            <label>Message</label>
                            <textarea style="padding: 10px; width: 100%;" name="message" id="message"
                                placeholder="Type your message..." rows="5"></textarea>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LcKgFQUAAAAAGvqmQ0d69vDOEHf5-_U-n2fJ4rV"></div>
                        <div class="hm_contact1 hm_contact2 text-center">
                            <input type="button" id="submit" value="SEND"
                                style="width: auto; padding: 14px 30px; background: #000; border: 2px solid #fff; font: 400 15px/24px 'Roboto', sans-serif; color: #fff;" />
                            <div id="loading" class="notification-danger"
                                style="text-align: left; float: left; margin: -15px 10px 0 10px; display:none">
                                <img src="images/loading.gif" style="width: 20%;"></div>
                        </div>
                    </form>
                    <div id="usr_err_cred" class="notification-danger" style="display:none;text-align: center;">
                        <span style="font-size: 16px;color:#000;margin: 16px;display: inline-block;">Message
                            sent.We will contact soon.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
