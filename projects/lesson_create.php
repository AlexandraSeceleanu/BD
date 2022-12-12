<?php
include('config.php');
session_start();
$id =  $_GET['studentID'];
if (isset($_POST["submit"])) {
    $start_time = mysqli_real_escape_string($conn, $_POST['start_time']);
    $stop_time = mysqli_real_escape_string($conn, $_POST['stop_time']);
    $km = mysqli_real_escape_string($conn, $_POST['km']);
    $remarks = mysqli_real_escape_string($conn, $_POST['remarks']);
   

    $sqlInsert1 = "INSERT INTO lesson(start_time, stop_time, km, remarks, studentID ) VALUES ('$start_time','$stop_time','$km', '$remarks','$id' )";
    if(mysqli_query($conn,$sqlInsert1)){
        
        $_SESSION["submit"] = "Lesson Added Successfully!";
       
    }else{
        die("Something went wrong");
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Lesson Create</title>
</head>
<body>
  
    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Lesson Add 
                            <a href="lessons.php" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">

                            <div class="mb-3">
                                <label>Start Time</label>
                                <input type="text" name="start_time" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Stop Time</label>
                                <input type="text" name="stop_time" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Number of Km</label>
                                <input type="text" name="km" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Remarks</label>
                                <input type="text" name="remarks" class="form-control">
                            </div>
                           
                            <div class="mb-3">
                                <button type="submit" name="submit" class="btn btn-primary">Save Lesson</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
