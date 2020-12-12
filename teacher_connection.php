<?PHP
$servername="localhost";
$username="root";
$password="";
$dbname="school_dbms";
$conn=mysqli_connect($servername,$username,$password,$dbname);



$id=$_POST['id'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$bg=$_POST['bg'];
$address=$_POST['address'];
$email=$_POST['email'];
$tcon=$_POST['tcon'];
$tsalary=$_POST['tsalary'];

$sql = "INSERT INTO teacher_info (ID,name,gender,dob,bg,address,email,tcon,salary)
                                 VALUES ('$id','$name','$gender','$dob','$bg','$address','$email','$tcon','$tsalary')";

if(mysqli_query($conn,$sql))
{
	echo"Inserted successfully";

	header("refresh:3;url=admin_access.php");
}
else
{
	echo"not Inserted";

	header("refresh:3;url=admin_access.php");
}
mysqli_close($conn);


?>