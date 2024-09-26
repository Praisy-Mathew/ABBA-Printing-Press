<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>ABBA PRINTING PRESS L.L.C</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Logo Favicon -->
      <link rel="icon" href="img/logos.jpg" type="image/png">


        <!-- Google Web Fonts -->
        <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"> -->

        <!-- Libraries Stylesheet -->
        <!-- <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> -->


        <!-- Customized Bootstrap Stylesheet -->
        <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->

        <!-- Template Stylesheet -->
        <!-- <link href="css/style.css" rel="stylesheet">  -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <style>
        #spinner {
            opacity: 0;
            visibility: hidden;
            transition: opacity .5s ease-out, visibility 0s linear .5s;
            z-index: 99999;
        }
        
        #spinner.show {
            transition: opacity .5s ease-out, visibility 0s linear 0s;
            visibility: visible;
            opacity: 1;
        }
        /*** Spinner End ***/
        
        .back-to-top {
            position: fixed;
            right: 30px;
            bottom: 30px;
            display: flex;
            width: 45px;
            height: 45px;
            align-items: center;
            justify-content: center;
            transition: 0.5s;
            z-index: 99;
        }
        
        /*** Button Start ***/
        .btn {
            font-weight: 600;
            transition: .5s;
        }
        
        .btn-square {
            width: 32px;
            height: 32px;
        }
        
        .btn-sm-square {
            width: 34px;
            height: 34px;
        }
        
        .btn-md-square {
            width: 44px;
            height: 44px;
        }
        
        .btn-lg-square {
            width: 56px;
            height: 56px;
        }
        
        .btn-square,
        .btn-sm-square,
        .btn-md-square,
        .btn-lg-square {
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: normal;
            border-radius: 50%;
        }
        
        /* .btn.btn-primary {
            background: var(--bs-secondary) !important;
            color: var(--bs-white) !important;
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            transition: 0.5s;
        }
        
        .btn.btn.btn-primary:hover {
            background: var(--bs-primary) !important;
            color: var(--bs-secondary);
            border: 1px solid var(--bs-secondary);
        }
        
        .btn.btn-secondary {
            background: transparent;
            color: var(--bs-secondary);
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            border: none;
            transition: 0.5s;
        }
        
        .btn.btn-secondary:hover {
            color: var(--bs-primary) !important;
        } */
        
        
        /*** Section Title Start ***/
        .section-title {
            max-width: 900px;
            text-align: center;
            margin: 0 auto;
        }
        
        .section-title .sub-style {
            position: relative;
            display: inline-block;
            text-transform: uppercase;
            color: var(--bs-primary);
        }
        
        .section-title .sub-style::before {
            content: "";
            width: 100px;
            position: absolute;
            bottom: 50%;
            left: 0;
            transform: translateY(-50%);
            margin-bottom: -6px;
            margin-left: -100px;
            border: 1px solid var(--bs-secondary) !important; 
        }
        
        .section-title .sub-style::after {
            content: "";
            width: 50px;
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            margin-top: -8px;
            margin-left: -50px;
            border: 1px solid var(--bs-primary) !important;
        }
        
        .sub-title {
            position: relative;
            display: inline-block;
            text-transform: uppercase;
            color: var(--bs-primary);
        }
        
        .sub-title::before {
            content: "";
            width: 100px;
            position: absolute;
            bottom: 50%;
            right: 0;
            transform: translateY(-50%);
            margin-bottom: -8px;
            margin-right: -100px;
            border: 1px solid var(--bs-secondary) !important;
        }
        
        .sub-title::after {
            content: "";
            width: 50px;
            position: absolute;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
            margin-top: -6px;
            margin-right: -50px;
            border: 1px solid var(--bs-primary) !important;
        }
        
        
       
        
       
        
        /*** Single Page Hero Header Start ***/
        .bg-breadcrumb {
            background: url(../img/breadcrumb.png);
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: initial;
            background-size: cover;
            padding: 100px 0 60px 0;
        }
        /*** Single Page Hero Header End ***/
        
        
        /*** Carousel Hero Header Start ***/
        .carousel-header .carousel-control-prev .carousel-control-prev-icon,
        .carousel-header .carousel-control-next .carousel-control-next-icon {
            width: 4rem;
            height: 4rem;
            margin-left: -60px;
            border-radius: 50%;
            background-size: 60% 60%;
            transition: 0.5s;
        }
        
        .carousel-header .carousel-control-next .carousel-control-next-icon {
            margin-left: 0;
            margin-right: -60px;
        }
        
        .carousel-header .carousel .carousel-indicators {
            padding-bottom: 0;
            transition: 0.5s;
        }
        
        
        .carousel-header .carousel .carousel-indicators li,
        .carousel-header .carousel .carousel-indicators li,
        .carousel-header .carousel .carousel-indicators li {
            width: 8px;
            height: 8px;
            border: 8px solid var(--bs-primary);
            border-radius: 50%;
            margin-right: 30px;
            transition: 0.5s;
        }
        
        .carousel-header .carousel .carousel-indicators li.active {
            width: 8px;
            height: 8px;
            border: 8px solid var(--bs-secondary);
        }
        
        .carousel-header .carousel-inner .carousel-item {
            position: relative;
            min-height: 100vh 
        }
        
        .carousel-header .carousel-inner .carousel-item img {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .carousel-header .carousel-inner .carousel-item .carousel-caption  {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, 0.6));
            background-size: cover;
        }
        
        
        @media (max-width: 768px) {
            .carousel-header {
                height: 700px !important;
            }
        
            .carousel-header .carousel-control-prev .carousel-control-prev-icon,
            .carousel-header .carousel-control-next .carousel-control-next-icon {
                margin-top: 500px;
            }
        
            .carousel-header .carousel-control-prev .carousel-control-prev-icon {
                margin-left: 0px;
            }
        
            .carousel-header .carousel-control-next .carousel-control-next-icon {
                margin-right: 0px;
            }
        
            .carousel-header .carousel .carousel-indicators {
                padding: 0;
            }
        }
        /*** Carousel Hero Header End ***/
        
        
        /*** Counter Facts Start ***/
        .counter-facts {
            background: linear-gradient(rgba(255, 255, 255, .9), rgba(255, 255, 255, 0.8)), url(../img/breadcrumb.png);
            background-size: cover;
            background-attachment: fixed;
            background-position: center center;
            background-repeat: no-repeat;
        }
        
        .counter-facts .counter {
            position: relative;
            text-align: center;
            width: 200px;
            min-height: 215px;
            padding: 10px 15px;
            margin: 0 auto;
            border-radius: 100px;
            box-shadow: 0 8px 5px rgba(0, 0, 0, 0.2);
            background: var(--bs-white);
        }
        
        .counter-facts .counter:before {
            content: "";
            position: absolute;
            height: 105px;
            width: 100%;
            left: 0;
            top: 0;
            border-radius: 10px 10px 0 0;
            background-color: var(--bs-primary);
            
        }
        .counter-facts .counter .counter-icon {
            position: relative;
            width: 120px;
            height: 100px;
            margin: 0 auto 10px;
            border-radius: 10px 10px 0 0;
            transform: translateY(-20px);
            font-size: 50px;
            line-height: 90px;
            color: var(--bs-secondary);
            background: rgba(1, 143, 252, 0.5);
            clip-path: polygon(0% 0%, 100% 0, 100% 70%, 50% 100%, 0 70%);
        }
        .counter-facts .counter .counter-icon:before {
            content: "";
            position: absolute;
            width: 120px;
            height: 90px;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 10px 10px 0 0;
            background: rgba(0, 58, 102, 0.5);
            z-index: -1;
            clip-path: polygon(0% 0%, 100% 0, 100% 70%, 50% 100%, 0 70%);
        }
        .counter-facts .counter:hover .counter-icon i {
            transform: rotate(360deg);
            transition: all 0.3s ease;
        }
        .counter-facts .counter h3 {
            color: var(--bs-primary);
            font-size: 17px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin: 0 0 5px 0;
        }
        .counter-facts .counter .counter-value {
            font-size: 30px;
            font-weight: 700;
            display: block;
            color: var(--bs-secondary);
        }
        
        @media screen and (max-width: 1200px) {
            .counter-facts .counter { margin-bottom: 40px; 
            }
        }
        /*** Counter Facts End ***/
        
        
        /*** service Start ***/
        .service .service-item {
            position: relative;
            overflow: hidden;
            color: #284881 !important;
        }
        
        .service .service-item .service-inner .service-title {
            position: relative;
            margin-top: -30px;
            text-align: center;
            transition: 0.5s;
            color:#284881 !important;
        }
        
        .service .service-item .service-inner .service-title .service-content {
            position: absolute;
            bottom: -100%; 
            left: 0;
            margin-left: 30px;
            margin-right: 30px;
            text-align: center;
            border-radius: 10px;
            color:#284881 !important;
            background-color:var(--bs-primary);
            opacity: 0;
            transition: 0.5s;
        }
        
        .service .service-item:hover .service-inner .service-title .service-content {
            bottom: 0;
            opacity: 1;
        }
        
        .service .service-item .service-inner .service-title .service-content a h4 {
            border-bottom: 1px solid rgba(256, 256, 256, .1);
        }
        
        .service .service-item .service-inner .service-title .service-title-name {
            transition: 0.5s;
        }
        
        .service .service-item:hover .service-inner .service-title .service-title-name {
            opacity: 0;
        }
        
        .service .service-item .service-inner .service-img {
            position: relative;
            border-radius: 10px;
            overflow: hidden;
        }
        
        .service .service-item .service-inner .service-img::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 0;
            border-radius: 10px;
            background: rgba(255, 255, 255, .5);
            transition: 0.5s;
            opacity: 0;
        }
        
        .service .service-item:hover .service-inner .service-img::after {
            height: 100%;
            opacity: 1;
        }
        
        .service .service-item .service-inner .service-img img {
            transition: 0.5s;
        }
        
        .service .service-item:hover .service-inner .service-img img {
            transform: scale(1.3);
        }
        /*** Service End ***/
        
        
        /*** Features Start ***/
        .features .feature-item {
            position: relative;
            box-shadow: 0 0 45px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        
        .features .feature-item::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 0;
            bottom: 0;
            left: 0;
            border-radius: 10px;
            background: rgba(0, 58, 102, 0.1);
            z-index: -1;
            transition: 0.5s;
        }
        
        .features .feature-item:hover::after {
            height: 100%;
        }
        
        .features .feature-item .feature-icon {
            width: 120px; 
            height: 120px;
            border-radius: 10px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: var(--bs-light);
            transition: 0.5s;
        }
        
        .features .feature-item:hover .feature-icon {
            border-radius: 50%;
            background: var(--bs-white) !important;
        }
        
        .features .feature-item .feature-icon i {
            transition: 0.5s;
        }
        
        .features .feature-item:hover .feature-icon i {
            color: var(--bs-secondary) !important;
            transform: rotate(360deg);
            transition: all 0.5s ease;
        }
        /*** Features End ***/
        
        
        /*** Country Start ***/
        .country .country-item {
            position: relative;
        }
        
        .country .country-item::after {
            position: absolute;
            content: "";
            width: 100%;
            height: 0;
            bottom: 0;
            left: 0;
            background: rgba(0, 58, 102, 0.7);
            border-radius: 10px;
            transition: 0.5s;
            z-index: 1;
        }
        
        .country .country-item:hover::after {
            height: 100%;
        }
        
        .country .country-item .country-flag {
            position: absolute;
            width: 90px; 
            height: 90px; 
            border-radius: 50%;
            top: -45px; 
            left: 50%; 
            transform: translateX(-50%);
            transition: 0.5s;
            z-index: 2;
        }
        
        .country .country-item .country-flag img {
            border: 5px solid var(--bs-white);
            transition: 0.5s;
        }
        
        .country .country-item:hover .country-flag img {
            border: 5px solid var(--bs-white);
            transform: rotate(360deg);
            transition: all 0.5s ease;
        }
        
        .country .country-item .country-name {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            transition: 0.5s;
            opacity: 0;
            z-index: 3;
        }
        
        .country .country-item:hover .country-name {
            opacity: 1;
        }
        
        .country .country-item img {
            transition: 0.5s;
        }
        
        .country .country-item:hover img {
            transform: scale(1.2);
        }
        
        .country .country-item .country-name a.fs-4 {
            transition: 0.5s;
        }
        
        .country .country-item .country-name a.fs-4:hover {
            color: var(--bs-secondary) !important;
        }
        /*** Country End ***/
        
        
        /*** testimonial Start ***/
        .testimonial .owl-carousel.testimonial-carousel {
            position: relative;
        }
        
        .testimonial .owl-carousel.testimonial-carousel .testimonial-item .testimonial-content {
            position: relative;
            border-radius: 10px;
            background: var(--bs-light);
        }
        
        .testimonial .owl-carousel.testimonial-carousel .testimonial-item .testimonial-content::after {
            position: absolute;
            content: "";
            width: 45px;
            height: 45px;
            bottom: -20px;
            left: 30px;
            transform: rotate(45deg);
            background: var(--bs-light);
            z-index: -1;
        }
        
        .testimonial .owl-carousel.testimonial-carousel .owl-nav {
            position: absolute;
            top: -60px;
            right: 0;
            display: flex;
            font-size: 40px;
            color: var(--bs-primary);
        }
        
        .testimonial .owl-carousel.testimonial-carousel .owl-nav .owl-prev {
            margin-right: 40px;
        }
        
        .testimonial .owl-carousel.testimonial-carousel .owl-nav .owl-prev,
        .testimonial .owl-carousel.testimonial-carousel .owl-nav .owl-next {
            transition: 0.5s;
        }
        
        .testimonial .owl-carousel.testimonial-carousel .owl-nav .owl-prev:hover,
        .testimonial .owl-carousel.testimonial-carousel .owl-nav .owl-next:hover {
            color: var(--bs-secondary);
        }
        /*** testimonial end ***/
        
        
        /*** training Start ***/
        .training .training-item .training-inner {
            position: relative;
        }
        
        .training .training-item .training-inner .training-title-name {
            position: absolute;
            width: 100%;
            height: 100%;
            bottom: 0;
            left: 0;
            padding: 20px;
            border-radius: 10px;
            background: rgba(0, 0, 0, 0.5);
            display: flex; 
            flex-direction: column;
            justify-content: end;
            text-align: center;
            transition: 0.5s;
        }
        
        .training .training-item {
            border-radius: 10px;
            position: relative;
            overflow: hidden;
        }
        
        .training .training-item:hover .training-inner .training-title-name {
            background: rgba(0, 58, 102, 0.5);
        }
        
        .training .training-item:hover .training-inner .training-title-name a {
            opacity: 0;
        }
        
        .training .training-item .training-inner img {
            transition: 0.5s;
        }
        
        .training .training-item:hover .training-inner img {
            transform: scale(1.3);
        }
        
        .training .training-item .training-content {
            position: absolute;
            width: 100%;
            bottom: -100%;
            left: 0;
            transition: 0.5s;
        }
        
        .training .training-item:hover .training-content {
            bottom: 0;
        }  
        /*** training End ***/
        
        
        /*** Contact Start ***/
        .contact .office .office-item {
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 0 45px rgba(0, 0, 0, 0.2);
            background: var(--bs-light);
            transition: 0.5s;
        }
        
        .contact .office .office-item:hover {
            box-shadow: 20px 20px 20px rgba(0, 58, 102, 0.3);
        }
        
        .contact .office .office-item .office-img {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
        }
        
        .contact .office .office-item .office-img img {
            transition: 0.5s;
        }
        
        .contact .office .office-item:hover .office-img img {
            transform: scale(1.3);
        }
        
        .contact .office .office-item .office-content a.text-secondary,
        .contact .office .office-item .office-content a.text-muted {
            transition: 0.5s;
        }
        
        .contact .office .office-item .office-content a.text-muted:hover {
            color: var(--bs-secondary) !important;
        }
        
        .contact .office .office-item .office-content a.text-secondary:hover {
            color: var(--bs-primary) !important;
        }
        /*** Contact End ***/
        
        
        /*** Footer Start ***/
        /* .footer {
            background: var(--bs-primary);
        }
        .footer .footer-item a {
            line-height: 30px;
            color: var(--bs-white);
            transition: 0.5s;
        }
        
        .footer .footer-item p {
            line-height: 30px;
        }
        
        .footer .footer-item a:hover {
            letter-spacing: 2px;
            color: var(--bs-secondary);
        }
        
        /*** Footer End ***/
        
        
        /*** copyright Start ***/
        /* .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            background: var(--bs-secondary) !important;
        } */ */
        /*** copyright end ***/
    </style>
    
    
    </head>


    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-secondary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Topbar Start -->
        <div class="container-fluid topbar bg-light px-5 d-none d-lg-block">
            <div class="row gx-0 align-items-center">
                <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <a href="tel:+01234567890" class="text-muted small me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+971508087746 </a>
                        <a href="mailto:example@gmail.com" class="text-muted small me-0"><i class="fas fa-envelope text-primary me-2"></i>info@abbaprinting.net</a>
                    </div>
                </div>
                <!-- <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a href="#"><small class="me-3 text-dark"><i class="fa fa-user text-primary me-2"></i>Register</small></a>
                        <a href="#"><small class="me-3 text-dark"><i class="fa fa-sign-in-alt text-primary me-2"></i>Login</small></a>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle text-dark" data-bs-toggle="dropdown"><small><i class="fa fa-home text-primary me-2"></i> My Dashboard</small></a>
                            <div class="dropdown-menu rounded">
                                <a href="#" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> My Profile</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-comment-alt me-2"></i> Inbox</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-bell me-2"></i> Notifications</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-cog me-2"></i> Account Settings</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-power-off me-2"></i> Log Out</a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <img src="img/ab11.png" alt="Logo" class="text-primary" style="width:220px;">  
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="/" class="nav-item nav-link ">Home</a>
                        <a href="about" class="nav-item nav-link ">About Us</a>
                        <a href="qualities" class="nav-item nav-link active">Quality</a>
                        <a href="services1" class="nav-item nav-link ">Services</a>
                        <a href="clients" class="nav-item nav-link">Clients</a>
                        <a href="associates" class="nav-item nav-link">Our Network</a>

                    </div>
                    <a href="contact" class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">Contact Us</a>
                </div>
            </nav>


        <!-- Navbar & Hero End -->

        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h4 class="modal-title text-secondary mb-0" id="exampleModalLabel">Search by keyword</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->

        <!-- Header Start -->
            
            
        <div class="container-fluid bg-breadcrumb" style="background-image: url('img/im5.jpeg'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 550px; text-align: center;">
            <div class="container text-center py-5" style="max-width: 700px;">
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s" style="font-size: 25px;; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;color: white; font-style: italic;">Quality is our unwavering commitment to excellence.</h1>
                <!-- <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="" class="text-white">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white">Pages</a></li>
                    <li class="breadcrumb-item active text-secondary">Services</li>
                </ol>     -->
            </div>
        </div>
        <!-- Header End -->

