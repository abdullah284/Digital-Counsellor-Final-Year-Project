<?php

session_start();


if (isset($_POST["submit"])) {

  

    $totalCarbs = $_POST["totalCarbs"];
    $complexCarbs = $_POST["complexCarbs"];
    $totalFats =  $_POST["totalFats"];
    $unsatFats = $_POST["unsatFats"];
    $protein = $_POST["protein"];
    $fibre = $_POST["fibre"];
    $today = date("d-m-Y");
    $today = date("d-m-Y",strtotime($today));
    $user = $_SESSION["user"];



    require_once 'database.php';





        function addDiet($conn,$user, $totalCarbs, $complexCarbs, $totalFats, $unsatFats, $protein, $fibre, $today) {

            $x = 0;
            $sql = "INSERT INTO dayDetails (username, day, waterIntake, sleepHours, totalCarbs, complexCarbs, totalFats, unsaturatedFats, protein, fibre, highCardio, lowCardio, highStrength, lowStrength) VALUES ('$user', '$today', $x, $x, $totalCarbs, $complexCarbs, $totalFats, $unsatFats, $protein, $fibre, $x, $x, $x, $x);";


            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }
              
              header("location: goals.php?error=NotConnected");
              exit();

    }
    

















 
            

        function editDiet($conn,$user, $totalCarbs, $complexCarbs, $totalFats, $unsatFats, $protein, $fibre, $today) {
    
            $sql = "UPDATE dayDetails SET totalCarbs = $totalCarbs, complexCarbs = $complexCarbs, totalFats = $totalFats, unsaturatedFats = $unsatFats, protein = $protein, fibre = $fibre  WHERE username = '$user' AND day = '$today'";
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
            addDiet($conn,$user, $totalCarbs, $complexCarbs, $totalFats, $unsatFats, $protein, $fibre, $today);
        }
        else{
            editDiet($conn,$user, $totalCarbs, $complexCarbs, $totalFats, $unsatFats, $protein, $fibre, $today);
        }





        header("location: goals.php?error=none");
        exit();



}

