<?php include('connection.php');?>
<?php

session_start();

if(isset($_SESSION['email']))
{
  //echo $_SESSION['email'];
?>
<?php

$mid=$_GET['i'];
echo $mid;

mysqli_query($con,"delete  from medicinestore where Mid='$mid'");

header("location:MedicalDetail.php");


?>
 <?php 
}



else
{

  header("location:Login.php")
?>




<?php
}
?>