<?php include 'connection.php';?>



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
    margin: 0;
    padding: 0;
}
.bg-all {
    background: #FFDA1F;
    position: relative;
    width: 100%;
    height: 100%;
    overflow: hidden;
}


</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Appointment View & Add</title>
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
        <div class="culd"></div>


        <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js" integrity="sha512-efUTj3HdSPwWJ9gjfGR71X9cvsrthIA78/Fvd/IN+fttQVy7XWkOAXb295j8B3cmm/kFKVxjiNYzKw9IQJHIuQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script>


  </script>
</head>
<body>
  <br>

  <div class="container">

  <div class="card">
    <div class="card-body">Fill Details For New Member</div>
   


  </div>
</div>
<br>

<div class="container">
 
  <div class="card">
    <div class="card-body" >

     <form method="post" autocomplete="off">

      <label style="color: red">*Name</label>
      <input class="form-control" type="text" placeholder="Member Name" name="snm" required="" style="border-radius: 5px;">
      <br>

      <label style="color: red">*Email</label>
      <input class="form-control" type="email" placeholder="Member Email" name="semail" required="" style="border-radius: 5px;">
      <br>

         <label style="color: red">*Phone</label>
      <input class="form-control" type="number" placeholder="Member PhoneNo" name="sno" required="" style="border-radius: 5px;">
      <br>

      <label style="color: red">*Role</label>
      <input class="form-control" type="text" placeholder="Member Role" name="srole" required="" style="border-radius: 5px;">
      <br>

      <label style="color: red">*Salary</label>
      <input class="form-control" type="number" placeholder="Member Salary" name="ssal" required="" style="border-radius: 5px;">
      <br>

      <label style="color: red">*Workday</label>
      <input class="form-control" type="text" placeholder="Member Workday" name="sday" required="" style="border-radius: 5px;">

      <br >
         <label style="color: red">*Address</label>
        <textarea class="form-control"  rows="3" name="sadd" placeholder="Member Address"></textarea>

        <br>


        &nbsp  &nbsp<button type="submit" class="btn btn-success" id="btn" name="sbtn">Submit</button>



      </form>

    </div>
  </div>
</div>


</body>

</div> 
 <?php 
}



else
{

  header("location:Login.php")
?>




<?php
}
?>  
</html>

<?php

if(isset($_POST['sbtn']))
{
  $nm=$_POST['snm'];
  $em=$_POST['semail'];
  $pn=$_POST['sno'];
  $role=$_POST['srole'];
  $sal=$_POST['ssal'];
  $wd=$_POST['sday'];
  $add=$_POST['sadd'];

  //$data=print_r($_POST);
  //echo $data;

  $AddMember=mysqli_query($con,"insert into detailsofstaff(Name,Email,Phoneno,Role,Salary,Workday,Address)values('$nm','$em','$pn','$role','$sal','$wd','$add')");
   if($AddMember){
    echo"<div class='alert alert-success alert-dismissible'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>Success!</strong> Member Add.";
  }
  else{
     echo"<div class='alert alert-danger alert-dismissible'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>Error!</strong> Member Not Add.";
  }
}