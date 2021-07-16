<?php include 'connection.php';?>

<?php
  



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
    height: auto;
   
}

.culd{
    
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
  <title>Bill Manage of Patient</title>
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
       

        <div class="container">

  <div class="card" align="center">
    <div class="card-body">Patient Bill Manage <a href="index.php" class="btn btn-danger" style="float: right;" >

      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg>
      
     

    </a>

    <a href="ViewPatientBill.php" class="btn btn-primary" style="float: left;">View</a>

    
  </div>
  </div>
</div>

  <br>

  <div class="container">    
  <div class="card">
  <div class="card-body"> 
    <form method="post" autocomplete="off" >
    
    <label>Name</label>
    <input class="form-control" type="text" name="pnm" placeholder="Enter Patient Name" required="">
    <br>
    <label>Phone</label>
    <input class="form-control" type="number" placeholder="Enter Patient Phone No" name="pphone" required="">
    <br>
    <label>Address</label>
    <textarea class="form-control" rows="2"  name="padd" required="" placeholder="Enter Patient Address"></textarea>
    <br>
    <label>CaseDetails</label>
    <textarea class="form-control" name="cdit" rows="2" required="" placeholder="Enter Patient CaseDetails"></textarea>
    <br>
    
    <label>Medicine</label>
    <textarea class="form-control" name="pmed" rows="2" required="" placeholder="Enter Patient Medicine List"></textarea>
    <br>

    <label>Medicine Pay</label>
    <input class="form-control" type="number" placeholder="Enter Patient Pay for Medicine" name="ppay" required="">
    <br>

    <label>badCharges</label>
    <input class="form-control" type="number" placeholder="Enter Patient BadCharges" name="pbad" required="">
    <br>
    <label>TotalPay</label>
    <input class="form-control" type="number" placeholder="Enter Patient TotalPay" name="ptpay" required="">

    <br>
    <input type="submit" name="btn" class="btn btn-success btn-block">

      


  










</form>
</div>
</div>
</div>



        









</div>       
</body>



</html>

<?php

if(isset($_POST['btn']))
{
  
  
  $nm=$_POST['pnm'];
  $pn=$_POST['pphone'];
  $pad=$_POST['padd'];
  $pcase=$_POST['cdit'];
  $bc=$_POST['pbad'];
  $mdlist=$_POST['pmed'];
  $mdpay=$_POST['ppay'];
  $tpay=$_POST['ptpay'];

  $data=print_r($_POST);
  echo $data;


   $add=mysqli_query($con,"insert into patientbill(Name,Phone,Address,CaseDetails,Badchares,medicine,Medicinetotal,AmoutofBill)values('$nm','$pn','$pad','$pcase','$bc','$mdlist','$mdpay','$tpay')");

 if($add){
  echo"<script>alert('Patient Bill Add Succesfully')</script>";
 }else{
  echo"<script>alert('Patient Bill Error')</script>";
 }
  

}

?>
<?php
 }
 else
 {
  header("location:login.php");
 ?>
 <?php
  }
  ?> 

