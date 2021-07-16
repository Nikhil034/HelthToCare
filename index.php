
<?php 

include('connection.php');

?>

<?php

session_start();

if(isset($_SESSION['email']))
{
   $mail=$_SESSION['email'];
   // echo"Welcome To HelthToCare Doctor" .$mail;
?>


<?php

$dt=date('Y-m-d');
//echo $dt;

$patientdata=mysqli_query($con,"select * from listofappointment where PDate='$dt' ");
$stafflist=mysqli_query($con,"select * from detailsofstaff");


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>HelthToCare-Doctor DashBoard</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="CodedThemes">
      <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
      <meta name="author" content="CodedThemes">
      <!-- Favicon icon -->
      <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
  </head>

  <body>




    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">

                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a class="mobile-search morphsearch-search" href="#">
                            <i class="ti-search"></i>
                        </a>

                        <!-- Logo IS here-->
                        <a href="index.php">
                            HelthToCare
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>

                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                
                                <ul class="show-notification">
                                   
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="user-profile header-notification">
                                <a href="#!">
                                    <img src="assets/images/profile.png" class="img-radius" alt="User-Profile-Image" style="border-radius: 10px;">
                                    <span>Doctor Profile</span>
                                    <i class="ti-angle-down"></i>

                                </a>


                                <ul class="show-notification profile-notification">
                                   
                                    <li>
                                        <a href="DoctorProfile.php">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    
                                  
                                    
                                    <li>
                                        <a href="Logout.php">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                

                               
                            </div>
                            
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Main Menu</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="index.html">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="MedicalDetail.php">
                                        <span class="pcoded-micon"><i class="ti-support"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Medical Store</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                   
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Patient & Connect</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href="AppointmentDetails.php">
                                        <span class="pcoded-micon"><i class="ti-clipboard"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Appointment Details</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="PatientCallDetails.php">
                                        <span class="pcoded-micon"><i class="ti-user"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Connect Patient</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>

                                <li>
                                    <a href="BillGenerateofpatient.php">
                                        <span class="pcoded-micon"><i class="ti-credit-card"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Bill Patient</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                
                            </ul>

                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">About Hospital</div>
                            <ul class="pcoded-item pcoded-left-item">
                                
                             
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Hospital Details</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="auth-normal-sign-in.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Bedsheet Data</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="auth-sign-up.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">?</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="sample-page.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">?</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                
                            </ul>

                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.other">Staff</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="StafFeesManagment.php">
                                        <span class="pcoded-micon"><i class="ti-credit-card"></i><b>M</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.menu-levels.main">Fees Manage</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                        <div class="row">
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="icofont icofont-pie-chart bg-c-blue card1-icon"></i>



                                                          

                                                     <?php


                                                     $dt=date('Y-m-d');
                                                     //echo $dt;
                                                     $sql="SELECT count(pid) As total from listofappointment where PDate='$dt'";
                                                     $Result=mysqli_query($con,$sql);
                                                     $value=mysqli_fetch_assoc($Result);
                                                     $ListPid=$value['total'];




                                                     ?>

                                                        <span class="text-c-blue f-w-600">Appointment Today</span>
                                                        <h4><?php echo $ListPid;?></h4>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            <!-- card1 start -->
                                          
                                            <!-- card1 end -->
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="icofont icofont-warning-alt bg-c-green card1-icon"></i>


                                                         <?php


                                                    
                                                    
                                                     $sql="SELECT count(pid) As total from listofappointment where PStatus='Stay'";
                                                     $Result=mysqli_query($con,$sql);
                                                     $value=mysqli_fetch_assoc($Result);
                                                     $StayPatient=$value['total'];




                                                     ?>


                                                        <span class="text-c-green f-w-600">Stay Patient</span>
                                                        <h4><?php echo $StayPatient;?></h4>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            <!-- card1 start -->
                                            
                                            </div>
                                            <!-- card1 end -->
                                            <!-- Statestics Start -->
                                      




                                           
                                            <!-- Email Sent End -->
                                            <!-- Data widget start -->
                                            <div class="col-md-12 col-xl-6">
                                                <div class="card project-task">
                                                    <div class="card-header">
                                                        <div class="card-header-left ">
                                                            <h5>Appointment List : Name &amp; Age</h5>
                                                            <br><hr>
                                                            <h5>Date :- <?php echo $dt;?></h5>
                                                        </div>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="icofont icofont-simple-left "></i></li>
                                                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                                <li><i class="icofont icofont-error close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>


                                                    <div class="card-block p-b-10">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover" id="sdt">
                                                                <thead>
                                                                    <tr class="bg-primary">
                                                                        <th>Patient Name</th>
                                                                        <th>Age</th>
                                                                    </tr>
                                                                </thead>

                                                                <?php
                                                                while($row=mysqli_fetch_array($patientdata))
                                                                {
                                                                ?>    
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="task-contain">
                                                                                <h6 class="bg-c-#FFDC2B d-inline-block text-center"><img src="assets/images/patient.png" width="33px" height="33px" alt="patient-profile" ></h6>
                                                                                <p class="d-inline-block m-l-20"><?php echo $row['Name'];?></p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20"><?php echo $row['Age'];?></p>
                                                                            <!-- <div class="progress d-inline-block">
                                                                                <div class="progress-bar bg-c-blue" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                                                                </div>
                                                                            </div> -->
                                                                        </td>
                                                                    </tr>
                                                                     
                                                                  
                                                                </tbody>
                                                                <?php 
                                                                }
                                                                ?>
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
                                            <div class="col-md-12 col-xl-6">
                                                <div class="card add-task-card">
                                                    <div class="card-header">
                                                        <div class="card-header-left">
                                                            <h5>Doctor Staff Member</h5>
                                                        </div>
                                                        <div class="card-header-right">
                                                            <a href="StaffMemberAdd.php" class="btn btn-card btn-primary">Add</a>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">

                                                         <div class="card-block p-b-10">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover" id="sdt">
                                                                <thead>
                                                                    <tr class="bg-primary">
                                                                        <th>Name</th>
                                                                        <th>View</th>

                                                                    </tr>
                                                                </thead>

                                                                <?php
                                                                while($row1=mysqli_fetch_array($stafflist))
                                                                {
                                                                ?>    
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="task-contain">
                                                                                <h6 class="bg-c-#FFDC2B d-inline-block text-center"><img src="assets/images/man.png" width="33px" height="33px" alt="patient-profile" ></h6>
                                                                                <p class="d-inline-block m-l-20"><?php echo $row1['Name'];?></p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                           <a href="StaffMemberView.php?i=<?php echo $row1['Name'];?>" class="btn btn-danger">
                                                                               
                                                                               <svg xmlns="http://www.w3.org/2000/svg" width="18    " height="18" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>

                                                                                </svg>
                                                                              </a>


                                                                           
                                                                            <!-- <div class="progress d-inline-block">
                                                                                <div class="progress-bar bg-c-blue" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                                                                </div>
                                                                            </div> -->
                                                                        </td>
                                                                    </tr>
                                                                     
                                                                  
                                                                </tbody>
                                                                <?php 
                                                                }
                                                                ?>
                                                            </table>






                                                </div>
                                                <!-- Data widget End -->
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div id="styleSelector">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>

        <!-- Warning Section Starts -->
        <!-- Older IE warning message -->
    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
<!-- am chart -->
<script src="assets/pages/widget/amchart/amcharts.min.js"></script>
<script src="assets/pages/widget/amchart/serial.min.js"></script>
<!-- Todo js -->
<script type="text/javascript " src="assets/pages/todo/todo.js "></script>
<!-- Custom js -->
<script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript " src="assets/js/SmoothScroll.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/demo-12.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
var $window = $(window);
var nav = $('.fixed-button');
    $window.scroll(function(){
        if ($window.scrollTop() >= 200) {
         nav.addClass('active');
     }
     else {
         nav.removeClass('active');
     }
 });
</script>
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
