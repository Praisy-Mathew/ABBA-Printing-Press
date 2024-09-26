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
    <div class="modal fade" id="addQualityModal" tabindex="-1" role="dialog" aria-labelledby="addQualityModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addQualityModalLabel">Add Quality</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.qualities.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="qualityTitle" class="col-form-label">Title:</label>
                        <input type="text" class="form-control" id="qualityTitle" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="qualityDescription" class="col-form-label">Description:</label>
                        <textarea class="form-control" id="qualityDescription" name="description" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="quality-image">Upload Image:</label>
                        <input type="file" class="form-control-file" id="quality-image" name="image" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Quality</button>
                </form>
            </div>
        </div>
    </div>
</div>

  @foreach($qualities as $quality)
  <div class="modal fade" id="editQualityModal{{$quality->id }}" tabindex="-1" role="dialog" aria-labelledby="editQualityModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editQualityModalLabel">Edit Quality</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('admin.qualities.update', $quality->id )}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <!-- <input type="hidden" name="qualityId" value="{{ $quality->id }}"> -->
            <div class="form-group">
              <label for="editQualityTitle{{ $quality->id }}" class="col-form-label">Title:</label>
              <input type="text" class="form-control" id="editQualityTitle{{ $quality->id }}" name="title" value="{{ $quality->title }}" required>
            </div>
            <div class="form-group">
              <label for="editQualityDescription{{ $quality->id }}" class="col-form-label">Description:</label>
              <textarea class="form-control" id="editQualityDescription{{ $quality->id }}" name="description" required>{{ $quality->description }}</textarea>
            </div>
            <div class="form-group">
              <label for="editQualityImage{{ $quality->id }}">Upload Image:</label>
              <input type="file" class="form-control-file" id="editQualityImage{{ $quality->id }}" name="image">
            </div>
            <button type="submit" class="btn btn-primary" data-id="{{ $quality->id }}"  data-toggle="modal" data-target="#editQualityModal">Save changes</button>
          </form>
        </div>
      </div>
    </div>
  </div> 
   <div class="modal fade" id="deleteQualityModal{{ $quality->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteQualityModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteQualityModalLabel">Delete Quality</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete this quality?</p>
          <form action="{{ route('admin.qualities.destroy',$quality->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="hidden" name="qualityId" value="{{ $quality->id }}">
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
                      <h4 class="page-title">Quality Section</h4>
                  </div>
                  <div class="col-sm-8 col-9 text-right m-b-20">
                      <a href="#" class="btn btn-primary btn-rounded float-right" data-toggle="modal" data-target="#addQualityModal">
                          <i class="fa fa-plus"></i> Add Quality
                      </a>
                  </div>
              </div>
      
              <div class="row quality-grid">
                  <!-- Card 1 -->
                  @foreach($qualities as $quality) 
                  <div class="col-lg-6">
                      <div class="card profile-widget" style="width: 100%;">
                          <div class="quality-img">
                              <a href="">
                                  <img src="{{ asset('storage/' . $quality->image) }}" class="card-img-top" alt="Quality Image" style="width: 100%; height: 200px;">
                              </a>
                          </div>
                          <div class="dropdown profile-action" style="position: absolute; top: 15px; right: 15px;">
                              <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                  <i class="fa fa-ellipsis-v"></i>
                              </a>
                         <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editQualityModal{{ $quality->id }}" data-id="{{ $quality->id }}" data-title="{{ $quality->title }}" data-description="{{ $quality->description }}" data-image="{{ asset($quality->image) }}">
                        <i class="fa fa-pencil m-r-5"></i> Edit
                    </a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteQualityModal{{ $quality->id }}" data-id="{{ $quality->id }}">
                        <i class="fa fa-trash-o m-r-5"></i> Delete
                    </a>
                </div>
                          </div>
                          <div class="card-body">
                              <h4 class="quality-title text-ellipsis">
                                  <a href="#">{{ $quality->title }}</a>
                              </h4>
                              <div class="quality-description">
                                  <p><em>{{ $quality->description }}</em></p>
                              </div>
                          </div>
                      </div>
                  </div>

                  @endforeach
                  <!-- Card 2 -->
                  <!-- <div class="col-lg-6">
                      <div class="card profile-widget" style="width: 100%;">
                          <div class="quality-img">
                              <a href="">
                                  <img src="assets/img/quality2.jpg" class="card-img-top" alt="Quality Image" style="width: 100%; height: 200px;">
                              </a>
                          </div>
                          <div class="dropdown profile-action" style="position: absolute; top: 15px; right: 15px;">
                              <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                  <i class="fa fa-ellipsis-v"></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editTestimonialModal" data-id="2">
                                      <i class="fa fa-pencil m-r-5"></i> Edit
                                  </a>
                                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteTestimonialModal" data-id="2">
                                      <i class="fa fa-trash-o m-r-5"></i> Delete
                                  </a>
                              </div>
                          </div>
                          <div class="card-body">
                              <h4 class="quality-title text-ellipsis">
                                  <a href="#">Premium Letterhead</a>
                              </h4>
                              <div class="quality-description">
                                  <p><em>We use acid-free 70# opaque premium stock with minimal see-through and excellent offset runability.</em></p>
                              </div>
                          </div>
                      </div>
                  </div> -->
                  <!-- Card 3 -->
                  <!-- <div class="col-lg-6">
                      <div class="card profile-widget" style="width: 100%;">
                          <div class="quality-img">
                              <a href="">
                                  <img src="assets/img/quality3.jpeg" class="card-img-top" alt="Quality Image" style="width: 100%; height: 200px;">
                              </a>
                          </div>
                          <div class="dropdown profile-action" style="position: absolute; top: 15px; right: 15px;">
                              <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                  <i class="fa fa-ellipsis-v"></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editTestimonialModal" data-id="3">
                                      <i class="fa fa-pencil m-r-5"></i> Edit
                                  </a>
                                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteTestimonialModal" data-id="3">
                                      <i class="fa fa-trash-o m-r-5"></i> Delete
                                  </a>
                              </div>
                          </div>
                          <div class="card-body">
                              <h4 class="quality-title text-ellipsis">
                                  <a href="#">Premium Greeting Card Stock</a>
                              </h4>
                              <div class="quality-description">
                                  <p><em>Our 12-point clay-coated Greeting Card stock is perfect for 600 dpi digital printing, enhancing your card inside and out.</em></p>
                              </div>
                          </div>
                      </div>
                  </div> -->
                  <!-- Card 4 -->
                  <!-- <div class="col-lg-6">
                      <div class="card profile-widget" style="width: 100%;">
                          <div class="quality-img">
                              <a href="">
                                  <img src="assets/img/quality4.jpeg" class="card-img-top" alt="Quality Image" style="width: 100%; height: 200px;">
                              </a>
                          </div>
                          <div class="dropdown profile-action" style="position: absolute; top: 15px; right: 15px;">
                              <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                  <i class="fa fa-ellipsis-v"></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editTestimonialModal" data-id="4">
                                      <i class="fa fa-pencil m-r-5"></i> Edit
                                  </a>
                                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteTestimonialModal" data-id="4">
                                      <i class="fa fa-trash-o m-r-5"></i> Delete
                                  </a>
                              </div>
                          </div>
                          <div class="card-body">
                              <h4 class="quality-title text-ellipsis">
                                  <a href="#">Envelope Paper Stock</a>
                              </h4>
                              <div class="quality-description">
                                  <p><em>The crisp brightness ensures consistent color printing, and the paper works reliably in both laser and inkjet printers.</em></p>
                              </div>
                          </div>
                      </div>
                  </div> -->
                  <!-- Card 5 -->
                  <!-- <div class="col-lg-6">
                      <div class="card profile-widget" style="width: 100%;">
                          <div class="quality-img">
                              <a href="">
                                  <img src="assets/img/quality5.jpg" class="card-img-top" alt="Quality Image" style="width: 100%; height: 200px;">
                              </a>
                          </div>
                          <div class="dropdown profile-action" style="position: absolute; top: 15px; right: 15px;">
                              <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                  <i class="fa fa-ellipsis-v"></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editTestimonialModal" data-id="5">
                                      <i class="fa fa-pencil m-r-5"></i> Edit
                                  </a>
                                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteTestimonialModal" data-id="5">
                                      <i class="fa fa-trash-o m-r-5"></i> Delete
                                  </a>
                              </div>
                          </div>
                          <div class="card-body">
                              <h4 class="quality-title text-ellipsis">
                                  <a href="#">True Offset Lithography</a>
                              </h4>
                              <div class="quality-description">
                                  <p><em>We use offset lithography with a 200 lpi (4800 dpi) screen for crisp, vibrant prints and a professional finish without streaking.</em></p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Card 6 -->
                  <!-- <div class="col-lg-6">
                      <div class="card profile-widget" style="width: 100%;">
                          <div class="quality-img">
                              <a href="">
                                  <img src="assets/img/quality6.jpeg" class="card-img-top" alt="Quality Image" style="width: 100%; height: 200px;">
                              </a>
                          </div>
                          <div class="dropdown profile-action" style="position: absolute; top: 15px; right: 15px;">
                              <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                  <i class="fa fa-ellipsis-v"></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editTestimonialModal" data-id="6">
                                      <i class="fa fa-pencil m-r-5"></i> Edit
                                  </a>
                                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteTestimonialModal" data-id="6">
                                      <i class="fa fa-trash-o m-r-5"></i> Delete
                                  </a>
                              </div>
                          </div>
                          <div class="card-body">
                              <h4 class="quality-title text-ellipsis">
                                  <a href="#">Sustainability Commitment</a>
                              </h4>
                              <div class="quality-description">
                                  <p><em>We also offer eco-friendly printing options, including soy-based inks and reduced waste practices.</em></p>
                              </div>
                          </div>
                      </div>
                  </div> -->
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
    <script>
       $('#editModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Button that triggered the modal
    var id = button.data('id'); // Extract id from data-* attributes
    var modal = $(this);
    
    // Update the form action dynamically with the id
    modal.find('form').attr('action', '/admin/qualities/update/' + id);
});
 
    </script>

</body>


<!-- doctors23:17-->
</html>