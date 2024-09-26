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
    <!-- Add Doctor Modal -->
    <div class="modal fade" id="addClientModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Client</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('client.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="clientSector">Client Sector:</label>
                            <input type="text" class="form-control" name="client_sector" required>
                        </div>
                        <div class="form-group">
                            <label for="mainImage">Main Image:</label>
                            <input type="file" class="form-control-file" name="main_image" required>
                        </div>
                        <div class="form-group">
                            <label for="subImage">Sub Image:</label>
                            <input type="file" class="form-control-file" name="sub_image" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Client</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addClientModal">
        Add Client
    </button>
</div>
 

  <!-- Edit Doctor Modal -->
  @foreach($clients as $client) 
  <div class="modal fade" id="editClientModal{{ $client->id }}" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Client</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('client.update', $client->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="clientSector">Client Sector:</label>
                                <input type="text" class="form-control" name="client_sector" value="{{ $client->client_sector }}" required>
                            </div>
                            <div class="form-group">
                                <label for="mainImage">Main Image:</label>
                                <input type="file" class="form-control-file" name="main_image">
                                <img src="{{ asset('storage/' . $client->main_image) }}" class="img-fluid mt-2" width="100">
                            </div>
                            <div class="form-group">
                                <label for="subImage">Sub Image:</label>
                                <input type="file" class="form-control-file" name="sub_image">
                                <img src="{{ asset('storage/' . $client->sub_image) }}" class="img-fluid mt-2" width="100">
                            </div>
                            <button type="submit" class="btn btn-primary">Update Client</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
  
  <!-- Delete Doctor Modal -->
  <div class="modal fade" id="deleteClientModal{{ $client->id }}" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete Client</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete this client?</p>
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('client.destroy', $client->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
  
  
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
                            <a href="/admin"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
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
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Client Sector</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="#" class="btn btn-primary btn-rounded float-right" data-toggle="modal" data-target="#addClientModal">
                            <i class="fa fa-plus"></i> Add client
                        </a>
                    </div>
                </div>
        
                <div class="row g-4 text-center">
                    <!-- First Card -->
                    @foreach($clients as $client)
                    <div class="col-lg-4 col-xl-3 mb-4">
                        <div class="country-item">
                              <div class="rounded overflow-hidden">
                                <img src="{{ asset('storage/' . $client->main_image) }}" class="img-fluid w-100 rounded" alt="Main Image" style="height:120px;">
                            </div> 
                            <div class="dropdown profile-action" style="position: absolute; top: 15px; right: 15px;">
                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" style="color:blue;"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editClientModal{{ $client->id }}">
                                        <i class="fa fa-pencil m-r-5"></i> Edit
                                    </a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteClientModal{{ $client->id }}">
                                        <i class="fa fa-trash-o m-r-5"></i> Delete
                                    </a>
                                </div>
                            </div>
                            <div class="country-flag">
                                <img src="{{ asset('storage/' . $client->sub_image) }}" class="img-fluid rounded-circle" alt="Icon Image" style="height: 100px;">
                            </div>
                            
                           
                            <div class="country-name">
                                <span class="fs-4" style="font-size: large;">{{ $client->client_sector }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
        
                    <!-- Second Card -->
                    <!-- <div class="col-lg-4 col-xl-3 mb-4">
                        <div class="country-item">
                            <div class="rounded overflow-hidden">
                                <img src="assets/img/client3.jpg" class="img-fluid w-100 rounded" alt="Main Image" style="height:120px;">
                            </div> 
                            <div class="dropdown profile-action" style="position: absolute; top: 15px; right: 15px;">
                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" style="color: blue;"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editDoctorModal" data-id="2">
                                        <i class="fa fa-pencil m-r-5"></i> Edit
                                    </a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteDoctorModal" data-id="2">
                                        <i class="fa fa-trash-o m-r-5"></i> Delete
                                    </a>
                                </div>
                            </div>
                            <div class="country-flag">
                                <img src="assets/img/ministry..webp" class="img-fluid rounded-circle" alt="Icon Image" style="height: 100px;">
                            </div>

                            <div class="country-name">
                                <span class="fs-4" style="font-size: large;">Ministries</span>
                            </div>
                        </div>
                    </div> -->
        
                    <!-- Third Card -->
                    <!-- <div class="col-lg-4 col-xl-3 mb-4">
                        <div class="country-item">
                            <div class="rounded overflow-hidden">
                                <img src="assets/img/client5.j.jpg" class="img-fluid w-100 rounded" alt="Main Image" style="height:120px;">
                            </div>
                            <div class="dropdown profile-action" style="position: absolute; top: 15px; right: 15px;">
                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" style="color: blue;"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editDoctorModal" data-id="2">
                                        <i class="fa fa-pencil m-r-5"></i> Edit
                                    </a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteDoctorModal" data-id="2">
                                        <i class="fa fa-trash-o m-r-5"></i> Delete
                                    </a>
                                </div>
                            </div>
                            <div class="country-flag">
                                <img src="assets/img/finance.png" class="img-fluid rounded-circle" alt="Icon Image" style="height: 100px;">
                            </div>
                            <div class="country-name">
                                <span class="fs-4" style="font-size: large;">Finance & Accounting</span>
                            </div>
                        </div>
                    </div> -->
        
                    <!-- Fourth Card -->
                    <!-- <div class="col-lg-4 col-xl-3 mb-4">
                        <div class="country-item">
                            <div class="rounded overflow-hidden">
                                <img src="assets/img/client9.jpg" class="img-fluid w-100 rounded" alt="Main Image" style="height:120px;">
                            </div>
                            <div class="dropdown profile-action" style="position: absolute; top: 15px; right: 15px;">
                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" style="color: blue;"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editDoctorModal" data-id="2">
                                        <i class="fa fa-pencil m-r-5"></i> Edit
                                    </a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteDoctorModal" data-id="2">
                                        <i class="fa fa-trash-o m-r-5"></i> Delete
                                    </a>
                                </div>
                            </div>
                            <div class="country-flag">
                                <img src="assets/img/school.avif" class="img-fluid rounded-circle" alt="Icon Image" style="height: 100px;">
                            </div>
                            <div class="country-name">
                                <span class="fs-4" style="font-size:large;">School & Universities</span>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- doctors23:17-->
</html>