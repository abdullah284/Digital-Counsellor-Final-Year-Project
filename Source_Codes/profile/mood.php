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

    $mood = $_POST["mood"];
    $today = date("d-m-Y");
    $today = date("d-m-Y",strtotime($today));
    $user = $_SESSION["user"];


    require_once '../database.php';




        function addMood($conn,$user, $mood, $today) {

                // $x = 0;
                $sql = "INSERT INTO moods (username, date, mood) VALUES ('$user', '$today', $mood);";


                if (mysqli_query($conn, $sql)) {
                    echo "New record created successfully";
                  } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                  }
                  
                  header("location: ../profile.php?error=done1");
                  exit();
  
        }





        function editMood($conn,$user, $mood, $today) {
           
                $sql = "UPDATE moods SET mood = $mood  WHERE username = '$user' AND date = '$today'";
                if ($conn->query($sql) === TRUE) {
                    header("location: ../profile.php?error=done2");

                    exit();
                }
                header("location: ../profile.php?error=noEdit");
                exit();

            }





        $sql = "SELECT  * FROM moods WHERE username = '$user' AND date = '$today'";
        $result = $conn->query($sql);
        if ($result->num_rows < 1) {
            addMood($conn,$user, $mood, $today);
        }
        else{
            editMood($conn,$user, $mood, $today);
        }





        header("location: ../profile.php?error=none");
        exit();



}

