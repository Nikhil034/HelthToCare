
<?php include 'connection.php';?>

<?php
  
$data=mysqli_query($con,"select * from `billofpatient");



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
  <title>Bill View of Patient</title>
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
    <div class="card-body">Patient Bill view <a href="BillGenerateofpatient.php" class="btn btn-danger" style="float: right;" >

      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg>
      
     

    </a>

   
    
  </div>
  </div>
</div>

 <br>

  <div class="container">    
  <div class="card">
  <div class="card-body"> 
    <table class="table table-hover">
      <thead>
      
        <tr>
          <th>Name</th>
          <th>Phone</th>
          <th>Pay</th>
        </tr>
      </thead>
      <tbody>
      		<?php
      	 while($row=mysqli_fetch_array($data))
      	 {

      	?> 	


      	<tr>

      		<td><?php echo $row['Name'];?></td>
      		<td><?php echo $row['Phone'];?></td>
      		<td>
      			
      			 <button type="button" class="btn btn-success " data-toggle="modal" data-target="#myModal">Bill Pay</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>
        <div class="modal-body">
          
          

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

      		</td>
      	</tr>
      
      </tbody>
      <?php 
       }
       ?>
    </table>
</div>
</div>
</div>

   

      
</body>
</div>
<?php
 }
 else
 {
  header("location:login.php");
 ?>
 <?php
  }
  ?> 
 


</html>

