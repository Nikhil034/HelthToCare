<?php include 'connection.php';?>

<?php

$profiledata=mysqli_query($con,"select * from doctordate");

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
  <title>Doctor Profile View</title>
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

        <br>
        <?php

        while($row=mysqli_fetch_array(
$profiledata))
      {

       ?> 

      <div class="container" align="center">
 
  <div class="card">
    <div class="card-header">Profile View</div>
    <div class="card-body">

  <div class="d-flex p-3 bg-primary text-white">
  
  Name :  <?php echo $row['Name'];?>

</div>
<br>

<div class="d-flex p-3 bg-primary text-white">
  
  Email :  <?php echo $row['Email'];?>

</div>
<br>

<div class="d-flex p-3 bg-primary text-white">
  
  Password :  <?php echo $row['Password'];?>

</div>
<br>

<div class="d-flex p-3 bg-primary text-white">
  
  Degree:  <?php echo $row['Degree'];?>

</div>
<br>

<div class="d-flex p-3 bg-primary text-white">
  
  Age :  <?php echo $row['Age'];?>

</div>
<br>

<div class="d-flex p-3 bg-primary text-white">
  
  Phone :  <?php echo $row['Phone'];?>

</div>

      
    </div>
    
    <div class="card-footer">
      <a href="EditProfile.php?i=<?php echo $row['Name'];?>" class="btn btn-success">Edit
      <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 17 17">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
</a>
<?php
     }
     ?> 

&nbsp
      <a href="index.php" class="btn btn-danger">Exit
    
    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-x-square" viewBox="0 0 17 17">
  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg>

      </a>
    </div>
  </div>
</div>  
   

  <br>
 


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
