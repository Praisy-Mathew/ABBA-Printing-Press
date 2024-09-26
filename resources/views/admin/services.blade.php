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
<!-- Edit Modal -->
@foreach($services as $service) 
<div class="modal fade" id="editModal{{ $service->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $service->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel{{ $service->id }}">Edit Service</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="{{ route('service.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <input type="hidden" id="serviceId" name="serviceId">
            <!-- Add your form fields here -->
            <div class="form-group">
              <label for="serviceName{{ $service->id }}" class="col-form-label">Service Name:</label>
              <input type="text" class="form-control" id="serviceName{{ $service->id }}" name="title" value="{{$service->title}}" required>
            </div>
            <div class="form-group">
              <label for="serviceDescription{{ $service->id }}" class="col-form-label">Service Description:</label>
              <textarea class="form-control" id="serviceDescription{{ $service->id }}" name="description" required>{{$service->description}}"</textarea>
            </div>
            <div class="form-group"></div>
              <label for="doctorPhoto{{ $service->id }}" class="col-form-label">Image:</label>
              <input type="file" class="form-control-file" id="doctorPhoto{{ $service->id }}" name="photo" value="{{ $service->photo }}">
            </div>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Delete Modal -->
  <div class="modal fade" id="deleteModal{{ $service->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{ $service->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel{{ $service->id }}">Delete Service</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete this service?</p>
          <form action="{{ route('service.destroy', $service->id) }}" method="POST" enctype="multipart/form-data">
           @csrf
           @method('DELETE')
            <input type="hidden" id="deleteServiceId" name="deleteServiceId">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  <!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addModalLabel">Add Service</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
              <label for="addServiceName" class="col-form-label">Service Name:</label>
              <input type="text" class="form-control" id="addServiceName" name="title" required>
            </div>
            <div class="form-group">
              <label for="addServiceDescription" class="col-form-label">Service Description:</label>
              <textarea class="form-control" id="addServiceDescription" name="description" required></textarea>
            </div>
            <div class="form-group"></div>
              <label for="doctorPhoto" class="col-form-label">Image:</label>
              <input type="file" class="form-control-file" id="doctorPhoto" name="photo" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Service</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  
  
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
                <h4 class="page-title">Services</h4>
              </div>
              <div class="col-sm-8 col-9 text-right m-b-20">
                <a href="" class="btn btn-primary btn-rounded float-right" data-toggle="modal" data-target="#addModal">
                  <i class="fa fa-plus"></i> Add Services
                </a>
              </div>
            </div>
        
            <div class="row quality-grid">
              <!-- Card 1 -->
            @foreach($services as $service)  
              <div class="col-lg-4">
                <div class="card profile-widget" style="width: 100%;">
                  <div class="quality-img">
                    <a href="#">
                      <img src="{{ asset('storage/' . $service->photo) }}" class="card-img-top" alt="Quality Image" style="width: 100%; height: 200px;">
                    </a>
                  </div>
                  <div class="dropdown profile-action" style="position: absolute; top: 15px; right: 15px;">
                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editModal{{ $service->id }}">
                        <i class="fa fa-pencil m-r-5"></i> Edit
                      </a>
                      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteModal{{ $service->id }}" >
                        <i class="fa fa-trash-o m-r-5"></i> Delete
                      </a>
                      <form action="{{ route('service.toggleVisibility', $service->id) }}" method="POST" style="display:inline;">
                      @csrf
                     <button type="submit" class="dropdown-item">
                     <i class="fa fa-eye{{ $service->status ? '' : '-slash' }} m-r-5"></i> 
                    {{ $service->status ? 'Hide' : 'Display' }}
                    </button>
                   </form> 
                      
                    </div>
                  </div>
                  <div class="card-body">
                    <h4 class="quality-title text-ellipsis">
                      <a href="#">{{ $service->title }}</a>
                    </h4>
                    <div class="quality-description">
                      <p><em>{{ $service->description }}</em></p>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach  
            </div>
            
        
          <div class="sidebar-overlay" data-reff=""></div>
          <script src="assets/js/jquery-3.2.1.min.js"></script>
          <script src="assets/js/popper.min.js"></script>
          <script src="assets/js/bootstrap.min.js"></script>
          <script src="assets/js/jquery.slimscroll.js"></script>
          <script src="assets/js/Chart.bundle.js"></script>
          <script src="assets/js/chart.js"></script>
          <script src="assets/js/app.js"></script>
        
          <script>
            $(document).on('click', '.toggleVisibility', function(e) {
              e.preventDefault();
              var icon = $(this).find('i');
              var currentText = $.trim($(this).text());
        
              if (currentText === 'Hide') {
                icon.removeClass('fa-eye-slash').addClass('fa-eye');
                $(this).html('<i class="fa fa-eye m-r-5"></i> Show');
              } else {
                icon.removeClass('fa-eye').addClass('fa-eye-slash');
                $(this).html('<i class="fa fa-eye-slash m-r-5"></i> Hide');
              }
            });
          </script>
        </div>
      </body>
      </html>            
                            
        