<?php 

include("db.php");
session_start();
// if (!isset($_SESSION['email'])) 
// {
// 	header('location:login.php');
// }

if (isset($_POST['login']))
 {
	$email= $_POST['email'];
	$pass=$_POST['password'];

	$query="SELECT * FROM `admin` WHERE `Email` = '$email' and `password` = '$pass'";
	$run= mysqli_query($db, $query);
	$count= mysqli_num_rows($run);
	if ($count==1) {

    $row=mysqli_fetch_assoc($run);
		$_SESSION['email']= $email;
    $_SESSION['Name']= $row['Name'];
    $_SESSION['Image']=$row['Image'];
	   header('location:Admin.php');
  }
	else
	{
		echo "<script>alert('Email or password is incorrect');</script>";
	}
}



 ?>



  <!DOCTYPE html>
 <html>
 <head>
  

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<style type="text/css">
  
body
{
  background-color: #e2e7e8;
}
  .container
  {
    width: 100%;
    max-width: 450px;
    height: 350px;
    background-color: #FFFFFF;
    margin: auto;
    margin-top: 130px;
    border-radius: 10px 10px 10px 10px;
    box-shadow: 10px 10px 5px #aaaaaa;
  }

.one{
  text-align: center;
  color: #19b89d;
  
}
input:focus{
 outline: none !!important;
 border: 1px solid #0cbe9d;    
}
.third
{
  color: inherit;
} 
.third:hover
{
  color:#0cbe9d ;
}
.forr
{
  margin-left: 2px;
  color: #6b6e6c;
}
.butt
{
  width: 100%;
  height: 40px;
  max-width: 200px;
/*  outline: 1px solid 0cbe9d;*/
  border-radius: 100px;
/*  outline: none !important;*/
border: 1px solid #0cbe9d ;
background-color: #fff;
color: #0cbe9d;
margin-left: 110px;
/*padding: 10px;*/
margin-top: 10px;
transition: 0.1s linear;
}
.butt:hover
{
  background-color: #19b89d;
  transition: 0.1s linear;
  color: white;
  font-weight: 40px;
}


</style>
 </head>
 <body>

  

      <div class="container">
        
        <form method="POST">
        <h2 class="one" > Admin Sign in</h2>
        
<div class="mb-3">
          
        <label class="form-label" style="color: #0cbe9d;">Email</label>
        <input type="email" class="form-control" id="formGroupExampleInput" placeholder="Enter Your Email"  
        name="email">
      </div>
      <div class="mb-3">
        <label class="form-label" style="color: #0cbe9d;">Password</label>
        <input type="password" class="form-control" id="formGroupExampleInput" placeholder="Enter Password" name="password" >
      </div>
      <p class="forr">Not Register <span><a href="Register.php" class="third">Sign up</span></p>
      

      <input type="submit" name="login" value="Login"   class="butt">
</form>
</div>
 </body>
 </html>