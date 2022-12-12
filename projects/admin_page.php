<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['instructor_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Instructor page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h1>Hi, <span><?php echo $_SESSION['instructor_name'] ?> </span> !</h1>
   
      <a href="logout.php" class="btn">Logout</a>

      <div class="btn-group">
      
      <a href="students.php" class="btn">Students</a>
      <a href="cars.php" class="btn">Cars</a>
      <!-- <a href="lessons.php" class="btn">Lessons</a> -->
      </div>
   </div>

</div>

</body>
</html>