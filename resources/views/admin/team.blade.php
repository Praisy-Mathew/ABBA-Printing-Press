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
 <!-- Add Team Modal -->
<div class="modal fade" id="addTeamModal" tabindex="-1" role="dialog" aria-labelledby="addTeamModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addTeamModalLabel">Add Team</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="{{ route('teams.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                    <div class="form-group">
                        <label for="teamName" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" id="teamName" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="teamDepartment" class="col-form-label">Department (Job role):</label>
                        <input type="text" class="form-control" id="teamDepartment" name="department" required>
                    </div>
                    <div class="form-group">
                        <label for="teamPhoto" class="col-form-label">Photo:</label>
                        <input type="file" class="form-control-file" id="teamPhoto" name="photo" required>
                    </div>
                    <div class="form-group">
                        <label for="teamLocation" class="col-form-label">Location:</label>
                        <input type="text" class="form-control" id="teamLocation" name="location" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Team</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit Team Modal -->
@foreach($teams as $team)
<div class="modal fade" id="editTeamModal{{ $team->id }}" tabindex="-1" role="dialog" aria-labelledby="editTeamModalLabel{{ $team->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editTeamModalLabel{{ $team->id }}">Edit Team</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('teams.update', $team->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')  
                    <div class="form-group">
                        <label for="editTeamName{{ $team->id }}" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" id="editTeamName{{ $team->id }}" name="name" value="{{$team->name}}" required>
                    </div>
                    <div class="form-group">
                        <label for="editTeamDepartment{{ $team->id }}" class="col-form-label">Department (Job role):</label>
                        <input type="text" class="form-control" id="editTeamDepartment{{ $team->id }}" name="department" value="{{$team->department}}" required>
                    </div>
                    <div class="form-group">
                        <label for="editTeamPhoto{{ $team->id }}" class="col-form-label">Photo:</label>
                        <input type="file" class="form-control-file" id="editTeamPhoto{{ $team->id }}" name="photo" value="{{$team->photo}}">
                    </div>
                    <div class="form-group">
                        <label for="editTeamLocation{{ $team->id }}" class="col-form-label">Location:</label>
                        <input type="text" class="form-control" id="editTeamLocation{{ $team->id }}" name="location" value="{{$team->location}}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete Team Modal -->
<div class="modal fade" id="deleteTeamModal{{ $team->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteTeamModalLabel{{ $team->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteTeamModalLabel{{ $team->id }}">Delete Team</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this team?</p>
                <form id="deleteTeamForm{{ $team->id }}" action="{{ route('teams.destroy', $team->id) }}" method="POST">
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
                <h4 class="page-title">Our Team</h4>
            </div>
            <div class="col-sm-8 col-9 text-right m-b-20">
                <a href="#" class="btn btn-primary btn-rounded float-right" data-toggle="modal" data-target="#addTeamModal">
                    <i class="fa fa-plus"></i> Add Team
                </a>
            </div>
        </div>
        <div class="row team-grid">
     @foreach($teams as $team)
            <div class="col-md-4 col-sm-4 col-lg-6">
                <div class="profile-widget">
                    <div class="team-img">
                        <a class="avatar" href="#"><img alt="" src="{{ asset('storage/' . $team->photo) }}"></a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item" data-toggle="modal" data-target="#editTeamModal{{ $team->id }}">
                                <i class="fa fa-pencil m-r-5"></i> Edit
                            </a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteTeamModal{{ $team->id }}">
                                        <i class="fa fa-trash-o m-r-5"></i> Delete
                                    </a>
                        </div>
                    </div>
                    <h4 class="team-name text-ellipsis"><a href="#">{{ $team->name }}</a></h4>
                    <div class="team-department">{{ $team->department }}</div>
                    <div class="user-country">
                        <i class="fa fa-map-marker"></i>{{ $team->location }}
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
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- doctors23:17-->
</html>