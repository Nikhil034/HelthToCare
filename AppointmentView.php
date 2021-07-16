<?php include 'connection.php';?>


<?php
$dt=date('Y-m-d');
//echo $dt;

$Appointmentlist=mysqli_query($con,"select * from listofappointment  where PDate='$dt' ");

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


        <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<br>

  <div class="card">
  <div class="card-body bg-primary">
    Appointemt List
  </div>
</div>
<br>
        
  <table class="table table-hover" id="sdt">
    <thead>

      <tr class="table">
        <th>Pid</th>
        <th>Name</th>
        <th>Date</th>
        <th>Edit</th>
        
      </tr>

    </thead>
    <tbody>

      <?php
    while($row=mysqli_fetch_array($Appointmentlist))
    {

    ?>
    <tr>
      <td><?php echo $row['pid'];?></td>
      <td><?php echo $row['Name'];?></td>
      <td><?php echo $row['PDate'];?></td>
      <td><a href="PatientStatusUpdate.php?i=<?php echo $row['pid'];?>" class="btn btn-primary">
         

         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-data" viewBox="0 0 16 16">
  <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z"/>
  <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
  <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
</svg>










      </a></td>
    </tr>  
    <?php 
     }
     ?>
  
    
    </tbody>
  </table>

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script>
  $('#sdt').DataTable();
</script>

<br>

    

  <a href="AppointmentDetails.php" class="btn btn-danger btn-block">Back</a>
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
