<?php
if (isset($_GET['studentID'])) {
include("config.php");
$studentID = $_GET['studentID'];
$sql = "DELETE FROM student WHERE studentID='$studentID'";
if(mysqli_query($conn,$sql)){
    session_start();
    $_SESSION["delete"] = "Student Deleted Successfully!";
    header("Location:students.php");
}else{
    die("Something went wrong");
}
}else{
    echo "Student does not exist";
}
?>