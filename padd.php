<?php 
session_start();
include("db.php");

$user= $_SESSION['UNSER_NAME'];
$querys="SELECT * FROM `Pregister` where `email` = '$user'";
$runs= mysqli_query($db,$querys);
$row= mysqli_fetch_array($runs);
$id= $row['id'];
  


if (isset($_POST['submit']))
 {
	$name= $_POST['name'];
	$age= $_POST['age'];
	$gender= $_POST['male'];
	$blood= $_POST['blood'];


	$query="INSERT INTO `addchild`(`Name`, `age`, `gender`, `blood`, `user_id`) VALUES ('$name','$age','$gender','$blood', '$id')";
	$run= mysqli_query($db, $query);
	if ($run==true) {
		header('location:Parents.php');
	}
}















 ?>

 