<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Result Management System</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body>
        <div class="main-wrapper">
            <div class="content-wrapper">
                <div class="content-container">

         
                    <!-- /.left-sidebar -->

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-12">
                                    <h2 class="title" align="center">Student Result </h2>
                                </div>
                            </div>
                            <!-- /.row -->
                          
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section" id="exampl">
                            <div class="container-fluid">

                                <div class="row">
                              
                             
 
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h3 align="center">Student Result Details</h3>
                                                    <hr />
<?php
// code Student Data
$rollid=$_POST['rollid'];
$classid=$_POST['class'];
$_SESSION['rollid']=$rollid;
$_SESSION['classid']=$classid;
$qery = "SELECT   tblstudents.StudentName,tblstudents.RollId,tblstudents.StudentId,tblclasses.ClassName ,tblstudents.scholar from tblstudents join tblclasses on tblclasses.id=tblstudents.ClassId where tblstudents.RollId=:rollid and tblstudents.ClassId=:classid ";
$stmt = $dbh->prepare($qery);
$stmt->bindParam(':rollid',$rollid,PDO::PARAM_STR);
$stmt->bindParam(':classid',$classid,PDO::PARAM_STR);
$stmt->execute();
$resultss=$stmt->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($stmt->rowCount() > 0)
{
foreach($resultss as $row)
{   ?>
<p><b>Student Name :</b> <?php echo htmlentities($row->StudentName);?></p>
<p><b>Student Roll Id :</b> <?php echo htmlentities($row->RollId);?>
<p><b>Student Class:</b> <?php echo htmlentities($row->ClassName);?>(<?php echo htmlentities($row->Section);?>)
<p><b>Payment Date :</b> <?php echo  date("Y.m.d");?>
<p><b>Scholarship(%):</b> <?php echo htmlentities($row->scholar);?>
<?php }

    ?>
    
                                            </div>

                                            
                                            <div class="panel-body p-20">







                                                <table class="table table-hover table-bordered" border="1" width="100%">
                                                <thead>
                                                        <tr>
                                                            <th>#</th>          
                                                            <th>Tution Fees</th>

                                                        </tr>
                                                    </thead> 
  


                                                	
                                                	<tbody>
<?php                                              
// Code for result

$sql = "SELECT payment_student.id,payment_student.payment from payment_student join tblstudents on payment_student.ClassId=tblstudents.ClassId Where tblstudents.RollId=:ro";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{   ?>
	<tr>
    <td><?php echo htmlentities($cnt);?></td>

<td><?php echo htmlentities($result->payment-((($result->payment)*($result->scholar))/100));?></td>
                                                		</tr>
<?php 
$totlcount+=$totalmarks;
$cnt++;}
?>



<tr>
                              
<td colspan="3" align="center"><i class="fa fa-print fa-2x" aria-hidden="true" style="cursor:pointer" OnClick="CallPrint(this.value)" >print result</i></td>
                                                             </tr>

 <?php } else { ?>     
<div class="alert alert-warning left-icon-alert" role="alert">
                                            <strong>Notice!</strong> Result Not Found
 <?php }
?>
                                        </div>
 <?php 
 } else
 {?>

<div class="alert alert-danger left-icon-alert" role="alert">
strong>Oh The ID is not Found !</strong>
<?php
echo htmlentities("Invalid Roll Id");
 }
?>
                                        </div>



                                                	</tbody>
                                                </table>

                                            </div>
                                        </div>
                                        <!-- /.panel -->
                                    </div>
                                    <!-- /.col-md-6 -->

        <!--                            <div class="form-group">
                                                           
                                                            <div class="col-sm-6">
                                                               <a href="dashboard.php">Back to Home</a>
                                                            </div>
                                                        </div>   
                                                        -->

                                </div>
                                <!-- /.row -->
  
                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                    </div>
                    <!-- /.main-page -->

                  
                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function($) {

            });


            function CallPrint(strid) {
var prtContent = document.getElementById("exampl");
var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
WinPrint.document.write(prtContent.innerHTML);
WinPrint.document.close();
WinPrint.focus();
WinPrint.print();
WinPrint.close();
}
</script>

        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->

    </body>
</html>
