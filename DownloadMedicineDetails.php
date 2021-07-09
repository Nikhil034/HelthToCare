
<?php include 'connection.php';?>
<?php

session_start();

if(isset($_SESSION['email']))
{
  //echo $_SESSION['email'];
?>
<?php 

 require("fpdf183/fpdf.php");


 $res=mysqli_query($con,"select  Mid,MName,MPrice,MStock from medicinestore");


 $pdf=new FPDF();
 $pdf->AddPage();
 $pdf->SetFont("Arial","B",17);
 $pdf->Cell(0,15,"Medicine Details Report",1,1,'C'); //width height title border new_line center

 $pdf->Cell(20,10,"ID",1,0,'C');
  $pdf->Cell(50,10,"NAME",1,0,'C');
   $pdf->Cell(50,10,"PRICE",1,0,'C');
    $pdf->Cell(70,10,"STOCK",1,1,'C');

  
    while($row=mysqli_fetch_array($res))
    {

    $pdf->Cell(20,10,$row['Mid'],1,0,'C');
    $pdf->Cell(50,10,$row['MName'],1,0,'C');
    $pdf->Cell(50,10,$row['MPrice'],1,0,'C');
     $pdf->Cell(70,10,$row['MStock'],1,1,'C');

    

   }


   $pdf->Cell(0,15,"Manage & Organize By:-Name Hospital",1,1,'C');

    $pdf->Cell(0,15,"Contatct:-",1,1,'C');





 $pdf->output();
 

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