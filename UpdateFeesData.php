
<?php include 'connection.php';?>

<?php

$nm=$_GET['i'];
//echo $nm;
$feesdata=mysqli_query($con,"select * from detailsofstaff where Name='$nm'");
$result=mysqli_fetch_array($feesdata);


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
  <title>Pay Fees To Staff</title>
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

        <div class="container">

  <div class="card">
    <div class="card-body">Pay To Staff Member<a href="stafFeesManagment.php" class="btn btn-danger" style="float: right;">
      
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
  <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
</svg>



    </a>

    
  </div>
  </div>

  <br>

  <div class="container">
 
  <div class="card">
    <div class="card-body">
      <form method="post" autocomplete="off">



        
     
       <label>Name</label>
       <input class="form-control" type="text" placeholder="Default input" name="snm" readonly="" value="<?php echo $result[1];?>">
       <br>

       <label>Role</label>
       <input class="form-control" type="text" placeholder="Default input" readonly="" value="<?php echo $result[4];?>">
       <br>

       <label>Pay</label>
       <input class="form-control" type="number" placeholder="Staff Pay Money" name="spay" required="">
       <br>

       <label>Date</label>
       <input class="form-control" type="date" placeholder="Pay Date" name="pdate"  required="">
       <br>

       <input type="submit" name="btn" class="btn btn-success btn-block" value="Submit">

      </form>
      
  




    </div> 
    <div class="card-footer">

      <?php

if(isset($_POST['btn']))
{

  $mnm=$_POST['snm'];
  $mpay=$_POST['spay'];
  $gdate=$_POST['pdate'];

 $pay=mysqli_query($con,"update feesstaff set Pay='$mpay',Date='$gdate' where Name='$mnm'");

  if($pay)
   {
    echo " <div class='alert alert-success'>
    <strong>Success!</strong> Pay Data Succesfull Add.
  </div>";
   }
   else {
     echo"<div class='alert alert-danger'>
    <strong>Fail</strong> Error Occur
  </div>";
   }

 
}

?>
      


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



