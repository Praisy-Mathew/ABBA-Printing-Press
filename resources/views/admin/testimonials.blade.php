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
 <!-- Add Testimonial Modal -->
<div class="modal fade" id="addTestimonialModal" tabindex="-1" role="dialog" aria-labelledby="addTestimonialModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addTestimonialModalLabel">Add Testimonial</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <form  action="{{ route('admin.testimonials.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="testimonialAuthor" class="col-form-label">Author:</label>
                        <input type="text" class="form-control" id="Author" name="author" required>
                    </div>
                    <div class="form-group">
                        <label for="testimonialContent" class="col-form-label">Content:</label>
                        <textarea class="form-control" id="Content" name="content" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="testimonialPhoto" class="col-form-label">Image:</label>
                        <input type="file" class="form-control-file" id="image" name="image" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Testimonial</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit Testimonial Modal -->
@foreach($testimonials as $testimonial)
<!-- Edit Testimonial Modal -->
<div class="modal fade" id="editTestimonialModal{{ $testimonial->id }}" tabindex="-1" role="dialog" aria-labelledby="editTestimonialModalLabel{{ $testimonial->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editTestimonialModalLabel{{ $testimonial->id }}">Edit Testimonial</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $testimonial->id }}">
                    <div class="form-group">
                        <label for="editTestimonialAuthor{{ $testimonial->id }}" class="col-form-label">Author:</label>
                        <input type="text" class="form-control" id="editTestimonialAuthor{{ $testimonial->id }}" name="author" value="{{ $testimonial->author }}" required>
                    </div>
                    <div class="form-group">
                        <label for="editTestimonialContent{{ $testimonial->id }}" class="col-form-label">Content:</label>
                        <textarea class="form-control" id="editTestimonialContent{{ $testimonial->id }}" name="content" required>{{ $testimonial->content }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="editTestimonialPhoto{{ $testimonial->id }}" class="col-form-label">Photo:</label>
                        <input type="file" class="form-control-file" id="editTestimonialPhoto{{ $testimonial->id }}" name="image" value="{{ $testimonial->photo }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete Testimonial Modal -->
<div class="modal fade" id="deleteTestimonialModal{{ $testimonial->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteTestimonialModalLabel{{ $testimonial->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteTestimonialModalLabel{{ $testimonial->id }}">Delete Testimonial</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this testimonial?</p>
                <form id="deleteTestimonialForm{{ $testimonial->id }}" action="{{ route('admin.testimonials.destroy', $testimonial->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
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
                <h4 class="page-title">Testimonials</h4>
            </div>
            <div class="col-sm-8 col-9 text-right m-b-20">
                <a href="#" class="btn btn-primary btn-rounded float-right" data-toggle="modal" data-target="#addTestimonialModal"><i class="fa fa-plus"></i> Add Testimonial</a>
            </div>
        </div>
        <div class="row doctor-grid">
            @foreach($testimonials as $testimonial)
                <div class="col-lg-6">
                    <div class="profile-widget">
                        <div class="doctor-img">
                            <a class="avatar" href=""><img alt="" src="{{ asset('storage/' . $testimonial->image) }}"></a>
                        </div>
                        <div class="dropdown profile-action">
                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editTestimonialModal{{ $testimonial->id }}" data-id="{{ $testimonial->id }}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteTestimonialModal{{ $testimonial->id }}" data-id="{{ $testimonial->id }}"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                            </div>
                        </div>
                        <h4 class="doctor-name text-ellipsis"><a href="">{{ $testimonial->author }}</a></h4>
                        <div class="doc-prof">
                            <h5><em>"{{ $testimonial->content }}"</em></h5>
                        </div>
                    </div>
                </div>
            @endforeach
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