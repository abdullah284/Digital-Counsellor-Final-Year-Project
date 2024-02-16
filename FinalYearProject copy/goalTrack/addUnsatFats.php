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


    $unsatFats = $_POST["unsatFats"];

    $today = date("d-m-Y");
    $today = date("d-m-Y",strtotime($today));
    $user = $_SESSION["user"];


    require_once '../database.php';



                              
        function addLifestlye($conn,$user, $unsatFats, $today) {

                $x = 0;                                                                                                                                                                                                                           
                $sql = "INSERT INTO dayDetails (username, day, waterIntake, sleepHours, totalCarbs, complexCarbs, totalFats, unsaturatedFats, protein, fibre, highCardio, lowCardio, highStrength, lowStrength) VALUES ('$user', '$today', $x, $x, $x, $x, $x, $unsatFats, $x, $x, $x, $x, $x, $x);";


                if (mysqli_query($conn, $sql)) {
                    echo "New record created successfully";
                    header("location: ../goals.php?error=Worked");

                    exit();

                  } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);

                    header("location: ../goals.php?error=noWorkkk");
                  exit();
                  }
                  
           
        }




                                         
        function editLifestyle($conn,$user, $unsatFats, $today) {
                                               
                $sql = "UPDATE dayDetails SET unsaturatedFats = $unsatFats  WHERE username = '$user' AND day = '$today'";
                if ($conn->query($sql) === TRUE) {
                    header("location: ../goals.php?error=none");

                    exit();
                }
                else{
                header("location: ../goals.php?error=notEdited");
                exit();
                }
            

            }





        $sql = "SELECT  * FROM dayDetails WHERE username = '$user' AND day = '$today'";
        $result = $conn->query($sql);
        if ($result->num_rows < 1) {
                                        
            addLifestlye($conn,$user, $unsatFats, $today);
        }
        else{                         
            editLifestyle($conn,$user, $unsatFats, $today);
        }





        header("location: ../goals.php?error=none");
        exit();



}

