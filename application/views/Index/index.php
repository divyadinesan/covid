<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Covid </title>
    <!-- google fonts -->
    <link href="<?php echo base_url('Asset/Patient//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap')?>" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo base_url('Asset/Patient/css/style-starter.css')?>">
</head>

<body>
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark stroke">
                <h1>
                    <a class="navbar-brand" href="index.html">
                      C<i class="fab fa-keycdn"></i>vid</a>
                </h1>
                <!-- if logo is image enable this   
          <a class="navbar-brand" href="#index.html">
              <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
          </a> -->
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo base_url('index.php/Index_controller/index')?>">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('index.php/Index_controller/about')?>">About</a>
                        </li>
                         <li class="nav-item mr-lg-1">
                            <a class="nav-link" href="<?php echo base_url('index.php/Index_controller/contact')?>">Contact</a>
                        </li>
                         <li class="nav-item mr-lg-1">
                            <a class="nav-link" href="<?php echo base_url('index.php/Admin_controller/login')?>">Admin</a>
                        </li>
                         <li class="nav-item mr-lg-1">
                            <a class="nav-link" href="<?php echo base_url('index.php/Patient_controller/Patient_login')?>">Patient</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('index.php/Hospital_controller/Hospital_login')?>">Hospital</a>
                        </li>
                       
                         <!--/search-right-->
                            <li class="header-search mr-lg-2 mt-lg-0 mt-4 position-relative">
                               
                            </li>
                            <!--//search-right-->
                    </ul>
                </div>
               

                <!-- toggle switch for light and dark theme -->
                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container py-1">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>

        </div>
    </header>
    <!--/header-->

    <!-- hero slider Start -->
    <div class="banner-wrap">
        <div class="banner-slider">
            <!-- hero slide start -->
            <div class="banner-slide bg1">
                <div class="container">
                    <div class="hero-content">
                        <h1 data-animation="flipInX" data-delay="0.8s" data-color="#fff">
                            Prevent the Spread
                            Stay at Home, Stay Safe</h1>
                        <p data-animation="fadeInDown" class="mt-4">Avoid crowds and close contact. Wear a properly fitted mask when physical distancing is not possible and in poorly ventilated settings. Clean your hands frequently with alcohol-based hand rub or soap and water. 
                           </p>
                       
                    </div>
                </div>
                <div class="hero-overlay"></div>
            </div>
            <!-- hero slide end -->
           
        </div>
    </div>
    <!-- hero slider end -->
    <!--/home-stats-->
    <section class="w3l-stats-main py-5">
        <div class="container py-lg-5 py-2">
            <div class="row stats-con">
                <div class="col-lg-3 col-6 stats_info counter_grid text-left mt-lg-0 mt-5">
                    <div class="icon stat-icon">
                        <i class="fab fa-keycdn"></i>
                    </div>
                    <p class="counter">1233100</p>
                    <h4>Active Cases</h4>
                </div>
                <div class="col-lg-3 col-6 stats_info counter_grid1 text-left mt-lg-0 mt-5">
                    <div class="icon stat-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <p class="counter">182020</p>
                    <h4>Recovered Cases</h4>
                </div>
                <div class="col-lg-3 col-6 stats_info counter_grid text-left mt-lg-0 mt-5">
                    <div class="icon stat-icon">
                        <i class="fas fa-skull-crossbones"></i>
                    </div>
                    <p class="counter">71912</p>
                    <h4>Total Deaths</h4>
                </div>
                <div class="col-lg-3 col-6 stats_info counter_grid text-left mt-lg-0 mt-5">
                    <div class="icon stat-icon">
                        <i class="fas fa-crutch"></i>
                    </div>
                    <p class="counter">11912</p>
                    <h4>Vaccination</h4>
                </div>
            </div>
        </div>
    </section>
    <!--//home-stats-->
    <!-- home page about section -->
    <section class="w3l-homeblock1" id="about">
        <div class="midd-w3 py-5">
            <div class="container py-lg-5 py-md-3">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <span class="title-subw3hny">About the disease</span>
                        <h3 class="title-w3l">Coronavirus Disease 
                            Outbreak Situation</h3>
                        
                        <ul class="service-list pt-lg-2 mt-4">
                            <li class="service-link"><a href="#url"><span class="fas fa-check"></span> Avoid touching your face.</a></li>
                            <li class="service-link"><a href="#url"><span class="fas fa-check"></span> Cover your mouth and nose when coughing.</a></li>
                            <li class="service-link"><a href="#url"><span class="fas fa-check"></span> Stay home if you feel unwell.</a></li>
                        </ul>
                    </div>
                    <div class="HomeAboutImages col-lg-6 mt-lg-0 mt-5 pl-lg-5">
                        <div class="row position-relative">
                            <div class="col-6">
                                <img src="<?php echo base_url('Asset/Patient/images/1.jpg')?>" alt="" class="radius-image img-fluid">
                            </div>
                            <div class="col-6">
                                <img src="<?php echo base_url('Asset/Patient/images/2.jpg')?>" alt="" class="radius-image img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //home page about section -->
    <!-- features-section -->
    <section class="w3l-features py-5" id="work">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row main-cont-wthree-2 align-items-center">
                <div class="col-lg-6 feature-grid-left pr-lg-5">
                    <h5 class="title-subw3hny">How to Protect Yourself?</h5>
                    <h3 class="title-w3l mb-4">Prevention & advice</h3>
                    <p class="text-para">Get vaccinated when a vaccine is available to you.
                    Stay at least 1 metre apart from others, even if they don’t appear to be sick.
                    Wear a properly fitted mask when physical distancing is not possible or when in poorly ventilated settings.

                    </p>
                    <a href="about.html" class=""></a>
                </div>
                <div class="col-lg-6 feature-grid-right mt-lg-0 mt-5 pl-lg-5">
                    <div class="call-grids-w3 d-grid">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-hands-wash"></i>
                            </div>
                            <h4><a href="about.html" class="title-head">Wash your hands frequently</a></h4>
                        </div>
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-people-arrows"></i>
                            </div>
                            <h4><a href="about.html" class="title-head">Maintain social distancing</a></h4>
                        </div>
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-surprise"></i>
                            </div>
                            <h4><a href="about.html" class="title-head">Avoid touching on your face</a></h4>
                        </div>
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-temperature-high"></i>
                            </div>
                            <h4><a href="about.html" class="title-head">Practice respiratory hygiene</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features section -->
    <!--  services section -->
    <div class="w3l-servicesblock2" id="services">
        <section id="grids5-block" class="py-5">
            <div class="container py-lg-5 py-md-4 py-2">
                <h5 class="title-subw3hny text-center">Protect Yourself?</h5>
                <h3 class="title-w3l text-center">Take Steps To Protect
                    Yourself</h3>
                <div class="row mt-lg-5 mt-4 text-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="grids5-info">
                            <a href="#service" class="d-block zoom"><img src="<?php echo base_url('Asset/Patient/images/s1.jpg')?>" alt=""
                                    class="img-fluid" /></a>
                            <div class="blog-info">
                                <a href="#service" class="title">Wear A Face Mask</a>
                                <p class="text-para"> Masks should be used as part of a comprehensive strategy of measures to suppress transmission and save lives; the use of a mask alone is not sufficient to provide an adequate level of protection against COVID-19.If COVID-19 is spreading in your community, stay safe by taking some simple precautions, such as physical distancing, wearing a mask, keeping rooms well ventilated, avoiding crowds, cleaning your hands, and coughing into a bent elbow or tissue. </p>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
                        <div class="grids5-info">
                            <a href="#service" class="d-block zoom"><img src="assets/images/s2.jpg" alt=""
                                    class="img-fluid" /></a>
                            <div class="blog-info">
                                <a href="#service" class="title">Wash Your Hands</a>
                                <p class="text-para">Handwashing is one of the best ways to prevent the spread of COVID-19. According to the CDC, soap and friction help lift dirt, grease, and microbes—including COVID-19 disease-causing germs—from skin so they can then be rinsed off of hands. But it must be done properly with soap and water.When soap and water are not available, the next best option is to use an alcohol-based hand sanitizer. Your sanitizer should contain at least 60% alcohol. If not, it won’t kill germs effectively.</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
                        <div class="grids5-info">
                            <a href="#service" class="d-block zoom"><img src="<?php echo base_url('Asset/Patient/images/s3.jpg')?>" alt=""
                                    class="img-fluid" /></a>
                            <div class="blog-info">
                                <a href="#service" class="title">Avoid Close Contact</a>
                                <p class="text-para"> when in public places, especially if they are having symptoms such as cough, fever etc. to avoid direct droplet contact. Stay at home as much as possible. Avoid physical contact like handshakes, hand holding or hugs. Avoid touching surfaces such as table tops, chairs, door handles etc. </p>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--//services-section-->
    <!--/testimonials-->
   
    <!-- //testimonials -->
   
     <!--/subscribe-->
          
     <!--//subscribe-->
    <!--/footer-->
   
    <!-- //footer -->
    <!-- copyright -->
    <section class="w3l-copyright">
        <div class="container">
            <div class="row bottom-copies">
                <p class="col-lg-8 copy-footer-29">@2023 | codeigniter framework. |<a
                        href="https://atees.org/" target="_blank">
                        ATEES Industrial Training Pvt Ltd</a></p>
                  
            </div>
        </div>
        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            <i class="fas fa-level-up-alt"></i>
        </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- /move top -->
    </section>
    <!-- //copyright -->
    <!--//footer-->
    <!-- Template JavaScript -->
    <script src="<?php echo base_url('Asset/Patient/js/jquery-3.3.1.min.js')?>"></script>
    <script src="<?php echo base_url('Asset/Patient/js/theme-change.js')?>"></script>
    
    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- disable body scroll which navbar is in active -->

    <!--/MENU-JS-->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!--//MENU-JS-->
    <script src="<?php echo base_url('Asset/Patient/js/bootstrap.min.js')?>"></script>

</body>

</html>