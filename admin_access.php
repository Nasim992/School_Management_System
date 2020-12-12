<?php
session_start();
error_reporting(0);
include('includes/config.php');

/*if(strlen($_SESSION['alogin'])=="")
    {   
    header("Location: login_admin.php"); 
    }
    else{ */

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta charset="character_set">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> SGS Administrator Login Access </title>
  <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/toastr/toastr.min.css" media="screen" >
        <link rel="stylesheet" href="css/icheck/skins/line/blue.css" >
        <link rel="stylesheet" href="css/icheck/skins/line/red.css" >
        <link rel="stylesheet" href="css/icheck/skins/line/green.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>

 <style>
  <?php
  include "css/admin_access.css";
   ?>

.btnn{
    background-color:green;
  }
 a .btnn{
    color:white;
  }
 a .btnn:hover{
    color:white;
  }


  span {
    font-size:30px;
  }
</style>

</head>

<body class="body2">
<div class="main-wrapper">
              <?php include('includes/admin_topbar.php');?>
</div>


<section>



<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-primary" href="dashboard.php">
                                       
                                          <b>  <span class="name">Students Dashboard</span> </b>
                                            
                                        </a>
                                   
 </div>
                                    

 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-success" href="teacher_dashboard.php">
                                       
                                          <b>  <span class="name">Teacher Dashboard</span> </b>
                                            
                                        </a>
                                   
 </div>
          
 
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-warning" href="main_account_info.php">
                                       
                                          <b>  <span class="name">Account Information</span> </b>
                                            
                                        </a>
                                   
 </div>
          
 
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-info" href="change-password.php">
                                       
                                          <b>  <span class="name">Change Password</span> </b>
                                            
                                        </a>
                                   
 </div>
          
</section>


</body>

</html>
<?PHP// } ?>