
<?php
session_start();
error_reporting(0);
include('includes/config.php');
if($_SESSION['alogin']!=''){
$_SESSION['alogin']='';
}
if(isset($_POST['login']))
{
$uname=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT UserName,Password FROM teacher_login WHERE UserName=:uname and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'teacher_access.php'; </script>";
} else{
    
    echo "<script>alert('Invalid Details');</script>";
    header("refresh:0;url=index.php");

}

}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
<meta charset="UTF-8">
  <meta charset="character_set">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <head>
  <link rel="stylesheet" href="css/logincss.css" media="screen" >

  <style>

  a 
  {
    text-decoration:none;
    color:white;
  }
   
  </style>

    </head>

<body>



<form class="modal-content animate"  method="post">


  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="UserName" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password"required>

    <label>
    <button type="submit" name="login" class="btn btn-success btn-labeled pull-right">Sign in<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="submit"  class="cancelbtn"><a href="index.php">Cancel</a></button>
    <!-- <span class="psw">Forgot <a href="change-password.php">password?</a></span> -->
  </div>
</form>
</div>

</body>
</html>
