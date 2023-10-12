<?php 
session_start();
include("db.php");


// $name= $_SESSION['Name'];


$email = $_SESSION["email"];

// Retrieve user data from the database, including the address
$sql = "SELECT * FROM pregister WHERE `email`='$email'";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    // $profile_image = $row["profile_image"];
    $name = $row["Name"];
    $pass= $row['Password'];
    $img=$row['Image'];
    $cont= $row['Contact'];

} else {
    // Handle the case where the user data is not found
    // You can redirect or display an error message
    header("Location: error.php");
    exit();
}




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
				<a href="Parents.php" class="logo">
					<img src="img/logo.png" width="35" height="35" alt=""> <span>Preclinic</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
               <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="<?php echo $img; ?>" width="40" alt="Admin">
                            <span class="status online"></span></span>
                        <span>w</span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="pprofile.php">My Profile</a>
                        <a class="dropdown-item" href="editpprofile.php">Edit Profile</a>
                        <!-- <a class="dropdown-item" href="settings.html">Settings</a> -->
                        <a class="dropdown-item" href="log.php">Logout</a>
                    </div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="pprofile.php">My Profile</a>
                    <a class="dropdown-item" href="editpprofile.php">Edit Profile</a>
                    <!-- <a class="dropdown-item" href="settings.html">Settings</a> -->
                    <a class="dropdown-item" href="log.php">Logout</a>
                </div>
            </div>
        </div>
         <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <!-- <li class="menu-title">Main</li> -->
                       <li>
                            <a href="Parents.php"><i class="fa fa-wheelchair"></i>  <span>Add Child</span></a>
                        </li>
                        <li>
                            <a href="bookappointment.php"><i class="fa fa-calendar"></i>  <span>Book Appointment</span></a>
                        </li>
                      <!--   <li>
                            <a href="reminder.php"><i class="fa fa-calendar-check-o"></i>  <span>Reminder</span></a>
                        </li> -->
                         <li>
                            <a href="report.php" ><i class="fa fa-calendar-check-o"></i>  <span>Report</span></a>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-7 col-6">
                        <h4 class="page-title">My Profile</h4>
                    </div>

                    <div class="col-sm-5 col-6 text-right m-b-30">
                        <!-- <a href="editpprofile.php" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Edit Profile</a> -->
                    </div>
                </div>
                <div class="card-box profile-header">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
                                        <a href="#"><img class="avatar" src="<?php  echo $img ?>" alt=""></a>
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <h2 class="user-name " style="margin-top: 30px; "><?php echo $name; ?></h2>
                                                <!-- <small class="text-muted">Gynecologist</small>
                                                <div class="staff-id">Employee ID : DR-0001</div>
                                                <div class="staff-msg"><a href="chat.html" class="btn btn-primary">Send Message</a></div> -->
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                                <li>
                                                    <span class="title">Name:</span>
                                                    <span class="text"><?php    echo $name; ?></span>
                                                </li>
                                                <li>
                                                    <span class="title">Email:</span>
                                                    <span class="text"><?php    echo $_SESSION['email']; ?></span>
                                                </li>
                                                <li>
                                                    <span class="title">Password:</span>
                                                    <span class="text"><?php echo $pass;?></span>
                                                </li>
                                                <li>
                                                    <span class="title">Address:</span>
                                                    <span class="text">714 Burwell Heights Road, Bridge City, TX, 77611</span>
                                                </li>
                                                <li>
                                                    <span class="title">Contact:</span>
                                                    <span class="text"><?php    echo $cont ?></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                    </div>
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

