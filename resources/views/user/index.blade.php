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
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="lib/animate/animate.min.css"/>
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <style>
            .icon-box {
                transition: transform 0.7s ease;
            }
        
            .icon-box .icon {
                transition: transform 0.7s ease;
            }
        
            .icon-box:hover .icon {
                transform: rotate(360deg);
            }
             @media (max-width: 768px) {
                 .icon-box {
                    max-width: 100%;
                    flex: 1 1 100%;
             }
            }
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
    
        </style>
    </head>

    <body>
        

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
         <!-- Preloader -->
      <div id="preloader" class="preloader">  
      <div class="curtain left"></div>
      <div class="curtain right"></div>
      <div class="preloader-content">
        
         <img id="preloader-image" src="img/ABBA LOGO-01.png" alt="Loading..." style="max-width:100%; height:450px;">
    </div>
</div>

    
        
        <!-- Topbar Start -->
        <div class="container-fluid topbar bg-light px-5 d-none d-lg-block text-lg-end ">
            <div class="row gx-0 align-items-center text-lg-end">
                <div class="col-lg-8 text-right text-lg-start mb-2 mb-lg-0 text-lg-end">
                    <div class="d-flex flex-wrap text-lg-end ">
                        <!-- <a href="#" class="text-muted small me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a> -->
                        <a href="tel:+01234567890" class="text-muted small me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+971508087746 </a>
                        <a href="mailto:example@gmail.com" class="text-muted small me-0"><i class="fas fa-envelope text-primary me-2"></i>info@abbaprinting.net</a>
                    </div>
                </div>
                
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
                        <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="/about" class="nav-item nav-link">About Us</a>
                        <a href="/qualities" class="nav-item nav-link">Quality</a>
                        <a href="/services1" class="nav-item nav-link">Services</a>
                        <a href="/clients" class="nav-item nav-link">Clients</a>
                        <a href="/associates" class="nav-item nav-link">Our Network</a>
                    </div>
                    <a href="/contact" class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">Contact Us</a>
                </div>
            </nav>

            <!-- Carousel Start -->
            <div class="header-carousel owl-carousel">
                <div class="header-carousel-item">
                    <img src="img/hero8.jpg" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row gy-0 gx-5">
                                <div class="col-lg-0 col-xl-5"></div>
                                <div class="col-xl-7 animated fadeInLeft">
                                    <div class="text-sm-center text-md-end">
                                        <h4 class="text-primary text-uppercase fw-bold mb-4" style="color: white !important;"> ABBA Printing Press L.L.C</h4>
                                        <h1 class="display-4 text-uppercase text-white mb-4" style="font-size:25px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-style: oblique; font-weight: 200; color:#284881 ;" >Where ideas come to life, ink meets paper, and your vision becomes reality</h1>
                                        <!-- <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy... 
                                        </p> -->
                                        <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                            <!-- <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> Watch Video</a> -->
                                            <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="/home">Learn More</a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                            <h2 class="text-white me-2">Follow Us:</h2>
                                            <div class="d-flex justify-content-end ms-2">
                                                <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                                <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-twitter"></i></a>
                                                <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-instagram"></i></a>
                                                <a class="btn btn-md-square btn-light rounded-circle ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-carousel-item">
                    <img src="img/hero5.jpg" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row g-5">
                                <div class="col-12 animated fadeInUp">
                                    <div class="text-center">
                                        <h4 class="text-primary text-uppercase fw-bold mb-4" style="color: white !important;">ABBA Printing Press L.L.C</h4>
                                        <h1 class="display-4 text-uppercase text-white mb-4" style="font-size:25px; font-style: oblique; font-weight: 200; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Where Ideas Take Shape and Words Come to Life—Your Vision, Our Print.</h1>
                                       
                                        <div class="d-flex justify-content-center flex-shrink-0 mb-4">
                                            <!-- <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> Watch Video</a> -->
                                            <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="/home">Learn More</a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <h2 class="text-white me-2">Follow Us:</h2>
                                            <div class="d-flex justify-content-end ms-2">
                                                <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                                <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-twitter"></i></a>
                                                <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-instagram"></i></a>
                                                <a class="btn btn-md-square btn-light rounded-circle ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel End -->
        </div>
        <!-- Navbar & Hero End -->


        <!-- Abvout Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                        <div>
                            <h4 class="text-primary" style="font-size :30px;">About Us</h4>
                            <h1 class="display-5 mb-4" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-size:30px; font-style: italic; font-variant: small-caps; font-weight: 100;">Crafting Your Vision into Reality—Where Every Print Tells a Story.</h1>
                            <p class="mb-4">We are an offset printing company, established in 1996 and have grow steadily in business and print capacity ever since. We work towards quality assurance to gain customer satisfaction. Quality control is practiced at every stage of production, instilling awareness of quality among all members.

                                
                            </p>
                            <div style="display: flex; justify-content: space-between; align-items: center; padding: 20px; flex-wrap: wrap;">
                                <div class="icon-box" style="background-color: #ff4b4b; color: white; padding: 20px; width: 30%;  text-align: center; border-radius: 8px; margin-bottom: 20px;">
                                    <div class="icon" style="font-size: 40px; margin-bottom: 10px;">
                                        <i class="fas fa-award"></i>
                                    </div>
                                    <h5 style="color:white;">We’re professional & certified designers</h5>
                                </div>
                                <div class="icon-box" style="background-color: #4CAF50; color: white; padding: 20px; width: 30%; text-align: center; border-radius: 8px; margin-bottom: 20px;">
                                    <div class="icon" style="font-size: 40px; margin-bottom: 10px;">
                                        <i class="fas fa-thumbs-up"></i>
                                    </div>
                                    <h5 style="color:white;">We use quality material to make your Brand awesome</h5>
                                </div>
                                <div class="icon-box" style="background-color: #2f4fbb; color: white; padding: 20px; width: 30%; text-align: center; border-radius: 8px; margin-bottom: 20px;">
                                    <div class="icon" style="font-size: 40px; margin-bottom: 10px;">
                                        <i class="fas fa-smile"></i>
                                    </div>
                                    <h5 style="color:white;">We care about our customer satisfaction</h5>
                                </div>
                            </div>
                            
                            
                            
                            
                            <div class="col-sm-6" style="align-items: center;">
                                <a href="/about" class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0" style="align-items: center;">Discover Now</a>
                            </div>
                        </div>
                    </div>
                    
                      <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="bg-primary rounded position-relative overflow-hidden">
                            <img src="img/hero11.jpg" class="img-fluid rounded w-100" alt="" height="100px" > 
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Blog Start -->
        <div class="container-fluid blog py-3" style="margin-top:0 px;">
            <div class="container py-3">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary" style="font-size: 40px;">Our Services</h4>
                    <h1 class="display-5 mb-4" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-size:30px; font-style: italic; font-variant: small-caps; font-weight: 100;">Transform Your Ideas into Print: Exceptional Printing Services</h1>
                    <p class="mb-0">At ABBA Printing Press, we turn your creative concepts into stunning printed materials with precision and quality. Whether you need high-impact business cards, eye-catching marketing materials, or custom-designed invitations, our state-of-the-art printing solutions ensure your vision is realized with clarity and vibrancy
                    <br><span style="font-style: italic; color:#284881;font-size: large;">Explore our services and discover how we can help make a lasting impression for your brand</span>
                    
                    </p>
                   
                </div>
                
                <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay="0.2s">
                @foreach($services as $service)  
                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <img src="{{ asset('storage/' . $service->photo) }}" class="img-fluid w-100 rounded" alt="" style="height: 250px;">
                        </div>

                        <a href="#" class="h4 d-inline-block mb-3" style="color:#284881 ;">{{ $service->title }}</a>
                        <p class="mb-4">{{ $service->description }}
                        </p> 
                        
                    </div>
                 @endforeach
                    
                    <div class="col-sm-6" style="text-align:center;">
                        <a href="/services1" class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0" style="align-items: center;">See More</a>
                    </div>
                    
                </div>
            </div>
        </div>
        
        
        <!-- Training Start -->
         <div class="container-fluid training bg-light overflow-hidden py-5">
            <div class="container py-5">
                <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h1 class="sub-title text-primary px-3" style="font-style: italic;" >WHAT MAKES US DIFFERENT</h1>
                    </div>
                    <h1 class="display-5 mb-4"></h1>
                    <!-- <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p> -->
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="training-item">
                            <div class="training-inner">
                                <img src="img/abba4.jpeg" class="img-fluid w-100 rounded" alt="Image" style="height: 220px;">
                                <div class="training-title-name">
                                    <a href="#" class="h4 text-white mb-0">SAME DAY DELIVERY</a>
                                    <a href="#" class="h4 text-white mb-0"></a>
                                </div>
                            </div>
                            <div class="training-content bg-secondary rounded-bottom p-4">
                                <a href="#"><h4 class="text-white">SAME DAY DELIVERY</h4></a>
                                <p class="text-white-50">On Selected Services</p>
                                <!-- <a class="btn btn-secondary rounded-pill text-white p-0" href="#">Read More <i class="fa fa-arrow-right"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="training-item">
                            <div class="training-inner">
                               <img src="img/abba3.webp" class="img-fluid w-100 rounded" alt="Image" style="height:220px;">
                                <div class="training-title-name">
                                    <a href="#" class="h4 text-white mb-0">LOWEST PRINT PRICES</a>
                                    <a href="#" class="h4 text-white mb-0"></a>
                                </div>
                            </div>
                            <div class="training-content bg-secondary rounded-bottom p-4">
                                <a href="#"><h4 class="text-white">LOWEST PRINT PRICES</h4></a>
                                <p class="text-white-50">Competitive Prices</p>
                                <!-- <a class="btn btn-secondary rounded-pill text-white p-0" href="#">Read More <i class="fa fa-arrow-right"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="training-item">
                            <div class="training-inner">
                                <img src="img/abba5.jpg" class="img-fluid w-100 rounded" alt="Image" style="height:220px;">
                                <div class="training-title-name">
                                    <a href="#" class="h4 text-white mb-0">BEST PRINT QUALITY</a>
                                    <a href="#" class="h4 text-white mb-0"></a>
                                </div>
                            </div>
                            <div class="training-content bg-secondary rounded-bottom p-4">
                                <a href="#"><h4 class="text-white">BEST PRINT QUALITY</h4></a>
                                <p class="text-white-50">Color & print consistency</p>
                                <!-- <a class="btn btn-secondary rounded-pill text-white p-0" href="#">Read More <i class="fa fa-arrow-right"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="training-item">
                            <div class="training-inner">
                                <img src="img/abba2.webp" class="img-fluid w-100 rounded" alt="Image" style="height:220px;">
                                <div class="training-title-name">
                                    <a href="#" class="h4 text-white mb-0">10+ PRINTING TECHNIQUES</a>
                                    <a href="#" class="h4 text-white mb-0"></a>
                                </div>
                            </div>
                            <div class="training-content bg-secondary rounded-bottom p-4">
                                <a href="#"><h4 class="text-white">10+ PRINTING TECHNIQUES</h4></a>
                                <p class="text-white-50">Only Print house in the UAE with 10+ in-house printing techniques</p>
                                <!-- <a class="btn btn-secondary rounded-pill text-white p-0" href="#">Read More <i class="fa fa-arrow-right"></i></a> -->
                            </div>
                        </div>
                    </div>
                        <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="training-item">
                                <div class="training-inner">
                                    <img src="img/index1.jpg" class="img-fluid w-100 rounded" alt="Image" style="height: 220px;">
                                    <div class="training-title-name">
                                        <a href="#" class="h4 text-white mb-0">FREE DESIGN ALTERATION</a>
                                        <a href="#" class="h4 text-white mb-0"></a>
                                    </div>
                                </div>
                                <div class="training-content bg-secondary rounded-bottom p-4">
                                    <a href="#"><h4 class="text-white">FREE DESIGN ALTERATION</h4></a>
                                    <p class="text-white-50">When You Print with Us!</p>
                                    <!-- <a class="btn btn-secondary rounded-pill text-white p-0" href="#">Read More <i class="fa fa-arrow-right"></i></a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="training-item">
                                <div class="training-inner">
                                   <img src="img/index2.jpeg" class="img-fluid w-100 rounded" alt="Image" style="height:220px;">
                                    <div class="training-title-name">
                                        <a href="#" class="h4 text-white mb-0">OPEN 24 HOURS</a>
                                        <a href="#" class="h4 text-white mb-0"></a>
                                    </div>
                                </div>
                                <div class="training-content bg-secondary rounded-bottom p-4">
                                    <a href="#"><h4 class="text-white">OPEN 24 HOURS</h4></a>
                                    <p class="text-white-50">Open 7 Days A Week</p>
                                    <!-- <a class="btn btn-secondary rounded-pill text-white p-0" href="#">Read More <i class="fa fa-arrow-right"></i></a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="training-item">
                                <div class="training-inner">
                                    <img src="img/index4.webp" class="img-fluid w-100 rounded" alt="Image" style="height:220px;">
                                    <div class="training-title-name">
                                        <a href="#" class="h4 text-white mb-0">NO MINIMUM QUANTITY</a>
                                        <a href="#" class="h4 text-white mb-0"></a>
                                    </div>
                                </div>
                                <div class="training-content bg-secondary rounded-bottom p-4">
                                    <a href="#"><h4 class="text-white">NO MINIMUM QUANTITY</h4></a>
                                    <p class="text-white-50">Order as much as you need</p>
                                    <!-- <a class="btn btn-secondary rounded-pill text-white p-0" href="#">Read More <i class="fa fa-arrow-right"></i></a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="training-item">
                                <div class="training-inner">
                                    <img src="img/index3.webp" class="img-fluid w-100 rounded" alt="Image" style="height:220px;">
                                    <div class="training-title-name">
                                        <a href="#" class="h4 text-white mb-0">YEARS OF EXPERIENCE</a>
                                        <a href="#" class="h4 text-white mb-0"></a>
                                    </div>
                                </div>
                                <div class="training-content bg-secondary rounded-bottom p-4">
                                    <a href="#"><h4 class="text-white">YEARS OF EXPERIENCE</h4></a>
                                    <p class="text-white-50">Experts in Print</p>
                                    <!-- <a class="btn btn-secondary rounded-pill text-white p-0" href="#">Read More <i class="fa fa-arrow-right"></i></a> -->
                                </div>
                            </div>
                            </div>
                </div>
            </div>
        </div>
        <!-- Training End -->



        <!-- FAQs Start -->
        <div class="container-fluid faq-section pb-5">
            <div class="container pb-5 overflow-hidden">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">FAQs</h4>
                    <h1 class="display-5 mb-4">Frequently Asked Questions</h1>
                    <!-- <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p> -->
                </div>
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="accordion accordion-flush bg-light rounded p-5" id="accordionFlushSection">
                            <div class="accordion-item rounded-top">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed rounded-top" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        What file formats do you accept for printing?
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushSection">
                                    <div class="accordion-body">We accept files in PDF, AI, EPS, and high-resolution JPEG or PNG formats for the best print quality.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        What is your typical turnaround time for orders?
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushSection">
                                    <div class="accordion-body">Our standard turnaround time is 3-5 business days, depending on the complexity and size of the project</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        What types of paper and finishes do you offer? 
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushSection">
                                    <div class="accordion-body">We offer a wide range of paper types and finishes, including matte, gloss, and uncoated options to suit your needs.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        Can I see a proof before my order is printed?
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushSection">
                                    <div class="accordion-body">Absolutely! We provide digital proofs for your approval before we begin printing to ensure everything is just right.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                        Can you handle rush orders? 
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushSection">
                                    <div class="accordion-body">Yes, we offer rush services for those last-minute projects—just let us know your deadline, and we’ll do our best to meet it.</div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="bg-primary rounded">
                            <img src="img/faq.jpg" class="img-fluid w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQs End -->
       

        <!-- Team Start -->
        <div class="container-fluid team pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Our Team</h4>
                    <h1 class="display-5 mb-4">Meet Our Experts</h1>
                    <!-- <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p>  -->
                </div>
                
                
                <div class="row g-4">
                   @foreach($teams as $team) 
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('storage/' . $team->photo) }}" class="img-fluid" alt="" style="height:150px">
                            </div>
                            <div class="team-title">
                                <h4 class="mb-0">{{ $team->name }}</h4>
                                <p class="mb-0">{{ $team->department }}</p>
                            </div>
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        

        <!-- Testimonial Start -->
        <div class="container-fluid testimonial pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Testimonial</h4>
            <h1 class="display-5 mb-4">Our Clients Reviews</h1>
            <p class="mb-0">"Here's what our clients are saying about their experience with us"</p>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
            @foreach($testimonials as $testimonial)
                <div class="testimonial-item">
                    <div class="testimonial-quote-left">
                        <i class="fas fa-quote-left fa-2x"></i>
                    </div>
                    <div class="testimonial-img">
                        <img src="{{ asset('storage/' . $testimonial->image) }}" class="img-fluid" alt="Image">
                    </div>
                    <div class="testimonial-text">
                        <p class="mb-0">"{{ $testimonial->content }}"</p>
                    </div>
                    <div class="testimonial-title">
                        <div>
                            <h4 class="mb-0">{{ $testimonial->author }}</h4>
                        </div>
                        <div class="d-flex text-primary">
                            @for($i = 0; $i < 5; $i++)
                                <i class="fas fa-star"></i>
                            @endfor
                        </div>
                    </div>
                    <div class="testimonial-quote-right">
                        <i class="fas fa-quote-right fa-2x"></i>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
 
        
        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5 border-start-0 border-end-0" style="border: 1px solid; border-color: rgb(255, 255, 255, 0.08);">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="footer-item">
                            <a href="/" class="p-0">
                                <h4 class="" style="color:#284881  ;"><i></i>ABBA Printing Press L.L.C</h4>
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
                            <h4 class="mb-4" style="color:#284881 ">Contact Info</h4>
                            <div class="d-flex align-items-start">
                                <i class="fas fa-map-marker-alt text-primary me-3"></i>
                                <p class=" mb-0">ABBA Printing Press L.L.C
                                    <br>P.O Box 44391
                                    <br>Sharjah, UAE</p>
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
        <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    
    </body>

</html>