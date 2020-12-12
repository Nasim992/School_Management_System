<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta charset="character_set">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teacher Access </title>

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
  <?php include 'css/admin_access.css'; ?>

  
  span {
    font-size:20px;
  }

 </style>
 </head>

 <body>

<?php

include "includes/teacher_access_topber.php" ;

?>

<section>

<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-primary" href="manage_students_teacher.php">
                                       
                                          <b>  <span class="name">Student Information</span> </b>
                                            
                                        </a>
                                   
 </div>
                               
 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-success" href="add_result_teacher.php">
                                       
                                          <b>  <span class="name">Add Student Result </span> </b>
                                            
                                        </a>
                                   
 </div>
          
 
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-warning" href="find_result_teacher.php">
                                       
                                          <b>  <span class="name">Student Transcript</span> </b>
                                            
                                        </a>
                                   
 </div>
        
 
 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-warning" href="manage_teacher_teacher.php">
                                       
                                          <b>  <span class="name">Teacher Info </span> </b>
                                            
                                        </a>
                                   
 </div>

 
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><br>
                                        <a class="dashboard-stat bg-info" href="change_password_teacher.php">
                                       
                                          <b>  <span class="name">Change Password</span> </b>
                                            
                                        </a>
                                   
 </div>


</section>


</body>

</html>
 </head>
