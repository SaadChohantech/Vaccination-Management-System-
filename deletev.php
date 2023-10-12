<?php 

include("db.php");
if (!isset($_SESSION['email']))
 {
    header('location:login.php');
}
else
{
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    
        $query= "DELETE FROM `vaccines` WHERE `id`='$id' ";
        $run= mysqli_query($db, $query);
        if ($run==true) {
        	 echo "<script>window.open('vaccines.php', '_self')</script>";
        }
     

    // $conn = null;
} else {
    echo "Invalid item ID or missing ID parameter.";
}

}


// Check if the delete button is clicked






 ?>