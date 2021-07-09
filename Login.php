<?php include 'connection.php';?>



<style type="text/css">

  html,body{
    height: 100%;

}
body{
   
}
.bg-all {
    background: #FFDA1F;
    position: relative;
    width: 100%;
    height: 100%;
   
}

.culd{
    position: absolute;
    top: 100px;
    left: 100px;
    width: 10px;
    height: 10px;
    border: 1px solid #079e71;
    transform-origin: top left;
    transform: scale(0) rotate(0deg) translate(-50%,-50%);
    animation: culd 12s  ease-in forwards infinite;
}
.responsive {
  width: auto;
  height: auto;
}

</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 
</head>


<body>

<div class="bg-all">
       
        <div class="culd"></div>
        <div class="culd"></div>
        <div class="culd"></div>
        <div class="culd"></div>
        <div class="culd"></div>.
        <br><br><br><br><br><br>

        <div class="container">
 
  <div class="card">
    <div class="card-body" style="background:"  >
     

      <form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter Your Email" required="">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="pass" placeholder="Enter Your Password" required="">
  </div>
  <br>
  
  <button type="submit" class="btn btn-primary btn-block" name="btn" >Login</button>


</form>
      


    </div>
  </div>
</div>

       

</body>
</div>
</html>

<?php

session_start();

if(isset($_POST['btn']))
{
  $em=$_POST['email'];
  $pass=$_POST['pass'];

   $isValid = filter_var($em, FILTER_VALIDATE_EMAIL);

 if($isValid)
 {
  echo "Valid Email";
 }
 else{
  echo "Plese Input A Valid Email";
 }


  $login=mysqli_query($con,"select * from doctordate where  Email='$em' and Password='$pass'");

  $count=mysqli_num_rows($login);
  if($count>0){
    
     $_SESSION['email']=$em;

      
      header("location:http://localhost/Dashboards%20&%20Project/HelthToCare");

  }else{
    echo"<script>alert('User Not Found')</script>";
  }
}

?>