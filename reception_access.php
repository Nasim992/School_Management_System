<?php 


include('includes/config.php');

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta charset="character_set">
  <html lang="en" dir="ltr">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Receptionist Access </title>

  <style>
  <?php include 'css/admin_access.css'; ?>


  section .class12 button li
  {
          list-style-type:none;

  }
  span {
    font-size:30px;
  }
 </style>

<link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
  
      
  
       
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>

</head>

<body>

<?php

include "includes/reception_topbar.php" ;

?>

<section>




<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-primary" href="add_students_receptionist.php">
                                       
                                          <b>  <span class="name">Add new student</span> </b>
                                            
                                        </a>
                                   
 </div>
                               
 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-success" href="manage_students_receptionist.php">
                                       
                                          <b>  <span class="name">Student Info </span> </b>
                                            
                                        </a>
                                   
 </div>
        
 
 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-warning" href="manage_teacher_reception.php">
                                       
                                          <b>  <span class="name">Teacher Info </span> </b>
                                            
                                        </a>
                                   
 </div>

 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-warning" href="payment_info.php">
                                       
                                          <b>  <span class="name">Payment Info </span> </b>
                                            
                                        </a>
</div>
 
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><br>
                                        <a class="dashboard-stat bg-info" href="change_password_receptionist.php">
                                       
                                          <b>  <span class="name">Change Password</span> </b>
                                            
                                        </a>
                                   
 </div>



</section>





</html>
 </head>
