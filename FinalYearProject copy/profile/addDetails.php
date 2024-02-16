<?php

session_start();


if (isset($_POST["submit"])) {


  

    $age = $_POST["age"];
    $weight = $_POST["weight"];
    $gender =  $_POST["gender"];
    $height = $_POST["height"];
    $today = date("d-m-Y");
    $today = date("d-m-Y",strtotime($today));
    $user = $_SESSION["user"];

    if(empty($age) OR empty($weight) OR empty($height) OR empty($gender)) {


      header("location: ../profile.php?cantProceed");
      exit();

    }

    


    require_once '../database.php';




        function addDetails($conn,$user, $age, $weight, $height, $gender) {

            $x = 0;

           
          


            $sql = "INSERT INTO personDetails (username, age, weight, height, gender, goalWeight)VALUES ('$user', $age, $weight, $height,'$gender', 'maintain');";


            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }
              
              header("location: ../profile.php?error=none");
              exit();

    }








    function editDetails($conn,$user, $age, $weight, $height, $gender) {
    
      $sql = "UPDATE personDetails SET age = $age, weight = $weight, height = $height, gender = '$gender' WHERE username = '$user'";
      if ($conn->query($sql) === TRUE) {
          header("location: ../profile.php?error=none");

          exit();
      }
      header("location: ../profile.php?error=yes");
      exit();

  }











 
            

    



    $sql = "SELECT  * FROM personDetails WHERE username = '$user'";
    $result = $conn->query($sql);
    if ($result->num_rows < 1) {
      addDetails($conn,$user, $age, $weight, $height, $gender);

    }
    else{
      editDetails($conn,$user, $age, $weight, $height, $gender);

    }








            





            header("location: profile.php?error=none");
            exit();



}

