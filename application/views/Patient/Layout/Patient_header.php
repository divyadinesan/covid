<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kovid - Medical Category Bootstrap Responsive Template | Home : W3layouts</title>
    <!-- google fonts -->
    <link href="<?php echo base_url('Asset/Patient//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap')?>" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo base_url('Asset/Patient/css/style-starter.css')?>">
</head>

<body>
    <!--header-->
    <header id="site-header" class="fixed-top" style="background-color: black">
        <div class="container" >
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
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02" >
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo base_url('index.php/Patient_controller/Patient_home')?>">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('index.php/Patient_controller/My_bookings')?>">My Bookings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('index.php/Patient_controller/Patient_profile')?>">My Profile</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('index.php/Patient_controller/logout')?>">Logout</a>
                        </li>
                         <!--/search-right-->
                            
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

 