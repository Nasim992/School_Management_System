<?php

$link = mysqli_connect("localhost", "root", "", "school_database");



if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$stid=intval($_GET['subjectid']);




$sql="DELETE FROM tblsubjects WHERE id=$stid ";

if(mysqli_query($link, $sql)){
    echo "Records were deleted successfully.";

    header("refresh:1;url=manage-subjects.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

?>