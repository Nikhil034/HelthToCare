<?php include 'connection.php';?>

<?php

$profiledata=mysqli_query($con,"select * from datadoctor");

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



     
    <div class="container" style="height: auto; width: auto;" >
 
 <br>
  <div class="card">
    <div class="card-header">Appointment Taken & View 

     <a href="AppointmentView.php"  class="btn btn-primary" style="float: right;">View</a>


     
   
    </div>
    <div class="card-body">

      <form method="post" autocomplete="off">
      <label>Name

        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="red" class="bi bi-asterisk" viewBox="0 0 16 16">
  <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
     </svg>

      </label>
      <input class="form-control form-control-sm" type="text" placeholder="Patient Name" required name="pn" style="border-top-color: green; border-left-color: green;">

      <br>


      <label>Case Type

          <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="red" class="bi bi-asterisk" viewBox="0 0 16 16">
  <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
     </svg>


 
      </label>
      <input class="form-control form-control-sm" type="text" placeholder="Patient Type" required  name="ptype" style="border-top-color: green; border-left-color: green;">
      <br>


       <label>Age
       
        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="red" class="bi bi-asterisk" viewBox="0 0 16 16">
  <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
     </svg>

       </label>
      <input class="form-control form-control-sm" type="number" placeholder="Patient Age" required name="page" style="border-top-color: green; border-left-color: green;">

      <br>

       <label>Contact
        
         <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="red" class="bi bi-asterisk" viewBox="0 0 16 16">
  <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
     </svg>


       </label>
      <input class="form-control form-control-sm" type="number" placeholder="Patient Mobile No" required name="pmob" style="border-top-color: green; border-left-color: green;">


       <br>

        <label>Date


         <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="red" class="bi bi-asterisk" viewBox="0 0 16 16">
  <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
     </svg>
             
        </label>
      <input class="form-control form-control-sm" type="date" placeholder="Patient Name" required name="pdate"m style="border-top-color: green; border-left-color: green;">








    </div> 
    <div class="card-footer" align="center">
      
      <button type="submit" class="btn btn-primary" name="btn">Submit</button>


    </div>
  </form>
  </div>
</div>



</div>
  
</div>  
   


</body>
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

if(isset($_POST['btn']))
{
  $Patientnm=$_POST['pn'];
  $Patienttype=$_POST['ptype'];
  $Patientage=$_POST['page'];
  $Patientmb=$_POST['pmob'];
  $Patientdate=$_POST['pdate'];

  $query=mysqli_query($con,"insert into listofappointment(Name,PType,Age,Mobile,PDate)values('$Patientnm','$Patienttype','$Patientage','$Patientmb','$Patientdate')");

  if($query){
    echo"<div class='alert alert-success alert-dismissible'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>Success!</strong> Patient Add.";
  }
  else{
     echo"<div class='alert alert-danger alert-dismissible'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>Error!</strong> Patient Not Add.";
  }
}

?>

