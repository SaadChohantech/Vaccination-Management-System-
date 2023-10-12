<?php 
session_start();
include("db.php");
// include("add.php");


$query="SELECT * FROM `bookapp` ";
$run=mysqli_query($db, $query);




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


    <style type="text/css">
      
      table td

      {
        font-size: 17px;
      }
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
                        <span class="user-img"><img class="rounded-circle" src="<?php echo $_SESSION['Image']; ?>" width="40" alt="Admin">
                            <span class="status online"></span></span>
                        <span>Admin</span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile.php">My Profile</a>
                        <a class="dropdown-item" href="editprofile.php">Edit Profile</a>
                        <!-- <a class="dropdown-item" href="settings.html">Settings</a> -->
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
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
                    <ul class="mt-3">
                       <!-- <li class="menu-title">Main</li> -->
                        <li >
                            <a href="Admin.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
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
                        <!-- <li>
                            <a href="reports.php"><i class="fa fa-calendar"></i> <span>Report</span></a>
                        </li>
                        -->
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title" style="color: #19b89d";>Appointments</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <!-- <a href="add.php" class="btn btn btn-primary btn-rounded float-right" style="background-color:#19b89d; "><i class="fa fa-plus"></i> Add Hospital</a> -->
                            <!-- <button type="button" class="btn btn btn-primary btn-rounded" data-toggle="modal" data-target="#exampleModal" style="background-color:#19b89d; "><i class="fa fa-plus"></i>
                             Add Vaccines
                            </button>

               -->


                    </div>

                   


                </div>

<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add hospital
</button> -->



                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped">
  <thead>
    <tr>
        <!-- <th>S.No</th> -->
      <th scope="col">Child Name</th>
      <th scope="col">Date</th>
      <th scope="col">Gender</th>
      <th scope="col">Hospital</th>
      <th scope="col">Status</th>

      <!-- <td>Edit</td> -->
      <!-- <th>edit</th>
      <th>delete</th> -->
    </tr>
  </thead>
  <tbody>
<?php 
while($data= mysqli_fetch_assoc($run))
{


 ?>
    <tr>
      <!-- <th scope="row">1</th> -->
    <td><?php echo $data['Name']; ?></td>
    <td><?php echo $data['date']; ?></td>
    <td><?php echo $data['gender']; ?></td>
    <td><?php echo $data['hospital']; ?></td>

    <td>
      
      <div class="form-group">
     <form method="POST" id="form_<?php echo $data['id']; ?>">
        <select class="form-control select" name="male">
          <option selected>Pending</option>
          <option>Approved</option>
          <option>Reject</option>
        </select>
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <button type="submit" form="form_<?php echo $data['id']; ?>" class="btn btn-primary px-4 mt-2" style="background-color:#19b89d;   " name="upda">Update</button>
      </form>

</div>

</td>
      
      

   
      
      
    </tr>
<?php 

}
 ?>




   
  </tbody>
</table>
            
 












                </div>
                    </div>
                </div>
            </div>
           
        </div>
        
<!-- update -->

<?php 


if (isset($_POST['upda'])) 
{
    $id= $_POST['id'];
    $name= $_POST['male'];
    $query= "UPDATE `bookapp` SET `status` ='$name' where `id`='$id'";
    $run= mysqli_query($db,$query);
    if ($run==true) {
        echo "<script>alert('Status have updated');</script>";
    }
}




 ?>






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
</html>
 