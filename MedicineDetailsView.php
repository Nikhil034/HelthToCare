<?php include 'connection.php';?>

<?php
$name=$_GET['i'];
$medicinedata=mysqli_query($con,"select * from medicinestore where MName='$name'");
$Data=mysqli_fetch_array($medicinedata)

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
    overflow: scroll;
   
}

  
</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Medicine View</title>
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


        


 





   


        <div class="card">
 
  <div class="card-body">


   
  <form action="" method="post"  autocomplete="off" style="">
    <div class="form-group">





      <label for="id">Medicine Id</label>
      <input type="text" class="form-control" name="mid" value="<?php echo $Data[0];?>" readonly>
      <br>



      <label for="name">Medicine Name</label>
      <input type="text" class="form-control" name="mname" value="<?php echo $Data[1];?>">
      <br>

      <label for="des">Medicine Description</label>
      <textarea class="form-control" rows="3" name="mdes"><?php echo $Data[2];?></textarea>
      <br>

    

      <label for="valid">Medicine Valid</label>
      <input type="date" class="form-control" name="mval" value="<?php echo $Data[3];?>">
      <br>

      <label for="price">Medicine price</label>
      <input type="number" class="form-control"   name="mrp" value="<?php echo $Data[4];?>">
      <br>

      
      <label for="Stock">Medicine Stock</label>
      <input type="number" class="form-control"  name="mst" value="<?php echo $Data[5];?>">

      
   

    


  
  <div class="card-footer">
    

  </div>
</div>
<button type="submit" class="btn btn-info btn-lg btn-block responsive-width" name="btn">
        UPDATE
    </button>
    <br>
    <a href="DeleteMedicine.php?i=<?php echo $Data[0];?>"><button type="button" class="btn btn-danger btn-lg btn-block responsive-width">
        DELETE
    </button>
  </a>
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
  
  $mid=$_POST['mid'];
  $mnm=$_POST['mname'];
  $mdes=$_POST['mdes'];
  $mvalid=$_POST['mval'];
  $mpr=$_POST['mrp'];
  $mst=$_POST['mst'];



  $editmedicine=mysqli_query($con,"UPDATE medicinestore SET MName = '$mnm',MDescription='$mdes',Mvalidity='$mvalid',MPrice='$mpr',MStock='$mst' WHERE Mid = '$mid'");

  if($editmedicine)
   {
    echo " <div class='alert alert-success'>
    <strong>Success!</strong> Medicine Update Succesfull.
  </div>";
   }
   else {
     echo"<div class='alert alert-danger'>
    <strong>Fail</strong> Medicine Not Update.
  </div>";
   }

}

?>
