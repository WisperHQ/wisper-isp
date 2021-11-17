<header class="header">
        <div class="header-top" data-animate="fadeInDown" data-delay=".5">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                        <div class="header-info text-center text-md-left">
                            <span>Upgrade your internet speed for as low as ₦6,600/month <a href="subscription.php">Get It Now</a></span>
                        </div>
                </div>
            </div>
        </div>

        <div class="main-header" data-animate="fadeInUp" data-delay=".9">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-9">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.php">
                                <img src="assets/img/logo.png" width="100" data-rjs="2" alt="VPNet">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-5 col-sm-2 col-3">
                        <nav>
                            <!-- Header-menu -->
                            <div class="header-menu">
                                <ul class="navigation">
                                    <li class="<?php if($currentPage == 'home'){echo 'active';}?>"><a href="index.php">Home</a></li>
                                    <li class="<?php if($currentPage == 'about'){echo 'active';}?>"><a href="about.php">About Us</a></li>
                                    <li class="<?php if(substr($currentPage, 0, 3) === 'int'){echo 'active';}?>">
                                        <a href="#">Services <i class="fa fa-caret-down"></i></a>
                                        <ul>
                                            <li class="<?php if($currentPage == 'int-services'){echo 'active';}?>"><a href="services.php">All services</a></li>
                                            <li class="<?php if($currentPage == 'int-remote'){echo 'active';}?>"><a href="internet-remote-work.php">Internet for Remote work</a></li>
                                            <li class="<?php if($currentPage == 'int-wisper-mobile'){echo 'active';}?>"><a href="internet-wisper-mobile.php">Wisper Mobile</a></li>
                                            <li class="<?php if($currentPage == 'int-home-sme'){echo 'active';}?>"><a href="internet-home-sme.php">Internet for Home and SME</a></li>
                                            <li class="<?php if($currentPage == 'int-corporate'){echo 'active';}?>"><a href="internet-corporate.php">Internet for Corporate</a></li>
                                        </ul>
                                    </li>
                                    <li class="<?php if($currentPage == 'blog'){echo 'active';}?>"><a href="https://blog.wisper.ng">Blog</a></li>
                                    <li class="<?php if($currentPage == 'contact'){echo 'active';}?>"><a href="contact.php">Contact Us</a></li>
                                </ul>
                            </div>
                            <!-- End of Header-menu -->
                        </nav>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 d-none d-sm-block">
                        <!-- Header Call -->
                        <div class="header-call text-right">
                            <span>Get in Touch</span>
                            <a href="mailto:contact@wisper.ng">contact@wisper.ng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

