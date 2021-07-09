<?php include 'connection.php';?>

<?php
$name=$_GET['i'];
//echo $name;
$profiledata=mysqli_query($con,"select * from doctordate where Name='$name'");
$doctordate=mysqli_fetch_array($profiledata)

?>

<?php

session_start();

if(isset($_SESSION['email']))
{
  //echo $_SESSION['email'];
?>


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

</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Doctor Profile Edit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    function myFunction() {
  var x = document.getElementById("myinput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
  </script>
</head>


<body>

<div class="bg-all">
       
        <div class="culd"></div>
        <div class="culd"></div>
        <div class="culd"></div>
        <div class="culd"></div>
        <div class="culd"></div>


        









        <br><br>


        <div class="card">
  <div class="card-header">Edit Your Profile</div>
  <div class="card-body">


   
  <form action="" method="post" >
    <div class="form-group">





      <label for="id">Id</label>
      <input type="text" class="form-control" name="id" value="<?php echo $doctordate[0];?>" readonly>



      <label for="name">Name</label>
      <input type="text" class="form-control" name="dname" value="<?php echo $doctordate[1];?>">

      <label for="email">Email</label>
      <input type="email" class="form-control"   name="deml" value="<?php echo $doctordate[2];?>">

    

      <label for="password">Password <input type="checkbox" onclick="myFunction()"></label>
      <input type="password" class="form-control" name="dpw" id="myinput"  value="<?php echo $doctordate[3];?>">

      <label for="Degree">Degree</label>
      <input type="text" class="form-control"   name="deg" value="<?php echo $doctordate[5];?>">

      
      <label for="phoneno">Phoneno</label>
      <input type="text" class="form-control"  name="dpn" value="<?php echo $doctordate[6];?>">

      <label for="age">Age</label>
      <input type="text" class="form-control"  name="dage" value="<?php echo $doctordate[4];?>">
   

    


  
  <div class="card-footer">
     <input type="submit" class="btn btn-success" value="Submit" name="dn">

  </div>
</div>
</form>
</div>


        
 

</div>
</div>
</body>
<?php
 }
 else
 {
  header("location:login.php");
 ?>
 <?php
  }
  ?> 
 


</html>

<?php

if(isset($_POST['dn']))
{
  
  $uid=$_POST['id'];
  $nm=$_POST['dname'];
  $em=$_POST['deml'];
  $ps=$_POST['dpw'];
  $dg=$_POST['deg'];
  $pn=$_POST['dpn'];
  $ag=$_POST['dage'];


  $editprofile=mysqli_query($con,"UPDATE doctordate SET Name = '$nm',Email='$em',Password='$ps',Degree='$dg',Phone='$pn',Age='$ag' WHERE User_id = '$uid'");

  if($editprofile)
   {
    echo " <div class='alert alert-success'>
    <strong>Success!</strong> Data Update Succesfull
  </div>";
   }
   else {
     echo"<div class='alert alert-danger'>
    <strong>Fail</strong> Error Occur
  </div>";
   }

}

?>
