<?php

session_start();


if (isset($_POST["submit"])) {

    
    $highCardio = $_POST["high-cardio"];
    $lowCardio = $_POST["low-cardio"];
    $highStrength = $_POST["high-strength"];
    $lowStrength = $_POST["low-strength"];
    $today = date("d-m-Y");
    $today = date("d-m-Y",strtotime($today));
    $user = $_SESSION["user"];







    require_once 'database.php';




        function addExercise($conn,$user, $highCardio,$lowCardio,$highStrength,$lowStrength ,$today) {

            $x = 0;
            $sql = "INSERT INTO dayDetails (username, day, waterIntake, sleepHours, totalCarbs, complexCarbs, totalFats, unsaturatedFats, protein, fibre, highCardio, lowCardio, highStrength, lowStrength) VALUES ('$user', '$today', $x, $x, $x, $x, $x, $x, $x, $x, $highCardio, $lowCardio, $highStrength, $lowStrength);";


            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }
              
              header("location: goals.php?error=NotConnected");
              exit();

    }
    

















 
            

        function editExercise($conn,$user, $highCardio,$lowCardio,$highStrength,$lowStrength ,$today) {
    
            $sql = "UPDATE dayDetails SET highCardio = $highCardio, lowCardio = $lowCardio, highStrength = $highStrength, lowStrength = $lowStrength  WHERE username = '$user' AND day = '$today'";
            if ($conn->query($sql) === TRUE) {
                header("location: goals.php?error=none");

                exit();
            }
            header("location: goals.php?error=notWorked");
            exit();

        }











        $sql = "SELECT  * FROM dayDetails WHERE username = '$user' AND day = '$today'";
        $result = $conn->query($sql);
        if ($result->num_rows < 1) {
            addExercise($conn,$user, $highCardio,$lowCardio,$highStrength,$lowStrength ,$today);
        }
        else{
            editExercise($conn,$user, $highCardio,$lowCardio,$highStrength,$lowStrength ,$today);
        }





        header("location: goals.php?error=noError");
        exit();



}

