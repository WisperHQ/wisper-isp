
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Document Title -->
    <title>Subscribe to our plans</title>

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
                        <h2>Subscription</h2>
                        <ul class="list-unstyled m-0 d-flex">
                            <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                            <li><a href="#">Subscription</a></li>
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
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <!-- Subscription Form -->
                    <div class="contact-form parsley-validate-wrap mt-60" data-animate="fadeInUp" data-delay=".4">
                        <h3 class="bordered-title">Subscribe To A Data Plan on WISPER NG</h3>
                        <div class="form-response"></div>

                        <div id="error" class="text-danger mb-3" role="alert"></div>
                        
                        <form id="form" method="post" action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-field">
                                        <input type="text" name="name" class="theme-input-style" placeholder="Full Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-field">
                                        <input type="email" name="email" class="theme-input-style" placeholder="E-mail address" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-field">
                                        <input type="text" name="phone" class="theme-input-style" placeholder="Telephone" data-parsley-pattern="^[\d\+\-\.\(\)\/\s]*$" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-field">
                                        <input type="text" name="state" class="theme-input-style" placeholder="State" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-field">
                                        <input type="text" name="city" class="theme-input-style" placeholder="City" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-field">
                                        <input type="text" name="lga" class="theme-input-style" placeholder="Local Govt." required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-field">
                                <select name="plan" class="theme-input-style text-muted font-weight-bold" required>
                                    <option disabled>Select your preferred plan</option>
                                    <option value="HOME Package (Lite Plan) - ₦6,600">HOME Package (Lite Plan) - ₦6,600</option>
                                    <option value="HOME Package (Stream Plan) - ₦12,500">HOME Package (Stream Plan) - ₦12,500</option>
                                    <option value="HOME Package (Premium Plan) - ₦21,000">HOME Package (Premium Plan) - ₦21,000</option>
                                    <option value="SME Package (Bronze Plan) - ₦25,000">SME Package (Bronze Plan) - ₦25,000</option>
                                    <option value="SME Package (Silver Plan) - ₦38,000">SME Package (Silver Plan) - ₦38,000</option>
                                    <option value="SME Package (Gold Plan) - ₦56,000">SME Package (Gold Plan) - ₦56,000</option>
                                    <option value="Corporate Package (3 Mbps) - ₦69,000">Corporate Package (3 Mbps) - ₦69,000</option>
                                    <option value="Corporate Package (5 Mbps) - ₦87,000">Corporate Package (5 Mbps) - ₦87,000</option>
                                    <option value="Corporate Package (10 Mbps) - ₦165,000">Corporate Package (10 Mbps) - ₦165,000</option>
                                    <option value="Corporate Package (15 Mbps) - ₦195,000">Corporate Package (15 Mbps) - ₦195,000</option>
                                    <option value="Corporate Package (20 Mbps) - ₦265,000">Corporate Package (20 Mbps) - ₦265,000</option>
                                    <option value="Corporate Package (30 Mbps) - ₦370,000">Corporate Package (30 Mbps) - ₦370,000</option>
                                    <option value="Corporate Package (40 Mbps) - ₦484,000">Corporate Package (40 Mbps) - ₦484,000</option>
                                    <option value="Corporate Package (50 Mbps) - ₦585,000">Corporate Package (50 Mbps) - ₦585,000</option>
                                </select>
                            </div>
                            <button id="submitBtn" type="submit" class="btn btn-block">
                                Subscribe
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
