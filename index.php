<?php $currentPage = 'home'?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Document Title -->
    <title>Home</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="favicon.png">

    <!-- CSS Files --> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik:400,500,700%7CSource+Sans+Pro:300i,400,400i,600,700">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/swiper/swiper.min.css">
    <link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.min.css">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>
    <!-- Preloader -->
    <div class="preLoader"></div>

    <!-- Main header -->
    <?php require "header.php" ?>
    <!-- End of Main header -->

    <!-- Banner -->
    <section>
        <div class="main-slider swiper-container">
            <div class="swiper-wrapper">
                <!-- Single slide -->
                <div class="swiper-slide position-relative">
                    <img src="img/slide1.jpg" data-rjs="2" alt="">
                    <div class="slide-content container">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-8">
                                <div class="slide-content-inner">
                                    <h4 data-animate="fadeInUp" data-delay=".05">Best Internet Service Provider In USA</h4>
                                    <h2 data-animate="fadeInUp" data-delay=".3">Don’t Suffer The Buffer Speeds Up to 1 Gbps with Unlimited Data</h2>
                                    <a data-animate="fadeInUp" data-delay=".6" href="#" class="btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Single slide -->
                
                <!-- Single slide -->
                <div class="swiper-slide position-relative">
                    <img src="img/slide2.jpg" data-rjs="2" alt="">
                    <div class="slide-content container">
                        <div class="row align-items-center">
                            <div class=" col-xl-6 col-lg-8">
                                <div class="slide-content-inner">
                                    <h4 data-animate="fadeInUp" data-delay=".05">There is Now Way to Become a Internet User</h4>
                                    <h2 data-animate="fadeInUp" data-delay=".3">Now a Days Internet Is a Useful Thing, Not Passion</h2>
                                    <a data-animate="fadeInUp" data-delay=".6" href="#" class="btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Single slide -->
            </div>
            <!-- Banner Pagination -->
            <div class="swiper-pagination main-slider-pagination"></div>
        </div>
    </section>
    <!-- End of Banner -->
    
    <!-- Abut Us -->
    <section class="pt-120 pb-55">
        <div class="container">
            <div class="row align-items-center pb-80">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="text-center" data-animate="fadeInUp" data-delay=".1">
                        <img src="img/number-one.png" alt="" data-rjs="2">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="number-one-content" data-animate="fadeInUp" data-delay=".5">
                        <h2 class="mb-3">Your Access To A World of Ultra Fast Internet</h2>
                        <p>Wisper Technologies offer super fast internet for homes and businesses at affordable rates. Our goal is to redefine the internet experience for Nigerians.</p>
                        <a href="about.php" class="btn">View Details</a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 col-sm-6">
                    <div class="single-feature single-feature-img-top text-center" data-animate="fadeInUp" data-delay=".1">
                        <div class="single-feature-img">
                            <img src="img/icons/setup.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>Truly Unlimited Data</h4>
                            <p>With Wisper Telecommunications, you are guaranteed unlimited data, no data cap, no limits.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-feature single-feature-img-top text-center" data-animate="fadeInUp" data-delay=".4">
                        <div class="single-feature-img">
                            <img src="img/icons/download.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>Network reliability.</h4>
                            <p>Enjoy network uptime of 99.99%. Stay connected to reliable internet always.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-feature single-feature-img-top text-center" data-animate="fadeInUp" data-delay=".7">
                        <div class="single-feature-img">
                            <img src="img/icons/support.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>24/7 Customer Support</h4>
                            <p>We are always here to support you 24/7, Monday to Sunday.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of About Us -->

    <!-- Services -->
    <section class="theme-bg-overlay bg-img-md-none pt-120 pb-90" data-bg-img="img/review-bg.png" data-rjs="2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-title section-title-white text-center" data-animate="fadeInUp" data-delay=".1">
                        <h2>Services We Provide</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service text-center" data-animate="fadeInUp" data-delay=".1">
                        <img src="img/icons/earth.svg" alt="" class="svg">
                        <h4>Internet For Remote</h4>
                        <p>Get fast and reliable internet service for you remote staffs at the comfort of their homes</p>
                        <a href="internet-remote-work.php">Learn More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service text-center" data-animate="fadeInUp" data-delay=".4">
                        <img src="img/icons/phone.svg" alt="" class="svg">
                        <h4>Wisper Mobile</h4>
                        <p>Save money now while enjoying fast and reliable internet service. Affordable Internet for all.</p>
                        <a href="internet-wisper-mobile.php">Learn More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service text-center" data-animate="fadeInUp" data-delay=".7">
                        <img src="img/icons/tv.svg" alt="" class="svg">
                        <h4>Internet for Home and SME</h4>
                        <p>Starting at ₦6,600/mo. you can now connect your family and enjoy unlimited streaming and many more</p>
                        <a href="internet-home-sme.php">Learn More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service text-center" data-animate="fadeInUp" data-delay="1">
                        <img src="img/icons/server.svg" alt="" class="svg">
                        <h4>Internet For Corporate</h4>
                        <p>With our dedicated internet services, enjoy guaranteed high speed with a 97.8% SLA on our services.</p>
                        <a href="internet-corporate.php">Learn More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Services -->

    <!-- Packages Wrap -->
    <section class="pt-120 pb-55">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-title text-center" data-animate="fadeInUp" data-delay=".1">
                        <h2>Choose Affordable Packages</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                    </div>
                </div>
            </div>
            
            <!-- Packages -->
            <div class="row pb-90">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-package text-center" data-animate="fadeInUp" data-delay=".1">
                        <h4>Personal Pack</h4>
                        <span>for personal user</span>
                        <hr>
                        <ul class="list-unstyled">
                            <li>Free installation</li>
                            <li>Up to <span>15 Mpbs</span> download speed</li>
                            <li>Unlimited data usages</li>
                            <li><span>01 year</span> pricing lock guarantee</li>
                            <li>Unlimited bandwidth</li>
                        </ul>
                        <p><sup>$</sup>12.50 <span>/Monthly</span></p>
                        <a href="#" class="btn">Order This Plan</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-package text-center" data-animate="fadeInUp" data-delay=".4">
                        <span class="pupular-pack">Most popular package</span>
                        <h4>Family Pack</h4>
                        <span>for family user</span>
                        <hr>
                        <ul class="list-unstyled">
                            <li>Free installation</li>
                            <li>Up to <span>25 Mpbs</span> download speed</li>
                            <li>Unlimited data usages</li>
                            <li><span>02 year</span> pricing lock guarantee</li>
                            <li>Unlimited bandwidth</li>
                        </ul>
                        <p><sup>$</sup>24.50 <span>/Monthly</span></p>
                        <a href="#" class="btn">Order This Plan</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-package text-center" data-animate="fadeInUp" data-delay=".7">
                        <h4>Business Pack</h4>
                        <span>for business user</span>
                        <hr>
                        <ul class="list-unstyled">
                            <li>Free installation</li>
                            <li>Up to <span>30 Mpbs</span> download speed</li>
                            <li>Unlimited data usages</li>
                            <li><span>03 year</span> pricing lock guarantee</li>
                            <li>Unlimited bandwidth</li>
                        </ul>
                        <p><sup>$</sup>49.50 <span>/Monthly</span></p>
                        <a href="#" class="btn">Order This Plan</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-package text-center" data-animate="fadeInUp" data-delay="1">
                        <h4>Corporate Pack</h4>
                        <span>for corporate user</span>
                        <hr>
                        <ul class="list-unstyled">
                            <li>Free installation</li>
                            <li>Up to <span>39 Mpbs</span> download speed</li>
                            <li>Unlimited data usages</li>
                            <li><span>Unlimited</span> pricing lock guarantee</li>
                            <li>Unlimited bandwidth</li>
                        </ul>
                        <p><sup>$</sup>79.50 <span>/Monthly</span></p>
                        <a href="#" class="btn">Order This Plan</a>
                    </div>
                </div>
            </div>
            <!-- End of Packages -->

            <!-- Packages Includes -->
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-title text-center" data-animate="fadeInUp" data-delay=".1">
                        <h2>All Plans Included</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-feature single-feature-img-left text-left" data-animate="fadeInUp" data-delay=".05">
                        <div class="single-feature-img">
                            <img src="img/icons/ftp.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>Own FTP Server</h4>
                            <p>At vero eos et accusamus et iusto dignissimosus qui blanditiis praesentium uptatum</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-feature single-feature-img-left text-left" data-animate="fadeInUp" data-delay=".2">
                        <div class="single-feature-img">
                            <img src="img/icons/upgrade.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>Upgrade or Downgrade</h4>
                            <p>At vero eos et accusamus et iusto dignissimosus qui blanditiis praesentium uptatum</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-feature single-feature-img-left text-left" data-animate="fadeInUp" data-delay=".35">
                        <div class="single-feature-img">
                            <img src="img/icons/data.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>No Hard Data Limit</h4>
                            <p>At vero eos et accusamus et iusto dignissimosus qui blanditiis praesentium uptatum</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-feature single-feature-img-left text-left" data-animate="fadeInUp" data-delay=".5">
                        <div class="single-feature-img">
                            <img src="img/icons/lock.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>Lock in Low Rates</h4>
                            <p>At vero eos et accusamus et iusto dignissimosus qui blanditiis praesentium uptatum</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-feature single-feature-img-left text-left" data-animate="fadeInUp" data-delay=".65">
                        <div class="single-feature-img">
                            <img src="img/icons/cloud.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>No Video Streaming</h4>
                            <p>At vero eos et accusamus et iusto dignissimosus qui blanditiis praesentium uptatum</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-feature single-feature-img-left text-left" data-animate="fadeInUp" data-delay=".8">
                        <div class="single-feature-img">
                            <img src="img/icons/access.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>Access to All Website</h4>
                            <p>At vero eos et accusamus et iusto dignissimosus qui blanditiis praesentium uptatum</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Packages Includes -->
        </div>
    </section>
    <!-- End of Packages Wrap -->

    <!-- Reviews -->
    <?php require "reviews.php" ?>
    <!-- End of Reviews -->

    <!-- FAQ -->
    <section class="pt-120 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq pb-50" data-animate="fadeInUp" data-delay=".1">
                        <div class="section-title">
                            <h2>Frequently Asked Questions</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some</p>
                        </div>
                        <div class="accordion" id="accordionFaq">
                            <div class="single-faq">
                                <div class="faq-title d-flex align-items-center">
                                    <h3 class="h5" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">I can’t access my internet. How do i contact with support center?</h3>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordionFaq">
                                    <div class="faq-answer">
                                        <p><span>Ans: </span>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-faq">
                                <div class="faq-title d-flex align-items-center">
                                    <h3 class="h5" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">I already paid my bill but still its showing Due. Why is that?</h3>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordionFaq">
                                    <div class="faq-answer">
                                        <p><span>Ans: </span>Pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-faq">
                                <div class="faq-title d-flex align-items-center">
                                    <h3 class="h5" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How can I contact with your emergency higher management?</h3>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordionFaq">
                                    <div class="faq-answer">
                                        <p><span>Ans: </span>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="popup-video mb-50" data-animate="fadeInUp" data-delay=".4">
                        <img src="img/video-thumb.jpg" data-rjs="2" alt="">
                        <a href="https://www.youtube.com/watch?v=6ZfuNTqbHE8" class="youtube-popup play-btn ripple">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of FAQ -->

    <!-- Carousel -->
    <section class="dark-bg pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-title text-center" data-animate="fadeInUp" data-delay=".1">
                        <h2 class="text-light">Your Internet, <span style="color: #308fd3;">For Everything</span></h2>
                        <p class="text-light">Enjoy high speed internet for your choice of use</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="latest-news-wraper position-relative">
                        <div class="swiper-container news-slider">
                            <div class="swiper-wrapper text-center">
                                <div class="single-news swiper-slide">
                                    <!-- <a class="tip" href="#">News</a> -->
                                    <img src="img/posts/streaming.png" data-rjs="2" alt="">
                                   <!--  <ul class="list-unstyled d-flex align-items-center">
                                        <li><img src="img/authors/author1.jpg" alt=""></li>
                                        <li>by <a href="#">Zane M. Frye</a></li>
                                        <li><a href="#">January 19, 2018</a></li>
                                    </ul> -->
                                    <h3 class="text-light"><b>Streaming TV</b><h3>
                                    <h3 class="h5 text-light"><a>Whether you want to stream live TV, binge watch your favourite series or catch up on your missed shows</a></h3>
                                </div>
                                <div class="single-news swiper-slide">
                                    <!-- <a class="tip" href="#">News</a> -->
                                     <img src="img/posts/gaming.png" data-rjs="2" alt="">
                                   <!-- <ul class="list-unstyled d-flex align-items-center">
                                        <li><img src="img/authors/male.png" alt=""></li>
                                        <li>by <a href="#">Zane M. Frye</a></li>
                                        <li><a href="#">January 19, 2018</a></li>
                                    </ul> -->
                                    <h3 class="text-light"><b>Gaming</b><h3>
                                    <h3 class="h5 text-light"><a>Fire up a wild ride across the cosmos and experience only the best Gaming with the power of Wisper Zero-lag connectivity</a></h3>
                                </div>
                                <div class="single-news swiper-slide">
                                    <!-- <a class="tip" href="#">News</a> -->
                                     <img src="img/posts/meeting.png" data-rjs="2" alt="">
                                  <!--  <ul class="list-unstyled d-flex align-items-center">
                                        <li><img src="img/authors/female.png" alt=""></li>
                                        <li>by <a href="#">Zane M. Frye</a></li>
                                        <li><a href="#">January 19, 2018</a></li>
                                    </ul> -->
                                    <h3 class="text-light"><b>Online Meetings</b><h3>
                                    <h3 class="h5 text-light"><a>Create an engaging meeting experience with Wisper and get more done together</a></h3>
                                </div>
                                <div class="single-news swiper-slide">
                                    <!-- <a class="tip" href="#">News</a> -->
                                    <img src="img/posts/remotework.png" data-rjs="2" alt="">
                                    <!-- <ul class="list-unstyled d-flex align-items-center">
                                        <li><img src="img/authors/author1.jpg" alt=""></li>
                                        <li>by <a href="#">Zane M. Frye</a></li>
                                        <li><a href="#">January 19, 2018</a></li>
                                    </ul> -->
                                    <h3 class="text-light"><b>Remote Works</b><h3>
                                    <h3 class="h5 text-light"><a>Explore how the Wisper seamlessly brings together remote and in-person teams, for work that goes wherever you do</a></h3>
                                </div>
                                <div class="single-news swiper-slide">
                                    <!-- <a class="tip" href="#">News</a> -->
                                     <img src="img/posts/learning.png" data-rjs="2" alt="">
                                  <!--  <ul class="list-unstyled d-flex align-items-center">
                                        <li><img src="img/authors/female.png" alt=""></li>
                                        <li>by <a href="#">Zane M. Frye</a></li>
                                        <li><a href="#">January 19, 2018</a></li>
                                    </ul> -->
                                    <h3 class="text-light"><b>Learning</b><h3>
                                    <h3 class="h5 text-light"><a>There's nothing better than getting better. Keep growing with unlimited class streaming. Grow Without Limits Using Wisper.</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next next-news">
                            <img src="img/icons/right-arrow.svg" alt="" class="svg">
                        </div>
                        <div class="swiper-button-prev prev-news">
                            <img src="img/icons/left-arrow.svg" alt="" class="svg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of carousel -->

    <!-- Footer -->
    <?php require "footer.php" ?>
    <!-- End of Footer -->

    <!-- Back to top -->
    <div class="back-to-top">
        <a href="#"> <i class="fa fa-chevron-up"></i></a>
    </div>

    <!-- JS Files -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="plugins/waypoints/sticky.min.js"></script>
    <script src="plugins/swiper/swiper.min.js"></script>
    <script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="plugins/parsley/parsley.min.js"></script>
    <script src="plugins/retinajs/retina.min.js"></script>
    <script src="plugins/isotope/isotope.pkgd.min.js"></script>
    <script src="js/menu.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>


