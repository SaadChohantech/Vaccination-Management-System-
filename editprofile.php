<?php 	


session_start();
include("db.php");


// $name= $_SESSION['Name'];
$id= $_GET['id'];
$query="SELECT * FROM `admin`where `Id`='$id'";
$run= mysqli_query($db, $query);
$data=mysqli_fetch_assoc($run);	

  $_SESSION['pi']= $data['Image'];


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
				    <a href="Admin.php" class="logo">
					<img src="img/logo.png" width="35" height="35" alt=""> <span>Preclinic</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
              
               <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
                            <img  class="rounded-circle" src="<?php echo $_SESSION['Image']; ?>" width="24" alt="Admin">
                            <span class="status online"></span>
                        </span>
                        <span>Admin</span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile.php">My Profile</a>
                        <?php   

                            $query= "SELECT * FROM `admin`";
                            $run=mysqli_query($db, $query);
                            $data= mysqli_fetch_assoc($run);   


                         ?>
                        <a class="dropdown-item" href="editprofile.php?id=<?php echo $data['Id']?>">Edit Profile</a>
                        <!-- <a class="dropdown-item" href="settings.html">Settings</a> -->
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.php">My Profile</a>
                    <a class="dropdown-item" href="editprofile.php">Edit Profile</a>
                    <!-- <a class="dropdown-item" href="settings.html">Settings</a> -->
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
         <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <!-- <li class="menu-title">Main</li> -->
                        <li class="active">
                            <a href=Admin.php><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
						<li>
                            <a href="addhospital.php"><i class="fa fa-hospital-o"></i> <span>Hospitals</span></a>
                        </li>
                        <li>
                            <a href="vaccines.php"><i class="fa fa-wheelchair"></i> <span>Vaccines</span></a>
                        </li>
                        <li>
                            <a href="booking.php"><i class="fa fa-calendar"></i> <span>Booking</span></a>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </div>
       <!--  <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-7 col-6">
                        <h4 class="page-title">My Profile</h4>
                    </div>

                    <div class="col-sm-5 col-6 text-right m-b-30">
                        <a href="edit-profile.html" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Edit Profile</a>
                    </div>
                </div>
              </div>
            </div> -->
        </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Edit Profile</h4>
                    </div>
                </div>
                <form method="POST" enctype="multipart/form-data">
                    <div class="card-box">
                        <h3 class="card-title">Basic Informations</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-img-wrap">
                                    <img class="inline-block" src="<?php echo $_SESSION['pi']; ?>" alt="user">
                                    <div class="fileupload btn">
                                        <span class="btn-text">edit</span>
                                        <input class="upload" type="file" name="image">
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">Name</label>
                                                <input type="text" class="form-control floating" value="<?php 	echo $data['Name']; ?>" name="name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">Email</label>
                                                <input type="text" class="form-control floating" value="<?php 	echo $data['Email'] ?>" name="email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">Password</label>
                                                <input type="text" class="form-control floating" value="<?php 	echo $data['Password']; ?>" name="pass">
                                            </div>
                                        </div>

                                            <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">Address</label>
                                                <input type="text" class="form-control floating" value="Near Kharadar " name="add">
                                            </div>
                                        </div>
                                        	 <div class="text-center m-t-20">
                        <input class="btn btn-primary ml-4  submit-btn" type="submit" name="update" value="Update" style="background-color: #19b89d";   >
                    </div>

                                       <!--  <div class="col-md-6">
                                            <div class="form-group form-focus select-focus">
                                                <label class="focus-label">Gendar</label>
                                                <select class="select form-control floating">
                                                    <option value="male selected">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                  
                   
                </form>
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

<?php 
if(isset($_POST['update']))
 {
    $name=$_POST['name'];
    $email= $_POST['email'];
    $pass=$_POST['pass'];
    $image= $_FILES['image'];
     if ($image['name'] !== "")
         {
    $imagename= $_FILES['image']['name'];
    $src= $_FILES['image']['tmp_name'];
    $des= "img/". $imagename;
    move_uploaded_file(	$src, $des);	
    	 $_SESSION['pi']= $des;
   }

    $query="UPDATE `admin` SET `Name`='$name',`Image`='".$_SESSION['pi']."',`Email`='$email',`Password`='$pass' where	`Id`='$id' ";
    $run= mysqli_query($db, $query);
    if ($run==true) {
                 echo "<script>window.open('Admin.php', '_self')</script>";

    }
    else
    {
        echo "incorrect";
    }
}



 ?>
