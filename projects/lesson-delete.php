<?php
if (isset($_GET['lessonID'])) {
include("config.php");
$lessonID = $_GET['lessonID'];
$sql = "DELETE FROM lesson WHERE lessonID='$lessonID'";
if(mysqli_query($conn,$sql)){
    session_start();
    $_SESSION["delete"] = "Lesson Deleted Successfully!";
    header("Location:lessons.php");
}else{
    die("Something went wrong");
}
}else{
    echo "Student does not exist";
}
?>