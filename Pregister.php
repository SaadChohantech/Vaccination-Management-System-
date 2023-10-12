<?php 
include("db.php");
if (isset( $_POST['Register']))
 {
      $name=$_POST['name'];
      $email=$_POST['email'];
      $pass=$_POST['password'];
      $img=$_FILES['image'];
      $cont=$_POST['contact'];

      $imagename= $_FILES['image']['name'];
      $src=$_FILES['image']['tmp_name'];
      $des="img/". $imagename;
      move_uploaded_file($src, $des);

      $query="SELECT * FROM `pregister` where `email` = '$email'";
      $run= mysqli_query($db, $query);
      $count= mysqli_num_rows($run);
      if ($count==1)
      {
        header('location:plogin.php');

      }
      else
      {
        $query="INSERT INTO `pregister`(`Name`, `email`, `Password`, `Image`, `Contact`) 
        VALUES ('$name','$email','$pass','$des','$cont')";
        $run=mysqli_query($db, $query);
        if ($run==true) 
        {
           echo "<script>alert('You have registered');</script>";  
        }
        else
        {
           echo "<script>alert('Error');</script>";  
        }
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
    height:583px;
    background-color: #FFFFFF;
    margin: auto;
    /*margin-top: 50px;*/
    /*margin-bottom: -10px;*/
    border-radius: 10px 10px 10px 10px;
    box-shadow: 10px 10px 5px #aaaaaa;
  }

.one{
  text-align: center;
  color: #19b89d;
  
}
input:focus{
  border: 1px solid #0cbe9d;     
}
.third
{
  color: inherit;
} 
.third:hover
{
  color:#19b89d ;
}
.forr
{
  margin-left: 2px;
  color: #6b6e6c;
  margin-top: -10px;
}
.butt
{
  width: 100%;
  height: 40px;
  max-width: 230px;
/*  outline: 1px solid 0cbe9d;*/
  border-radius: 100px;
/*  outline: none !important;*/
border: 1px solid #0cbe9d ;
background-color: #fff;
color: #0cbe9d;
margin-left: 110px;
/*padding: 10px;*/
margin-top: px;
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
        
        <form method="POST" enctype="multipart/form-data">
        <h2 class="one mt-3 py-2" >Parent Register</h2>
        <div class="mb-3">
        <label class="form-label" style="color: #0cbe9d;">Name</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Your Name" name="name">
      </div>



    <div class="mb-3">
        <label class="form-label" style="color: #0cbe9d;">Email</label>
        <input type="email" class="form-control" id="formGroupExampleInput" placeholder="Enter Your Email" name="email">
      </div>
      <div class="mb-3">
        <label class="form-label" style="color: #0cbe9d;">Password</label>
        <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Enter Password" name="password" >
      </div>

       <div class="mb-3">
        <label  class="form-label" style="color: #0cbe9d;">Image</label>
        <input type="file" class="form-control" id="formGroupExampleInput2" placeholder="Enter Your Father Name" name="image">
      </div>
       <div class="mb-3">
        <label class="form-label" style="color: #0cbe9d;">Contact</label>
        <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Enter Password" name="contact" >
      </div>

      <p class="forr">Already Register <span><a href="plogin.php" class="third">Sign in</span></p>
      

      <input type="submit" name="Register" value="Register"   class="butt ">
</form>
</div>

<!-- <br><br> -->
 </body>
 </html>