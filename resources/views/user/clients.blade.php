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
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
       <style>
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
            height: 200px;
            width: 300px;
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
        
        
        /*** Country End ***/
        
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
                        <a href="qualities" class="nav-item nav-link">Quality</a>
                        <a href="services1" class="nav-item nav-link">Services</a>
                        <a href="clients" class="nav-item nav-link active">Clients</a>
                        <a href="associates" class="nav-item nav-link">Our Network</a>
                    </div>
                    <a href="contact" class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">Contact Us</a>
                </div>
            </nav>


            <!-- Header Start -->
            
            
              <div class="container-fluid bg-breadcrumb" style="background-image: url('img/client.webp'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 550px;" >  
               <div class="container text-center py-5" style="max-width: 900px;">
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s" style="font-size:25px;; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;color: white; font-style: italic; ">Trusted by top clients for unmatched quality</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <!-- <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active text-primary">About</li> -->
                    </ol>    
                </div>
            </div> 
            <!-- Header End -->
        </div>
        <!-- Navbar & Hero End -->
    
         <!-- Countries We Offer Start -->
         <div class="container-fluid country overflow-hidden py-5">
            <div class="container py-5">
                <div class="section-title text-center wow fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 70px;">
                    <div class="">
                        <h5 class=" text-primary px-3" style="font-style: italic; font-size:xx-large; font-variant: initial; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Clients</h5>
                    </div>
                    <h1 class="display-5 mb-4">Leading the Future of Print and Design</h1>
                    <p class="mb-0">ABBA Printing Press L.L.C. is a top online supplier of high-quality graphic design and custom print products. We provide a wide range of items, from business cards to holiday cards, leveraging advanced technology and competitive pricing to offer exceptional value and personalized service. Our innovative approach and state-of-the-art facilities allow us to effectively serve both large and small markets globally.</p>
                </div>
                <div class="section-title text-center wow fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 70px;">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary px-3">Our Diverse Client Sectors</h5>
                    </div>
                </div>
                
                <div class="row g-4 text-center" >
                @foreach($clients as $client) 
                    <div class="col-lg-6 col-xl-3 mb-4 mb-xl-0 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="country-item">
                            <div class="rounded overflow-hidden">
                                <img src="{{ asset('storage/' . $client->main_image) }}" class="img-fluid w-100 rounded" alt="Image">
                            </div>
                            <div class="country-flag">
                                <img src="{{ asset('storage/' . $client->sub_image) }}" class="img-fluid rounded-circle" alt="Image" style="height: 70px;">
                            </div> 
                            <div class="country-name">
                                <a  class="text-white fs-4">{{ $client->client_sector }}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="country-item">
                            <div class="rounded overflow-hidden">
                                <img src="img/client2.webp" class="img-fluid w-100 rounded" alt="Image">
                            </div>
                            <div class="country-flag">
                                <img src="img/ministry..webp" class="img-fluid rounded-circle" alt="Image" style="height: 70px;">
                            </div>
                            <div class="country-name">
                                <a  class="text-white fs-4">Ministries</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="country-item">
                            <div class="rounded overflow-hidden">
                                <img src="img/client5.j.jpg" class="img-fluid w-100 rounded" alt="Image">
                            </div>
                            <div class="country-flag">
                                <img src="img/finance.png" class="img-fluid rounded-circle" alt="Image" style="height: 70px;">
                            </div>
                            <div class="country-name">
                                <a  class="text-white fs-4"> Finance & Accounting</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="country-item">
                            <div class="rounded overflow-hidden">
                                <img src="img/client8.jpg" class="img-fluid w-100 rounded" alt="Image">
                            </div>
                            <div class="country-flag">
                                <img src="img/healthcare1.jpg" class="img-fluid rounded-circle" alt="Image" style="height: 70px;" >
                            </div>
                            <div class="country-name">
                                <a class="text-white fs-4">Healthcare</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="country-item">
                            <div class="rounded overflow-hidden">
                                <img src="img/client9.jpg" class="img-fluid w-100 rounded" alt="Image">
                            </div>
                            <div class="country-flag">
                                <img src="img/school.avif" class="img-fluid rounded-circle" alt="Image" style="height: 70px;">
                            </div> 
                            <div class="country-name">
                                <a class="text-white fs-4">Schools & Universities</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="country-item">
                            <div class="rounded overflow-hidden">
                                <img src="img/clients13.jpg" class="img-fluid w-100 rounded" alt="Image">
                            </div>
                            <div class="country-flag">
                                <img src="img/gov.jpg" class="img-fluid rounded-circle" alt="Image" style="height:70px;">
                            </div>
                            <div class="country-name">
                                <a  class="text-white fs-4">Government Solutions</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="country-item">
                            <div class="rounded overflow-hidden">
                                <img src="img/clients12.jpg" class="img-fluid w-100 rounded" alt="Image">
                            </div>
                            <div class="country-flag">
                                <img src="img/it.jpg" class="img-fluid rounded-circle" alt="Image" style="height:70px;">
                            </div>
                            <div class="country-name">
                                <a class="text-white fs-4">IT & Technology</a>
                            </div>
                        </div>
                </div>
                    <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="country-item">
                            <div class="rounded overflow-hidden">
                                <img src="img/client10.jpg" class="img-fluid w-100 rounded" alt="Image">
                            </div>
                            <div class="country-flag">
                                <img src="img/insurance.jpg" class="img-fluid rounded-circle" alt="Image" style="height: 70px;">
                            </div>
                            <div class="country-name">
                                <a  class="text-white fs-4"> Insurance Companies</a>
                            </div>
                        </div>
                    </div>
                        <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="country-item">
                                <div class="rounded overflow-hidden">
                                <img src="img/home8.jpg" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="country-flag">
                                    <img src="img/science.jpeg" class="img-fluid rounded-circle" alt="Image" style="height:70px;">
                                </div> 
                                <div class="country-name">
                                    <a class="text-white fs-4">Scientific</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="country-item">
                                <div class="rounded overflow-hidden">
                                    <img src="img/clients15.jpg" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="country-flag">
                                    <img src="img/clinic.jpg" class="img-fluid rounded-circle" alt="Image" style="height:70px"> 
                                </div>
                                <div class="country-name">
                                    <a  class="text-white fs-4">Clinical Research</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="country-item">
                                <div class="rounded overflow-hidden">
                                    <img src="img/client11.jpg" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="country-flag">
                                    <img src="img/company.jpg" class="img-fluid rounded-circle" alt="Image" style="height: 70px;">
                                </div>
                                <div class="country-name">
                                    <a class="text-white fs-4">Reputed Companies</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div> -->
    </div>
    </div>
    </div>
            </div>
        </div>
        <!-- Countries We Offer End -->


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
                        <h4 class="mb-4" style="color:#284881  ;">Quick Links</h4>
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
                        <h4 class="mb-4" style="color: #284881 ;">Contact Info</h4>
                        <div class="d-flex align-items-start">
                            <i class="fas fa-map-marker-alt text-primary me-3"></i>
                            <p class="mb-0">ABBA Printing Press L.L.C<br>
                                P.O Box 44391<br>
                                Sharjah, UAE</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-envelope text-primary me-3"></i>
                            <p class=" mb-0">info@abbaprinting.net</p>
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