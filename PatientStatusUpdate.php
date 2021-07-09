<?php include 'connection.php';?>


<?php
$id=$_GET['i'];
//echo $id;
//echo $dt;

$Patient=mysqli_query($con,"select * from appointmentlist  where pid='$id' ");
$data=mysqli_fetch_array($Patient)

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
  <title>Patient Status</title>
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
    Patient Status
  </div>
</div>
<br>


<div class="card">

  <div class="card-body">


   
  <form action="" method="post" autocomplete="off" >
    <div class="form-group">





      <label for="id">Id</label> 
      <input type="text" class="form-control" name="pid" value="<?php echo $data[0];?>" readonly=  >
      <br>



      <label for="name">Name</label>
      <input type="text" class="form-control" name="pname" value="<?php echo $data[1];?>">
      <br>

      <label for="PType">PType</label>
      <input type="text" class="form-control"   name="pty" value="<?php echo $data[2];?>">
      <br>

  
      <label for="age">Age</label>
      <input type="text" class="form-control"  name="page" value="<?php echo $data[4];?>">
      <br>

      <label>PStatus</label>
      <input type="text" class="form-control"  name="pst" placeholder="Patient Status" required="">
   

    


  
  <div class="card-footer">
     <input type="submit" class="btn btn-success" value="Submit" name="dn">

  </div>
</div>
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

if(isset($_POST['dn']))
{
  $id=$_POST['pid'];
  $pnm=$_POST['pname'];
  $pty=$_POST['pty'];
  $page=$_POST['page'];
  $pstatus=$_POST['pst'];


  $patientstatus=mysqli_query($con,"UPDATE appointmentlist SET Name = '$pnm',PType='$pty',Age='$page',PStatus='$pstatus' WHERE pid = '$id'");

  if($patientstatus)
   {
    echo " <div class='alert alert-success'>
    <strong>Success!</strong> Patient Data Update.
  </div>";
   }
   else {
     echo"<div class='alert alert-danger'>
    <strong>Fail</strong>Not Update Patient Data.
  </div>";
   }
  

}
