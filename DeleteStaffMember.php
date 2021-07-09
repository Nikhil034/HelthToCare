
<?php include('connection.php');?>
<?php

session_start();

if(isset($_SESSION['email']))
{
  //echo $_SESSION['email'];
?>
<?php

$Memberid=$_GET['i'];
echo $Memberid;

mysqli_query($con,"delete  from staffdata where Sid='$Memberid' ");
header("location:index.php");





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