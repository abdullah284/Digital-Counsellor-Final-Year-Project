<?php

session_start();


if (isset($_POST["submit"])) {


    $weight = $_POST["weight"];
    $today = date("d-m-Y");
    $today = date("d-m-Y",strtotime($today));
    $user = $_SESSION["user"];

  
    if(empty($weight)) {


      header("location: ../profile.php?cantProceed2");
      exit();

    }




    require_once '../database.php';




        function addDetails($conn,$user, $weight) {

            $x = 0;

           
          


            $sql = "INSERT INTO personDetails (username, age, weight, height, gender, goalWeight)VALUES ('$user', $x, $x, $x, '$x', '$weight');";


            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }
              
              header("location: ../profile.php?error=none");
              exit();

    }








    function editDetails($conn,$user, $weight) {
    
      $sql = "UPDATE personDetails SET goalWeight = '$weight' WHERE username = '$user'";
      if ($conn->query($sql) === TRUE) {
          header("location: ../profile.php?error=nonnne");

          exit();
      }
      header("location: ../profile.php?error=yes");
      exit();

  }











 
            

    



    $sql = "SELECT  * FROM personDetails WHERE username = '$user'";
    $result = $conn->query($sql);
    if ($result->num_rows < 1) {
      addDetails($conn,$user, $weight);

    }
    else{
      editDetails($conn,$user, $weight);

    }








            





            header("location: profile.php?error=none");
            exit();



}

