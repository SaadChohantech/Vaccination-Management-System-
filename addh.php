<?php 
include("db.php");


if (isset($_POST['submit'])) 
{
  $name= $_POST['name'];
  $email= $_POST['email'];
  $address=$_POST['address'];

$query= "INSERT INTO `hospital`( `name`, `email`, `address`) VALUES ('$name','$email','$address')";
$run=mysqli_query($db,$query);
if ($run==true) {
	header('location:addhospital.php');
}

}

 ?>