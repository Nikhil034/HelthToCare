<?php include 'connection.php';?>

<?php

$medicinedata=mysqli_query($con,"select * from medicinestore");


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
  <title>Medical Store</title>
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
    <div class="card-body">Medicine Store <a href="MedicalDetail.php" class="btn btn-danger" style="float: right;">

      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg>
      
     

    </a>
  

    
  </div>
  </div>

<br><br>


      <div class="card">
  <div class="card-header">
    <form method="post" autocomplete="off">

  <label>Medicine Name
   
   <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" fill="red" class="bi bi-asterisk" viewBox="0 0 16 16">
  <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
</svg>

  </label>
  <input class="form-control" type="text" placeholder="Enter Medicine Name"  name="mnm" required="">

  <br>

   <label>Medicine Description
   
   <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" fill="red" class="bi bi-asterisk" viewBox="0 0 16 16">
  <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
</svg>

  </label>
     <textarea class="form-control"  rows="3" placeholder="Enter Medicine Description" name="mdes" required=""></textarea>

  <br>
   <label>Medicine Validity
   
   <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" fill="red" class="bi bi-asterisk" viewBox="0 0 16 16">
  <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
</svg>

  </label>
  <input class="form-control" type="date" placeholder="Enter Medicine Name" name="mvalid" required="">
  <br>

   <label>Medicine Price
   
   <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" fill="red" class="bi bi-asterisk" viewBox="0 0 16 16">
  <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
</svg>

  </label>
  <input class="form-control" type="number" placeholder="Enter Medicine Price" name="mrp" required="">
  <br>

   <label>Medicine Stock
   
   <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" fill="red" class="bi bi-asterisk" viewBox="0 0 16 16">
  <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
</svg>

  </label>
  <input class="form-control" type="number" placeholder="Enter Medicine Stock Quantity" name="mst" required="">

    

  
  </div>
  <input type="submit" name="btn" value="Submit" class="btn btn-success">
</form>
 



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
  $nm=$_POST['mnm'];
  $des=$_POST['mdes'];
  $valid=$_POST['mvalid'];
  $pr=$_POST['mrp'];
  $st=$_POST['mst'];


$addmedicine=mysqli_query($con,"insert into medicinestore(MName,MDescription,Mvalidity,MPrice,MStock)values('$nm','$des','$valid','$pr','$st')");

 
       if($addmedicine)
   {
    echo " <div class='alert alert-success'>
    <strong>Success!  </strong>Medicine Add Succesfull.
  </div>";
   }
   else {
     echo"<div class='alert alert-danger'>
    <strong>Fail!    </strong>Not Add Medicine.
  </div>";
   }



}

?>
 