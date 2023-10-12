<?php 
// session_start();
include("db.php");
// include("add.php");


$id= $_GET['id'];

$query= "SELECT * FROM `hospital` where `id`= '$id'";
$run=mysqli_query($db, $query);
$value= mysqli_fetch_assoc($run);



 ?>
 <!DOCTYPE html>
<html lang="en">


<!-- patients23:17-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <title>Preclinic - Medical & Hospital - Bootstrap 4 Admin Template</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->


    
    </style>
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
      <div class="header-left">
        <a href="index-2.html" class="logo">
          <img src="img/logo.png" width="35" height="35" alt=""> <span>Preclinic</span>
        </a>
      </div>
      <a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
              
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="img/user.jpg" width="40" alt="Admin">
              <span class="status online"></span></span>
                        <span>Admin</span>
                    </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="profile.html">My Profile</a>
            <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
            <a class="dropdown-item" href="settings.html">Settings</a>
            <a class="dropdown-item" href="login.html">Logout</a>
          </div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                    <a class="dropdown-item" href="settings.html">Settings</a>
                    <a class="dropdown-item" href="login.html">Logout</a>
                </div>
            </div>
        </div>
         <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <!-- <li class="menu-title">Main</li> -->
                        <li class="active">
                            <a href="index-2.html"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
            <li>
                            <a href="addhospital.php"><i class="fa fa-hospital-o"></i> <span>Hospitals</span></a>
                        </li>
                        <li>
                            <a href="patients.html"><i class="fa fa-wheelchair"></i> <span>Vaccines</span></a>
                        </li>
                        <li>
                            <a href="appointments.html"><i class="fa fa-calendar"></i> <span>Booking</span></a>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content ms-auto">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title" style="color: #19b89d";>Update Hospitals</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <!-- <a href="add.php" class="btn btn btn-primary btn-rounded float-right" style="background-color:#19b89d; "><i class="fa fa-plus"></i> Add Hospital</a> -->
                         
              


                    </div>

                   


                </div>

<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add hospital
</button> -->


              
       
<form method="POST" action="addh.php">
  <div class="form-group col-lg-6">
    <label >Name</label>
    <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Name" name="name">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group col-lg-6">
    <label >Email</label>
    <input type="email" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Name" name="email">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group col-lg-6">
    <label >Address</label>
    <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Name" name="address">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <input type="submit" class="btn btn-primary" value="Submit" name="submit"  style="background-color:#19b89d; ">
</form>


      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>



      
<!-- update -->








    </div>
     <div class="sidebar-overlay" data-reff=""></div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/Chart.bundle.js"></script>
    <script src="js/chart.js"></script>
    <script src="js/app.js"></script>


</body>


<!-- index22:59-->
</html>

