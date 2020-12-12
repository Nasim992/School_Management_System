

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta charset="character_set">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> SGS Login Page </title>

  <style>
  <?php include 'css/index.css'; ?>


  .btnn{
    background-color:green;
  }
 a .btnn{
    color:white;
  }
 a .btnn:hover{
    color:white;
  } 
   
  .bbody{
	background-image: url("images/logo.jpg");
	height: 100vh;
	weight:100vh;
	background-repeat: no-repeat;
background-size: 100%;
  
  }


 </style>


<link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        
        <link rel="stylesheet" href="css/main.css" media="screen" >
    

 </head>
 <body class="bbody">

 <?php include('includes/main_page_topbar.php');?> 

 <div class="class1">

   <div class="class2">
   <img src="images/admin.png" height="80" width="100"><br>
     <a href="login_admin.php"><b><button style="width:auto" class="btnn">Administrator</button></b></a>
   <!--  <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button> -->
    
   </div>

   <div class="class3">
    <img src="images/admin.png" height="80" width="100"><br>
    <a href="login_teacher.php"><b><button style="width:auto" class="btnn">Teacher</button></b></a>
     
   </div>

   <div class="class4">
   <img src="images/reception.png" height="80" width="100"><br>
   <a href="login_reception.php"><b><button style="width:auto" class="btnn">Receptionist</button></b></a></h5>
   </div>

 </div>


</body>


</html>
