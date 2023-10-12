<?php 

include("db.php");
session_start();

$user= $_SESSION['UNSER_NAME'];
$querys="SELECT * FROM `Pregister` where `email` = '$user'";
$runs= mysqli_query($db,$querys);
$row= mysqli_fetch_array($runs);
$id= $row['id'];
if (isset($_POST['submit']))
 {
	$name= $_POST['name'];
	$date= $_POST['date'];
	$gender=$_POST['male'];
	$hospital= $_POST['hospi'];
	$vaccine=$_POST['vaccine'];

	$query="INSERT INTO `bookapp`(`Name`, `date`, `gender`, `hospital`, `vaccine`,`user_id`) 
	VALUES ('$name','$date','$gender','$hospital', '$vaccine', '$id')";
	$run=mysqli_query($db, $query);
	if ($run== true) {
		header('location:bookappointment.php');
	}
}






 ?>