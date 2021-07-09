<?php include 'connection.php';?>

<?php

$patient=mysqli_query($con,"select * from appointmentlist");


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
  <title>Patient Call&Chat Information</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>  

 
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
    <div class="card-body">Patient Call Information<a href="index.php" class="btn btn-danger" style="float: right;">
      
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
  <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
</svg>

    </a>
    </div>
  </div>
</div>


<br><br>

<div class="container">

  <div class="card">

 <div class="card-body">  
 

    
    <br>

  <div class="table-responsive">         
  <table class="table table-bordered" id="sdt">
    <thead>
      <tr class="">
        <th>Name</th>
        <th>Age</th>
        <th>Mobile</th>
        <th>Chat</th>
        
      </tr>
    </thead>
    <tbody>

       <?php

    while($row=mysqli_fetch_array($patient))
  {

   ?>

    <tr>
   <td><?php echo $row['Name'];?></td> 
    <td><?php echo $row['Age'];?></td>  
    <td><?php echo $row['Mobile'];?></td>
    <td>
      
      <a target="_blank" href="https://wa.me/+91<?php echo $row['Mobile'];?>?text=Hello, <?php echo $row['Name'];?>"><i class="fa fa-whatsapp text-success fa-3x" aria-hidden="true"></i></a>

    </td>

    </tr>
    <?php
}
?>

  </a>
</td>
    </tbody>
  </table>

    

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script>
  $('#sdt').DataTable();
</script>


 



  </div>
</div>
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

