<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/ab01.png">
    <title>ABBA Printing Press</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
    <div class="header">
        <div class="header-left">
            <a href="admin" class="logo">
                <img src="assets/img/ab01.png" width="50" height="30" alt=""> <span>ABBA Printers</span>
            </a>
        </div>
        <a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
        <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
        <ul class="nav user-menu float-right">
            
            <li class="nav-item dropdown has-arrow">
                <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                    <span class="user-img">
                        <img class="rounded-circle" src="assets/img/user.jpg" width="24" alt="Admin">
                        <span class="status online"></span>
                    </span>
                    <span>Admin</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="admin">Sign Out</a>
                   
                </div>
            </li>
        </ul>
        
    </div>
    
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title">Main</li>
                    <li>
                        <a href="/admin" class="nav-item nav-link active"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                    </li>
                    <li>
                        <a href="teams"><i class="fa fa-user"></i> <span>Team</span></a>
                    </li>
                    
                    <li>
                        <a href="quality"><i class="fa fa-star"></i> <span>Quality</span></a>
                    </li>
                    
                    <li>
                        <a href="client"><i class="fa fa-briefcase"></i> <span>Clients</span></a>
                    </li>
                    
                    <li>
                        <a href="services"><i class="fa fa-cogs"></i> <span> Services </span></a>
                    </li>
                    <li>
                        <a href="testimonials"><i class="fa fa-comments-o"></i> <span>Testimonials</span></a>
                    </li>
                    
                    <li>
                        <a href="contacts"><i class="fa fa-envelope-o"></i> <span>Contact Messages</span></a>
                    </li>

                    
                </ul>
            </div>
        </div>
    </div>
    
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <a href="teams">
							<span class="dash-widget-bg1"><i class="fa fa-user" aria-hidden="true"></i></span>
							<div class="dash-widget-info text-right">
								<h3>{{ $teamsCount }}</h3>
								<span class="widget-title1">Team<i class="fa fa-check" aria-hidden="true"></i></span>
							</div>
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <a href="quality">
                            <span class="dash-widget-bg3"><i class="fa fa-star" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3>{{ $qualitiesCount }}</h3>
                                <span class="widget-title3">Quality<i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <a href="client">
                            <span class="dash-widget-bg4"><i class="fa fa-briefcase" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3>{{ $clientsCount }}</h3>
                                <span class="widget-title4">Clients<i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <a href="services">
                            <span class="dash-widget-bg2"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3>{{ $servicesCount }}</h3>
                                <span class="widget-title2">Services<i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                           </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <a href="testimonials">
                            <span class="dash-widget-bg3"><i class="fa fa-comments-o" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3>{{ $testimonialsCount }}</h3>
                                <span class="widget-title3">Testimonials<i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <a href="contacts">
                            <span class="dash-widget-bg1"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3>{{ $contactsCount }}</h3>
                                <span class="widget-title1">Contact<i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <h3>ABBA Printing Press</h3>
                <div class="container">
                    <div class="row">
                      <!-- Image 1 -->
                      <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <img src="assets/img/new..jpeg" class="img-fluid" style="height: 200px;">
                      </div>
                  
                      <!-- Image 2 -->
                      <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <img src="assets/img/im6.avif" class="img-fluid" style="height: 200px;">
                      </div>
                  
                      <!-- Image 3 -->
                      <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <img src="assets/img/im8.jpg" class="img-fluid" style="height: 200px;">
                      </div>

                      <!-- <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                        <img src="assets/img/im3.png" class="img-fluid" style="height: 200px;">
                      </div> -->

                    </div>
                  </div>
                  
                </div>
			  
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/Chart.bundle.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/app.js"></script>

</body>



</html>