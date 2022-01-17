<body>    
    <!--====== PRELOADER PART START ======-->
    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== PRELOADER PART ENDS ======-->

    <!--====== NAVBAR PART START ======-->

    <section class="header-area">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="#">
                                <img src="<?=base_url('assets/images/logo.png');?>" alt="Logo">
                            </a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarEight" aria-controls="navbarEight" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <!-- <div class="collapse navbar-collapse sub-menu-bar" id="navbarEight">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">HOME</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">ABOUT</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#portfolio">PORTFOLIO</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#pricing">PRICING</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#testimonial">CLIENTS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#contact">CONTACT</a>
                                    </li>
                                </ul>
                            </div> -->

                            <div class="navbar-btn d-none mt-15 d-lg-inline-block">
                                <a class="menu-bar" href="#side-menu-right"><i class="lni-menu"></i></a>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->
        
        <div id="home" class="slider-area">
            <div class="bd-example">
                <div id="carouselOne" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselOne" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselOne" data-slide-to="1"></li>
                        <li data-target="#carouselOne" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="carousel-item bg_cover active" style="background-image: url(<?=base_url('assets/images/slider-1.jpg');?>)">
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-6 col-lg-7 col-sm-10">
                                            <h2 class="carousel-title">Refreshing Design & Easy to Customize</h2>
                                            <ul class="carousel-btn rounded-buttons">
                                                <li><a class="main-btn rounded-three" href="#">GET STARTED</a></li>
                                                <li><a class="main-btn rounded-one" href="#">LEARN MORE</a></li>
                                            </ul>
                                        </div>
                                    </div> <!-- row -->
                                </div> <!-- container -->
                            </div> <!-- carousel caption -->
                        </div> <!-- carousel-item -->

                        <div class="carousel-item bg_cover" style="background-image: url(<?=base_url('assets/images/slider-2.jpg');?>)">
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-6 col-lg-7 col-sm-10">
                                            <h2 class="carousel-title">Based on Latest Bootstrap & HTML5</h2>
                                            <ul class="carousel-btn rounded-buttons">
                                                <li><a class="main-btn rounded-three" href="#">GET STARTED</a></li>
                                                <li><a class="main-btn rounded-one" href="#">LEARN MORE</a></li>
                                            </ul>
                                        </div>
                                    </div> <!-- row -->
                                </div> <!-- container -->
                            </div> <!-- carousel caption -->
                        </div> <!-- carousel-item -->

                        <div class="carousel-item bg_cover" style="background-image: url(<?=base_url('assets/images/slider-3.jpg');?>)">
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-6 col-lg-7 col-sm-10">
                                            <h2 class="carousel-title">Multi-purpose Landing Page Template</h2>
                                            <ul class="carousel-btn rounded-buttons">
                                                <li><a class="main-btn rounded-three" href="#">GET STARTED</a></li>
                                                <li><a class="main-btn rounded-one" href="#">DOWNLOAD</a></li>
                                            </ul>
                                        </div>
                                    </div> <!-- row -->
                                </div> <!-- container -->
                            </div> <!-- carousel caption -->
                        </div> <!-- carousel-item -->
                    </div> <!-- carousel-inner -->

                    <a class="carousel-control-prev" href="#carouselOne" role="button" data-slide="prev">
                        <i class="lni-arrow-left-circle"></i>
                    </a>

                    <a class="carousel-control-next" href="#carouselOne" role="button" data-slide="next">
                        <i class="lni-arrow-right-circle"></i>
                    </a>
                </div> <!-- carousel -->
            </div> <!-- bd-example -->
        </div>

    </section>

    <!--====== NAVBAR PART ENDS ======-->

    <!--====== SAIDEBAR PART START ======-->

    <div class="sidebar-right">
        <div class="sidebar-close">
            <a class="close" href="#close"><i class="lni-close"></i></a>
        </div>
        <div class="sidebar-content">
            <div class="sidebar-logo text-center">
                <a href="#"><img src="<?=base_url('assets/images/logo-alt.png');?>" alt="Logo"></a>
            </div> <!-- logo -->
            <div class="sidebar-menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">SERVICES</a></li>
                    <li><a href="#">WORK</a></li>
                    <li><a href="#">CONTACT US</a></li>
                </ul>
            </div> <!-- menu -->
            <!-- <div class="sidebar-social d-flex align-items-center justify-content-center">
                <span>FOLLOW US</span>
                <ul>
                    <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                </ul>
            </div> -->
            <!-- sidebar social -->
        </div> <!-- content -->
    </div>
    <div class="overlay-right"></div>

    <!--====== SAIDEBAR PART ENDS ======-->
    
    <!--====== ABOUT PART START ======-->

    <section id="about" class="about-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="about-image text-center wow fadeInUp" data-wow-duration="1.5s" data-wow-offset="100">
                        <img src="<?=base_url('assets/images/services.png');?>" alt="services">
                    </div>
                    <div class="section-title text-center mt-30 pb-40">
                        <h4 class="title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.6s">The future of designing starts here</h4>
                        <p class="text wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1s">An open platform for presentations and content collaboration. Sign up to get early access.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.2s">
                        <div class="about-icon">
                            <img src="<?=base_url('assets/images/icon-1.png');?>" alt="Icon">
                        </div>
                        <div class="about-content media-body">
                            <h4 class="about-title">Powerful templates</h4>
                            <p class="text">Poorly designed presentations are a thing of the past. Create beautiful and high-quality content that is aligned.</p>
                        </div>
                    </div> <!-- single about -->
                </div>
                <div class="col-lg-6">
                    <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.4s">
                        <div class="about-icon">
                            <img src="<?=base_url('assets/images/icon-2.png');?>" alt="Icon">
                        </div>
                        <div class="about-content media-body">
                            <h4 class="about-title">Designed for everyone</h4>
                            <p class="text">Poorly designed presentations are a thing of the past. Create beautiful and high-quality content that is aligned.</p>
                        </div>
                    </div> <!-- single about -->
                </div>
                <div class="col-lg-6">
                    <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.6s">
                        <div class="about-icon">
                            <img src="<?=base_url('assets/images/icon-3.png');?>" alt="Icon">
                        </div>
                        <div class="about-content media-body">
                            <h4 class="about-title">Work anywhere</h4>
                            <p class="text">Poorly designed presentations are a thing of the past. Create beautiful and high-quality content that is aligned.</p>
                        </div>
                    </div> <!-- single about -->
                </div>
                <div class="col-lg-6">
                    <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.8s">
                        <div class="about-icon">
                            <img src="<?=base_url('assets/images/icon-4.png');?>" alt="Icon">
                        </div>
                        <div class="about-content media-body">
                            <h4 class="about-title">Updated in real time</h4>
                            <p class="text">Poorly designed presentations are a thing of the past. Create beautiful and high-quality content that is aligned.</p>
                        </div>
                    </div> <!-- single about -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->
    
    <!--====== portfolio PART START ======-->

    <section id="portfolio" class="portfolio-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h3 class="title">Our Portfolio</h3>
                        <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="portfolio-menu pt-30 text-center">
                        <ul>
                            <li data-filter="*" class="active">ALL WORK</li>
                            <li data-filter=".branding-3">BRANDING</li>
                            <li data-filter=".marketing-3">MARKETING</li>
                            <li data-filter=".planning-3">PLANNING</li>
                            <li data-filter=".research-3">RESEARCH</li>
                        </ul>
                    </div> <!-- portfolio menu -->
                </div>
            </div> <!-- row -->
            <div class="row grid">
                <div class="col-lg-4 col-sm-6 branding-3 planning-3">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="portfolio-image">
                            <img src="<?=base_url('assets/images/portfolio-1.png');?>" alt="">
                            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a class="image-popup" href="<?=base_url('assets/images/portfolio-1.png');?>"><i class="lni-zoom-in"></i></a>
                                    </div>
                                    <div class="portfolio-icon">
                                        <a href="#"><i class="lni-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <h4 class="portfolio-title"><a href="#">Graphics Design</a></h4>
                            <p class="text">Short description for the ones who look for something new. Awesome!</p>
                        </div>
                    </div> <!-- single portfolio -->
                </div>
                <div class="col-lg-4 col-sm-6 marketing-3 research-3">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="portfolio-image">
                            <img src="<?=base_url('assets/images/portfolio-2.png');?>" alt="">
                            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a class="image-popup" href="<?=base_url('assets/images/portfolio-2.png');?>"><i class="lni-zoom-in"></i></a>
                                    </div>
                                    <div class="portfolio-icon">
                                        <a href="#"><i class="lni-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <h4 class="portfolio-title"><a href="#">Graphics Design</a></h4>
                            <p class="text">Short description for the ones who look for something new. Awesome!</p>
                        </div>
                    </div> <!-- single portfolio -->
                </div>
                <div class="col-lg-4 col-sm-6 branding-3 marketing-3">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.7s">
                        <div class="portfolio-image">
                            <img src="<?=base_url('assets/images/portfolio-3.png');?>" alt="">
                            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a class="image-popup" href="<?=base_url('assets/images/portfolio-3.png');?>"><i class="lni-zoom-in"></i></a>
                                    </div>
                                    <div class="portfolio-icon">
                                        <a href="#"><i class="lni-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <h4 class="portfolio-title"><a href="#">Graphics Design</a></h4>
                            <p class="text">Short description for the ones who look for something new. Awesome!</p>
                        </div>
                    </div> <!-- single portfolio -->
                </div>
                <div class="col-lg-4 col-sm-6 planning-3 research-3">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="portfolio-image">
                            <img src="<?=base_url('assets/images/portfolio-4.png');?>" alt="">
                            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a class="image-popup" href="<?=base_url('assets/images/portfolio-4.png');?>"><i class="lni-zoom-in"></i></a>
                                    </div>
                                    <div class="portfolio-icon">
                                        <a href="#"><i class="lni-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <h4 class="portfolio-title"><a href="#">Graphics Design</a></h4>
                            <p class="text">Short description for the ones who look for something new. Awesome!</p>
                        </div>
                    </div> <!-- single portfolio -->
                </div>
                <div class="col-lg-4 col-sm-6 marketing-3">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="portfolio-image">
                            <img src="<?=base_url('assets/images/portfolio-5.png');?>" alt="">
                            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a class="image-popup" href="<?=base_url('assets/images/portfolio-5.png');?>"><i class="lni-zoom-in"></i></a>
                                    </div>
                                    <div class="portfolio-icon">
                                        <a href="#"><i class="lni-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <h4 class="portfolio-title"><a href="#">Graphics Design</a></h4>
                            <p class="text">Short description for the ones who look for something new. Awesome!</p>
                        </div>
                    </div> <!-- single portfolio -->
                </div>
                <div class="col-lg-4 col-sm-6 planning-3">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.7s">
                        <div class="portfolio-image">
                            <img src="<?=base_url('assets/images/portfolio-6.png');?>" alt="">
                            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a class="image-popup" href="<?=base_url('assets/images/portfolio-6.png');?>"><i class="lni-zoom-in"></i></a>
                                    </div>
                                    <div class="portfolio-icon">
                                        <a href="#"><i class="lni-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <h4 class="portfolio-title"><a href="#">Graphics Design</a></h4>
                            <p class="text">Short description for the ones who look for something new. Awesome!</p>
                        </div>
                    </div> <!-- single portfolio -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== portfolio PART ENDS ======-->
    
    <!--====== PRINICNG STYLE EIGHT START ======-->

    <section id="pricing" class="pricing-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h3 class="title">Pricing Plan</h3>
                        <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">                
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="pricing-style-one mt-40 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="pricing-icon text-center">
                            <img src="<?=base_url('assets/images/wman.svg');?>" alt="">
                        </div>
                        <div class="pricing-header text-center">
                            <h5 class="sub-title">Basic</h5>
                            <p class="month"><span class="price">$ 199</span>/month</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i> Carefully crafted components</li>
                                <li><i class="lni-check-mark-circle"></i> Amazing page examples</li>
                            </ul>
                        </div>
                        <div class="pricing-btn rounded-buttons text-center">
                            <a class="main-btn rounded-three" href="#">GET STARTED</a>
                        </div>
                    </div> <!-- pricing style one -->
                </div>
                
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="pricing-style-one mt-40 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
                        <div class="pricing-icon text-center">
                            <img src="<?=base_url('assets/images/wman.svg');?>" alt="">
                        </div>
                        <div class="pricing-header text-center">
                            <h5 class="sub-title">Pro</h5>
                            <p class="month"><span class="price">$ 399</span>/month</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i> Carefully crafted components</li>
                                <li><i class="lni-check-mark-circle"></i> Amazing page examples</li>
                            </ul>
                        </div>
                        <div class="pricing-btn rounded-buttons text-center">
                            <a class="main-btn rounded-three" href="#">GET STARTED</a>
                        </div>
                    </div> <!-- pricing style one -->
                </div>
                
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="pricing-style-one mt-40 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.8s">
                        <div class="pricing-icon text-center">
                            <img src="<?=base_url('assets/images/wman.svg');?>" alt="">
                        </div>
                        <div class="pricing-header text-center">
                            <h5 class="sub-title">Enterprise</h5>
                            <p class="month"><span class="price">$ 699</span>/month</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i> Carefully crafted components</li>
                                <li><i class="lni-check-mark-circle"></i> Amazing page examples</li>
                            </ul>
                        </div>
                        <div class="pricing-btn rounded-buttons text-center">
                            <a class="main-btn rounded-three" href="#">GET STARTED</a>
                        </div>
                    </div> <!-- pricing style one -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PRINICNG STYLE EIGHT ENDS ======-->
    
    <!--====== CALL TO ACTION TWO PART START ======-->

    <section id="call-action" class="call-action-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="call-action-content mt-45">
                        <h3 class="action-title">Get latest updates!</h3>
                        <p class="text">We never spam your email</p>
                    </div> <!-- call action content -->
                </div>
                <div class="col-lg-7">
                    <div class="call-action-form mt-50">
                        <form action="#">
                            <input type="text" placeholder="Enter your email">
                            <div class="action-btn rounded-buttons">
                                <button class="main-btn rounded-three">subscribe</button>
                            </div>
                        </form>
                    </div> <!-- call action form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CALL TO ACTION TWO PART ENDS ======-->
    
    <!--====== TESTIMONIAL THREE PART START ======-->

    <section id="testimonial" class="testimonial-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h3 class="title">Testimonial</h3>
                        <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="row testimonial-active">
                        <div class="col-lg-4">
                            <div class="single-testimonial mt-30 mb-30 text-center">
                                <div class="testimonial-image">
                                    <img src="<?=base_url('assets/images/author-3.jpg');?>" alt="Author">
                                </div>
                                <div class="testimonial-content">
                                    <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed! Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                                    <h6 class="author-name">Isabela Moreira</h6>
                                    <span class="sub-title">CEO, GrayGrids</span>
                                </div>
                            </div> <!-- single testimonial -->
                        </div>
                        <div class="col-lg-4">
                            <div class="single-testimonial mt-30 mb-30 text-center">
                                <div class="testimonial-image">
                                    <img src="<?=base_url('assets/images/author-1.jpg');?>" alt="Author">
                                </div>
                                <div class="testimonial-content">
                                    <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed! Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                                    <h6 class="author-name">Fiona</h6>
                                    <span class="sub-title">Lead Designer, UIdeck</span>
                                </div>
                            </div> <!-- single testimonial -->
                        </div>
                        <div class="col-lg-4">
                            <div class="single-testimonial mt-30 mb-30 text-center">
                                <div class="testimonial-image">
                                    <img src="<?=base_url('assets/images/author-2.jpg');?>" alt="Author">
                                </div>
                                <div class="testimonial-content">
                                    <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed! Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                                    <h6 class="author-name">Elon Musk</h6>
                                    <span class="sub-title">CEO, SpaceX</span>
                                </div>
                            </div> <!-- single testimonial -->
                        </div>
                        <div class="col-lg-4">
                            <div class="single-testimonial mt-30 mb-30 text-center">
                                <div class="testimonial-image">
                                    <img src="<?=base_url('assets/images/author-4.jpg');?>" alt="Author">
                                </div>
                                <div class="testimonial-content">
                                    <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed! Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                                    <h6 class="author-name">Fajar Siddiq</h6>
                                    <span class="sub-title">CEO, MakerFlix</span>
                                </div>
                            </div> <!-- single testimonial -->
                        </div>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TESTIMONIAL THREE PART ENDS ======-->
    
    <!--====== CLIENT LOGO PART START ======-->

    <section id="client" class="client-logo-area">
        <div class="container">
            <div class="row client-active">
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="<?=base_url('assets/images/client_logo_01.png');?>" alt="Logo">
                    </div> <!-- single client -->
                </div>
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="<?=base_url('assets/images/client_logo_02.png');?>" alt="Logo">
                    </div> <!-- single client -->
                </div>
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="<?=base_url('assets/images/client_logo_03.png');?>" alt="Logo">
                    </div> <!-- single client -->
                </div>
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="<?=base_url('assets/images/client_logo_04.png');?>" alt="Logo">
                    </div> <!-- single client -->
                </div>
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="<?=base_url('assets/images/client_logo_05.png');?>" alt="Logo">
                    </div> <!-- single client -->
                </div>
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="<?=base_url('assets/images/client_logo_06.png');?>" alt="Logo">
                    </div> <!-- single client -->
                </div>
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="<?=base_url('assets/images/client_logo_07.png');?>" alt="Logo">
                    </div> <!-- single client -->
                </div>
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="<?=base_url('assets/images/client_logo_08.png');?>" alt="Logo">
                    </div> <!-- single client -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CLIENT LOGO PART ENDS ======-->
    
    <!--====== CONTACT TWO PART START ======-->

    <section id="contact" class="contact-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h3 class="title">Get in touch</h3>
                        <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-two mt-50 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <h4 class="contact-title">Lets talk about the project</h4>
                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam unde repellendus delectus facilis quia consequatur maxime perferendis! Sequi, modi consequatur.</p>
                        <ul class="contact-info">
                            <li><i class="lni-money-location"></i> Elizabeth St, Melbourne, Australia</li>
                            <li><i class="lni-phone-handset"></i> +333 789-321-654</li>
                            <li><i class="lni-envelope"></i> hello@ayroui.com</li>
                        </ul>
                    </div> <!-- contact two -->
                </div>
                <div class="col-lg-6">
                    <div class="contact-form form-style-one mt-35 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
                        <form  id="contact-form" action="#" method="post">
                            <div class="form-input mt-15">
                                <label>Name</label>
                                <div class="input-items default">
                                    <input type="text" placeholder="Name" name="name">
                                    <i class="lni-user"></i>
                                </div>
                            </div> <!-- form input -->
                            <div class="form-input mt-15">
                                <label>Email</label>
                                <div class="input-items default">
                                    <input type="email" placeholder="Email" name="email">
                                    <i class="lni-envelope"></i>
                                </div>
                            </div> <!-- form input -->
                            <div class="form-input mt-15">
                                <label>Massage</label>
                                <div class="input-items default">
                                    <textarea placeholder="Massage" name="massage"></textarea>
                                    <i class="lni-pencil-alt"></i>
                                </div>
                            </div> <!-- form input -->
                            <p class="form-message"></p>
                            <div class="form-input rounded-buttons mt-20">
                                <button type="submit" class="main-btn rounded-three">Submit</button>
                            </div> <!-- form input -->
                        </form>
                    </div> <!-- contact form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CONTACT TWO PART ENDS ======-->
    
    <!--====== FOOTER FOUR PART START ======-->

    <footer id="footer" class="footer-area">
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-link">
                            <h6 class="footer-title">Company</h6>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Profile</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-link">
                            <h6 class="footer-title">Solutions</h6>
                            <ul>
                                <li><a href="#">Facilities Services</a></li>
                                <li><a href="#">Workplace Staffing</a></li>
                                <li><a href="#">Project Management</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-link">
                            <h6 class="footer-title">Product & Services</h6>
                            <ul>
                                <li><a href="#">Products</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Developer</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-link">
                            <h6 class="footer-title">Help & Suuport</h6>
                            <ul>
                                <li><a href="#">Support Center</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
        
        <div class="footer-copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="copyright text-center text-lg-left mt-10">
                            <p class="text">Created by <a style="color: #38f9d7" rel="nofollow" href="#">BHS</a>  <a style="color: #38f9d7" rel="nofollow" href=""></a></p>
                        </div> <!--  copyright -->
                    </div>
                    <div class="col-lg-2">
                        <div class="footer-logo text-center mt-10">
                            <a href="index.html"><img src="assets/images/logo-2.svg" alt="Logo"></a>
                        </div> <!-- footer logo -->
                    </div>
                    <div class="col-lg-5">
                        <ul class="social text-center text-lg-right mt-10">
                            <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="#"><i class="lni-instagram-original"></i></a></li>
                            <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                        </ul> <!-- social -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>

    <!--====== FOOTER FOUR PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->  

    <!--====== PART START ======-->



    <!--====== PART ENDS ======-->

</body>
</html>
