<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 </body>
 </html>



<?php

session_start();


if (isset($_POST["submit"])) {

    $sleepHours = $_POST["sleep"];
    $today = date("d-m-Y");
    $today = date("d-m-Y",strtotime($today));
    $user = $_SESSION["user"];


    require_once '../database.php';




        function addLifestlye($conn,$user, $sleepHours, $today) {

                $x = 0;
                $sql = "INSERT INTO dayDetails (username, day, waterIntake, sleepHours, totalCarbs, complexCarbs, totalFats, unsaturatedFats, protein, fibre, highCardio, lowCardio, highStrength, lowStrength) VALUES ('$user', '$today', $x, $sleepHours, $x, $x, $x, $x, $x, $x, $x, $x, $x, $x);";


                if (mysqli_query($conn, $sql)) {
                    echo "New record created successfully";
                  } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                  }
                  
                  header("location: ../goals.php?error=noWork");
                  exit();
  
        }





        function editLifestyle($conn,$user, $sleepHours, $today) {
           
                $sql = "UPDATE dayDetails SET sleepHours = $sleepHours  WHERE username = '$user' AND day = '$today'";
                if ($conn->query($sql) === TRUE) {
                    header("location: ../goals.php?error=none");

                    exit();
                }
                header("location: ../goals.php?error=noEdit");
                exit();

            }





        $sql = "SELECT  * FROM dayDetails WHERE username = '$user' AND day = '$today'";
        $result = $conn->query($sql);
        if ($result->num_rows < 1) {
            addLifestlye($conn,$user, $sleepHours, $today);
        }
        else{
            editLifestyle($conn,$user, $sleepHours, $today);
        }





        header("location: ../goals.php?error=none");
        exit();



}

