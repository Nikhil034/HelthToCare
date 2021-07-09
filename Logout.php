<?php

session_start();

if(isset($_SESSION['email']))
{

?>

<?php include 'connection.php';?>


<?php session_start();

//session is destroy when click on logout

session_destroy();
header("location:http://localhost/Dashboards%20&%20Project/HelthToCare/Login.php");
?>

  <?php 
}



else
{
  echo "Plese Login Page";
?>



 <a href="Login.php" >Login First</a>
<?php
}
?> 