<?php $currentPage = 'contact'?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Document Title -->
    <title>Contact Us</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/favicon.png">

    <!-- CSS Files -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik:400,500,700%7CSource+Sans+Pro:300i,400,400i,600,700">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/plugins/swiper/swiper.min.css">
    <link rel="stylesheet" href="assets/plugins/magnific-popup/magnific-popup.min.css">
    
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
    <!-- Preloader -->
    <div class="preLoader"></div>

    <!-- Main header -->
    <?php require "header.php" ?>
    <!-- End of Main header -->

    <!-- Page Title -->
    <section class="page-title-wrap" data-bg-img="assets/img/hills.jpg" data-rjs="2">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-title" data-animate="fadeInUp" data-delay="1.2">
                        <h2>Contact</h2>
                        <ul class="list-unstyled m-0 d-flex">
                            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Page Title -->

    <!-- Contacts -->
    <section class="pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-contacts-widget-wrapper light-bg d-flex align-items-center" data-animate="fadeInUp" data-delay=".1">
                        <!-- Contact Info -->
                        <div class="page-contacts-widget">
                            <h3 class="h4">Contact Us</h3>
                            <div class="contact-widget-content">
                            <p>Creating reliable and affordable internet services and products for all.</p>
                                <ul class="list-unstyled">
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        <a href="tel:+2349057790907">(+234) 905 779 0907</a>, &nbsp;
                                        <a href="tel:++2348039255522">(+234) 803 925 5522</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o"></i>
                                        <a href="mailto:contact@wisper.ng">contact@wisper.ng</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                        <span>Plot 1193, Kasumu Ekemode, Victoria Island, 101241, Lagos</span>
                                    </li>
                                    <li>
                                            <i class="fa fa-map-marker"></i>
                                            <span>No 1 Robinson Avenue BDPA Ugbowo, Benin City, Edo State</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-map-marker"></i>
                                            <span>301, Warri Sapale Road, Delta State</span>
                                        </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <!-- Contact Form -->
                    <div class="contact-form parsley-validate-wrap mt-60" data-animate="fadeInUp" data-delay=".4">
                        <h3 class="bordered-title">Get In Touch</h3>
                        <div class="form-response"></div>

                        <div id="error" class="text-danger mb-3" role="alert"></div>
                        
                        <form id="form" method="post" action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-field">
                                        <input type="text" name="name" class="theme-input-style" placeholder="Your Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-field">
                                        <input type="email" name="email" class="theme-input-style" placeholder="E-mail address" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-field">
                                        <input type="text" name="phone" class="theme-input-style" placeholder="Telephone" data-parsley-pattern="^[\d\+\-\.\(\)\/\s]*$">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-field">
                                        <input type="text" name="subject" class="theme-input-style" placeholder="Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-field">
                                <textarea name="message" class="theme-input-style" placeholder="Write your message" required></textarea>
                            </div>
                            <button id="submitBtn" type="submit" class="btn">
                                Send Message
                            </button>
                        </form>
                    </div>
                    <!-- End of Contact Form -->


                    <!-- Form success Button trigger modal -->
                    <button type="button" id="successBtn" class="btn btn-primary d-none" data-toggle="modal"
                    data-target="#exampleModal">
                    Success
                    </button>

                    <!-- Form success modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-body text-center px-5 py-5">
                                <h5 id="success" class="text-success" role="alert">

                                </h5>
                                <img width="150" class="pt-3" src="assets/img/check.jpg" alt="success">
                                <div class="d-grid gap-2 pt-4">
                                <button class="btn btn-lg btn-block btn-success" data-dismiss="modal" type="button"><b>OK</b></button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End of Contacts -->

    <!-- Footer -->
    <?php require "footer.php" ?>
    <!-- End of Footer -->

    <!-- Back to top -->
    <div class="back-to-top">
        <a href="#"> <i class="fa fa-chevron-up"></i></a>
    </div>

    <!-- JS Files -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/plugins/waypoints/sticky.min.js"></script>
    <script src="assets/plugins/swiper/swiper.min.js"></script>
    <script src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/plugins/parsley/parsley.min.js"></script>
    
    <script src="assets/plugins/retinaassets/js/retina.min.js"></script>
    <script src="assets/plugins/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/js/menu.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="assets/js/subscribe.js"></script>
</body>

</html>