<div class="container-fluid service overflow-hidden py-5">
    <div class="container py-5">
        <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h5 class="sub-title text-primary px-3">QUALITY</h5>
            </div>
            <h1 class="display-5 mb-4">Uncompromising Quality</h1>
            <p class="mb-0">At ABBA, quality is our cornerstone. We blend meticulous craftsmanship with innovative techniques to deliver prints that not only meet but exceed your expectations. Every project is a testament to our dedication to excellence and attention to detail.</p>
        </div>
        <div class="row g-4">
            @foreach($qualities as $quality)
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="service-inner">
                            <div class="service-img">
                                <img src="{{ asset('storage/' . $quality->image) }}" class="img-fluid w-100 rounded" alt="Image" style="height:240px">
                            </div>
                            <div class="service-title">
                                <div class="service-title-name">
                                    <div class="bg-primary text-center rounded p-3 mx-5 mb-4" style="background-color: #284881 !important;">
                                        <a class="h4 text-white mb-0">{{ $quality->title }}</a>
                                    </div>
                                </div>
                                <div class="service-content pb-4">
                                    <a class=""><h4 class="text-white mb-4 py-3">{{ $quality->title }}</h4>
                                    </a>
                                    <div class="px-2">
                                        <p class="mb-4" style="color: white;">{{ $quality->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
@endforeach
        </div>
    </div>
    </div>
    </div>

        <!-- Services Start -->
        <!-- <div class="container-fluid service overflow-hidden py-5">
            <div class="container py-5">
                <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary px-3">QUALITY</h5>
                    </div>
                    <h1 class="display-5 mb-4">Uncompromising Quality</h1>
                    <p class="mb-0">At ABBA, quality is our cornerstone. We blend meticulous craftsmanship with innovative techniques to deliver prints that not only meet but exceed your expectations. Every project is a testament to our dedication to excellence and attention to detail.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div class="service-inner" >
                                <div class="service-img">
                                    <img src="img/quality1.jpeg" class="img-fluid w-100 rounded" alt="Image" style="height:240px">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4" style="background-color: #284881 !important;" >
                                            <a class="h4 text-white mb-0">Premium Card Stock</a>
                                        </div>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a class=""><h4 class="text-white mb-4 py-3">Premium Card Stock</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4" style="color: white;" >We use premium 15-point stock (350 gsm) with a satin matte finish, which can increase to 16-point with a glossy U/V coating</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="img/quality2.jpg" class="img-fluid w-100 rounded" alt="Image" style="height: 240px;">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4" style="background-color: #284881 !important;">
                                            <a  class="h4 text-white mb-0">Premium Letterhead</a>
                                        </div>
                                        <a class="" href=""></a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href=""><h4 class="text-white mb-4 py-3">Premium Letterhead</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4" style="color:white">We use acid-free 70# opaque premium stock with minimal see-through and excellent offset runability.
                                            </p>
                                            <a class="" href=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="img/quality4.jpeg" class="img-fluid w-100 rounded" alt="Image" style="height: 240px;">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4" style="background-color: #284881 !important;">
                                            <a  class="h4 text-white mb-0">Premium Greeting Card Stock</a>
                                        </div>
                                        <a class="" href=""></a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href=""><h4 class="text-white mb-4 py-3">Premium Greeting Card Stock</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4" style="color:white">Our 12-point clay-coated Greeting Card stock is perfect for 600 dpi digital printing, enhancing your card inside and out.
                                            </p>
                                            <a class="" href=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="img/quality3.jpeg" class="img-fluid w-100 rounded" alt="Image" style="height: 240px;">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4" style="background-color: #284881 !important;">
                                            <a class="h4 text-white mb-0">Envelope Paper Stock</a>
                                        </div>
                                        <a class= "" href=""></a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href=""><h4 class="text-white mb-4 py-3">Envelope Paper Stock</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4" style="color:white">The crisp brightness ensures consistent color printing, and the paper works reliably in both laser and inkjet printers.</p>
                                            <a class="" href=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="img/quality5.jpg" class="img-fluid w-100 rounded" alt="Image" style="height: 240px;">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4" style="background-color: #284881 !important;" >
                                            <a class="h4 text-white mb-0">True Offset Lithography</a>
                                        </div>
                                        <a class= "" href="#"></a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href=""><h4 class="text-white mb-4 py-3">True Offset Lithography</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4" style="color:white">We use offset lithography with a 200 lpi (4800 dpi) screen for crisp, vibrant prints and a professional finish without streaking.</p>
                                            <a class="" href=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="img/quality6.jpeg" class="img-fluid w-100 rounded" alt="Image" style="height:240px">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4" style="background-color: #284881 !important;">
                                            <a class="h4 text-white mb-0" >Sustainability Commitment</a>
                                        </div>
                                        <a class= "" href=""></a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="#"><h4 class="text-white mb-4 py-3">Sustainability Commitment</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4" style="color:white">We also offer eco-friendly printing options, including soy-based inks and reduced waste practices.
                                            </p>
                                            <a class="" href=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Services End -->


        
        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5 border-start-0 border-end-0" style="border: 1px solid; border-color: rgb(255, 255, 255, 0.08);">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="footer-item">
                            <a href="/" class="p-0">
                                <h4 class="" style="color: #284881 ;"><i></i>ABBA Printing Press L.L.C</h4>
                                <!-- <img src="img/logo.png" alt="Logo"> -->
                            </a>
                            <p class="mb-4">Powered by ABBA Printing Press – Delivering Quality Print and Digital Solutions Since 1996.</p>
                            <img src="img/ab111.png" alt="Logo"> 
                            <img src="img/ab222.png" alt="Logo"> 
                            <img src="img/ab333.png" alt="Logo"> 
                            <!-- <div class="d-flex">
                                <a href="#" class="bg-primary d-flex rounded align-items-center py-2 px-3 me-2">
                                    <i class="fas fa-apple-alt text-white"></i>
                                    <div class="ms-3">
                                        <small class="text-white">Download on the</small>
                                        <h6 class="text-white">App Store</h6>
                                    </div>
                                </a>
                                <a href="#" class="bg-dark d-flex rounded align-items-center py-2 px-3 ms-2">
                                    <i class="fas fa-play text-primary"></i>
                                    <div class="ms-3">
                                        <small class="text-white">Get it on</small>
                                        <h6 class="text-white">Google Play</h6>
                                    </div>
                                </a>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="footer-item">
                            <h4 class="mb-4" style="color: #284881 ;">Quick Links</h4>
                            <a href="home"><i class="fas fa-angle-right me-2"></i> Home</a>
                            <a href="about"><i class="fas fa-angle-right me-2"></i> About Us </a>
                            <a href="services1"><i class="fas fa-angle-right me-2"></i> Services </a>
                            <a href="qualities"><i class="fas fa-angle-right me-2"></i> Quality</a>
                            <a href="clients"><i class="fas fa-angle-right me-2"></i> Clients</a>
                            <a href="contact"><i class="fas fa-angle-right me-2"></i> Contact us</a>
                        </div>
                    </div>
                    <!-- <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item">
                            <h4 class="text-white mb-4">Support</h4>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Terms & Conditions</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Disclaimer</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Support</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> FAQ</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Help</a>
                        </div>
                    </div> -->
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="footer-item">
                            <h4 class="mb-4" style="color:#284881  ;">Contact Info</h4>
                            <div class="d-flex align-items-start">
                                <i class="fas fa-map-marker-alt text-primary me-3"></i>
                                <p class="mb-0">ABBA Printing Press L.L.C<br>
                                    P.O Box 44391<br>
                                    Sharjah, UAE</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-envelope text-primary me-3"></i>
                                <p class="mb-0">info@abbaprinting.net</p>
                            </div>
                            <div class="d-flex align-items-start">
                                <i class="fa fa-phone-alt text-primary me-3"></i>
                                <p class="mb-0"> Telephone: +971 6 535 0351<br>
                                    Mobile: +971 50 631 8150<br>
                                    <span style="margin-left: 60px;">+971 50 808 7746</span>
                             </p>
                            </div>                            
                            <!-- <div class="d-flex align-items-center mb-4">
                                <i class="fab fa-firefox-browser text-primary me-3"></i>
                                <p class="text-white mb-0">Yoursite@ex.com</p>
                            </div> -->
                            <div class="d-flex">
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f text-white"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-twitter text-white"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-instagram text-white"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-0" href="#"><i class="fab fa-linkedin-in text-white"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>ABBA Printing Press L.L.C<br> All right reserved.</a></span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-body">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        <a class="border-bottom text-white" href=""> Designed By <br><span style="font-style: italic;">Cognetz</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>